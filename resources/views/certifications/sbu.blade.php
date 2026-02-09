@extends('layouts.app')

@section('title', 'SBU Konstruksi - Sertifikasi & Lisensi')
@section('description', 'Sertifikasi Badan Usaha (SBU) Konstruksi PT Mitra Nusa Konsulindo - Lisensi resmi dari LPJK untuk jasa konstruksi.')

@section('content')
    <!-- Page Header -->
    <section class="page-header bg-gradient-primary text-white py-6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('certifications.index') }}">Sertifikasi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">SBU Konstruksi</li>
                        </ol>
                    </nav>
                    
                    <div class="header-content mt-4">
                        <div class="badge-certification mb-3">
                            <span>SBU KONSTRUKSI</span>
                        </div>
                        <h1 class="display-5 fw-bold mb-4">Sertifikasi Badan Usaha (SBU) Jasa Konstruksi</h1>
                        <p class="lead mb-0">Lisensi resmi dari Lembaga Pengembangan Jasa Konstruksi (LPJK) untuk penyediaan jasa konstruksi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SBU Overview -->
    <section class="py-6">
        <div class="container">
            <div class="row mb-6">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-5">
                            <h2 class="card-title mb-4">Informasi SBU Konstruksi</h2>
                            
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="info-item mb-3">
                                        <h6 class="text-muted mb-1">Nomor Sertifikat</h6>
                                        <p class="fw-bold mb-0">060.02.01.2010.257</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item mb-3">
                                        <h6 class="text-muted mb-1">Tanggal Diterbitkan</h6>
                                        <p class="fw-bold mb-0">10 Februari 2020</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item mb-3">
                                        <h6 class="text-muted mb-1">Masa Berlaku</h6>
                                        <p class="fw-bold mb-0">5 Tahun (s/d 10 Februari 2025)</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item mb-3">
                                        <h6 class="text-muted mb-1">Status</h6>
                                        <span class="badge bg-success">Aktif</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-item mb-3">
                                        <h6 class="text-muted mb-1">Lembaga Penerbit</h6>
                                        <p class="fw-bold mb-0">Lembaga Pengembangan Jasa Konstruksi (LPJK)</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="certificate-actions mt-4">
                                <a href="{{ asset('documents/certificates/sbu-konstruksi.pdf') }}" 
                                class="btn btn-primary me-2" 
                                target="_blank">
                                    <i class="fas fa-eye me-2"></i>Lihat Sertifikat
                                </a>
                                <a href="{{ asset('documents/certificates/sbu-konstruksi.pdf') }}" 
                                class="btn btn-outline-primary" 
                                download>
                                    <i class="fas fa-download me-2"></i>Download PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <div class="certificate-icon">
                                    <i class="fas fa-hard-hat fa-4x text-primary"></i>
                                </div>
                            </div>
                            
                            <h5 class="card-title mb-3">Tentang SBU Konstruksi</h5>
                            <p class="card-text">
                                Sertifikasi Badan Usaha (SBU) adalah bukti pengakuan formal terhadap kemampuan 
                                perusahaan dalam melaksanakan pekerjaan jasa konstruksi sesuai dengan bidang 
                                dan sub bidang yang telah ditetapkan.
                            </p>
                            
                            <div class="alert alert-info mt-4">
                                <i class="fas fa-info-circle me-2"></i>
                                <strong>Informasi:</strong> SBU ini berlaku untuk seluruh wilayah Indonesia
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Klasifikasi SBU -->
            <div class="row mb-6">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h3 class="card-title mb-4">Klasifikasi Jasa Konstruksi</h3>
                            <p class="text-muted mb-4">Bidang dan sub-bidang jasa konstruksi yang tercakup dalam sertifikat SBU</p>
                            
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Kode</th>
                                            <th>Bidang</th>
                                            <th>Sub Bidang</th>
                                            <th>Kualifikasi</th>
                                            <th>Klasifikasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>K 001</td>
                                            <td>Bangunan Gedung</td>
                                            <td>Bangunan Gedung Hunian</td>
                                            <td>Kecil</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>K 002</td>
                                            <td>Bangunan Gedung</td>
                                            <td>Bangunan Gedung Non Hunian</td>
                                            <td>Kecil</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>K 003</td>
                                            <td>Bangunan Sipil</td>
                                            <td>Jalan dan Jembatan</td>
                                            <td>Kecil</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>K 004</td>
                                            <td>Bangunan Sipil</td>
                                            <td>Air Minum dan Air Limbah</td>
                                            <td>Kecil</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>K 005</td>
                                            <td>Bangunan Sipil</td>
                                            <td>Irigasi dan Rawa</td>
                                            <td>Kecil</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>K 006</td>
                                            <td>Instalasi Mekanikal & Elektrikal</td>
                                            <td>Instalasi Listrik</td>
                                            <td>Kecil</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>K 007</td>
                                            <td>Instalasi Mekanikal & Elektrikal</td>
                                            <td>Instalasi Pendingin</td>
                                            <td>Kecil</td>
                                            <td>3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Legal Basis -->
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h3 class="card-title mb-4">Dasar Hukum dan Regulasi</h3>
                            
                            <div class="legal-basis">
                                <div class="legal-item mb-3">
                                    <h6 class="text-primary mb-2">Peraturan Pemerintah No. 28 Tahun 2000</h6>
                                    <p class="mb-0">Tentang Usaha Jasa Konstruksi</p>
                                </div>
                                
                                <div class="legal-item mb-3">
                                    <h6 class="text-primary mb-2">Peraturan LPJK No. 10 Tahun 2018</h6>
                                    <p class="mb-0">Tentang Tata Cara Sertifikasi Badan Usaha Jasa Konstruksi</p>
                                </div>
                                
                                <div class="legal-item mb-3">
                                    <h6 class="text-primary mb-2">Peraturan Menteri PUPR No. 22/PRT/M/2018</h6>
                                    <p class="mb-0">Tentang Penyedia Jasa Konstruksi</p>
                                </div>
                                
                                <div class="alert alert-light mt-4">
                                    <i class="fas fa-gavel me-2"></i>
                                    <strong>Ketentuan:</strong> Sertifikat SBU ini diterbitkan berdasarkan ketentuan peraturan perundang-undangan yang berlaku dan dapat digunakan untuk mengikuti proses tender sesuai bidang dan kualifikasi yang tercantum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* HEADER */
    .page-header.bg-gradient-primary {
        background: linear-gradient(135deg, #6B4226 0%, #8B5E3C 50%, #D8C3A5 100%);
    }

    /* BREADCRUMB */
    .breadcrumb-light .breadcrumb-item a {
        color: rgba(255, 255, 255, 0.85);
    }

    .breadcrumb-light .breadcrumb-item.active {
        color: #fff;
        font-weight: 600;
    }

    /* BADGE HEADER */
    .badge-certification {
        display: inline-block;
        background: rgba(255, 255, 255, 0.25);
        color: #fff;
        padding: 0.5rem 1.5rem;
        border-radius: 25px;
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    /* ICON SBU */
    .certificate-icon {
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, #FFF4EA, #E6D5C3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .certificate-icon i {
        color: #8B5E3C;
    }

    /* INFO ITEM */
    .info-item {
        padding: 1rem;
        background: #FFF9F3;
        border-radius: 10px;
        border-left: 4px solid #8B5E3C;
        color: #5A3A26;
    }

    .info-item h6 {
        color: #8B5E3C;
        font-weight: 600;
    }

    /* BADGE */
    .badge.bg-success {
        background-color: #8B5E3C !important;
    }

    /* BUTTON */
    .btn-primary {
        background-color: #8B5E3C;
        border-color: #8B5E3C;
    }

    .btn-primary:hover {
        background-color: #6B4226;
        border-color: #6B4226;
    }

    .btn-outline-primary {
        color: #8B5E3C;
        border-color: #8B5E3C;
    }

    .btn-outline-primary:hover {
        background-color: #8B5E3C;
        color: #fff;
    }

    /* TABLE */
    .table th {
        background: #F5EFE8;
        font-weight: 600;
        color: #4A2E1B;
    }

    .table td {
        vertical-align: middle;
        color: #5A3A26;
    }

    /* LEGAL BASIS */
    .legal-item {
        padding: 1rem;
        background: #FFF9F3;
        border-radius: 10px;
        border-left: 4px solid #8B5E3C;
    }

    .legal-item h6 {
        color: #6B4226;
        font-weight: 600;
    }

    /* ALERT */
    .alert-info {
        background-color: #F5EFE8;
        border-color: #E6D5C3;
        color: #5A3A26;
    }

    .alert-light {
        background-color: #FFF9F3;
        border-color: #E6D5C3;
        color: #5A3A26;
    }

    @media (max-width: 768px) {
        .header-content h1 {
            font-size: 2rem;
        }

        .card-body {
            padding: 2rem !important;
        }
    }
</style>
@endpush
