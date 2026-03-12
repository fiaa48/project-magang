<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
    $categories = [
        (object) ['id' => 1, 'name' => 'Konstruksi'],
        (object) ['id' => 2, 'name' => 'Renovasi'],
        (object) ['id' => 3, 'name' => 'Desain Interior'],
    ];
    return view('admin.projects.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required|in:1,2,3',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        $data['slug'] = Str::slug($request->title);

        $data['sub_services'] = json_encode([$request->sub_services]);
        $data['certifications'] = json_encode([$request->certifications]);
        $data['tags'] = json_encode([$request->tags]);
        $data['details'] = json_encode([$request->details]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects','public');
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')
            ->with('success','Project berhasil ditambahkan');
    }

    public function edit(Project $project)
    {
        $categories = [
        (object) ['id' => 1, 'name' => 'Konstruksi'],
        (object) ['id' => 2, 'name' => 'Renovasi'],
        (object) ['id' => 3, 'name' => 'Desain Interior'],
        ];
        return view('admin.projects.edit', compact('project', 'categories'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required|in:1,2,3',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        if ($request->sub_services) {
            $data['sub_services'] = json_encode(array_map('trim', explode(',', $request->sub_services)));
        }

        if ($request->certifications) {
            $data['certifications'] = json_encode(array_map('trim', explode(',', $request->certifications)));
        }

        if ($request->tags) {
            $data['tags'] = json_encode(array_map('trim', explode(',', $request->tags)));
        }

        if ($request->details) {
            $data['details'] = json_encode(array_map('trim', explode(',', $request->details)));
        }

        $project->update($data);

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
