@extends('layouts.app')

@section('title', 'Layanan Konsultansi - PT Mitra Nusa Konsulindo')
@section('description', 'Layanan konsultansi konstruksi dan non-konstruksi profesional: arsitektur, rekayasa teknik, manajemen proyek, dan penelitian.')

@section('content')
    <!-- Page Header -->
    <section class="page-header bg-brown-gradient text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Layanan Kami</h1>
                    <p class="lead">Solusi konsultansi profesional untuk berbagai kebutuhan konstruksi dan non-konstruksi</p>
                    <nav aria-label="breadcrumb">
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-5 bg-cream-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title-brown">Konsultansi Konstruksi</h2>
                    <p class="text-brown-dark">Layanan konsultansi untuk proyek-proyek konstruksi dengan standar tinggi</p>
                </div>
            </div>

            <div class="row g-4 mb-5">
                @foreach($constructionServices as $service)
                <div class="col-md-4">
                    <div class="card service-detail-card h-100">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <i class="{{ $service['icon'] }} fa-2x text-brown"></i>
                            </div>
                            <h5 class="card-title text-brown-dark">{{ $service['title'] }}</h5>
                            <p class="card-text text-brown">{{ $service['description'] }}</p>

                            @if(isset($service['sub_services']))
                            <ul class="list-unstyled mb-0">
                                @foreach($service['sub_services'] as $sub)
                                <li class="mb-1 text-brown">
                                    <i class="fas fa-check-circle text-brown-accent me-2"></i>
                                    {{ $sub }}
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <a href="{{ route($service['route']) }}" class="btn btn-brown-outline btn-sm">Detail Layanan</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Non-Construction Services -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title-brown">Konsultansi Non-Konstruksi</h2>
                    <p class="text-brown-dark">Layanan konsultansi untuk berbagai sektor non-konstruksi</p>
                </div>
            </div>

            <div class="row g-4">
                @foreach($nonConstructionServices as $service)
                <div class="col-md-4">
                    <div class="card service-detail-card h-100">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <i class="{{ $service['icon'] }} fa-2x text-brown"></i>
                            </div>
                            <h5 class="card-title text-brown-dark">{{ $service['title'] }}</h5>
                            <p class="card-text text-brown">{{ $service['description'] }}</p>

                            @if(isset($service['sub_services']))
                            <ul class="list-unstyled mb-0">
                                @foreach($service['sub_services'] as $sub)
                                <li class="mb-1 text-brown">
                                    <i class="fas fa-check-circle text-brown-accent me-2"></i>
                                    {{ $sub }}
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <a href="{{ route($service['route']) }}" class="btn btn-brown-outline btn-sm">Detail Layanan</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Service Process -->
    <section class="py-5 bg-cream">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title-brown">Proses Layanan Kami</h2>
                    <p class="text-brown-dark">Kami menjalankan proses kerja yang terstruktur untuk hasil terbaik</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="process-step-brown mb-3">
                            <div class="step-number-brown">1</div>
                            <i class="fas fa-clipboard-list fa-2x text-brown mt-3"></i>
                        </div>
                        <h5 class="text-brown-dark">Konsultasi Awal</h5>
                        <p class="text-brown">Memahami kebutuhan dan tujuan proyek klien</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="process-step-brown mb-3">
                            <div class="step-number-brown">2</div>
                            <i class="fas fa-search fa-2x text-brown mt-3"></i>
                        </div>
                        <h5 class="text-brown-dark">Studi & Analisis</h5>
                        <p class="text-brown">Melakukan penelitian dan analisis mendalam</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="process-step-brown mb-3">
                            <div class="step-number-brown">3</div>
                            <i class="fas fa-drafting-compass fa-2x text-brown mt-3"></i>
                        </div>
                        <h5 class="text-brown-dark">Perencanaan & Desain</h5>
                        <p class="text-brown">Menyusun rencana dan desain solusi</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="process-step-brown mb-3">
                            <div class="step-number-brown">4</div>
                            <i class="fas fa-check-circle fa-2x text-brown mt-3"></i>
                        </div>
                        <h5 class="text-brown-dark">Implementasi & Evaluasi</h5>
                        <p class="text-brown">Melaksanakan dan mengevaluasi hasil</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-brown-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="mb-3">Ingin Konsultasikan Proyek Anda?</h3>
                    <p class="mb-0 text-cream">Tim ahli kami siap membantu mewujudkan visi Anda dengan solusi terbaik.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('contact') }}" class="btn btn-cream btn-lg">
                        <i class="fas fa-envelope me-2 text-brown-dark"></i>Hubungi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Color Palette - Brown & Cream Theme */
    :root {
        --brown-dark: #5D4037;      /* Dark Brown */
        --brown: #795548;           /* Medium Brown */
        --brown-light: #8D6E63;     /* Light Brown */
        --brown-accent: #A1887F;    /* Accent Brown */
        --cream-dark: #D7CCC8;      /* Dark Cream */
        --cream: #EFEBE9;           /* Medium Cream */
        --cream-light: #F5F5F5;     /* Light Cream */
        --cream-accent: #FFF8E1;    /* Warm Cream */
    }

    .bg-brown-gradient {
        background: linear-gradient(135deg, var(--brown-dark) 0%, var(--brown) 100%) !important;
    }

    .bg-brown-dark {
        background-color: var(--brown-dark) !important;
    }

    .bg-brown {
        background-color: var(--brown) !important;
    }

    .bg-brown-light {
        background-color: var(--brown-light) !important;
    }

    .bg-cream {
        background-color: var(--cream) !important;
    }

    .bg-cream-light {
        background-color: var(--cream-light) !important;
    }

    .bg-cream-accent {
        background-color: var(--cream-accent) !important;
    }

    .text-brown-dark {
        color: var(--brown-dark) !important;
    }

    .text-brown {
        color: var(--brown) !important;
    }

    .text-brown-light {
        color: var(--brown-light) !important;
    }

    .text-brown-accent {
        color: var(--brown-accent) !important;
    }

    .text-cream {
        color: var(--cream) !important;
    }

    .text-cream-dark {
        color: var(--cream-dark) !important;
    }

    /* Buttons */
    .btn-brown {
        background-color: var(--brown);
        color: white;
        border-color: var(--brown);
    }

    .btn-brown:hover {
        background-color: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
    }

    .btn-brown-outline {
        background-color: transparent;
        color: var(--brown);
        border: 2px solid var(--brown);
    }

    .btn-brown-outline:hover {
        background-color: var(--brown);
        color: white;
        border-color: var(--brown);
    }

    .btn-cream {
        background-color: var(--cream);
        color: var(--brown-dark);
        border-color: var(--cream);
    }

    .btn-cream:hover {
        background-color: var(--cream-accent);
        color: var(--brown-dark);
        border-color: var(--cream-accent);
    }

    /* Section Title */
    .section-title-brown {
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 30px;
        color: var(--brown-dark);
    }

    .section-title-brown:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background-color: var(--brown);
    }

    /* Service Cards */
    .service-detail-card {
        transition: transform 0.3s ease;
        border: 1px solid var(--cream-dark);
        background-color: white;
    }

    .service-detail-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(93, 64, 55, 0.1);
        border-color: var(--brown-accent);
    }

    .service-icon {
        height: 60px;
        display: flex;
        align-items: center;
    }

    /* Process Steps */
    .process-step-brown {
        position: relative;
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        background-color: var(--cream);
        border: 2px solid var(--brown);
    }

    .step-number-brown {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 30px;
        height: 30px;
        background-color: var(--brown);
        color: var(--cream);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    /* Breadcrumb */
    .breadcrumb {
        background-color: transparent;
    }

    .breadcrumb-item.active {
        color: var(--cream) !important;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .page-header {
            padding: 3rem 0;
        }

        .display-4 {
            font-size: 2.5rem;
        }

        .process-step-brown {
            width: 70px;
            height: 70px;
        }
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
