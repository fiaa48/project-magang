@extends('layouts.app')

@section('title', 'Sertifikasi & Lisensi - PT Mitra Nusa Konsulindo')
@section('description', 'Dokumen sertifikasi, lisensi, dan akreditasi resmi PT Mitra Nusa Konsulindo: SBU Konstruksi, ISO, INKINDO, Kemenkumham.')

@section('content')
    <!-- Page Header -->
    <section class="page-header bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Sertifikasi & Lisensi</h1>
                    <p class="lead">Dokumen legal dan sertifikasi resmi yang dimiliki perusahaan</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Sertifikasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Summary -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">Sertifikasi Perusahaan</h2>
                    <p class="text-muted">Kami memiliki berbagai sertifikasi yang menjamin kualitas layanan kami</p>
                </div>
            </div>
            
            <!-- Certification Categories -->
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card certification-category h-100">
                        <div class="card-body text-center p-5">
                            <div class="category-icon mb-4">
                                <i class="fas fa-hard-hat fa-4x text-primary"></i>
                            </div>
                            <h4 class="card-title">SBU Konstruksi</h4>
                            <p class="card-text">Sertifikasi Badan Usaha untuk Jasa Konstruksi dari LPJK</p>
                            <div class="mt-4">
                                <span class="badge bg-success me-2">10+ Klasifikasi</span>
                                <span class="badge bg-info">Aktif</span>
                            </div>
                            <a href="{{ route('certifications.sbu') }}" class="btn btn-primary mt-4">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card certification-category h-100">
                        <div class="card-body text-center p-5">
                            <div class="category-icon mb-4">
                                <i class="fas fa-certificate fa-4x text-primary"></i>
                            </div>
                            <h4 class="card-title">Sertifikasi ISO</h4>
                            <p class="card-text">Sistem Manajemen Mutu, Lingkungan, K3, dan Anti-Suap</p>
                            <div class="mt-4">
                                <span class="badge bg-success me-2">4 Sistem</span>
                                <span class="badge bg-info">Terverifikasi</span>
                            </div>
                            <a href="{{ route('certifications.iso') }}" class="btn btn-primary mt-4">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card certification-category h-100">
                        <div class="card-body text-center p-5">
                            <div class="category-icon mb-4">
                                <i class="fas fa-file-contract fa-4x text-primary"></i>
                            </div>
                            <h4 class="card-title">Dokumen Legal</h4>
                            <p class="card-text">Dokumen pendirian, perizinan, dan legalitas perusahaan</p>
                            <div class="mt-4">
                                <span class="badge bg-success me-2">Lengkap</span>
                                <span class="badge bg-info">Terdaftar</span>
                            </div>
                            <a href="{{ route('certifications.legal') }}" class="btn btn-primary mt-4">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Active Certifications Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Sertifikasi Aktif</h4>
                            
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Jenis Sertifikasi</th>
                                            <th>Nomor</th>
                                            <th>Penerbit</th>
                                            <th>Masa Berlaku</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($activeCertifications as $cert)
                                        <tr>
                                            <td>
                                                <strong>{{ $cert['type'] }}</strong>
                                                <br><small class="text-muted">{{ $cert['description'] }}</small>
                                            </td>
                                            <td>{{ $cert['number'] }}</td>
                                            <td>{{ $cert['issuer'] }}</td>
                                            <td>
                                                {{ $cert['valid_from'] }} - {{ $cert['valid_until'] }}
                                                <br>
                                                <small class="text-muted">
                                                    {{ \Carbon\Carbon::parse($cert['valid_until'])->diffForHumans() }}
                                                </small>
                                            </td>
                                            <td>
                                                @if($cert['status'] === 'active')
                                                <span class="badge bg-success">Aktif</span>
                                                @elseif($cert['status'] === 'expiring')
                                                <span class="badge bg-warning">Berakhir</span>
                                                @else
                                                <span class="badge bg-secondary">{{ $cert['status'] }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($cert['document'])
                                                <a href="{{ asset($cert['document']) }}" 
                                                   class="btn btn-sm btn-outline-primary" 
                                                   target="_blank">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ asset($cert['document']) }}" 
                                                   class="btn btn-sm btn-outline-success" 
                                                   download>
                                                    <i class="fas fa-download"></i>
                                                </a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Associations -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">Asosiasi & Keanggotaan</h2>
                </div>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <img src="{{ asset('images/certificates/inkindo-logo.png') }}" 
                                 alt="INKINDO" 
                                 class="img-fluid mb-3" 
                                 style="max-height: 80px;">
                            <h5>Ikatan Nasional Konsultan Indonesia</h5>
                            <p class="text-muted">Anggota aktif sejak 2020</p>
                            <div class="mt-3">
                                <p class="mb-1"><strong>No. Anggota:</strong> 17744/P/1304.JB</p>
                                <p class="mb-0"><strong>Klasifikasi:</strong> Konsultan Konstruksi & Non-Konstruksi</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <img src="{{ asset('images/certificates/kadin-logo.png') }}" 
                                 alt="KADIN" 
                                 class="img-fluid mb-3" 
                                 style="max-height: 80px;">
                            <h5>Kamar Dagang dan Industri Indonesia</h5>
                            <p class="text-muted">Anggota terdaftar</p>
                            <div class="mt-3">
                                <p class="mb-1"><strong>No. Anggota:</strong> 20112-2026270629</p>
                                <p class="mb-0"><strong>No. KTA-B:</strong> 24293273-25021912001</p>
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
    .page-header {
        background: linear-gradient(135deg, #1a73e8 0%, #0d47a1 100%);
    }
    
    .section-title {
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 30px;
    }
    
    .section-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background-color: #1a73e8;
    }
    
    .certification-category {
        transition: transform 0.3s ease;
        border: 1px solid #e0e0e0;
    }
    
    .certification-category:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .category-icon {
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endpush