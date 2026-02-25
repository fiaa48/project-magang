@extends('layouts.app')

@section('title', 'Konsultansi Konstruksi')

@section('content')
<div class="container-fluid px-0">
    <!-- Hero Banner -->
    <div class="consulting-hero position-relative overflow-hidden">
        <div class="container py-6 py-lg-7 position-relative z-2">
            <div class="row align-items-center min-vh-60">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-brown-100 text-brown-700 px-4 py-2 mb-4 rounded-pill fw-medium">
                        <i class="fas fa-hard-hat me-2"></i>Layanan Profesional
                    </span>
                    <h1 class="display-3 fw-bold text-white mb-4 animate__animated animate__fadeInDown">
                        Konsultansi <span class="text-cream-300">Konstruksi</span>
                    </h1>
                    <p class="lead text-white mb-5 animate__animated animate__fadeInUp">
                        Solusi terpadu untuk pengembangan tata ruang dan lingkungan yang berkelanjutan
                    </p>
                    <div class="d-flex flex-wrap justify-content-center gap-3 animate__animated animate__fadeIn">
                        <a href="#services" class="btn btn-lg btn-cream-300 text-brown-800 px-5 py-3 rounded-pill fw-semibold">
                            <i class="fas fa-list-check me-2"></i>Lihat Layanan
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-lg btn-outline-cream-300 text-white px-5 py-3 rounded-pill fw-semibold">
                            <i class="fas fa-phone-alt me-2"></i>Konsultasi Gratis
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Pattern -->
        <div class="hero-pattern"></div>
        <div class="hero-overlay"></div>
    </div>

    <!-- Services Section -->
    <section id="services" class="py-6 py-lg-7 bg-cream-50 position-relative">
        <!-- Decorative Elements -->
        <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden">
            <div class="deco-circle deco-1"></div>
            <div class="deco-circle deco-2"></div>
            <div class="deco-circle deco-3"></div>
        </div>

        <div class="container position-relative z-2">
            <!-- Section Header -->
            <div class="text-center mb-6">
                <h2 class="display-5 fw-bold text-brown-800 mb-4">
                    Layanan <span class="text-brown-600">Kami</span>
                </h2>
                <p class="lead text-brown-600 mb-0 mx-auto" style="max-width: 700px;">
                    Menyediakan berbagai solusi konsultansi konstruksi dengan pendekatan holistik dan berkelanjutan
                </p>
            </div>

            @php
                $services = [
                    [
                        'code' => 'AL001',
                        'title' => 'Pengembangan Pemanfaatan Ruang',
                        'description' => 'Jasa konsultansi terkait pengembangan pemanfaatan ruang untuk optimalisasi fungsi dan nilai ruang.',
                        'icon' => 'fas fa-map-marked-alt',
                        'features' => ['Analisis Ruang', 'Optimasi Pemanfaatan', 'Studi Kelayakan']
                    ],
                    [
                        'code' => 'AL002',
                        'title' => 'Pengembangan Wilayah',
                        'description' => 'Perencanaan tata ruang wilayah mulai dari tingkat nasional hingga lokal dengan pendekatan terintegrasi.',
                        'icon' => 'fas fa-globe-asia',
                        'features' => ['Tata Ruang Wilayah', 'Kawasan Strategis', 'Perencanaan Terpadu']
                    ],
                    [
                        'code' => 'AL003',
                        'title' => 'Pengembangan Perkotaan',
                        'description' => 'Jasa perencanaan tata ruang perkotaan dengan fokus pada keberlanjutan dan kenyamanan hunian.',
                        'icon' => 'fas fa-city',
                        'features' => ['Perencanaan Kota', 'Desain Perkotaan', 'Kajian Tata Ruang']
                    ],
                    [
                        'code' => 'AL004',
                        'title' => 'Lingkungan Bangunan & Lanskap',
                        'description' => 'Desain dan rencana aesthetic landscaping untuk berbagai tipe lingkungan bangunan dan komersial.',
                        'icon' => 'fas fa-tree',
                        'features' => ['Landscape Design', 'Desain Eksterior', 'Planning Aesthetic']
                    ],
                    [
                        'code' => 'KL401',
                        'title' => 'Konsultansi Lingkungan',
                        'description' => 'Solusi pengolahan air bersih, penyehatan lingkungan, dan manajemen persampahan yang terintegrasi.',
                        'icon' => 'fas fa-recycle',
                        'features' => ['Pengolahan Air', 'Sanitasi Lingkungan', 'Manajemen Sampah']
                    ],
                ];
            @endphp

            <!-- Services Grid -->
            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card-wrapper h-100">
                            <div class="service-card h-100 position-relative">
                                <!-- Service Badge -->
                                <div class="service-badge position-absolute">
                                    <span class="badge bg-brown-700 text-white px-3 py-2">
                                        {{ $service['code'] }}
                                    </span>
                                </div>

                                <!-- Card Content -->
                                <div class="service-content p-4 h-100 d-flex flex-column">
                                    <!-- Icon -->
                                    <div class="service-icon-wrapper mb-4">
                                        <div class="service-icon-circle bg-brown-100">
                                            <i class="{{ $service['icon'] }} fa-2x text-brown-700"></i>
                                        </div>
                                    </div>

                                    <!-- Title & Description -->
                                    <h3 class="h4 fw-bold text-brown-800 mb-3">{{ $service['title'] }}</h3>
                                    <p class="text-brown-600 mb-4 flex-grow-1">{{ $service['description'] }}</p>

                                    <!-- Features -->
                                    <div class="mb-4">
                                        @foreach($service['features'] as $feature)
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="fas fa-check-circle text-brown-600 me-2"></i>
                                                <span class="text-brown-700">{{ $feature }}</span>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Card Footer -->
                                    <div class="mt-auto pt-3 border-top border-brown-200">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="availability-status">
                                                <span class="text-success fw-medium">
                                                    <i class="fas fa-circle-check me-1"></i>Tersedia
                                                </span>
                                            </div>
                                            <button type="button" class="btn btn-brown-700 px-4 py-2 rounded-pill detail-btn"
                                                    data-code="{{ $service['code'] }}"
                                                    data-title="{{ $service['title'] }}"
                                                    data-description="{{ $service['description'] }}">
                                                Detail <i class="fas fa-arrow-right ms-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-6 py-lg-7 bg-brown-800 position-relative overflow-hidden">
        <div class="container position-relative z-2">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold text-white mb-3">
                        Siap Mewujudkan Proyek Impian Anda?
                    </h2>
                    <p class="lead text-cream-300 mb-4">
                        Konsultasikan kebutuhan Anda dengan tim ahli kami. Dapatkan solusi terbaik untuk pengembangan tata ruang dan konstruksi.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg btn-cream-300 text-brown-800 px-5 py-3 rounded-pill fw-semibold">
                            <i class="fas fa-calendar-check me-2"></i>Jadwalkan Konsultasi
                        </a>
                        <a href="tel:+622112345678" class="btn btn-lg btn-outline-cream-300 text-white px-5 py-3 rounded-pill fw-semibold">
                            <i class="fas fa-phone me-2"></i>+62 21 1234 5678
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end mt-5 mt-lg-0">
                    <div class="cta-illustration position-relative d-inline-block">
                        <div class="illustration-circle bg-brown-700"></div>
                        <i class="fas fa-handshake fa-5x text-cream-300"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Pattern -->
        <div class="cta-pattern"></div>
    </section>
</div>

<!-- Modal for Service Details -->
<div class="modal fade" id="serviceDetailModal" tabindex="-1" aria-labelledby="serviceDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 overflow-hidden">
            <div class="modal-header bg-brown-700 text-white py-4">
                <h5 class="modal-title fw-bold" id="serviceDetailModalLabel">
                    <i class="fas fa-info-circle me-2"></i>Detail Layanan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-cream-50 p-0">
                <div class="row g-0">
                    <div class="col-lg-8 p-5">
                        <div class="mb-4">
                            <span class="badge bg-brown-100 text-brown-700 px-3 py-2" id="modal-service-code"></span>
                        </div>
                        <h3 class="fw-bold text-brown-800 mb-4" id="modal-service-title"></h3>
                        <p class="text-brown-700 mb-5" id="modal-service-description"></p>

                        <div class="service-details">
                            <h5 class="text-brown-800 mb-3 fw-semibold">
                                <i class="fas fa-list-check me-2"></i>Cakupan Layanan
                            </h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <div class="d-flex">
                                        <i class="fas fa-check text-brown-600 me-3 mt-1"></i>
                                        <span class="text-brown-700">Analisis dan studi kelayakan mendalam</span>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="d-flex">
                                        <i class="fas fa-check text-brown-600 me-3 mt-1"></i>
                                        <span class="text-brown-700">Perencanaan strategis dan implementasi</span>
                                    </div>
                                </li>
                                <li class="mb-3">
                                    <div class="d-flex">
                                        <i class="fas fa-check text-brown-600 me-3 mt-1"></i>
                                        <span class="text-brown-700">Monitoring dan evaluasi berkelanjutan</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <i class="fas fa-check text-brown-600 me-3 mt-1"></i>
                                        <span class="text-brown-700">Dokumentasi dan laporan komprehensif</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 bg-brown-100 p-5">
                        <h5 class="text-brown-800 mb-4 fw-semibold">
                            <i class="fas fa-clock me-2"></i>Proses Kerja
                        </h5>
                        <div class="timeline">
                            <div class="timeline-step mb-4">
                                <div class="step-number bg-brown-700 text-white">1</div>
                                <div class="step-content">
                                    <h6 class="text-brown-800 fw-semibold">Konsultasi Awal</h6>
                                    <p class="text-brown-600 small">Identifikasi kebutuhan dan tujuan proyek</p>
                                </div>
                            </div>
                            <div class="timeline-step mb-4">
                                <div class="step-number bg-brown-700 text-white">2</div>
                                <div class="step-content">
                                    <h6 class="text-brown-800 fw-semibold">Analisis Mendalam</h6>
                                    <p class="text-brown-600 small">Studi kelayakan dan analisis komprehensif</p>
                                </div>
                            </div>
                            <div class="timeline-step mb-4">
                                <div class="step-number bg-brown-700 text-white">3</div>
                                <div class="step-content">
                                    <h6 class="text-brown-800 fw-semibold">Perencanaan</h6>
                                    <p class="text-brown-600 small">Penyusunan rencana dan strategi implementasi</p>
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="step-number bg-brown-700 text-white">4</div>
                                <div class="step-content">
                                    <h6 class="text-brown-800 fw-semibold">Implementasi & Review</h6>
                                    <p class="text-brown-600 small">Pelaksanaan dan evaluasi hasil</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-cream-100 px-5 py-4">
                <button type="button" class="btn btn-outline-brown-700 px-4 py-2 rounded-pill" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Tutup
                </button>
                <a href="{{ route('contact') }}" class="btn btn-brown-700 px-5 py-2 rounded-pill" id="modal-contact-btn">
                    <i class="fas fa-calendar-alt me-2"></i>Jadwalkan Konsultasi
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
    /* Color System */
    .text-brown-800 { color: #3E2723; }
    .text-brown-700 { color: #5D4037; }
    .text-brown-600 { color: #795548; }
    .text-brown-500 { color: #8D6E63; }

    .bg-brown-800 { background-color: #3E2723; }
    .bg-brown-700 { background-color: #5D4037; }
    .bg-brown-600 { background-color: #795548; }
    .bg-brown-500 { background-color: #8D6E63; }
    .bg-brown-400 { background-color: #A1887F; }
    .bg-brown-300 { background-color: #BCAAA4; }
    .bg-brown-200 { background-color: #D7CCC8; }
    .bg-brown-100 { background-color: #EFEBE9; }

    .text-cream-300 { color: #FFF8E1; }
    .text-cream-200 { color: #FFECB3; }

    .bg-cream-300 { background-color: #FFF8E1; }
    .bg-cream-200 { background-color: #FFECB3; }
    .bg-cream-100 { background-color: #FFFDE7; }
    .bg-cream-50 { background-color: #FFFEF5; }

    .btn-cream-300 {
        background-color: #FFF8E1;
        border-color: #FFF8E1;
        color: #3E2723;
    }

    .btn-cream-300:hover {
        background-color: #FFECB3;
        border-color: #FFECB3;
        color: #3E2723;
    }

    .btn-outline-cream-300 {
        color: #FFF8E1;
        border-color: #FFF8E1;
    }

    .btn-outline-cream-300:hover {
        background-color: #FFF8E1;
        border-color: #FFF8E1;
        color: #3E2723;
    }

    .btn-brown-700 {
        background-color: #5D4037;
        border-color: #5D4037;
        color: white;
    }

    .btn-brown-700:hover {
        background-color: #3E2723;
        border-color: #3E2723;
        color: white;
    }

    .btn-outline-brown-700 {
        color: #5D4037;
        border-color: #5D4037;
    }

    .btn-outline-brown-700:hover {
        background-color: #5D4037;
        border-color: #5D4037;
        color: white;
    }

    /* Hero Section */
    .consulting-hero {
        background: linear-gradient(135deg, #5D4037 0%, #3E2723 100%);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .min-vh-60 {
        min-height: 60vh;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(30, 30, 30, 0.4);
        z-index: 1;
    }

    .hero-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        z-index: 1;
    }

    /* Service Cards */
    .service-card-wrapper {
        perspective: 1000px;
    }

    .service-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(62, 39, 35, 0.08);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid #EFEBE9;
        overflow: hidden;
    }

    .service-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 20px 40px rgba(62, 39, 35, 0.15);
    }

    .service-badge {
        top: 20px;
        right: 20px;
        z-index: 2;
    }

    .service-icon-wrapper {
        display: flex;
        justify-content: center;
    }

    .service-icon-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .service-card:hover .service-icon-circle {
        transform: scale(1.1) rotate(5deg);
        background: linear-gradient(135deg, #EFEBE9 0%, #D7CCC8 100%);
    }

    .availability-status {
        font-size: 0.9rem;
    }

    /* Decorative Elements */
    .deco-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(93, 64, 55, 0.03);
    }

    .deco-1 {
        width: 300px;
        height: 300px;
        top: -150px;
        right: -150px;
    }

    .deco-2 {
        width: 200px;
        height: 200px;
        bottom: 50px;
        left: -100px;
        background: rgba(255, 248, 225, 0.1);
    }

    .deco-3 {
        width: 150px;
        height: 150px;
        bottom: 100px;
        right: 50px;
        background: rgba(93, 64, 55, 0.05);
    }

    /* CTA Section */
    .cta-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        z-index: 1;
    }

    .cta-illustration {
        padding: 40px;
    }

    .illustration-circle {
        position: absolute;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }

    .cta-illustration i {
        position: relative;
        z-index: 2;
        filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
    }

    /* Timeline in Modal */
    .timeline-step {
        display: flex;
        align-items: flex-start;
    }

    .step-number {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .step-content {
        flex-grow: 1;
    }

    /* Modal Customization */
    .modal-content {
        border-radius: 20px;
        box-shadow: 0 25px 50px rgba(62, 39, 35, 0.2);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.5rem;
        }

        .display-5 {
            font-size: 2rem;
        }

        .consulting-hero .container {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }

        .cta-illustration {
            padding: 30px;
        }

        .illustration-circle {
            width: 150px;
            height: 150px;
        }

        .cta-illustration i {
            font-size: 3.5rem !important;
        }
    }

    @media (max-width: 576px) {
        .display-3 {
            font-size: 2rem;
        }

        .display-5 {
            font-size: 1.75rem;
        }

        .btn-lg {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
        }
    }
</style>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap Modal
    const serviceModal = new bootstrap.Modal(document.getElementById('serviceDetailModal'));

    // Handle detail button clicks
    document.querySelectorAll('.detail-btn').forEach(button => {
        button.addEventListener('click', function() {
            const code = this.getAttribute('data-code');
            const title = this.getAttribute('data-title');
            const description = this.getAttribute('data-description');

            // Update modal content
            document.getElementById('modal-service-code').textContent = code;
            document.getElementById('modal-service-title').textContent = title;
            document.getElementById('modal-service-description').textContent = description;

            // Update consultation link
            const contactBtn = document.getElementById('modal-contact-btn');
            const baseUrl = contactBtn.getAttribute('href').split('?')[0];
            contactBtn.setAttribute('href', `${baseUrl}?service=${encodeURIComponent(title)}&code=${code}`);

            // Show modal
            serviceModal.show();
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add animation to cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
            }
        });
    }, observerOptions);

    // Observe service cards
    document.querySelectorAll('.service-card').forEach(card => {
        observer.observe(card);
    });
});
</script>

<!-- Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

@endsection
