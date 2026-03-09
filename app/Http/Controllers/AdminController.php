<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function certificates(){
        return view('admin.certificates');
    }

    public function projects(){
        return view('admin.projects');
    }

    public function users(){
        return view('admin.users');
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
}
