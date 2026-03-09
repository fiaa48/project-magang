<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Certificate;

class CertificationController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest()->get();
        return view('certifications.index', compact('certificates'));
    }

    // Gunakan 1 method untuk semua tipe
    public function show($type)
    {
        $certificates = Certificate::where('type', $type)
            ->latest()
            ->get();

        return view('certifications.index', compact('certificates', 'type'));
    }

    public function download($id)
{
    $certificate = Certificate::findOrFail($id);

    $filePath = storage_path('app/public/'.$certificate->file);

    if (!file_exists($filePath)) {
        abort(404);
    }

    $pdf = Pdf::loadView('certifications.pdf', [
        'image' => $filePath
    ]);

    return $pdf->download($certificate->name . '.pdf');
}
}
