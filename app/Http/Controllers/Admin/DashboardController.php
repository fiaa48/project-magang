<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalProjects = Project::count();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalProjects'
        ));
    }
}
