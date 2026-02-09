@extends('layouts.app')

@section('title', 'Dokumen Legal - Sertifikasi & Lisensi')
@section('description', 'Dokumen legal PT Mitra Nusa Konsulindo: Akta Pendirian, TDP, NPWP, SIUP, NIB, dan dokumen legalitas perusahaan lainnya.')

@section('content')
    <!-- Page Header -->
    <section class="page-header bg-gradient-dark text-white py-6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('certifications.index') }}">Sertifikasi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dokumen Legal</li>
                        </ol>
                    </nav>
                    
                    <div class="header-content mt-4">
                        <div class="badge-certification mb-3">
                            <span>DOKUMEN LEGALITAS</span>
                        </div>
                        <h1 class="display-5 fw-bold mb-4">Dokumen Legal Perusahaan</h1>
                        <p class="lead mb-0">Dokumen legalitas resmi yang menjamin keberadaan dan operasional perusahaan secara hukum</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Legal Documents Overview -->
    <section class="py-6">
        <div class="container">
            <div class="row mb-6">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-5">
                            <h2 class="card-title mb-4">Dokumen Legal Perusahaan</h2>
                            <p class="text-muted mb-4">Berikut adalah dokumen-dokumen legal yang dimiliki PT Mitra Nusa Konsulindo</p>
                            
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Jenis Dokumen</th>
                                            <th>Nomor</th>
                                            <th>Tanggal Terbit</th>
                                            <th>Masa Berlaku</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>Akta Pendirian</strong>
                                                <br><small class="text-muted">Notaris Syahrul, SH.</small>
                                            </td>
                                            <td>12/01/06.01.2020</td>
                                            <td>10 Januari 2020</td>
                                            <td>Permanen</td>
                                            <td><span class="badge bg-success">Aktif</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <strong>Surat Pengesahan Kemenkumham</strong>
                                                <br><small class="text-muted">Kementerian Hukum dan HAM</small>
                                            </td>
                                            <td>AHU-0015442.AH.01.11.TAHUN 2020</td>
                                            <td>15 Januari 2020</td>
                                            <td>Permanen</td>
                                            <td><span class="badge bg-success">Aktif</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <strong>Nomor Induk Berusaha (NIB)</strong>
                                                <br><small class="text-muted">OSS RBA</small>
                                            </td>
                                            <td>912020123456789</td>
                                            <td>20 Januari 2020</td>
                                            <td>Permanen</td>
                                            <td><span class="badge bg-success">Aktif</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <strong>NPWP Perusahaan</strong>
                                                <br><small class="text-muted">Direktorat Jenderal Pajak</small>
                                            </td>
                                            <td>12.345.678.9-012.345</td>
                                            <td>25 Januari 2020</td>
                                            <td>Permanen</td>
                                            <td><span class="badge bg-success">Aktif</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <strong>Surat Izin Usaha Perdagangan (SIUP)</strong>
                                                <br><small class="text-muted">Kementerian Perdagangan</small>
                                            </td>
                                            <td>503/321/SIUP/PM/2020</td>
                                            <td>30 Januari 2020</td>
                                            <td>Permanen</td>
                                            <td><span class="badge bg-success">Aktif</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <strong>Tanda Daftar Perusahaan (TDP)</strong>
                                                <br><small class="text-muted">Dinas Perindustrian dan Perdagangan</small>
                                            </td>
                                            <td>12.34.5.678910.11.12.13</td>
                                            <td>5 Februari 2020</td>
                                            <td>Permanen</td>
                                            <td><span class="badge bg-success">Aktif</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <strong>Surat Keterangan Domisili Perusahaan (SKDP)</strong>
                                                <br><small class="text-muted">Kelurahan Setiabudi</small>
                                            </td>
                                            <td>503/45/SKDP/II/2020</td>
                                            <td>10 Februari 2020</td>
                                            <td>1 Tahun</td>
                                            <td><span class="badge bg-success">Aktif</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <div class="legal-icon">
                                    <i class="fas fa-balance-scale fa-4x text-primary"></i>
                                </div>
                            </div>
                            
                            <h5 class="card-title mb-3">Legalitas Perusahaan</h5>
                            <p class="card-text">
                                PT Mitra Nusa Konsulindo telah memenuhi semua persyaratan legal untuk beroperasi 
                                sebagai perusahaan konsultan yang terdaftar dan berbadan hukum di Indonesia.
                            </p>
                            
                            <div class="legal-status mt-4">
                                <div class="status-item d-flex align-items-center mb-3">
                                    <div class="status-icon me-3">
                                        <i class="fas fa-check-circle text-success fa-lg"></i>
                                    </div>
                                    <div class="status-content">
                                        <h6 class="mb-0">Badan Hukum PT</h6>
                                        <p class="text-muted small mb-0">Perseroan Terbatas</p>
                                    </div>
                                </div>
                                
                                <div class="status-item d-flex align-items-center mb-3">
                                    <div class="status-icon me-3">
                                        <i class="fas fa-check-circle text-success fa-lg"></i>
                                    </div>
                                    <div class="status-content">
                                        <h6 class="mb-0">Terdaftar OSS</h6>
                                        <p class="text-muted small mb-0">Online Single Submission</p>
                                    </div>
                                </div>
                                
                                <div class="status-item d-flex align-items-center mb-3">
                                    <div class="status-icon me-3">
                                        <i class="fas fa-check-circle text-success fa-lg"></i>
                                    </div>
                                    <div class="status-content">
                                        <h6 class="mb-0">Wajib Pajak Aktif</h6>
                                        <p class="text-muted small mb-0">NPWP Perusahaan</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="alert alert-info mt-4">
                                <i class="fas fa-info-circle me-2"></i>
                                <strong>Informasi:</strong> Semua dokumen legal telah diverifikasi dan terdaftar di instansi terkait.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Document Categories -->
            <div class="row mb-6">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h3 class="card-title mb-4">Kategori Dokumen Legal</h3>
                            
                            <div class="row g-4">
                                <!-- Company Establishment -->
                                <div class="col-md-4">
                                    <div class="doc-category h-100">
                                        <div class="doc-icon mb-3">
                                            <i class="fas fa-building fa-3x text-primary"></i>
                                        </div>
                                        <h5 class="doc-title mb-2">Pendirian Perusahaan</h5>
                                        <p class="doc-description">Dokumen pendirian dan pengesahan badan hukum</p>
                                        <ul class="doc-list">
                                            <li>Akta Pendirian</li>
                                            <li>Pengesahan Kemenkumham</li>
                                            <li>Anggaran Dasar</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Business License -->
                                <div class="col-md-4">
                                    <div class="doc-category h-100">
                                        <div class="doc-icon mb-3">
                                            <i class="fas fa-file-contract fa-3x text-success"></i>
                                        </div>
                                        <h5 class="doc-title mb-2">Perizinan Usaha</h5>
                                        <p class="doc-description">Dokumen perizinan dan operasional usaha</p>
                                        <ul class="doc-list">
                                            <li>NIB (OSS RBA)</li>
                                            <li>SIUP</li>
                                            <li>TDP</li>
                                            <li>SKDP</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Tax Documents -->
                                <div class="col-md-4">
                                    <div class="doc-category h-100">
                                        <div class="doc-icon mb-3">
                                            <i class="fas fa-receipt fa-3x text-warning"></i>
                                        </div>
                                        <h5 class="doc-title mb-2">Perpajakan</h5>
                                        <p class="doc-description">Dokumen perpajakan dan keuangan</p>
                                        <ul class="doc-list">
                                            <li>NPWP Perusahaan</li>
                                            <li>PKP (Pengusaha Kena Pajak)</li>
                                            <li>SKT Pajak</li>
                                            <li>Laporan Keuangan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Verification Information -->
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h3 class="card-title mb-4">Verifikasi Legalitas</h3>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="verification-item mb-4">
                                        <h5 class="mb-3">Verifikasi Online</h5>
                                        <p class="text-muted mb-3">Dokumen legal dapat diverifikasi melalui sistem online berikut:</p>
                                        
                                        <div class="verification-links">
                                            <a href="https://oss.go.id" 
                                               class="btn btn-outline-primary btn-sm mb-2" 
                                               target="_blank">
                                                <i class="fas fa-external-link-alt me-2"></i>OSS RBA
                                            </a>
                                            <a href="https://www.pajak.go.id" 
                                               class="btn btn-outline-primary btn-sm mb-2" 
                                               target="_blank">
                                                <i class="fas fa-external-link-alt me-2"></i>Direktorat Jenderal Pajak
                                            </a>
                                            <a href="https://ahu.go.id" 
                                               class="btn btn-outline-primary btn-sm mb-2" 
                                               target="_blank">
                                                <i class="fas fa-external-link-alt me-2"></i>Kemenkumham
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="verification-item mb-4">
                                        <h5 class="mb-3">Kontak Verifikasi</h5>
                                        <p class="text-muted mb-3">Untuk verifikasi langsung, hubungi:</p>
                                        
                                        <div class="contact-info">
                                            <p class="mb-2">
                                                <i class="fas fa-envelope me-2 text-primary"></i>
                                                <strong>Email:</strong> legal@mitranusakonsulindo.co.id
                                            </p>
                                            <p class="mb-2">
                                                <i class="fas fa-phone me-2 text-primary"></i>
                                                <strong>Telepon:</strong> (021) 1234-5678
                                            </p>
                                            <p class="mb-0">
                                                <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                                                <strong>Alamat:</strong> Jl. Setiabudi No. 123, Jakarta Selatan
                                            </p>
                                        </div>
                                        
                                        <div class="alert alert-light mt-3">
                                            <small>
                                                <i class="fas fa-clock me-1"></i>
                                                Jam operasional: Senin-Jumat, 08:00-17:00 WIB
                                            </small>
                                        </div>
                                    </div>
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
    .page-header.bg-gradient-dark {
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

    /* ICON LEGAL */
    .legal-icon {
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, #FFF4EA, #E6D5C3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .legal-icon i {
        color: #8B5E3C;
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

    /* BADGE */
    .badge.bg-success {
        background-color: #8B5E3C !important;
    }

    /* STATUS BOX */
    .status-item {
        padding: 0.75rem;
        background: #FFF9F3;
        border-radius: 8px;
        border: 1px solid #E6D5C3;
    }

    /* DOC CATEGORY */
    .doc-category {
        padding: 2rem;
        background: #FFF9F3;
        border-radius: 14px;
        border: 1px solid #E6D5C3;
        text-align: center;
        transition: all 0.3s ease;
    }

    .doc-category:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(107, 66, 38, 0.15);
    }

    .doc-icon {
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .doc-icon i {
        color: #8B5E3C;
    }

    .doc-title {
        color: #6B4226;
        font-weight: 600;
    }

    .doc-description {
        color: #7A5A44;
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }

    .doc-list {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
    }

    .doc-list li {
        padding: 0.25rem 0;
        color: #5A3A26;
        font-size: 0.9rem;
        position: relative;
        padding-left: 1.5rem;
    }

    .doc-list li:before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #8B5E3C;
        font-weight: bold;
    }

    /* BUTTON */
    .btn-outline-primary {
        color: #8B5E3C;
        border-color: #8B5E3C;
    }

    .btn-outline-primary:hover {
        background-color: #8B5E3C;
        color: #fff;
    }

    /* ALERT */
    .alert-info {
        background-color: #F5EFE8;
        border-color: #E6D5C3;
        color: #5A3A26;
    }

    .verification-links .btn {
        display: block;
        width: 100%;
    }

    .contact-info i {
        color: #8B5E3C;
    }

    @media (max-width: 768px) {
        .header-content h1 {
            font-size: 2rem;
        }

        .card-body {
            padding: 2rem !important;
        }

        .doc-category {
            margin-bottom: 1.5rem;
        }
    }
</style>
@endpush
