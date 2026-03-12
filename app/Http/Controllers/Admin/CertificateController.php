<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $certificates = Certificate::when($search, function ($query) use ($search) {
            $query->where('name','like','%'.$search.'%');
        })->latest()->get();

        return view('admin.certificates.index', compact('certificates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image'
        ]);

        $path = $request->file('image')->store('certificates','public');

        Certificate::create([
            'name' => $request->name,
            'image' => 'storage/'.$path,
            'type' => $request->type,
            'year' => $request->year
        ]);

        return redirect()->back()->with('success','Sertifikat berhasil ditambahkan');
    }
    public function create()
    {
        return view('admin.certificates.create');
    }

    public function edit($id)
    {
        $certificate = Certificate::findOrFail($id);
        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        $certificate = Certificate::findOrFail($id);

        $certificate->update([
            'name' => $request->name,
            'type' => $request->type,
        ]);

        return redirect()->back()->with('success', 'Certificate updated');
    }

    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);

        $certificate->delete();

        return redirect()->back()->with('success','Sertifikat berhasil dihapus');
    }
}
