<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificationController extends Controller
{
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
                'document' => 'documents/certificates/sbu-al001.pdf',
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
                'document' => 'documents/certificates/iso-9001.pdf',
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
                'document' => 'documents/legal/nib.pdf',
            ],
        ];
    }

    public function index()
    {
        $activeCertifications = $this->certifications();
        return view('certifications.index', compact('activeCertifications'));
    }

    public function viewPdf($slug)
    {
        $cert = collect($this->certifications())->firstWhere('slug', $slug);
        abort_if(!$cert, 404);

        return response()->file(
            storage_path('app/public/' . $cert['document'])
        );
    }

    public function downloadPdf($slug)
    {
        $cert = collect($this->certifications())->firstWhere('slug', $slug);
        abort_if(!$cert, 404);

        return response()->download(
            storage_path('app/public/' . $cert['document']),
            $slug . '.pdf'
        );
    }

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
