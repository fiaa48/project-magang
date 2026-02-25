@extends('layouts.app')

@section('title', 'Profil Perusahaan - PT Mitra Nusa Konsulindo')
@section('description', 'Profil lengkap PT Mitra Nusa Konsulindo - Perusahaan konsultan konstruksi dan non-konstruksi profesional sejak tahun 2020.')

@section('content')
    <!-- Animated Page Header -->
    <section class="page-header animated-header py-6">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold text-brown-dark mb-4">Tentang Perusahaan Kami</h1>
                    <p class="lead text-brown-medium mb-4" style="max-width: 700px; margin: 0 auto;">
                        Mengenal lebih dekat PT Mitra Nusa Konsulindo, perusahaan konsultan profesional
                        dengan berbagai pengalaman di bidang konstruksi dan non-konstruksi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Profile -->
    <section class="py-6">
        <div class="container">
            <div class="row mb-6 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="floating-card">
                        <div class="profile-card p-4 p-lg-5">
                            <h2 class="fw-bold text-brown-dark mb-4">PT Mitra Nusa Konsulindo</h2>
                            <p class="lead text-brown-medium mb-4">
                                Perusahaan konsultan mandiri yang berdiri sejak tahun 2020, bergerak di bidang
                                Jasa Konsultansi Konstruksi dan Non-Konstruksi.
                            </p>
                            <p class="text-brown-light mb-5">
                                Kami didukung oleh tenaga ahli yang berpengalaman, berdedikasi, dan profesional.
                                Kami bekerja sama dengan klien dalam merencanakan, mengembangkan, menerapkan,
                                mengawasi, dan mengevaluasi program perencanaan yang inovatif.
                            </p>

                            <div class="d-flex flex-wrap gap-3">
                                <a href="{{ asset('documents/company-profile/Company-Profile-Mitra-Nusa-Konsulindo.pdf') }}"
                                class="btn btn-brown px-4 py-3 rounded-pill" target="_blank">
                                    <i class="fas fa-download me-2"></i>Download Profil
                                </a>
                                <a href="{{ route('contact') }}" class="btn btn-outline-brown px-4 py-3 rounded-pill">
                                    <i class="fas fa-phone me-2"></i>Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="company-data-card">
                        <div class="card-body p-4 p-lg-5">
                            <div class="section-header mb-4">
                                <h3 class="fw-bold text-brown-dark">Data Pokok Perusahaan</h3>
                                <div class="accent-line"></div>
                            </div>

                            <div class="data-list">
                                <div class="data-item animate-on-scroll">
                                    <div class="data-icon">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <div class="data-content">
                                        <h6 class="data-label">Nama Perusahaan</h6>
                                        <p class="data-value">PT. MITRA NUSA KONSULINDO</p>
                                    </div>
                                </div>

                                <div class="data-item animate-on-scroll">
                                    <div class="data-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="data-content">
                                        <h6 class="data-label">Bentuk Perusahaan</h6>
                                        <p class="data-value">Perseroan Terbatas (PT)</p>
                                    </div>
                                </div>

                                <div class="data-item animate-on-scroll">
                                    <div class="data-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="data-content">
                                        <h6 class="data-label">Alamat</h6>
                                        <p class="data-value">Gedung Graha Mulia Sejahtera, Jl. Terusan Jakarta No. 175A, Antapani-Bandung 40291</p>
                                    </div>
                                </div>

                                <div class="data-item animate-on-scroll">
                                    <div class="data-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="data-content">
                                        <h6 class="data-label">Tahun Berdiri</h6>
                                        <p class="data-value"><span class="highlight-year">2020</span></p>
                                    </div>
                                </div>

                                <div class="data-item animate-on-scroll">
                                    <div class="data-icon">
                                        <i class="fas fa-file-invoice"></i>
                                    </div>
                                    <div class="data-content">
                                        <h6 class="data-label">NPWP</h6>
                                        <p class="data-value">96.431.796.0-429.000</p>
                                    </div>
                                </div>

                                <div class="data-item animate-on-scroll">
                                    <div class="data-icon">
                                        <i class="fas fa-id-card"></i>
                                    </div>
                                    <div class="data-content">
                                        <h6 class="data-label">NIB</h6>
                                        <p class="data-value">0257011100093</p>
                                    </div>
                                </div>

                                <div class="data-item animate-on-scroll">
                                    <div class="data-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div class="data-content">
                                        <h6 class="data-label">Asosiasi</h6>
                                        <p class="data-value">Ikatan Nasional Konsultan Indonesia (INKINDO)</p>
                                    </div>
                                </div>

                                <div class="data-item animate-on-scroll">
                                    <div class="data-icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="data-content">
                                        <h6 class="data-label">Status PKP</h6>
                                        <p class="data-value">
                                            <span class="status-badge active">
                                                Aktif sejak 16 Desember 2020
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision & Mission Preview -->
            <div class="row mb-6">
                <div class="col-lg-6 mb-4">
                    <div class="vision-card hover-lift">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <div class="vision-icon-wrapper">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <h3 class="fw-bold text-brown-dark mt-4">Visi Perusahaan</h3>
                            </div>
                            <div class="vision-content">
                                <p class="text-center text-brown-medium fs-5">
                                    Menjadi perusahaan konsultan terdepan yang memberikan solusi inovatif dan berkelanjutan
                                    dalam bidang konstruksi dan non-konstruksi, dengan mengutamakan profesionalisme,
                                    kualitas, dan kepuasan klien.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="mission-card hover-lift">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <div class="mission-icon-wrapper">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <h3 class="fw-bold text-brown-dark mt-4">Misi Perusahaan</h3>
                            </div>
                            <div class="mission-content">
                                <ul class="mission-list">
                                    <li class="animate-on-scroll">
                                        <div class="mission-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="mission-text">
                                            Memberikan layanan konsultansi yang berkualitas tinggi
                                        </div>
                                    </li>
                                    <li class="animate-on-scroll">
                                        <div class="mission-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="mission-text">
                                            Mengembangkan solusi inovatif dan berkelanjutan
                                        </div>
                                    </li>
                                    <li class="animate-on-scroll">
                                        <div class="mission-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="mission-text">
                                            Membangun kemitraan jangka panjang dengan klien
                                        </div>
                                    </li>
                                    <li class="animate-on-scroll">
                                        <div class="mission-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="mission-text">
                                            Meningkatkan kompetensi SDM secara berkelanjutan
                                        </div>
                                    </li>
                                    <li class="animate-on-scroll">
                                        <div class="mission-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="mission-text">
                                            Berkontribusi positif bagi masyarakat dan lingkungan
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="row mb-6">
                <div class="col-12">
                    <div class="quick-links-section">
                        <div class="section-header text-center mb-5">
                            <h2 class="fw-bold text-brown-dark">Informasi Lainnya</h2>
                            <p class="text-brown-medium">Jelajahi informasi lengkap tentang perusahaan kami</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-3 col-6">
                                <a href="{{ route('about.history') }}" class="quick-link-card">
                                    <div class="quick-link-icon">
                                        <i class="fas fa-history"></i>
                                    </div>
                                    <h5 class="quick-link-title">Sejarah Perusahaan</h5>
                                    <p class="quick-link-desc">Perjalanan kami sejak berdiri</p>
                                </a>
                            </div>

                            <div class="col-md-3 col-6">
                                <a href="{{ route('about.vision-mission') }}" class="quick-link-card">
                                    <div class="quick-link-icon">
                                        <i class="fas fa-crosshairs"></i>
                                    </div>
                                    <h5 class="quick-link-title">Visi & Misi</h5>
                                    <p class="quick-link-desc">Tujuan dan komitmen kami</p>
                                </a>
                            </div>

                            <div class="col-md-3 col-6">
                                <a href="{{ route('about.organization') }}" class="quick-link-card">
                                    <div class="quick-link-icon">
                                        <i class="fas fa-sitemap"></i>
                                    </div>
                                    <h5 class="quick-link-title">Struktur Organisasi</h5>
                                    <p class="quick-link-desc">Organisasi perusahaan kami</p>
                                </a>
                            </div>

                            <div class="col-md-3 col-6">
                                <a href="{{ route('management') }}" class="quick-link-card">
                                    <div class="quick-link-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <h5 class="quick-link-title">Tim Manajemen</h5>
                                    <p class="quick-link-desc">Para pemimpin perusahaan</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-6 bg-cream-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="fw-bold text-brown-dark">Mengapa Memilih Kami?</h2>
                        <p class="text-brown-medium">Keunggulan yang membuat kami berbeda</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="advantage-card animate-on-scroll">
                        <div class="advantage-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5 class="advantage-title">Profesional & Berpengalaman</h5>
                        <p class="advantage-desc">Tim ahli yang berpengalaman di bidangnya dengan sertifikasi kompetensi yang lengkap.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="advantage-card animate-on-scroll">
                        <div class="advantage-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5 class="advantage-title">Lisensi & Sertifikasi Lengkap</h5>
                        <p class="advantage-desc">Memiliki berbagai sertifikasi seperti SBU, ISO, dan keanggotaan INKINDO.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="advantage-card animate-on-scroll">
                        <div class="advantage-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h5 class="advantage-title">Kemitraan Jangka Panjang</h5>
                        <p class="advantage-desc">Membangun hubungan kerjasama yang berkelanjutan dengan berbagai klien.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Color Variables - Skema Coklat ke Cream */
    :root {
        --brown-dark: #3E2723;
        --brown-medium: #5D4037;
        --brown-light: #795548;
        --cream-dark: #D7CCC8;
        --cream-medium: #EFEBE9;
        --cream-light: #F5F5F0;
        --cream-accent: #E8E2D5;
        --white: #ffffff;
    }

    /* Page Header */
    .animated-header {
        background: linear-gradient(135deg, #F5F5F0 0%, #EFEBE9 100%);
        position: relative;
        overflow: hidden;
        border-bottom: 2px solid var(--cream-dark);
    }

    .animated-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 10% 20%, rgba(212, 175, 55, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 90% 80%, rgba(139, 107, 97, 0.05) 0%, transparent 50%);
        animation: float 20s ease-in-out infinite;
    }

    /* Profile Cards */
    .floating-card {
        animation: floatUp 1s ease-out;
    }

    .profile-card {
        background: var(--white);
        border-radius: 1rem;
        box-shadow: 0 5px 20px rgba(62, 39, 35, 0.08);
        border: 1px solid var(--cream-dark);
    }

    .company-data-card {
        background: var(--white);
        border-radius: 1rem;
        box-shadow: 0 5px 20px rgba(62, 39, 35, 0.08);
        border: 1px solid var(--cream-dark);
        animation: slideInRight 1s ease-out;
    }

    .section-header {
        position: relative;
        margin-bottom: 2rem;
    }

    .accent-line {
        width: 50px;
        height: 2px;
        background: linear-gradient(90deg, var(--brown-light), var(--cream-dark));
        margin-top: 0.5rem;
        border-radius: 2px;
    }

    /* Data List */
    .data-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .data-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem;
        border-radius: 0.5rem;
        background: var(--cream-light);
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateX(-20px);
        border: 1px solid var(--cream-dark);
    }

    .data-item.visible {
        opacity: 1;
        transform: translateX(0);
    }

    .data-item:hover {
        background: var(--cream-medium);
        transform: translateX(5px);
        border-color: var(--brown-light);
    }

    .data-icon {
        width: 36px;
        height: 36px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1rem;
        flex-shrink: 0;
    }

    .data-content {
        flex: 1;
    }

    .data-label {
        color: var(--brown-dark);
        font-weight: 600;
        font-size: 0.85rem;
        margin-bottom: 0.25rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .data-value {
        color: var(--brown-medium);
        margin-bottom: 0;
        font-size: 0.9rem;
        line-height: 1.4;
    }

    .highlight-year {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--brown-dark);
        background: var(--cream-accent);
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        border: 1px solid var(--brown-light);
    }

    .status-badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .status-badge.active {
        background: linear-gradient(135deg, #4CAF50, #2E7D32);
        color: white;
    }

    /* Vision & Mission Cards */
    .vision-card, .mission-card {
        background: var(--white);
        border-radius: 1rem;
        box-shadow: 0 5px 20px rgba(62, 39, 35, 0.08);
        border: 1px solid var(--cream-dark);
        height: 100%;
        transition: all 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(62, 39, 35, 0.12);
        border-color: var(--brown-light);
    }

    .vision-icon-wrapper, .mission-icon-wrapper {
        width: 70px;
        height: 70px;
        margin: 0 auto;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.8rem;
    }

    .mission-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mission-list li {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 0.75rem;
        padding: 0.75rem;
        border-radius: 0.5rem;
        background: var(--cream-light);
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateX(-20px);
        border: 1px solid var(--cream-dark);
    }

    .mission-list li.visible {
        opacity: 1;
        transform: translateX(0);
    }

    .mission-list li:hover {
        background: var(--cream-medium);
        transform: translateX(5px);
        border-color: var(--brown-light);
    }

    .mission-icon {
        width: 28px;
        height: 28px;
        background: var(--brown-medium);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        flex-shrink: 0;
        font-size: 0.8rem;
    }

    .mission-text {
        flex: 1;
        color: var(--brown-medium);
        line-height: 1.4;
        font-size: 0.95rem;
    }

    /* Quick Links */
    .quick-links-section {
        padding: 2.5rem;
        background: linear-gradient(135deg, #F5F5F0 0%, #EFEBE9 100%);
        border-radius: 1rem;
        position: relative;
        overflow: hidden;
        border: 1px solid var(--cream-dark);
    }

    .quick-links-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--brown-medium), var(--cream-dark));
    }

    .quick-link-card {
        display: block;
        text-decoration: none;
        background: var(--white);
        padding: 1.5rem;
        border-radius: 0.75rem;
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid var(--cream-dark);
        height: 100%;
    }

    .quick-link-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(62, 39, 35, 0.1);
        border-color: var(--brown-light);
    }

    .quick-link-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.3rem;
        margin: 0 auto 1.25rem;
        transition: all 0.3s ease;
    }

    .quick-link-card:hover .quick-link-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .quick-link-title {
        color: var(--brown-dark);
        margin-bottom: 0.5rem;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .quick-link-desc {
        color: var(--brown-medium);
        font-size: 0.85rem;
        margin-bottom: 0;
    }

    /* Why Choose Us */
    .advantage-card {
        background: var(--white);
        padding: 2rem;
        border-radius: 0.75rem;
        text-align: center;
        border: 1px solid var(--cream-dark);
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateY(20px);
        height: 100%;
    }

    .advantage-card.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .advantage-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(62, 39, 35, 0.1);
        border-color: var(--brown-light);
    }

    .advantage-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.5rem;
        margin: 0 auto 1.25rem;
        transition: all 0.3s ease;
    }

    .advantage-card:hover .advantage-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .advantage-title {
        color: var(--brown-dark);
        margin-bottom: 0.75rem;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .advantage-desc {
        color: var(--brown-medium);
        line-height: 1.5;
        margin-bottom: 0;
        font-size: 0.9rem;
    }

    /* Button Styles */
    .btn-brown {
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border: none;
        color: var(--cream-light);
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-brown:hover {
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
        color: var(--white);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(62, 39, 35, 0.2);
    }

    .btn-outline-brown {
        border: 2px solid var(--brown-medium);
        color: var(--brown-medium);
        background: transparent;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-outline-brown:hover {
        background: var(--brown-medium);
        color: var(--cream-light);
        border-color: var(--brown-medium);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(62, 39, 35, 0.1);
    }

    /* Animations */
    @keyframes floatUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes float {
        0%, 100% { transform: translate(0, 0); }
        33% { transform: translate(-8px, -8px); }
        66% { transform: translate(8px, 8px); }
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .py-6 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .display-4 {
            font-size: 2.2rem !important;
        }

        .quick-link-card {
            padding: 1.25rem;
        }

        .vision-card, .mission-card {
            padding: 2rem !important;
        }
    }

    @media (max-width: 768px) {
        .py-6 {
            padding-top: 2.5rem !important;
            padding-bottom: 2.5rem !important;
        }

        .display-4 {
            font-size: 1.8rem !important;
        }

        .lead {
            font-size: 1rem !important;
        }

        .col-6 {
            margin-bottom: 1rem;
        }

        .quick-link-card {
            padding: 1rem;
        }

        .advantage-card {
            padding: 1.5rem;
        }

        .quick-links-section {
            padding: 1.5rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all animate-on-scroll elements
        document.querySelectorAll('.animate-on-scroll').forEach(element => {
            observer.observe(element);
        });

        // Hover animations for cards
        const cards = document.querySelectorAll('.quick-link-card, .advantage-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                const icon = card.querySelector('.quick-link-icon, .advantage-icon');
                if (icon) {
                    icon.style.transform = 'scale(1.1) rotate(5deg)';
                }
            });

            card.addEventListener('mouseleave', () => {
                const icon = card.querySelector('.quick-link-icon, .advantage-icon');
                if (icon) {
                    icon.style.transform = 'scale(1) rotate(0)';
                }
            });
        });
    });
</script>
@endpush
