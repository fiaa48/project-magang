@extends('layouts.app')

@section('title', 'Jasa Rekayasa Teknik')

@section('content')
<div class="container py-5">
    <!-- Header dengan latar belakang gradasi -->
    <div class="hero-section rounded-4 p-5 mb-5" style="background: linear-gradient(135deg, #5D4037 0%, #8D6E63 100%);">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-5 fw-bold text-white mb-3">Jasa Rekayasa Teknik</h1>
                <p class="lead text-light mb-0">Solusi profesional untuk kebutuhan rekayasa konstruksi, infrastruktur, dan teknik sipil dengan standar kualitas terbaik.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="bg-cream rounded-circle d-inline-flex align-items-center justify-content-center p-4" style="width: 120px; height: 120px; background-color: #FFF3E0;">
                    <i class="fas fa-cogs fa-3x" style="color: #5D4037;"></i>
                </div>
            </div>
        </div>
    </div>

    @php
        $services = [
            [
                'code' => 'RK001',
                'title' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
                'description' => 'Jasa desain rekayasa struktur untuk kerangka load-bearing bangunan perumahan, komersial, institusi, dan industri, termasuk estimasi biaya, rencana akhir, dan layanan fase konstruksi.',
                'icon' => 'fas fa-building',
                'features' => ['Desain struktural', 'Estimasi biaya', 'Supervisi konstruksi', 'Analisis beban'],
                'color' => '#795548'
            ],
            [
                'code' => 'RK002',
                'title' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air',
                'description' => 'Jasa desain rekayasa untuk pekerjaan sipil keairan seperti dam, sistem irigasi, pengendalian banjir, pelabuhan, penyaluran air, sanitasi, dan sistem air limbah industri.',
                'icon' => 'fas fa-water',
                'features' => ['Desain sistem irigasi', 'Pengendalian banjir', 'Sistem sanitasi', 'Pengelolaan air limbah'],
                'color' => '#6D4C41'
            ],
            [
                'code' => 'RK003',
                'title' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi',
                'description' => 'Jasa desain rekayasa untuk pekerjaan sipil transportasi seperti jembatan, jalan layang, jalan raya, termasuk structural health monitoring system untuk jembatan.',
                'icon' => 'fas fa-road',
                'features' => ['Desain jembatan', 'Perencanaan jalan', 'Monitoring struktural', 'Analisis lalu lintas'],
                'color' => '#5D4037'
            ],
            [
                'code' => 'RK005',
                'title' => 'Jasa Rekayasa Lainnya',
                'description' => 'Jasa rekayasa teknik lainnya yang tidak termasuk dalam kategori sebelumnya, mencakup berbagai disiplin teknik sipil dan struktur.',
                'icon' => 'fas fa-tools',
                'features' => ['Konsultasi teknik', 'Studi kelayakan', 'Analisis dampak lingkungan', 'Manajemen proyek'],
                'color' => '#8D6E63'
            ],
        ];
    @endphp

    <!-- Daftar Layanan -->
    <div class="row g-4">
        @foreach($services as $service)
            <div class="col-lg-6">
                <div class="card service-card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="card-header-custom d-flex align-items-center p-4" style="background-color: {{ $service['color'] }};">
                        <div class="service-icon rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px; background-color: #FFF3E0;">
                            <i class="{{ $service['icon'] }} fa-2x" style="color: {{ $service['color'] }};"></i>
                        </div>
                        <div>
                            <span class="badge bg-cream text-brown fw-medium mb-2" style="background-color: #FFF3E0; color: {{ $service['color'] }};">{{ $service['code'] }}</span>
                            <h5 class="card-title text-white mb-0">{{ $service['title'] }}</h5>
                        </div>
                    </div>
                    <div class="card-body p-4" style="background-color: #FFF8F0;">
                        <p class="card-text text-dark mb-4">{{ $service['description'] }}</p>

                        <h6 class="fw-semibold mb-3" style="color: {{ $service['color'] }};">Fitur Layanan:</h6>
                        <div class="mb-4">
                            @foreach($service['features'] as $feature)
                                <span class="badge feature-badge rounded-pill mb-2 me-2" style="background-color: rgba(93, 64, 55, 0.1); color: {{ $service['color'] }};">{{ $feature }}</span>
                            @endforeach
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <a href="#" class="btn btn-sm consult-btn" style="background-color: {{ $service['color'] }}; color: white;">
                                <i class="fas fa-phone-alt me-2"></i>Konsultasi
                            </a>
                            <small class="text-muted">Tim profesional siap membantu</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- CTA Section -->
    <div class="cta-section rounded-4 p-5 mt-5" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFECB3 100%); border: 1px solid #D7CCC8;">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h3 class="fw-bold mb-3" style="color: #5D4037;">Butuh Solusi Rekayasa Teknik yang Tepat?</h3>
                <p class="mb-0" style="color: #795548;">Konsultasikan kebutuhan proyek Anda dengan tim ahli kami untuk mendapatkan solusi terbaik dan efisien.</p>
            </div>
            <div class="col-md-4 text-md-end">
                <button class="btn btn-lg cta-button" style="background: linear-gradient(135deg, #5D4037 0%, #8D6E63 100%); color: white;">
                    <i class="fas fa-calendar-check me-2"></i>Jadwalkan Konsultasi
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan style kustom -->
<style>
    :root {
        --brown-dark: #5D4037;
        --brown-medium: #795548;
        --brown-light: #8D6E63;
        --brown-pale: #BCAAA4;
        --cream-dark: #FFF3E0;
        --cream-medium: #FFF8F0;
        --cream-light: #FFFEFB;
        --accent-gold: #D7CCC8;
    }

    .hero-section {
        box-shadow: 0 10px 30px rgba(93, 64, 55, 0.2);
    }

    .service-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
        border: 1px solid #D7CCC8;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(93, 64, 55, 0.15) !important;
    }

    .card-header-custom {
        border-bottom: none;
    }

    .service-icon {
        transition: transform 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .service-card:hover .service-icon {
        transform: scale(1.1);
    }

    .consult-btn {
        border: none;
        padding: 8px 20px;
        border-radius: 8px;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .consult-btn:hover {
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .cta-button {
        border: none;
        padding: 12px 30px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(93, 64, 55, 0.25);
        color: white;
    }

    body {
        background-color: #FFFEFB;
    }

    .feature-badge {
        padding: 8px 15px;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .feature-badge:hover {
        transform: translateY(-1px);
    }
</style>

<!-- Tambahkan FontAwesome untuk ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

@endsection
