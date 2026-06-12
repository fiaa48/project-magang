<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectsController extends Controller
{
    /**
     * Menampilkan daftar proyek
     */
    public function index()
    {
        // LIHAT BARIS INI:
        $projects = Project::orderBy('created_at', 'desc')->get();

        // UBAH MENJADI:
        $projects = Project::orderBy('created_at', 'desc')->paginate(10);

        return view('user.projects.index', compact('projects'));
    }

    /**
     * Menampilkan detail proyek
     */
    public function show($id)
    {
        $project = Project::findOrFail($id); // ambil 1 data

        return view('user.projects.show', compact('project'));
    }
}
