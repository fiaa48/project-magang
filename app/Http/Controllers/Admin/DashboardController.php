<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalProjects = Project::count();
        $totalCertificates = Certificate::count();
        $totalServices = Service::count();

        return view('admin.dashboard.index', compact(
            'totalUsers',
            'totalProjects',
            'totalCertificates',
            'totalServices'
        ));
    }
}
