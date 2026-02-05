@extends('layouts.app')

@section('title', 'Layanan Konsultansi - PT Mitra Nusa Konsulindo')
@section('description', 'Layanan konsultansi konstruksi dan non-konstruksi profesional: arsitektur, rekayasa teknik, manajemen proyek, dan penelitian.')

@section('content')
    <!-- Page Header -->
    <section class="page-header bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Layanan Kami</h1>
                    <p class="lead">Solusi konsultansi profesional untuk berbagai kebutuhan konstruksi dan non-konstruksi</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Layanan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">Konsultansi Konstruksi</h2>
                    <p class="text-muted">Layanan konsultansi untuk proyek-proyek konstruksi dengan standar tinggi</p>
                </div>
            </div>
            
            <div class="row g-4 mb-5">
                @foreach($constructionServices as $service)
                <div class="col-md-4">
                    <div class="card service-detail-card h-100">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <i class="{{ $service['icon'] }} fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">{{ $service['title'] }}</h5>
                            <p class="card-text">{{ $service['description'] }}</p>
                            
                            @if(isset($service['sub_services']))
                            <ul class="list-unstyled mb-0">
                                @foreach($service['sub_services'] as $sub)
                                <li class="mb-1">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    {{ $sub }}
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <a href="{{ route($service['route']) }}" class="btn btn-outline-primary btn-sm">Detail Layanan</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Non-Construction Services -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">Konsultansi Non-Konstruksi</h2>
                    <p class="text-muted">Layanan konsultansi untuk berbagai sektor non-konstruksi</p>
                </div>
            </div>
            
            <div class="row g-4">
                @foreach($nonConstructionServices as $service)
                <div class="col-md-4">
                    <div class="card service-detail-card h-100">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <i class="{{ $service['icon'] }} fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">{{ $service['title'] }}</h5>
                            <p class="card-text">{{ $service['description'] }}</p>
                            
                            @if(isset($service['sub_services']))
                            <ul class="list-unstyled mb-0">
                                @foreach($service['sub_services'] as $sub)
                                <li class="mb-1">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    {{ $sub }}
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <a href="{{ route($service['route']) }}" class="btn btn-outline-primary btn-sm">Detail Layanan</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Service Process -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">Proses Layanan Kami</h2>
                    <p class="text-muted">Kami menjalankan proses kerja yang terstruktur untuk hasil terbaik</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="process-step mb-3">
                            <div class="step-number">1</div>
                            <i class="fas fa-clipboard-list fa-2x text-primary mt-3"></i>
                        </div>
                        <h5>Konsultasi Awal</h5>
                        <p>Memahami kebutuhan dan tujuan proyek klien</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="process-step mb-3">
                            <div class="step-number">2</div>
                            <i class="fas fa-search fa-2x text-primary mt-3"></i>
                        </div>
                        <h5>Studi & Analisis</h5>
                        <p>Melakukan penelitian dan analisis mendalam</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="process-step mb-3">
                            <div class="step-number">3</div>
                            <i class="fas fa-drafting-compass fa-2x text-primary mt-3"></i>
                        </div>
                        <h5>Perencanaan & Desain</h5>
                        <p>Menyusun rencana dan desain solusi</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="process-step mb-3">
                            <div class="step-number">4</div>
                            <i class="fas fa-check-circle fa-2x text-primary mt-3"></i>
                        </div>
                        <h5>Implementasi & Evaluasi</h5>
                        <p>Melaksanakan dan mengevaluasi hasil</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="mb-3">Ingin Konsultasikan Proyek Anda?</h3>
                    <p class="mb-0">Tim ahli kami siap membantu mewujudkan visi Anda dengan solusi terbaik.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-envelope me-2"></i>Hubungi Sekarang
                    </a>
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
    
    .service-detail-card {
        transition: transform 0.3s ease;
        border: 1px solid #e0e0e0;
    }
    
    .service-detail-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .service-icon {
        height: 60px;
        display: flex;
        align-items: center;
    }
    
    .process-step {
        position: relative;
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        background-color: #f8f9fa;
        border: 2px solid #1a73e8;
    }
    
    .step-number {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 30px;
        height: 30px;
        background-color: #1a73e8;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll for service cards
        const serviceCards = document.querySelectorAll('.service-detail-card');
        serviceCards.forEach(card => {
            card.addEventListener('click', function(e) {
                if (e.target.tagName === 'A' || e.target.parentElement.tagName === 'A') {
                    return;
                }
                const link = this.querySelector('a');
                if (link) {
                    link.click();
                }
            });
        });
    });
</script>
@endpush