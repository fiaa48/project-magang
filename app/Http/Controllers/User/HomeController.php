<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
// use App\Models\Certificate;
use App\Models\Home;
use App\Models\Certificate;
use App\Models\CompanyProfile;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::first();
        // $certificates = Certificate::where('type', 'profil-sertifikasi')->latest()->get();
        // $certificateGroups = collect();

        // return view('user.home.index', compact('home', 'certificates', 'certificateGroups'));

        $companyProfile = CompanyProfile::latest()->first();

        // $sertificates = Certificate::where('jenis_sertifikat', 'Sertifikat Standar')->orderBy('created_at', 'desc')->get();

        return view('user.home.index', compact('home', 'companyProfile'));
    }
}
