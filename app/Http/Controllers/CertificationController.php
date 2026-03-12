<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Certificate;

class CertificationController extends Controller
{
    public function index()
    {
        return view('certifications.index');
    }

    // menampilkan list sertifikat berdasarkan type
    public function category($type)
    {
        $certificates = Certificate::where('type',$type)->get();

        return view('certifications.list', compact('certificates','type'));
    }

    // menampilkan sertifikat yang dipilih
    public function show($id)
    {
        $certificate = Certificate::findOrFail($id);

        return view('certifications.view', compact('certificate'));
    }

    public function download($id)
    {
        $certificate = Certificate::findOrFail($id);

        $filePath = storage_path('app/public/'.$certificate->image);

        if (!file_exists($filePath)) {
            abort(404);
        }

        $pdf = Pdf::loadView('certifications.pdf', [
            'image' => $filePath
        ]);

        return $pdf->download($certificate->name . '.pdf');
    }
}
