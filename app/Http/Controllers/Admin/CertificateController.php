<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.certificates.index', compact('certificates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'year' => 'required',
            'file' => 'required|image'
        ]);

        $file = $request->file('file')->store('certificates', 'public');

        Certificate::create([
            'name' => $request->name,
            'type' => $request->type,
            'year' => $request->year,
            'file' => $file
        ]);

        return back()->with('success','Sertifikat berhasil ditambahkan');
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
}
