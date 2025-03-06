<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class DocumentController extends Controller
{
    public function downloadDocument($education_serial)
    {
        // Fetch document using education_serial
        $document = DB::table('tnelb_applicants_doc')
            ->where('education_serial', $education_serial)
            ->first();
    
        // Check if document exists
        if (!$document || !$document->education_doc) {
            return abort(404, 'Document not found.');
        }
    
        // Get the raw binary content from the bytea column
        $fileContent = stream_get_contents($document->education_doc);
    
        // Set the file name (fallback to "document.pdf" if missing)
        $fileName = $document->education_doc_name ?? 'Educational_document.pdf';
    
        // Detect the MIME type based on the file extension
        $mimeType = 'application/octet-stream'; // Default fallback
    
        if (str_ends_with(strtolower($fileName), '.pdf')) {
            $mimeType = 'application/pdf';
        } elseif (str_ends_with(strtolower($fileName), '.jpg') || str_ends_with(strtolower($fileName), '.jpeg')) {
            $mimeType = 'image/jpeg';
        } elseif (str_ends_with(strtolower($fileName), '.png')) {
            $mimeType = 'image/png';
        } elseif (str_ends_with(strtolower($fileName), '.doc') || str_ends_with(strtolower($fileName), '.docx')) {
            $mimeType = 'application/msword';
        }
    
        // Return response with correct headers for download
        return response($fileContent, 200)
            ->header('Content-Type', $mimeType)
            ->header('Content-Disposition', "attachment; filename=\"$fileName\"");
    }
    
}

