<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalProjects = Project::count();
        $totalCertificates = Certificate::count();
        $totalMessages = Message::count();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalProjects',
            'totalCertificates',
            'totalMessages'
        ));
    }
}
