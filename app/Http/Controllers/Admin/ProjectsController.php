<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        // 🔍 SEARCH (biar konsisten sama sertifikat)
        if ($request->search) {
            $query->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('slug', 'like', '%' . $request->search . '%')
                    ->orWhere('category', 'like', '%' . $request->search . '%')
                    ->orWhere('location', 'like', '%' . $request->search . '%')
                    ->orWhere('year', 'like', '%' . $request->search . '%');
            });
        }

        // ✅ terbaru di atas + pagination
        $projects = $query->latest()->paginate(10)->withQueryString();

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $categories = [
            'Arsitektur',
            'Teknik Sipil',
            'Sumber Daya Air',
            'Tata Ruang',
            'Lingkungan',
            'Manajemen Konstruksi',
            'Jasa Survey',
            'Desain Interior'
        ];

        return view('admin.projects.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'location' => 'required',
            'year' => 'required|numeric'
        ]);

        Project::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'location' => $request->location,
            'year' => $request->year,
        ]);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project berhasil ditambahkan');
    }

    public function edit(Project $project)
    {
        $categories = [
            'Arsitektur',
            'Teknik Sipil',
            'Sumber Daya Air',
            'Tata Ruang',
            'Lingkungan',
            'Manajemen Konstruksi',
            'Jasa Survey',
            'Desain Interior'
        ];

        return view('admin.projects.edit', compact('project', 'categories'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'location' => 'required',
            'year' => 'required|numeric'
        ]);

        $project->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'location' => $request->location,
            'year' => $request->year,
        ]);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project berhasil diupdate');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project berhasil dihapus');
    }
}
