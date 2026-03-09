<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Project::create($request->all());

        return redirect()->route('admin.projects')
                        ->with('success', 'Project berhasil ditambahkan');
    }

    public function edit(Project $project)
    {
        return view('admin.projects_edit', compact('project'));
    }

    public function update(Request $request, $id)
{
    $project = Project::findOrFail($id);

    $data = $request->only([
        'title',
        'description',
        'location',
        'year',
        'status'
    ]);

    // kalau ada gambar baru
    if($request->hasFile('image')){

        // hapus gambar lama
        if($project->image){
            Storage::delete('public/'.$project->image);
        }

        // upload gambar baru
        $image = $request->file('image')->store('projects','public');

        $data['image'] = $image;
    }

    $project->update($data);

    return redirect()->route('admin.projects')->with('success','Project berhasil diupdate');
}
}
