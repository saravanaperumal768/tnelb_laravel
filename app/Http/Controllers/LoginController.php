<?php

namespace App\Http\Controllers;

use App\Models\mst_loginlogs;
use App\Models\Mst_Staffs_Tbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (
            Auth::attempt(['email' => $request->username, 'password' => $request->password]) ||
            Auth::attempt(['username' => $request->username, 'password' => $request->password])
        ) {
            return response()->json(['success' => true, 'redirect' => route('dashboard')]);
        }

        return response()->json(['success' => false, 'error' => 'Invalid username or password.'], 401);
    }


    public function dashboard()
    {
        // $applications = DB::table('mst_workflows')->get();
        $applications = DB::table('mst_workflows as mw')
            ->join('tnelb_application_tbl as ta', 'mw.application_id', '=', 'ta.application_id') // Join condition
            ->select('mw.*', 'ta.applicant_name') // Select fields
            ->get();
        $staff = Auth::user();



        $login_logs = mst_loginlogs::create([
            'role' => $staff->name,
            'email' => $staff->email,
            'ipaddress' => request()->ip(),
            'Idate' => now(),
            'attempt' => 1,
            'duration' => 0.00,
        ]);



        if (!$staff || !$staff->name) {
            $login_logs = mst_loginlogs::create([
                'role' => $staff->name,
                'email' => $staff->email,
                'ipaddress' => request()->ip(),
                'Idate' => now(),
                'attempt' => 0,
                'duration' => 0.00,
            ]);
        }

        // $view = match ($staff->role->name) { 
        $view = match ($staff->name) {
            'Secretary'  => 'dashboard.index',
            'Supervisor' => 'dashboard.loginpage.supervisor_index',
            'Auditor'    => 'dashboard.loginpage.auditor_index',
            default      => abort(403, 'Unauthorized'),
        };

        return view($view, compact('applications'));

        // return view('dashboard.index', compact('applications')); 
    }


    public function logout()
    {
        $staff = Auth::user();
    
        if ($staff) {
            // Find the latest login record for the user
            $lastLogin = mst_loginlogs::where('email', $staff->email)
                ->orderBy('Idate', 'desc')
                ->get();
    
            if ($lastLogin) {
                // Calculate duration (current time - login time)
                $loginTime = \Carbon\Carbon::parse($lastLogin->Idate);
                $logoutTime = now();
                $duration = $loginTime->diffInMinutes($logoutTime); // Duration in minutes
    
                // Update the duration
                $lastLogin->update([
                    'duration' => $duration,
                ]);
            }
        }
    
        // Log out the user
        Auth::logout();
        Session::flush();
    
        return redirect()->route('index')->with('a', 'Logged out successfully');
    }
    



    public function getApplicantDetails(Request $request)
    {
        $applicationId = $request->application_id;

        // Debugging: Log the received application ID
        Log::info('Fetching details for Application ID: ' . $applicationId);

        // Fetch single applicant data
        $applicant = DB::table('tnelb_application_tbl')
            ->where('application_id', $applicationId)
            ->first(); // Fetch only one record

        if (!$applicant) {
            return response()->json(['error' => 'No data found'], 404);
        }

        return response()->json([
            'applicant_id' => $applicant->application_id,
            'applicant_name' => $applicant->applicant_name,
            'fathers_name' => $applicant->fathers_name,
            'applicants_address' => $applicant->applicants_address,
            'd_o_b' => $applicant->d_o_b,
            'age' => $applicant->age,
            // 'checklist' => $applicant->checklist,  
            // 'process' => $applicant->process       
        ]);
    }



    public function showApplicantDetails($applicant_id)
    {
        // Fetch applicant details
        $applicant = DB::table('tnelb_application_tbl')
            ->join('payments', 'tnelb_application_tbl.application_id', '=', 'payments.application_id')
            ->where('tnelb_application_tbl.application_id', $applicant_id)
            ->select('tnelb_application_tbl.*', 'payments.*')
            ->first();

        if (!$applicant) {
            return abort(404, 'Applicant not found');
        }

        // Fetch educational qualifications
        $educationalQualifications = DB::table('tnelb_applicants_edu')
            ->where('application_id', $applicant_id)
            ->get();

        // Fetch work experience
        $workExperience = DB::table('tnelb_applicants_exp')
            ->where('application_id', $applicant_id)
            ->get();


        $documents = DB::table('tnelb_applicants_doc')
            ->where('application_id', $applicant_id)
            ->get();


        $staff = Auth::user();

        if (!$staff || !$staff->name) {
            return abort(403, 'Unauthorized');
        }

        // Determine view based on user role
        $view = match ($staff->name) {
            'Secretary'  => 'dashboard.applicants_detail',
            'Supervisor' => 'dashboard.applicants_detail_supervisor',
            'Auditor'    => 'dashboard.applicants_detail_auditor',
            default      => abort(403, 'Unauthorized'),
        };

        return view($view, compact('applicant', 'educationalQualifications', 'workExperience', 'documents'));
    }



    public function secretary_table()
    {

        $workflows = DB::table('mst_workflows as mw')
            ->join('tnelb_application_tbl as ta', 'mw.application_id', '=', 'ta.application_id') // Join condition
            ->select('mw.*', 'ta.applicant_name') // Select fields
            ->get();
        return view('dashboard.secretary_table', compact('workflows'));
        // return view('dashboard.secretary_table');
    }
}
