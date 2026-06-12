<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    public function sertifikasi()
    {
        // Ambil semua file JPG dari folder certificates
        $certificateFiles = File::files(public_path('images/certificates'));

        return view('sertifikasi', compact('certificateFiles'));
    }
}
