@extends('user.layouts.app')

@section('title', 'Tentang Kami | PT Mitra Nusa Konsulindo')
@section('description', 'Profil lengkap PT Mitra Nusa Konsulindo - Perusahaan konsultan konstruksi dan non-konstruksi profesional sejak tahun 2020.')

@section('content')
    <!-- HERO SECTION -->
    <section class="about-hero position-relative overflow-hidden">
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
                            <i class="fas fa-building me-2"></i>TENTANG KAMI
                        </span>
                    </div>
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Profil <span class="text-gradient-brown">Perusahaan</span>
                    </h1>
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">Mengenal Lebih Dekat</h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                {{ $companyProfile->name ?? 'PT Mitra Nusa Konsulindo' }}
                            </span>
                        </div>
                    </div>
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.3s;">
                        Perusahaan konsultan mandiri yang berdiri sejak tahun {{ $companyProfile->established_year ?? '2020' }}, bergerak di bidang
                        Jasa Konsultansi Konstruksi dan Non-Konstruksi dengan dukungan tenaga ahli profesional.
                    </p>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav mt-5 animate-fade-in-up" style="animation-delay: 0.4s;">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-brown-medium">Beranda</a></li>
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">Profil Perusahaan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <a href="#company-profile" class="scroll-down"><i class="fas fa-chevron-down"></i></a>
        </div>
    </section>

    <!-- COMPANY PROFILE SECTION – DATA POKOK -->
    <section id="company-profile" class="py-6 bg-white position-relative">
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>
        <div class="container position-relative z-2">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="floating-card-3d animate-on-scroll">
                        <div class="profile-card-3d">
                            <div class="profile-card-content">
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-4 py-2 mb-4">
                                    <i class="fas fa-medal me-2"></i>BERDIRI SEJAK {{ $companyProfile->established_year ?? '2020' }}
                                </span>
                                <h2 class="display-5 fw-bold text-brown-dark mb-4">{{ $companyProfile->name ?? 'PT Mitra Nusa Konsulindo' }}</h2>
                                <p class="lead text-brown-medium mb-4">
                                    Perusahaan konsultan mandiri yang berdiri sejak tahun {{ $companyProfile->established_year ?? '2020' }}, bergerak di bidang
                                    Jasa Konsultansi Konstruksi dan Non-Konstruksi.
                                </p>
                                <p class="text-brown-medium mb-5">
                                    Kami didukung oleh tenaga ahli yang berpengalaman, berdedikasi, dan profesional.
                                    Kami bekerja sama dengan klien dalam merencanakan, mengembangkan, menerapkan,
                                    mengawasi, dan mengevaluasi program perencanaan yang inovatif.
                                </p>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="company-data-grid">
                        <div class="section-header mb-4">
                            <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                                <i class="fas fa-database me-2"></i>DATA POKOK PERUSAHAAN
                            </span>
                            <h3 class="display-6 fw-bold text-brown-dark">Identitas Perusahaan</h3>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon"><i class="fas fa-landmark"></i></div>
                                        <div class="data-content">
                                            <span class="data-label">Nama Perusahaan</span>
                                            <span class="data-value">{{ $companyProfile->name ?? 'PT. MITRA NUSA KONSULINDO' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon"><i class="fas fa-briefcase"></i></div>
                                        <div class="data-content">
                                            <span class="data-label">Bentuk Perusahaan</span>
                                            <span class="data-value">{{ $companyProfile->type ?? 'Perseroan Terbatas (PT)' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="data-content">
                                            <span class="data-label">Alamat Utama</span>
                                            <span class="data-value">{{ $companyProfile->address_main ?? 'Gedung Graha Mulia Sejahtera, Jl. Terusan Jakarta No. 175A, Antapani-Bandung 40291' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(!empty($companyProfile->address_branch))
                            <div class="col-12">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="data-content">
                                            <span class="data-label">Alamat Cabang</span>
                                            <span class="data-value">{{ $companyProfile->address_branch }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon"><i class="fas fa-calendar-alt"></i></div>
                                        <div class="data-content">
                                            <span class="data-label">Tahun Berdiri</span>
                                            <span class="data-value highlight-year">{{ $companyProfile->established_year ?? '2020' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon"><i class="fas fa-file-invoice"></i></div>
                                        <div class="data-content">
                                            <span class="data-label">NPWP</span>
                                            <span class="data-value">{{ $companyProfile->npwp ?? '96.431.796.0-429.000' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon"><i class="fas fa-id-card"></i></div>
                                        <div class="data-content">
                                            <span class="data-label">NIB</span>
                                            <span class="data-value">{{ $companyProfile->nib ?? '0257011100093' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon"><i class="fas fa-handshake"></i></div>
                                        <div class="data-content">
                                            <span class="data-label">Asosiasi</span>
                                            <span class="data-value">{{ $companyProfile->association ?? 'Anggota INKINDO & KADIN' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- STATUS PKP (tetap dengan class active seperti semula) -->
                            <div class="col-12">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon"><i class="fas fa-check-circle"></i></div>
                                        <div class="data-content">
                                            <span class="data-label">Status PKP</span>
                                            <span class="data-value status-badge-3d active">
                                                @if($companyProfile->is_pkp_active)
                                                    @if($companyProfile->pkp_activation_date)
                                                        Aktif sejak {{ \Carbon\Carbon::parse($companyProfile->pkp_activation_date)->translatedFormat('d F Y') }}
                                                    @else
                                                        Aktif (tanggal tidak tersedia)
                                                    @endif
                                                @else
                                                    Tidak terdaftar sebagai PKP
                                                @endif
                                            </span>
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

    <!-- WHY CHOOSE US -->
    <section class="py-6 bg-white position-relative overflow-hidden">
        <div class="container">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3"><i class="fas fa-star me-2"></i>KEUNGGULAN</span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Mengapa Memilih Kami?</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">Keunggulan yang membuat kami berbeda dan dipercaya klien.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4"><div class="advantage-card-3d animate-on-scroll"><div class="advantage-inner"><div class="advantage-icon-wrapper"><div class="icon-glow"></div><i class="fas fa-award"></i></div><h5 class="advantage-title">Profesional & Berpengalaman</h5><p class="advantage-desc">Tim ahli yang berpengalaman di bidangnya dengan sertifikasi kompetensi lengkap.</p></div></div></div>
                <div class="col-md-4"><div class="advantage-card-3d animate-on-scroll"><div class="advantage-inner"><div class="advantage-icon-wrapper"><div class="icon-glow"></div><i class="fas fa-certificate"></i></div><h5 class="advantage-title">Lisensi & Sertifikasi Lengkap</h5><p class="advantage-desc">Memiliki SBU, ISO, dan keanggotaan INKINDO serta sertifikasi resmi lainnya.</p></div></div></div>
                <div class="col-md-4"><div class="advantage-card-3d animate-on-scroll"><div class="advantage-inner"><div class="advantage-icon-wrapper"><div class="icon-glow"></div><i class="fas fa-handshake"></i></div><h5 class="advantage-title">Kemitraan Jangka Panjang</h5><p class="advantage-desc">Membangun hubungan kerjasama berkelanjutan dengan berbagai klien dan mitra.</p></div></div></div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-6 cta-elegant" style="margin-bottom: 0;">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Siap Bekerja Sama dengan Kami?</h2>
                        <p class="lead mb-0">Percayakan proyek konsultansi Anda kepada tenaga ahli yang berpengalaman dan tersertifikasi.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="{{ route('contact') }}" class="btn btn-outline-brown-3d px-5 py-3 rounded-pill"><i class="fas fa-paper-plane me-2"></i>Hubungi Kami<span class="btn-shine"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* ========== GLOBAL STYLES ========== */
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

    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: var(--cream-light); color: var(--brown-dark); overflow-x: hidden; }

    /* Hero Section */
    .about-hero {
        background: linear-gradient(135deg, var(--cream-light) 0%, var(--white) 100%);
        padding: 6rem 0 4rem;
        position: relative;
        overflow: hidden;
    }
    .hero-bg-pattern { position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; }
    .pattern-circle { position: absolute; border-radius: 50%; background: rgba(93, 64, 55, 0.05); animation: float 20s ease-in-out infinite; }
    .pattern-circle.circle-1 { width: 300px; height: 300px; top: -150px; right: -100px; animation-delay: 0s; }
    .pattern-circle.circle-2 { width: 200px; height: 200px; bottom: -80px; left: -80px; background: rgba(212, 175, 55, 0.05); animation-delay: 10s; }
    .pattern-square { position: absolute; background: rgba(161, 136, 127, 0.03); animation: rotate 30s linear infinite; }
    .pattern-square.square-1 { width: 150px; height: 150px; top: 30%; right: 15%; transform: rotate(45deg); }
    .pattern-square.square-2 { width: 100px; height: 100px; bottom: 20%; left: 10%; transform: rotate(15deg); background: rgba(212, 175, 55, 0.03); animation-delay: -15s; }
    @keyframes float { 0%,100%{ transform: translateY(0) rotate(0deg); } 50%{ transform: translateY(-20px) rotate(180deg); } }
    @keyframes rotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

    .min-vh-60 { min-height: 60vh; }
    .display-2 { font-weight: 800 !important; letter-spacing: -0.02em; line-height: 1.15; }
    .text-gradient-brown { background: linear-gradient(135deg, var(--cream-gold), var(--brown-light)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .badge.bg-brown-dark { background-color: rgba(93, 64, 55, 0.9) !important; border: 1px solid rgba(255,255,255,0.2); backdrop-filter: blur(10px); color: white; }
    .badge.bg-brown-light-subtle { background-color: rgba(161,136,127,0.1) !important; color: var(--brown-dark); }

    /* Typewriter */
    .typewriter-wrapper { display: inline-block; position: relative; }
    .typewriter-text { position: relative; display: inline-block; color: var(--brown-dark) !important; }
    .typewriter-text::after { content: ''; position: absolute; right: -8px; top: 50%; transform: translateY(-50%); width: 3px; height: 1.2em; background-color: var(--brown-dark); animation: blink 1s infinite; }
    @keyframes blink { 0%,100%{ opacity: 1; } 50%{ opacity: 0; } }

    /* Scroll Indicator */
    .scroll-indicator { position: absolute; bottom: 2rem; left: 0; right: 0; text-align: center; }
    .scroll-down { color: var(--brown-dark); font-size: 1.5rem; animation: bounce 2s infinite; display: inline-block; width: 50px; height: 50px; line-height: 50px; border-radius: 50%; background: rgba(255, 255, 255, 0.9); box-shadow: var(--shadow-sm); transition: all 0.3s; }
    .scroll-down:hover { background: white; transform: scale(1.1); }
    @keyframes bounce { 0%,20%,50%,80%,100%{ transform: translateY(0); } 40%{ transform: translateY(-10px); } 60%{ transform: translateY(-5px); } }

    /* Breadcrumb */
    .breadcrumb-nav .breadcrumb { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px); border-radius: 50px; padding: 0.75rem 1.5rem; border: 1px solid rgba(93,64,55,0.1); display: inline-flex; }
    .breadcrumb-item a { text-decoration: none; transition: color 0.3s; }
    .breadcrumb-item a:hover { color: var(--brown-dark) !important; }

    /* Cards 3D */
    .profile-card-3d, .data-card-inner, .vision-card-inner, .mission-card-inner, .advantage-inner, .timeline-card-inner, .org-card, .division-inner, .staff-inner {
        background: var(--white);
        border-radius: 1.5rem;
        padding: 2rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: var(--shadow-3d);
        position: relative;
        overflow: hidden;
    }
    .profile-card-3d:hover, .data-card-inner:hover, .vision-card-inner:hover, .mission-card-inner:hover, .advantage-inner:hover, .timeline-card-inner:hover, .org-card:hover, .division-inner:hover, .staff-inner:hover {
        transform: translateY(-5px) rotateX(2deg);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
    }
    .card-corner { position: absolute; width: 100px; height: 100px; background: linear-gradient(135deg, transparent 50%, rgba(212,175,55,0.1) 50%); z-index: 1; }
    .card-corner.corner-1 { top: 0; right: 0; transform: rotate(90deg); }
    .card-corner.corner-2 { bottom: 0; left: 0; transform: rotate(270deg); }

    .data-card-3d { height: 100%; }
    .data-card-inner { display: flex; align-items: center; gap: 1rem; padding: 1.2rem; }
    .data-icon { font-size: 2rem; color: var(--cream-gold); min-width: 50px; text-align: center; }
    .data-content { flex: 1; }
    .data-label { display: block; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; color: var(--brown-light); }
    .data-value { font-weight: 700; color: var(--brown-dark); font-size: 1rem; word-break: break-word; }
    .highlight-year { font-size: 1.3rem; font-weight: 800; color: var(--cream-gold); }
    .status-badge-3d.active { background: #e6f4ea; color: #2e7d32; padding: 0.2rem 0.8rem; border-radius: 30px; display: inline-block; font-weight: 500; }

    .advantage-inner { text-align: center; padding: 2rem; }
    .advantage-icon-wrapper { width: 70px; height: 70px; margin: 0 auto 1.5rem; position: relative; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: var(--brown-dark); background: var(--cream-light); border-radius: 50%; }
    .advantage-title { font-weight: 700; margin-bottom: 1rem; color: var(--brown-dark); }
    .advantage-desc { color: var(--brown-medium); font-size: 0.9rem; }

    /* Buttons */
    .btn-brown-3d { background: linear-gradient(145deg, var(--brown-dark), #4A342E); border: none; color: white; font-weight: 600; transition: all 0.3s; position: relative; overflow: hidden; box-shadow: 0 8px 16px rgba(93,64,55,0.2); transform-style: preserve-3d; }
    .btn-brown-3d:hover { transform: translateY(-3px) rotateX(2deg); box-shadow: 0 15px 30px rgba(93,64,55,0.3); background: linear-gradient(145deg, #4A342E, var(--brown-dark)); }
    .btn-outline-brown-3d { border: 2px solid var(--brown-dark); color: var(--brown-dark); background: transparent; font-weight: 600; transition: all 0.3s; }
    .btn-outline-brown-3d:hover { background: var(--brown-dark); color: white; transform: translateY(-3px); box-shadow: 0 10px 20px rgba(93,64,55,0.2); }
    .btn-brown-3d::before, .btn-outline-brown-3d::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transition: left 0.6s; }
    .btn-brown-3d:hover::before, .btn-outline-brown-3d:hover::before { left: 100%; }
    .btn-shine { position: absolute; top: 0; left: -100%; width: 50%; height: 100%; background: linear-gradient(120deg, transparent, rgba(255,255,255,0.3), transparent); transition: left 0.5s; }
    .btn-brown-3d:hover .btn-shine { left: 100%; }

    /* CTA Elegant */
    .cta-elegant { background: linear-gradient(135deg, #f8fafc 0%, #D7CCC8 100%); position: relative; overflow: hidden; }
    .cta-elegant::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: radial-gradient(circle at 20% 30%, rgba(92, 64, 51, 0.1) 0%, transparent 50%), radial-gradient(circle at 80% 70%, rgba(210, 180, 140, 0.1) 0%, transparent 50%); }
    .cta-content-wrapper { position: relative; z-index: 2; padding: 3rem; background: rgba(255, 255, 255, 0.9); border-radius: 1.5rem; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08); border: 1px solid rgba(255, 255, 255, 0.3); backdrop-filter: blur(10px); }
    .cta-elegant h2 { color: #241b64; background: linear-gradient(135deg, #241b64, #302574); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .cta-elegant .lead { color: #4b3dad; }
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

    /* Animations */
    @keyframes fadeInDown { from { opacity: 0; transform: translateY(-30px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    .animate-fade-in-down { animation: fadeInDown 0.8s ease-out forwards; }
    .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
    .animate-on-scroll { opacity: 0; animation: fadeInUp 0.8s ease-out forwards; }

    /* Utilities */
    .py-6 { padding-top: 5rem !important; padding-bottom: 5rem !important; }
    .mb-6 { margin-bottom: 5rem !important; }
    .mt-6 { margin-top: 5rem !important; }
    .bg-cream-light { background-color: var(--cream-light) !important; }
    .bg-white { background-color: var(--white) !important; }
    .text-brown-dark { color: var(--brown-dark) !important; }
    .text-brown-medium { color: var(--brown-medium) !important; }
    .text-brown-light { color: var(--brown-light) !important; }
    .text-cream-gold { color: var(--cream-gold) !important; }

    /* Responsive */
    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .about-hero { padding: 5rem 0 3rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }
    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
    }
    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .badge { font-size: 0.8rem !important; }
        .data-card-inner { flex-direction: column; text-align: center; }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ========== TYPEWRITER EFFECT DENGAN KECEPATAN NORMAL/LAMBAT ==========
        const textElement = document.querySelector('.typewriter-text');
        if (textElement) {
            const originalText = textElement.textContent.trim();
            let charIndex = 0, isDeleting = false;
            function typeWriter() {
                const currentText = originalText.substring(0, charIndex);
                textElement.textContent = currentText;
                if (!isDeleting && charIndex < originalText.length) {
                    charIndex++;
                    setTimeout(typeWriter, 150); // kecepatan mengetik (ms)
                } else if (isDeleting && charIndex > 0) {
                    charIndex--;
                    setTimeout(typeWriter, 80); // kecepatan menghapus
                }
                if (!isDeleting && charIndex === originalText.length) {
                    isDeleting = true;
                    setTimeout(typeWriter, 2000); // jeda sebelum menghapus
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    setTimeout(typeWriter, 800); // jeda sebelum mengetik ulang
                }
            }
            setTimeout(typeWriter, 500);
        }

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
            });
        });

        // Scroll animation observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
        }, { threshold: 0.2, rootMargin: '0px 0px -50px 0px' });
        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

        // 3D tilt effect
        const tiltCards = document.querySelectorAll('.profile-card-3d, .data-card-inner, .advantage-inner, .timeline-card-inner');
        tiltCards.forEach(card => {
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
                card.style.transform = 'rotateY(0deg) rotateX(0deg) translateY(0)';
            });
        });
    });
</script>
@endpush
