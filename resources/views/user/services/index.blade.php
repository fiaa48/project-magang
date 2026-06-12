@extends('user.layouts.app')

@section('title', 'Layanan Konsultansi | PT Mitra Nusa Konsulindo')
@section('description', 'Layanan konsultansi konstruksi dan non-konstruksi profesional: arsitektur, rekayasa teknik, manajemen proyek, dan penelitian.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="services-hero position-relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="hero-bg-pattern">
            <div class="pattern-circle circle-1"></div>
            <div class="pattern-circle circle-2"></div>
            <div class="pattern-square square-1"></div>
            <div class="pattern-square square-2"></div>
        </div>

        <div class="container position-relative z-3">
            <div class="row min-vh-60 align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="company-badge mb-5 animate-fade-in-down">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 fs-6 fw-normal">
                            <i class="fas fa-cogs me-2"></i>LAYANAN PROFESIONAL
                        </span>
                    </div>
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Layanan <span class="text-gradient-brown">Kami</span>
                    </h1>
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">Solusi Terintegrasi untuk</h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                Konstruksi & Konsultansi Konstruksi
                            </span>
                        </div>
                    </div>
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.3s;">
                        Didukung oleh tenaga ahli bersertifikasi dan pengalaman luas di berbagai sektor.
                        Komitmen kami adalah kesempurnaan dan kepuasan klien.
                    </p>
                </div>
            </div>
        </div>

        <div class="scroll-indicator">
            <a href="#construction-services" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- CONSTRUCTION SERVICES SECTION (hanya tampil jika ada data) -->
    @if(isset($constructionServices) && count($constructionServices) > 0)
    <section id="construction-services" class="py-6 bg-white position-relative">
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-hard-hat me-2"></i>LAYANAN KONSTRUKSI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Layanan Konstruksi</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Data layanan konstruksi yang sama dengan sumber admin dan seeder.
                </p>
            </div>

            <div class="row g-4">
                @foreach($constructionServices as $service)
                <div class="col-md-4">
                    <div class="service-card-3d animate-on-scroll">
                        <div class="service-card-inner">
                            <div class="service-icon-wrapper">
                                <div class="icon-glow"></div>
                                <i class="{{ $service['icon'] ?? 'fas fa-list-check' }} fa-3x text-brown-dark"></i>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-3">{{ $service['title'] }}</h3>
                            <p class="text-brown-medium mb-4">{{ $service['description'] }}</p>

                            @if(isset($service['sub_services']) && count($service['sub_services']) > 0)
                            <div class="service-sub-list mb-4">
                                <ul class="list-unstyled">
                                    @foreach(array_slice($service['sub_services'], 0, 4) as $sub)
                                    <li class="d-flex mb-2">
                                        <i class="fas fa-chevron-right text-cream-gold me-2 mt-1 small"></i>
                                        <span class="text-brown-medium">{{ $sub }}</span>
                                    </li>
                                    @endforeach
                                    @if(count($service['sub_services']) > 4)
                                    <li class="text-brown-dark small mt-2 fw-semibold">
                                        + {{ count($service['sub_services']) - 4 }} layanan lainnya
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            @endif

                            <!-- 3D decorative corner -->
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- CONSTRUCTION CONSULTANCY DETAIL SECTION (hanya tampil jika ada data) -->
    @if(isset($constructionConsultancyServices) && count($constructionConsultancyServices) > 0)
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-list-check me-2"></i>DATA KONSULTANSI KONSTRUKSI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Layanan Konsultansi Konstruksi</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Data layanan konsultansi konstruksi yang sama dengan sumber admin dan seeder.
                </p>
            </div>

            <div class="row g-4">
                @foreach($constructionConsultancyServices as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card-3d animate-on-scroll">
                            <div class="service-card-inner">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="service-icon-wrapper">
                                        <div class="icon-glow"></div>
                                        <i class="{{ $service['icon'] ?? 'fas fa-list-check' }} fa-2x text-brown-dark"></i>
                                    </div>
                                    @if(!empty($service['code']))
                                        <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">
                                            {{ $service['code'] }}
                                        </span>
                                    @endif
                                </div>

                                <h3 class="fw-bold text-brown-dark mb-3">{{ $service['title'] }}</h3>
                                <p class="text-brown-medium mb-4">{{ $service['description'] }}</p>

                                @php
                                    $features = $service['features'] ?? $service['sub_services'] ?? [];
                                @endphp
                                @if(count($features) > 0)
                                    <div class="service-sub-list mb-4">
                                        <ul class="list-unstyled">
                                            @foreach(array_slice($features, 0, 4) as $sub)
                                                <li class="d-flex mb-2">
                                                    <i class="fas fa-check-circle text-cream-gold me-2 mt-1 small"></i>
                                                    <span class="text-brown-medium">{{ $sub }}</span>
                                                </li>
                                            @endforeach
                                            @if(count($features) > 4)
                                                <li class="text-brown-dark small mt-2 fw-semibold">
                                                    + {{ count($features) - 4 }} layanan lainnya
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                @endif

                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- SERVICE PROCESS – 3D STEPS -->
    <section class="py-6 bg-white position-relative">
        <div class="container">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-project-diagram me-2"></i>PROSES KERJA
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Proses Layanan Kami</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Kami menjalankan proses kerja terstruktur untuk hasil terbaik.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="process-step-card animate-on-scroll">
                        <div class="step-number-circle">1</div>
                        <div class="step-icon">
                            <i class="fas fa-clipboard-list fa-3x"></i>
                        </div>
                        <h5 class="step-title">Konsultasi Awal</h5>
                        <p class="step-desc">Memahami kebutuhan dan tujuan proyek klien</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step-card animate-on-scroll">
                        <div class="step-number-circle">2</div>
                        <div class="step-icon">
                            <i class="fas fa-search fa-3x"></i>
                        </div>
                        <h5 class="step-title">Studi & Analisis</h5>
                        <p class="step-desc">Melakukan penelitian dan analisis mendalam</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step-card animate-on-scroll">
                        <div class="step-number-circle">3</div>
                        <div class="step-icon">
                            <i class="fas fa-drafting-compass fa-3x"></i>
                        </div>
                        <h5 class="step-title">Perencanaan & Desain</h5>
                        <p class="step-desc">Menyusun rencana dan desain solusi</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step-card animate-on-scroll">
                        <div class="step-number-circle">4</div>
                        <div class="step-icon">
                            <i class="fas fa-check-circle fa-3x"></i>
                        </div>
                        <h5 class="step-title">Implementasi & Evaluasi</h5>
                        <p class="step-desc">Melaksanakan dan mengevaluasi hasil</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Ingin Konsultasikan Proyek Anda?</h2>
                        <p class="lead mb-0">
                            Tim ahli kami siap membantu mewujudkan visi Anda dengan solusi terbaik.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-envelope me-2"></i>Hubungi Sekarang
                                <span class="btn-shine"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    :root {
        --brown-dark: #241b64;
        --brown-medium: #302574;
        --brown-light: #A1887F;
        --cream-gold: #D4AF37;
        --cream-dark: #D7CCC8;
        --cream-medium: #f8fafc;
        --cream-light: #f8fafc;
        --white: #ffffff;
        --shadow-sm: 0 .125rem .25rem rgba(0,0,0,.075);
        --shadow-md: 0 .5rem 1rem rgba(0,0,0,.15);
        --shadow-lg: 0 1rem 3rem rgba(0,0,0,.175);
        --shadow-3d: 0 20px 40px rgba(93,64,55,0.2), 0 10px 20px rgba(0,0,0,0.1);
    }

    .services-hero {
        background: linear-gradient(135deg, var(--cream-light) 0%, var(--white) 100%);
        padding: 6rem 0 4rem;
        position: relative;
        overflow: hidden;
    }

    .hero-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .pattern-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(93, 64, 55, 0.05);
        animation: float 20s ease-in-out infinite;
    }

    .pattern-circle.circle-1 { width: 300px; height: 300px; top: -150px; right: -100px; animation-delay: 0s; }
    .pattern-circle.circle-2 { width: 200px; height: 200px; bottom: -80px; left: -80px; background: rgba(212, 175, 55, 0.05); animation-delay: 10s; }
    .pattern-square { position: absolute; background: rgba(161, 136, 127, 0.03); animation: rotate 30s linear infinite; }
    .pattern-square.square-1 { width: 150px; height: 150px; top: 30%; right: 15%; transform: rotate(45deg); }
    .pattern-square.square-2 { width: 100px; height: 100px; bottom: 20%; left: 10%; transform: rotate(15deg); background: rgba(212, 175, 55, 0.03); animation-delay: -15s; }

    @keyframes float { 0%,100% { transform: translateY(0) rotate(0deg); } 50% { transform: translateY(-20px) rotate(180deg); } }
    @keyframes rotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

    .min-vh-60 { min-height: 60vh; }
    .display-2 { font-weight: 800 !important; letter-spacing: -0.02em; line-height: 1.15; }
    .text-gradient-brown { background: linear-gradient(135deg, var(--cream-gold), var(--brown-light)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .company-badge { animation: fadeInDown 0.8s ease-out; }
    .badge.bg-brown-dark { background-color: rgba(93, 64, 55, 0.9) !important; border: 1px solid rgba(255,255,255,0.2); backdrop-filter: blur(10px); }
    .badge.bg-brown-light-subtle { background-color: rgba(161,136,127,0.1) !important; color: var(--brown-dark); }

    .typewriter-wrapper { display: inline-block; position: relative; }
    .typewriter-text { position: relative; display: inline-block; color: var(--brown-dark) !important; }
    .typewriter-text::after { content: ''; position: absolute; right: -8px; top: 50%; transform: translateY(-50%); width: 3px; height: 1.2em; background-color: var(--brown-dark); animation: blink 1s infinite; }
    @keyframes blink { 0%,100% { opacity: 1; } 50% { opacity: 0; } }

    .scroll-indicator { position: absolute; bottom: 2rem; left: 0; right: 0; text-align: center; }
    .scroll-down { color: var(--brown-dark); font-size: 1.5rem; animation: bounce 2s infinite; display: inline-block; width: 50px; height: 50px; line-height: 50px; border-radius: 50%; background: rgba(255,255,255,0.9); box-shadow: var(--shadow-sm); transition: all 0.3s; }
    .scroll-down:hover { background: white; transform: scale(1.1); }
    @keyframes bounce { 0%,20%,50%,80%,100% { transform: translateY(0); } 40% { transform: translateY(-10px); } 60% { transform: translateY(-5px); } }

    .service-card-3d { perspective: 1000px; height: 100%; }
    .service-card-inner { background: white; border-radius: 2rem; padding: 2rem; box-shadow: var(--shadow-3d); border: 1px solid rgba(93,64,55,0.1); transition: all 0.4s cubic-bezier(0.4,0,0.2,1); transform-style: preserve-3d; transform: rotateY(0deg) rotateX(1deg); position: relative; overflow: hidden; height: 100%; }
    .service-card-3d:hover .service-card-inner { transform: rotateY(-2deg) rotateX(1deg) translateY(-8px); box-shadow: 0 30px 60px rgba(93,64,55,0.25); }
    .service-icon-wrapper { width: 80px; height: 80px; background: linear-gradient(135deg, var(--cream-gold), var(--brown-light)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; position: relative; z-index: 2; transition: all 0.3s; }
    .service-card-3d:hover .service-icon-wrapper { transform: scale(1.1) rotate(5deg); }
    .icon-glow { position: absolute; width: 100%; height: 100%; border-radius: 50%; background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.8), transparent 70%); opacity: 0; transition: opacity 0.3s; }
    .service-card-3d:hover .icon-glow { opacity: 0.5; }
    .service-sub-list ul li i { color: var(--cream-gold); }
    .card-corner { position: absolute; width: 100px; height: 100px; background: linear-gradient(135deg, transparent 50%, rgba(212,175,55,0.1) 50%); z-index: 1; }
    .card-corner.corner-1 { top: 0; right: 0; transform: rotate(90deg); }
    .card-corner.corner-2 { bottom: 0; left: 0; transform: rotate(270deg); }

    .process-step-card {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem 1.5rem;
        text-align: center;
        border: 1px solid rgba(93,64,55,0.08);
        box-shadow: 0 10px 25px rgba(0,0,0,0.02);
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    .process-step-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(93,64,55,0.1); border-color: var(--cream-gold); }
    .step-number-circle { width: 50px; height: 50px; background: linear-gradient(135deg, var(--cream-gold), var(--brown-light)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: white; font-weight: 700; font-size: 1.5rem; box-shadow: 0 5px 15px rgba(212,175,55,0.3); transition: all 0.3s; }
    .process-step-card:hover .step-number-circle { transform: scale(1.1); background: linear-gradient(135deg, var(--brown-dark), var(--cream-gold)); }
    .step-icon { color: var(--brown-dark); margin-bottom: 1rem; transition: transform 0.3s; }
    .process-step-card:hover .step-icon { transform: scale(1.1); color: var(--cream-gold); }
    .step-title { font-weight: 700; color: var(--brown-dark); margin-bottom: 0.75rem; font-size: 1.1rem; }
    .step-desc { color: var(--brown-medium); font-size: 0.9rem; line-height: 1.5; margin-bottom: 0; }

    .section-bg-decoration { position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; }
    .decoration-circle { position: absolute; border-radius: 50%; background: rgba(212, 175, 55, 0.03); width: 300px; height: 300px; }
    .decoration-circle:nth-child(1) { top: -100px; right: -100px; background: rgba(93,64,55,0.02); animation: float 25s infinite; }
    .decoration-circle:nth-child(2) { bottom: -50px; left: -50px; width: 200px; height: 200px; background: rgba(212,175,55,0.02); animation: float 20s infinite reverse; }
    .bg-cream-light { background-color: var(--cream-light) !important; position: relative; }
    .cert-pattern { position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; }
    .pattern-line { position: absolute; width: 100%; height: 1px; background: linear-gradient(90deg, transparent, var(--cream-gold), transparent); opacity: 0.2; }
    .pattern-line:nth-child(1) { top: 20%; left: -50%; width: 200%; transform: rotate(2deg); }
    .pattern-line:nth-child(2) { bottom: 30%; right: -50%; width: 200%; transform: rotate(-3deg); }

    .cta-elegant { background: linear-gradient(135deg, #f8fafc 0%, #D7CCC8 100%); position: relative; overflow: hidden; }
    .cta-elegant::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: radial-gradient(circle at 20% 30%, rgba(92, 64, 51, 0.1) 0%, transparent 50%), radial-gradient(circle at 80% 70%, rgba(210, 180, 140, 0.1) 0%, transparent 50%); }
    .cta-content-wrapper { position: relative; z-index: 2; padding: 3rem; background: rgba(255, 255, 255, 0.9); border-radius: 1.5rem; box-shadow: 0 10px 40px rgba(0,0,0,0.08); border: 1px solid rgba(255,255,255,0.3); backdrop-filter: blur(10px); }
    .cta-elegant h2 { color: #241b64; background: linear-gradient(135deg, #241b64, #302574); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .cta-elegant .lead { color: #4b3dad; }

    @keyframes fadeInDown { from { opacity: 0; transform: translateY(-30px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    .animate-fade-in-down { animation: fadeInDown 0.8s ease-out forwards; }
    .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
    .animate-on-scroll { opacity: 0; animation: fadeInUp 0.8s ease-out forwards; }

    .btn-brown-3d {
        background: linear-gradient(145deg, var(--brown-dark), #4A342E);
        border: none;
        color: white;
        font-weight: 600;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 16px rgba(93,64,55,0.2);
        transform-style: preserve-3d;
        transform: translateY(0) rotateX(0deg);
    }
    .btn-brown-3d:hover { transform: translateY(-3px) rotateX(2deg); box-shadow: 0 15px 30px rgba(93,64,55,0.3); background: linear-gradient(145deg, #4A342E, var(--brown-dark)); }
    .btn-brown-3d::before, .btn-outline-brown-3d::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transition: left 0.6s; }
    .btn-brown-3d:hover::before, .btn-outline-brown-3d:hover::before { left: 100%; }

    .py-6 { padding-top: 5rem !important; padding-bottom: 5rem !important; }
    .mb-6 { margin-bottom: 5rem !important; }

    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .services-hero { padding: 5rem 0 3rem; }
        .service-card-inner { padding: 1.5rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }
    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .service-icon-wrapper { width: 70px; height: 70px; }
    }
    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .badge { font-size: 0.8rem !important; }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const textElement = document.querySelector('.typewriter-text');
        if (textElement) {
            const originalText = textElement.textContent.trim();
            let charIndex = 0, isDeleting = false, typingSpeed = 100;
            function typeWriter() {
                const currentText = originalText.substring(0, charIndex);
                textElement.textContent = currentText;
                if (!isDeleting && charIndex < originalText.length) {
                    charIndex++;
                    typingSpeed = 100;
                } else if (isDeleting && charIndex > 0) {
                    charIndex--;
                    typingSpeed = 50;
                }
                if (!isDeleting && charIndex === originalText.length) {
                    isDeleting = true;
                    typingSpeed = 1500;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    typingSpeed = 500;
                }
                setTimeout(typeWriter, typingSpeed);
            }
            setTimeout(typeWriter, 1000);
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
            });
        });

        const observerOptions = { threshold: 0.2, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
        }, observerOptions);
        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

        const cards = document.querySelectorAll('.service-card-inner, .process-step-card');
        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;
                card.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg) translateY(-5px)`;
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'rotateY(0deg) rotateX(1deg)';
            });
        });
    });
</script>
@endpush
