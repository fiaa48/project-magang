@extends('user.layouts.app')

@section('title', $home->meta_title ?? 'PT Mitra Nusa Konsulindo - Konsultan Konstruksi & Non Konstruksi')
@section('description', $home->meta_description ?? 'PT Mitra Nusa Konsulindo adalah perusahaan konsultan mandiri sejak 2020 yang bergerak di bidang jasa konsultansi teknik, manajemen, konstruksi dan non-konstruksi dengan tenaga ahli berpengalaman dan berkualitas.')

@section('content')
    <!-- HERO / BERANDA UTAMA -->
    <section class="hero-section position-relative overflow-hidden">
        <!-- Background Slider -->
        <div class="hero-slider">
            <div class="slider-track">
                <div class="slide active">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Konsultansi Konstruksi</h3>
                        <p>Perencanaan dan rekayasa bangunan gedung hunian & non hunian.</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1487956382158-bb926046304a?auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Jasa Arsitektural</h3>
                        <p>Desain bangunan, interior, dan lanskap berkarakter, fungsional, dan estetis.</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Rekayasa Teknik Sipil</h3>
                        <p>Infrastruktur sumber daya air, transportasi, dan struktur bangunan.</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Konsultansi Non-Konstruksi</h3>
                        <p>Studi, penelitian, manajemen, dan pengembangan berbagai sektor.</p>
                    </div>
                </div>
            </div>
            <button class="slider-nav prev"><i class="fas fa-chevron-left"></i></button>
            <button class="slider-nav next"><i class="fas fa-chevron-right"></i></button>
            <div class="slider-dots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
                <span class="dot" data-slide="3"></span>
            </div>
        </div>

        <!-- Main Hero Content -->
        <div class="container position-relative hero-container">
            <div class="row min-vh-100 align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-9 mx-auto text-center">
                    <!-- Badge - diturunkan dengan margin-top -->
                    <div class="company-badge mb-4" style="margin-top: 3rem;">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 fs-6 fw-normal shadow-soft">
                            <i class="fas fa-medal me-2"></i>Perusahaan Konsultan Mandiri Sejak 2020
                        </span>
                    </div>

                    <!-- Main Heading dengan Efek Typewriter -->
                    <div class="hero-title-wrapper">
                        <h1 class="hero-typewriter fw-bold text-white" id="heroTypewriter"></h1>
                    </div>

                    <!-- Sub Heading / Tagline -->
                    <p class="lead fs-5 lh-lg mx-auto hero-lead" style="max-width: 780px; color: #ffffff !important; text-shadow: 0 2px 12px rgba(0,0,0,0.7); font-weight: 500;">
                        {{ $home->hero_description ?? 'PT. MITRA NUSA KONSULINDO merupakan perusahaan konsultan mandiri yang berdiri pada tahun 2020, berkembang dengan dukungan tenaga ahli terkemuka dan berkualitas yang telah melaksanakan berbagai proyek terintegrasi lintas disiplin, siap memberikan bantuan dan pelayanan profesional bagi instansi pemerintah maupun swasta di bidang jasa Konsultansi Teknik dan Manajemen.' }}
                    </p>

                    <!-- Spesialis Jasa Konsultansi -->
                    <div class="subtitle-wrapper mb-4">
                        <h2 class="h4 fw-light text-white-50 mb-2">Spesialis Jasa Konsultansi</h2>
                        <div class="specialist-text-wrapper">
                            <span class="text-white fw-semibold specialist-text">
                                {{ $home->hero_specialist ?? 'Perencanaan Umum • Studi Kelayakan • Perencanaan Teknik • Dokumen Lingkungan • Pengawasan Teknik • Penelitian & Pengembangan' }}
                            </span>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="cta-buttons d-flex flex-wrap gap-3 justify-content-center mb-4">
                        <a href="{{ route('about') }}" class="btn btn-brown btn-lg px-5 py-3 rounded-pill shadow-soft">
                            <i class="fas fa-building me-2"></i>Tentang Perusahaan
                        </a>
                        <a href="{{ route('services') }}" class="btn btn-outline-cream btn-lg px-5 py-3 rounded-pill shadow-soft">
                            <i class="fas fa-cogs me-2"></i>Layanan Konstruksi & Non-Konstruksi
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="stats-wrapper mt-4 glass-panel">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-5 fw-bold text-white" data-target="{{ $home->experience_years ?? 5 }}">{{ ($home->experience_years ?? 5) }}+</div>
                                    <div class="stat-label text-white-50">Tahun Pengalaman</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-5 fw-bold text-white" data-target="{{ $home->projects_done ?? 50 }}">{{ ($home->projects_done ?? 50) }}+</div>
                                    <div class="stat-label text-white-50">Proyek Terselesaikan</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-5 fw-bold text-white" data-target="{{ (isset($certificates) ? $certificates->count() : 0) ?: ($home->certifications ?? 15) }}">{{ (isset($certificates) ? $certificates->count() : 0) ?: ($home->certifications ?? 15) }}+</div>
                                    <div class="stat-label text-white-50">Bidang Sertifikasi</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-5 fw-bold text-white" data-target="{{ $home->experts ?? 10 }}">{{ ($home->experts ?? 10) }}+</div>
                                    <div class="stat-label text-white-50">Tenaga Ahli Profesional</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Scroll Indicator -->
                    <div class="scroll-indicator">
                        <a href="#about-brief" class="scroll-down"><i class="fas fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: Sekilas Perusahaan (Profil & Latar Belakang) -->
    <section id="about-brief" class="py-7 bg-light-gradient position-relative overflow-hidden">
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="card border-0 shadow-3d rounded-4 p-4 p-lg-5 bg-white position-relative overflow-hidden hover-3d-card">
                        <span class="floating-badge"><i class="fas fa-award me-2"></i>Konsultan Mandiri</span>
                        <h2 class="display-6 fw-bold mb-3 text-brown-dark">Profil Singkat Perusahaan</h2>
                        <p class="text-brown-medium mb-3">
                            {{ $home->about_desc_1 ?? 'PT. MITRA NUSA KONSULINDO adalah perusahaan konsultan yang menekuni bidang jasa Konsultansi Teknik dan Manajemen sebagai profesi, disiapkan untuk memberikan bantuan dan pelayanan dalam berbagai kegiatan yang berkaitan dengan Perencanaan Umum, Studi Kelayakan, Perencanaan Teknik, Dokumen Lingkungan, Pengawasan Teknik, Penelitian serta pengembangan berbagai bidang lainnya.' }}
                        </p>
                        <p class="text-brown-medium mb-4">
                            {{ $home->about_desc_2 ?? 'Dalam menyelesaikan setiap penugasan, perusahaan menerapkan sistem penyelesaian teknik dan administrasi secara profesional, didukung tenaga ahli berpengalaman dan tenaga muda berbakat sehingga pekerjaan berdaya guna dan berhasil guna secara maksimal.' }}
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="info-pill">
                                    <span class="label">Berdiri</span>
                                    <span class="value">{{ $companyProfile->established_year ?? 'Tahun 2020' }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-pill">
                                    <span class="label">Bentuk Usaha</span>
                                    <span class="data-value">{{ $companyProfile->type ?? 'Perseroan Terbatas (PT)' }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-pill">
                                    <span class="label">Domisili</span>
                                    <span class="data-value">{{ $companyProfile->address_main ?? 'Gedung Graha Mulia Sejahtera, Jl. Terusan Jakarta No. 175A, Antapani-Kulon, Bandung 40291 &' }} {{ $companyProfile->address_branch ?? 'Jl. Tulip VII No. 8, Rancabolang, Kec. Gedebage, Kota Bandung, Jawa Barat 40295' }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-pill">
                                    <span class="label">Asosiasi</span>
                                    <span class="data-value">{{ $companyProfile->association ?? 'Anggota INKINDO & KADIN' }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('about') }}" class="btn btn-outline-brown-3d rounded-pill px-4">Profil Lengkap Perusahaan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow-3d rounded-4 p-4 p-lg-5 bg-white h-100">
                        <h3 class="h3 fw-bold mb-3 text-brown-dark">Latar Belakang & Cara Pandang</h3>
                        <p class="text-brown-medium mb-3">
                            {{ $home->background_desc_1 ?? 'Menghadapi proses perubahan yang sangat cepat dan kompleks, perusahaan menyadari perlunya visi dan misi yang akurat dengan landasan pengalaman, kebijakan, kreativitas, kecepatan bertindak, dan dukungan teknologi tinggi agar setiap perubahan serta permasalahan dapat diselesaikan secara tepat.' }}
                        </p>
                        <p class="text-brown-medium mb-4">
                            {{ $home->background_desc_2 ?? 'PT. MITRA NUSA KONSULINDO tumbuh dan berkembang atas kepercayaan rekanan dan mitra kerja yang terjalin dalam suatu jaringan kerja sama saling menguntungkan. Perusahaan selalu siap menerima tawaran kerja sama dari instansi pemerintah maupun swasta dalam bidang profesinya.' }}
                        </p>
                        <ul class="list-unstyled premium-list">
                            @php
                                $backgroundList = $home->background_list ?? [];
                                if (is_string($backgroundList)) $backgroundList = json_decode($backgroundList, true);
                                if (empty($backgroundList)) {
                                    $backgroundList = [
                                        'Berpandangan ke depan dengan visi dan misi yang tajam.',
                                        'Didukung tenaga ahli berpengalaman dan tenaga muda potensial.',
                                        'Penanganan proyek secara profesional, efektif, dan efisien.',
                                        'Terbuka untuk kerja sama jangka panjang yang saling menguntungkan.'
                                    ];
                                }
                            @endphp
                            @foreach($backgroundList as $item)
                            <li><i class="fas fa-check-circle text-cream-gold me-2"></i>{{ $item }}</li>
                            @endforeach
                        </ul>
                        <div class="mt-4 d-flex flex-wrap gap-3">
                            <div class="mini-card">
                                <span class="label">Telepon</span>
                                <span class="data-value">{{ $companyProfile->telepon_pt ?? '(022) 20502071' }}</span>
                            </div>
                            <div class="mini-card">
                                <span class="label">Email</span>
                                <span class="data-value">{{ $companyProfile->email_pt ?? 'mitranusakonsulindo@gmail.com' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA PREMIUM -->
    <section class="py-7 cta-elegant position-relative overflow-hidden">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">{{ $home->cta_title ?? 'Siap Mengikutsertakan Kami Dalam Proyek Anda?' }}</h2>
                        <p class="lead mb-0 text-brown-dark" style="color: #241b64 !important;">{{ $home->cta_description ?? 'Adalah suatu kehormatan besar bagi kami apabila Relasi dan Klien berkenan memberikan kepercayaan untuk bekerja sama, sehingga kami dapat membuktikan kinerja yang profesional dan saling menguntungkan.' }}</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{{ route('contact') }}" class="btn btn-outline-brown-3d rounded-pill px-5">
                            <i class="fas fa-paper-plane me-2"></i>Hubungi Kami Sekarang
                            <span class="btn-shine"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* ===== SAME STYLES AS ORIGINAL, with fix for hero text and CTA button ===== */
    :root {
        --brown-dark: #241b64;
        --brown-medium: #302574;
        --brown-light: #4b3dad;
        --cream-gold: #ef332d;
        --cream-dark: #eef2ff;
        --cream-medium: #f8fafc;
        --cream-light: #f8fafc;
        --white: #ffffff;
        --light: #f8f9fa;
        --light-gray: #e9ecef;
        --gray: #6c757d;
        --dark: #212529;
        --shadow-sm: 0 .125rem .25rem rgba(0,0,0,.075);
        --shadow-md: 0 .5rem 1rem rgba(0,0,0,.15);
        --shadow-lg: 0 1rem 3rem rgba(0,0,0,.175);
        --shadow-3d: 0 20px 40px rgba(36,27,100,0.16), 0 10px 20px rgba(0,0,0,0.08);
    }

    /* Text Colors */
    .text-brown-dark { color: var(--brown-dark) !important; }
    .text-brown-medium { color: var(--brown-medium) !important; }
    .text-brown-light { color: var(--brown-light) !important; }
    .text-cream-gold { color: var(--cream-gold) !important; }

    /* Background Colors */
    .bg-brown-dark { background-color: var(--brown-dark) !important; }
    .bg-brown-medium { background-color: var(--brown-medium) !important; }
    .bg-brown-light { background-color: var(--brown-light) !important; }
    .bg-cream-gold { background-color: var(--cream-gold) !important; }
    .bg-cream-light { background-color: var(--cream-light) !important; }
    .bg-cream-medium { background-color: var(--cream-medium) !important; }
    .bg-light-gradient {
        background: radial-gradient(circle at top left, #f8fafc 0%, #ffffff 40%, #f8fafc 100%);
    }

    /* Subtle Backgrounds */
    .bg-brown-subtle { background-color: rgba(36, 27, 100, 0.08) !important; }
    .bg-brown-medium-subtle { background-color: rgba(48, 37, 116, 0.12) !important; }
    .bg-brown-light-subtle { background-color: rgba(75, 61, 173, 0.12) !important; }
    .bg-cream-gold-subtle { background-color: rgba(239, 51, 45, 0.12) !important; }

    /* ===== 3D BUTTONS ===== */
    .btn-brown-3d {
        background: linear-gradient(145deg, var(--brown-dark), #171247);
        border: none;
        color: white;
        font-weight: 600;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 16px rgba(36,27,100,0.2);
        transform-style: preserve-3d;
        transform: translateY(0) rotateX(0deg);
    }

    .btn-brown-3d:hover {
        transform: translateY(-3px) rotateX(2deg);
        box-shadow: 0 15px 30px rgba(36,27,100,0.3);
        background: linear-gradient(145deg, #171247, var(--brown-dark));
    }

    .btn-outline-brown-3d {
        border: 2px solid var(--brown-dark);
        color: var(--brown-dark);
        background: transparent;
        font-weight: 600;
        transition: all 0.3s;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        position: relative;
        overflow: hidden;
    }

    .btn-outline-brown-3d:hover {
        background: var(--brown-dark);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(36,27,100,0.2);
    }

    .btn-brown-3d::before, .btn-outline-brown-3d::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.6s;
    }

    .btn-brown-3d:hover::before, .btn-outline-brown-3d:hover::before {
        left: 100%;
    }

    /* ===== 3D CARD HOVER EFFECT ===== */
    .hover-3d-card {
        perspective: 1000px;
        transform-style: preserve-3d;
        transition: all 0.4s;
    }

    .hover-3d-card:hover {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(36,27,100,0.2);
    }

    /* ===== SERVICE CARD 3D ===== */
    .service-card-3d {
        perspective: 1000px;
        height: 100%;
    }
    .service-card-inner {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem 1.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(36,27,100,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
        text-align: center;
    }
    .service-card-3d:hover .service-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(36,27,100,0.18);
        border-color: var(--cream-gold);
    }
    .service-icon-wrapper {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        transition: all 0.3s;
    }
    .service-card-3d:hover .service-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    /* ===== TEAM CARD 3D ===== */
    .team-card-3d {
        perspective: 1000px;
        height: 100%;
    }
    .team-card-inner {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem 1.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(36,27,100,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
        text-align: center;
    }
    .team-card-3d:hover .team-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(36,27,100,0.18);
        border-color: var(--cream-gold);
    }
    .team-icon-wrapper {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        transition: all 0.3s;
    }
    .team-card-3d:hover .team-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    /* ===== DECORATIVE CORNERS ===== */
    .card-corner {
        position: absolute;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, transparent 50%, rgba(212,175,55,0.1) 50%);
        z-index: 1;
    }
    .card-corner.corner-1 { top: 0; right: 0; transform: rotate(90deg); }
    .card-corner.corner-2 { bottom: 0; left: 0; transform: rotate(270deg); }

    /* ===== BACKGROUND DECORATIONS ===== */
    .section-bg-decoration {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .decoration-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(212,175,55,0.03);
        width: 300px;
        height: 300px;
    }
    .decoration-circle:nth-child(1) { top: -100px; right: -100px; background: rgba(36,27,100,0.03); animation: float 25s infinite; }
    .decoration-circle:nth-child(2) { bottom: -50px; left: -50px; width: 200px; height: 200px; background: rgba(239,51,45,0.03); animation: float 20s infinite reverse; }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }

    .cert-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .pattern-line {
        position: absolute;
        width: 100%;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--cream-gold), transparent);
        opacity: 0.2;
    }

    .pattern-line:nth-child(1) { top: 20%; left: -50%; width: 200%; transform: rotate(2deg); }
    .pattern-line:nth-child(2) { bottom: 30%; right: -50%; width: 200%; transform: rotate(-3deg); }

    /* HERO SECTION */
    .hero-section {
        position: relative;
        min-height: 100vh;
        color: white;
    }

    .hero-slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    }

    .slider-track {
        display: flex;
        width: 400%;
        height: 100%;
        transition: transform 1s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .slide {
        position: relative;
        width: 100%;
        height: 100%;
        flex-shrink: 0;
    }

    .slide-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transform-origin: center;
        animation: kenburns 20s infinite;
    }

    @keyframes kenburns {
        0% { transform: scale(1); }
        50% { transform: scale(1.08); }
        100% { transform: scale(1); }
    }

    .slide-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(36, 27, 100, 0.88) 0%, rgba(239, 51, 45, 0.72) 100%);
        mix-blend-mode: multiply;
    }

    .slide-content {
        position: absolute;
        bottom: 16%;
        right: 10%;
        color: white;
        text-align: right;
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease;
    }

    .slide.active .slide-content {
        opacity: 1;
        transform: translateY(0);
    }

    .slide-content h3 {
        font-size: 1.85rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }

    .slide-content p {
        font-size: 1.05rem;
        opacity: 0.9;
    }

    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
        backdrop-filter: blur(6px);
    }

    .slider-nav:hover {
        background: rgba(255, 255, 255, 0.32);
        transform: translateY(-50%) scale(1.08);
    }

    .slider-nav.prev { left: 30px; }
    .slider-nav.next { right: 30px; }

    .slider-dots {
        position: absolute;
        bottom: 28px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 12px;
        z-index: 10;
    }

    .slider-dots .dot {
        width: 10px;
        height: 10px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.6);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .slider-dots .dot.active {
        width: 24px;
        background: white;
    }

    /* ----- PERBAIKAN HERO CONTAINER & TYPEWRITER ----- */
    .hero-container {
        position: relative;
        z-index: 5;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding-top: 0;
        padding-bottom: 0;
    }

    .hero-section .row {
        width: 100%;
    }

    /* Wrapper untuk typewriter agar tetap satu baris dan tengah */
    .hero-title-wrapper {
        display: flex;
        justify-content: center;
        margin-bottom: 1rem;
    }

    .hero-typewriter {
        font-size: clamp(1.2rem, 4vw, 2.5rem);
        font-weight: 700;
        letter-spacing: -0.02em;
        text-shadow: 0 18px 40px rgba(0,0,0,0.5);
        white-space: nowrap;
        overflow: hidden;
        border-right: 3px solid rgba(255,255,255,0.75);
        display: inline-block;
        padding-right: 5px;
        animation: blink-caret 0.75s step-end infinite;
        text-align: center;
        margin: 0 auto;
    }

    @keyframes blink-caret {
        from, to { border-color: transparent; }
        50% { border-color: rgba(255,255,255,0.75); }
    }

    /* Perbaikan: Badge diturunkan dengan margin-top */
    .company-badge {
        margin-top: 2rem !important;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 768px) {
        .hero-typewriter {
            font-size: clamp(1rem, 3.5vw, 1.8rem);
            white-space: nowrap;
        }
        .company-badge {
            margin-top: 1rem !important;
        }
    }
    @media (max-width: 576px) {
        .hero-typewriter {
            font-size: clamp(0.9rem, 3vw, 1.4rem);
        }
        .company-badge {
            margin-top: 0.5rem !important;
        }
    }

    /* ----- PERBAIKAN: teks hero putih solid ----- */
    .hero-lead {
        color: #ffffff !important;
        text-shadow: 0 2px 12px rgba(0,0,0,0.7);
        font-weight: 500;
    }

    /* ----- PERBAIKAN: tombol Hubungi Kami Sekarang menjadi hitam ----- */
    .cta-elegant .btn-outline-brown-3d,
    .cta-elegant .btn-outline-brown-3d i,
    .cta-elegant .btn-outline-brown-3d span {
        color: #000000 !important;
    }
    .cta-elegant .btn-outline-brown-3d {
        border-color: #000000 !important;
    }
    .cta-elegant .btn-outline-brown-3d:hover {
        background: #000000 !important;
        color: #ffffff !important;
        border-color: #000000 !important;
    }
    .cta-elegant .btn-outline-brown-3d:hover i,
    .cta-elegant .btn-outline-brown-3d:hover span {
        color: #ffffff !important;
    }

    .subtitle-wrapper .h4 {
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .specialist-text-wrapper {
        max-width: 800px;
        margin: 0 auto;
        padding: 0.5rem 1rem;
        background: rgba(0,0,0,0.2);
        border-radius: 50px;
        backdrop-filter: blur(4px);
    }

    .specialist-text {
        display: block;
        font-size: 1rem;
        line-height: 1.6;
        word-wrap: break-word;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }

    @media (max-width: 768px) {
        .specialist-text { font-size: 0.9rem; }
    }
    @media (max-width: 576px) {
        .specialist-text { font-size: 0.8rem; }
    }

    .company-badge .badge {
        backdrop-filter: blur(10px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        border: 1px solid rgba(255,255,255,0.3);
    }

    .stats-wrapper {
        padding: 2.5rem 2rem;
        margin-top: 2rem !important;
    }

    .glass-panel {
        background: linear-gradient(135deg, rgba(255,255,255,0.28), rgba(255,255,255,0.15));
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        border-radius: 1.5rem;
        border: 1px solid rgba(255,255,255,0.35);
    }

    .stat-number {
        font-weight: 700;
        line-height: 1;
        margin-bottom: 0.5rem !important;
        text-shadow: 0 4px 18px rgba(0,0,0,0.6);
    }

    .stat-label {
        font-size: 0.9rem;
        letter-spacing: 0.03em;
        text-transform: uppercase;
    }

    .scroll-indicator {
        margin-top: 1.5rem;
    }

    .scroll-down {
        color: var(--dark);
        font-size: 1.4rem;
        animation: bounce 2s infinite;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.92);
        box-shadow: var(--shadow-sm);
        border: 1px solid rgba(0,0,0,0.05);
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-8px); }
        60% { transform: translateY(-4px); }
    }

    /* About Section */
    .floating-badge {
        position: absolute;
        top: 1.5rem;
        right: 1.5rem;
        background: rgba(36, 27, 100, 0.06);
        padding: 0.45rem 0.95rem;
        border-radius: 999px;
        font-size: 0.8rem;
        color: var(--brown-dark);
        font-weight: 600;
        letter-spacing: 0.03em;
        text-transform: uppercase;
    }

    .info-pill {
        background: linear-gradient(145deg, #ffffff, #eef2ff);
        border-radius: 999px;
        padding: 0.6rem 1.1rem;
        display: flex;
        flex-direction: column;
        box-shadow: 0 10px 25px rgba(0,0,0,0.06);
        border: 1px solid rgba(36,27,100,0.14);
    }

    .info-pill .label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--brown-medium);
        margin-bottom: 0.1rem;
    }

    .info-pill .value {
        font-size: 0.88rem;
        font-weight: 600;
        color: var(--brown-dark);
    }

    .mini-card {
        background: #ffffff;
        border-radius: 0.9rem;
        padding: 0.7rem 1rem;
        box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        border: 1px solid rgba(36,27,100,0.12);
    }

    .mini-card .label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--brown-medium);
        display: block;
    }

    .mini-card .value {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--brown-dark);
    }

    .premium-list li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 0.55rem;
        font-size: 0.92rem;
    }

    /* Legal Cards & Service Group Cards */
    .legal-card, .service-group-card {
        background: #ffffff;
        border-radius: 1.25rem;
        padding: 1.5rem 1.6rem;
        border: 1px solid rgba(36,27,100,0.12);
    }

    .shadow-3d {
        box-shadow: 0 18px 40px rgba(0,0,0,0.18), 0 2px 4px rgba(255,255,255,0.4) inset;
        border-radius: 1.25rem !important;
    }

    .shadow-soft {
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
    }

    .btn {
        font-weight: 600;
        letter-spacing: 0.02em;
        transition: all 0.3s ease;
        border-radius: 999px;
    }

    .btn-brown {
        background-color: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
    }

    .btn-brown:hover {
        background-color: #171247;
        color: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-cream {
        background-color: white;
        border-color: white;
        color: var(--brown-dark);
    }

    .btn-cream:hover {
        background-color: #f8f9fa;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-outline-cream {
        border-color: rgba(255,255,255,0.8);
        color: white;
        background: transparent;
    }

    .btn-outline-cream:hover {
        background-color: white;
        color: var(--brown-dark);
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-outline-brown-dark {
        border-color: var(--brown-dark);
        color: var(--brown-dark);
        background: transparent;
    }

    .btn-outline-brown-dark:hover {
        background-color: var(--brown-dark);
        color: white;
        box-shadow: var(--shadow-md);
    }

    /* CTA Section */
    .cta-elegant {
        background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-elegant::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 20% 30%, rgba(36, 27, 100, 0.12) 0%, transparent 50%),
                    radial-gradient(circle at 80% 70%, rgba(239, 51, 45, 0.10) 0%, transparent 55%);
    }

    .cta-content-wrapper {
        position: relative;
        z-index: 2;
        padding: 3rem;
        background: rgba(255, 255, 255, 0.92);
        border-radius: 1.5rem;
        box-shadow: 0 14px 40px rgba(0, 0, 0, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(14px);
    }

    .cta-elegant h2 {
        background: linear-gradient(135deg, #241b64, #302574);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .cta-elegant .lead {
        color: #241b64;
    }

    /* Utility classes */
    .py-7 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
    }

    .mt-6 {
        margin-top: 4rem !important;
    }

    .mb-5 {
        margin-bottom: 3rem !important;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .display-1 { font-size: 3rem !important; }
        .stats-wrapper { padding: 1.8rem 1.4rem; }
        .cta-content-wrapper { padding: 2.2rem 1.8rem; }
    }

    @media (max-width: 768px) {
        .slider-nav { display: none; }
        .slide-content { bottom: 10%; right: 5%; left: 5%; text-align: center; }
        .cta-buttons .btn { width: 100%; max-width: 280px; margin: 0.5rem auto !important; }
        .cta-buttons { flex-direction: column; align-items: center; }
        .cta-content-wrapper { padding: 1.8rem 1.4rem; }
    }

    @media (max-width: 576px) {
        .badge.bg-brown-dark { font-size: 0.8rem; padding: 0.5rem 0.9rem; }
        .info-pill { padding: 0.5rem 0.9rem; }
        .legal-card, .service-group-card, .org-card { padding: 1.25rem 1.3rem; }
    }

    html {
        scroll-behavior: smooth;
    }
</style>
<!-- Animate.css for hero animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ===== SLIDER =====
        const sliderTrack = document.querySelector('.slider-track');
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.querySelector('.slider-nav.prev');
        const nextBtn = document.querySelector('.slider-nav.next');
        let currentSlide = 0;
        let slideInterval;

        function updateSlider() {
            if (!sliderTrack) return;
            sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
            slides.forEach((slide, index) => slide.classList.toggle('active', index === currentSlide));
            dots.forEach((dot, index) => dot.classList.toggle('active', index === currentSlide));
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            updateSlider();
        }

        function startAutoSlide() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 6000);
        }

        function stopAutoSlide() {
            clearInterval(slideInterval);
        }

        if (prevBtn && nextBtn && sliderTrack) {
            prevBtn.addEventListener('click', () => { prevSlide(); stopAutoSlide(); startAutoSlide(); });
            nextBtn.addEventListener('click', () => { nextSlide(); stopAutoSlide(); startAutoSlide(); });
        }

        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                currentSlide = parseInt(this.dataset.slide);
                updateSlider();
                stopAutoSlide();
                startAutoSlide();
            });
        });

        const slider = document.querySelector('.hero-slider');
        if (slider) {
            slider.addEventListener('mouseenter', stopAutoSlide);
            slider.addEventListener('mouseleave', startAutoSlide);
        }

        if (slides.length > 0) {
            updateSlider();
            startAutoSlide();
        }

        // ===== STATS COUNTER =====
        const statsSection = document.querySelector('.stats-wrapper');
        if (statsSection) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const stats = entry.target.querySelectorAll('.stat-number');
                        stats.forEach(stat => {
                            const target = parseInt(stat.getAttribute('data-target') || stat.textContent.replace('+', ''));
                            let current = 0;
                            const increment = Math.max(1, Math.floor(target / 50));
                            const timer = setInterval(() => {
                                current += increment;
                                if (current >= target) {
                                    current = target;
                                    clearInterval(timer);
                                }
                                stat.textContent = current + '+';
                            }, 30);
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            observer.observe(statsSection);
        }

        // ===== TYPEWRITER EFFECT UNTUK JUDUL HERO (BERGERAK) =====
        const typewriterElement = document.getElementById('heroTypewriter');
        if (typewriterElement) {
            const originalText = "{{ $home->hero_title ?? 'PT Mitra Nusa Konsulindo' }}";
            let charIndex = 0;
            let isDeleting = false;

            function typeWriter() {
                const currentText = originalText.substring(0, charIndex);
                typewriterElement.textContent = currentText;

                if (!isDeleting && charIndex < originalText.length) {
                    charIndex++;
                    setTimeout(typeWriter, 120); // kecepatan mengetik
                } else if (isDeleting && charIndex > 0) {
                    charIndex--;
                    setTimeout(typeWriter, 60); // kecepatan menghapus
                }

                if (!isDeleting && charIndex === originalText.length) {
                    isDeleting = true;
                    setTimeout(typeWriter, 2500); // jeda sebelum menghapus
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    setTimeout(typeWriter, 800); // jeda sebelum mengetik ulang
                }
            }

            setTimeout(typeWriter, 500);
        }

        // ===== SCROLL ANIMATION FOR CARDS =====
        const animateItems = document.querySelectorAll('.service-card-3d, .team-card-3d, .legal-card, .service-group-card');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, { threshold: 0.1 });
        animateItems.forEach(el => observer.observe(el));
    });
</script>
@endpush
