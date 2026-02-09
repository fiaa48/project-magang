<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CertificationController extends Controller
{
    /**
     * DATA SERTIFIKAT (dipusatkan biar bisa dipakai semua fungsi)
     */
    private function certifications()
    {
        return [
            [
                'slug' => 'sbu-al001',
                'type' => 'SBU Konstruksi - Jasa Pengembangan Pemanfaatan Ruang',
                'description' => 'Klasifikasi: Kecil, Kode: AL001',
                'number' => '025701110009300200010',
                'issuer' => 'LPJK / Kementerian PUPR',
                'valid_from' => '2025-10-06',
                'valid_until' => '2028-10-05',
                'status' => 'active',
                'document' => 'documents/certificates/sbu-al001.pdf'
            ],
            [
                'slug' => 'iso-9001',
                'type' => 'ISO 9001:2015 - Quality Management System',
                'description' => 'Consultancy and Management System',
                'number' => 'QAIS-Q-INDO-PM-11.25.004',
                'issuer' => 'QACS International (IAS USA)',
                'valid_from' => '2025-01-04',
                'valid_until' => '2028-01-03',
                'status' => 'active',
                'document' => 'documents/certificates/iso-9001.pdf'
            ],
            [
                'slug' => 'nib',
                'type' => 'NIB (Nomor Induk Berusaha)',
                'description' => 'Perizinan Berusaha Berbasis Risiko',
                'number' => '0257011100093',
                'issuer' => 'BKPM',
                'valid_from' => '2020-11-09',
                'valid_until' => null,
                'status' => 'active',
                'document' => 'documents/legal/nib.pdf'
            ],
        ];
    }

    /**
     * HALAMAN UTAMA SERTIFIKASI
     */
    public function index()
    {
        $activeCertifications = $this->certifications();
        return view('certifications.index', compact('activeCertifications'));
    }

    /**
     * LIHAT PDF DI BROWSER
     */
    public function viewPdf($slug)
    {
        $cert = collect($this->certifications())->firstWhere('slug', $slug);

        abort_if(!$cert, 404);

        $pdf = Pdf::loadView('certifications.pdf', compact('cert'));
        return $pdf->stream($slug . '.pdf');
    }

    /**
     * DOWNLOAD PDF
     */
    public function downloadPdf($slug)
    {
        $cert = collect($this->certifications())->firstWhere('slug', $slug);

        abort_if(!$cert, 404);

        $pdf = Pdf::loadView('certifications.pdf', compact('cert'));
        return $pdf->download($slug . '.pdf');
    }

    /**
     * SHARE LINK (WhatsApp / Email)
     */
    public function share($slug)
    {
        $url = route('certifications.view', $slug);

        return response()->json([
            'whatsapp' => 'https://wa.me/?text=' . urlencode($url),
            'email' => 'mailto:?subject=Sertifikat&body=' . urlencode($url),
        ]);
    }

    // ===== HALAMAN KATEGORI =====
    public function sbu()
    {
        return view('certifications.sbu');
    }

    public function iso()
    {
        return view('certifications.iso');
    }

    public function legal()
    {
        return view('certifications.legal');
    }
}
