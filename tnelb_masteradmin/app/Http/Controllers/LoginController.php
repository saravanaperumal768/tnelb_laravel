<?php

namespace App\Http\Controllers;

use App\Models\Mst_Staffs_Tbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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

        // Attempt login using either email or username
        if (
            Auth::attempt(['email' => $request->username, 'password' => $request->password]) ||
            Auth::attempt(['username' => $request->username, 'password' => $request->password])
        ) {

            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function dashboard()
    {
        // $applications = DB::table('mst_workflows')->get();
        $applications = DB::table('mst_workflows as mw')
        ->join('tnelb_application_tbl as ta', 'mw.application_id', '=', 'ta.application_id') // Join condition
        ->select('mw.*', 'ta.applicant_name') // Select fields
        ->get();
        $staff = Auth::user();

        if (!$staff || !$staff->name) {
            return abort(403, 'Unauthorized');
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
        Auth::logout();
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
