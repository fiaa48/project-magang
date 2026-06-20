<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\CompanyProfile;

class CertificationController extends Controller
{
    public function index()
    {
        // $certificates = $this->profileCertificateQuery()->latest()->get();
        // $certificate = $certificates->first();
        // $certificationRows = $this->certificationRows($certificate);
        $certificates = Certificate::latest()->first();
        $companyProfile = CompanyProfile::latest()->first();

        // return view('user.certifications.index', compact('certificates', 'certificate', 'certificationRows'));
        return view('user.certifications.index', compact('certificates', 'companyProfile'));
    }

    public function category()
    {
        return redirect()->route('certifications.index');
    }

    public function list($type = null)
    {
        return $this->index();
    }

    public function view($id)
    {
        return redirect()->route('certifications.index');
    }

    public function download($id)
    {
        abort(403, 'Dokumen sertifikat tidak dipublikasikan.');
    }

    public function iso()
    {
        return $this->index();
    }

    public function legal()
    {
        return $this->index();
    }

    public function nib()
    {
        return $this->index();
    }

    public function npwp()
    {
        return $this->index();
    }

    public function sbu()
    {
        return $this->index();
    }

    public function sbuKonstruksi()
    {
        return $this->index();
    }

    public function sbuNonKonstruksi()
    {
        return $this->index();
    }

    public function sertifikatStandar()
    {
        return $this->index();
    }

    public function spt()
    {
        return $this->index();
    }

    private function certificationRows(?Certificate $certificate): array
    {
        if (! $certificate) {
            return [];
        }

        return [
            ['label' => 'SIUJK', 'value' => $certificate->siujk],
            ['label' => 'SIUP', 'value' => $certificate->siup],
            ['label' => 'SBU Konstruksi', 'value' => $certificate->sbu_konstruksi],
            ['label' => 'SBU Non-Konstruksi', 'value' => $certificate->sbu_non_konstruksi],
            ['label' => 'PKP', 'value' => $certificate->pkp],
            ['label' => 'SKT Pajak', 'value' => $certificate->skt_pajak],
            ['label' => 'Bukti SPT Tahunan', 'value' => $certificate->bukti_spt],
            ['label' => 'Sertifikat ISO', 'value' => $certificate->iso],
            ['label' => 'Sertifikasi Baru', 'value' => $certificate->sertifikasi_baru],
        ];
    }

    private function profileCertificateQuery()
    {
        return Certificate::where(function ($query) {
            $query->where('type', 'profil-sertifikasi')
                ->orWhereNotNull('siujk')
                ->orWhereNotNull('siup')
                ->orWhereNotNull('sbu_konstruksi')
                ->orWhereNotNull('sbu_non_konstruksi')
                ->orWhereNotNull('pkp')
                ->orWhereNotNull('skt_pajak')
                ->orWhereNotNull('bukti_spt')
                ->orWhereNotNull('iso')
                ->orWhereNotNull('sertifikasi_baru');
        });
    }
}

// namespace App\Http\Controllers\User;
// use App\Http\Controllers\Controller;
// use App\Models\Certificate;

// class CertificationController extends Controller
// {
//     // Menampilkan daftar semua sertifikat (halaman user)
//     public function index()
//     {
//         $certificates = Certificate::orderBy('jenis_sertifikat')
//             ->orderBy('tanggal_terbit', 'desc')
//             ->paginate(20);

//         return view('user.certifications.index', compact('certificates'));
//     }
// }
