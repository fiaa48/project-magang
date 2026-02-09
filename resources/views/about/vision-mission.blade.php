@extends('layouts.app')

@section('title', 'Visi & Misi - PT Mitra Nusa Konsulindo')
@section('description', 'Visi dan misi PT Mitra Nusa Konsulindo - Panduan dan komitmen kami dalam memberikan layanan konsultansi terbaik.')

@section('content')
    <!-- Animated Page Header -->
    <section class="page-header py-6">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="header-content">
                        <div class="vision-mission-header mb-4">
                            <i class="fas fa-bullseye header-icon"></i>
                            <h1 class="display-5 fw-bold text-brown-dark mb-3">Visi & Misi Perusahaan</h1>
                        </div>
                        <p class="lead text-brown-medium mb-4" style="max-width: 700px; margin: 0 auto;">
                            Panduan dan komitmen kami dalam memberikan layanan konsultansi terbaik
                            untuk mewujudkan solusi inovatif dan berkelanjutan.
                        </p>
                        <div class="header-ornament">
                            <div class="ornament-line"></div>
                            <div class="ornament-dot"></div>
                            <div class="ornament-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb Navigation -->
    <section class="breadcrumb-section py-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('about') }}">Tentang Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Visi & Misi</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-6">
        <div class="container">
            <!-- Vision Section -->
            <div class="row mb-7 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="vision-hero animate-on-scroll">
                        <div class="vision-badge mb-4">
                            <span>VISI KAMI</span>
                        </div>
                        <div class="vision-icon-large mb-4">
                            <div class="icon-circle">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="icon-rings">
                                <div class="ring ring-1"></div>
                                <div class="ring ring-2"></div>
                            </div>
                        </div>
                        <div class="vision-quote">
                            <div class="quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <h2 class="vision-statement fw-bold text-brown-dark">
                                Menjadi perusahaan konsultan terdepan yang memberikan solusi inovatif
                                dan berkelanjutan dalam bidang konstruksi dan non-konstruksi
                            </h2>
                            <div class="quote-author">
                                <div class="author-line"></div>
                                <span class="author-text">Visi Perusahaan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="vision-details animate-on-scroll">
                        <div class="vision-explanation p-4 p-lg-5">
                            <h3 class="section-subtitle mb-4">Mewujudkan Masa Depan yang Lebih Baik</h3>
                            <p class="text-brown-medium mb-4">
                                Visi kami mencerminkan aspirasi jangka panjang untuk menjadi pemimpin
                                dalam industri konsultansi, dengan fokus pada inovasi dan keberlanjutan.
                            </p>
                            
                            <div class="vision-components">
                                <div class="vision-component mb-4">
                                    <div class="component-card">
                                        <div class="component-header d-flex align-items-center mb-3">
                                            <div class="component-icon me-3">
                                                <div class="icon-wrapper">
                                                    <i class="fas fa-crown"></i>
                                                </div>
                                            </div>
                                            <div class="component-text">
                                                <h5 class="mb-0 fw-bold text-brown-dark">Terdepan</h5>
                                                <p class="text-brown-light mb-0 small">Menjadi yang terbaik di industri</p>
                                            </div>
                                        </div>
                                        <div class="component-body ps-5">
                                            <p class="text-brown-medium mb-0">
                                                Komitmen untuk selalu menjadi yang terdepan dalam kualitas,
                                                inovasi, dan kepuasan klien di setiap layanan yang kami berikan.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="vision-component mb-4">
                                    <div class="component-card">
                                        <div class="component-header d-flex align-items-center mb-3">
                                            <div class="component-icon me-3">
                                                <div class="icon-wrapper">
                                                    <i class="fas fa-lightbulb"></i>
                                                </div>
                                            </div>
                                            <div class="component-text">
                                                <h5 class="mb-0 fw-bold text-brown-dark">Inovatif</h5>
                                                <p class="text-brown-light mb-0 small">Solusi kreatif dan modern</p>
                                            </div>
                                        </div>
                                        <div class="component-body ps-5">
                                            <p class="text-brown-medium mb-0">
                                                Mengembangkan solusi kreatif yang menjawab tantangan masa kini
                                                dan masa depan dengan pendekatan yang segar dan modern.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="vision-component">
                                    <div class="component-card">
                                        <div class="component-header d-flex align-items-center mb-3">
                                            <div class="component-icon me-3">
                                                <div class="icon-wrapper">
                                                    <i class="fas fa-leaf"></i>
                                                </div>
                                            </div>
                                            <div class="component-text">
                                                <h5 class="mb-0 fw-bold text-brown-dark">Berkelanjutan</h5>
                                                <p class="text-brown-light mb-0 small">Ramah lingkungan dan berkelanjutan</p>
                                            </div>
                                        </div>
                                        <div class="component-body ps-5">
                                            <p class="text-brown-medium mb-0">
                                                Memberikan solusi yang ramah lingkungan dan berkelanjutan,
                                                mendukung pembangunan yang bertanggung jawab untuk generasi mendatang.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission Section - SEMUA DALAM SATU BARIS -->
            <div class="row mb-7">
                <div class="col-12 mb-5">
                    <div class="section-header text-center">
                        <div class="section-badge">
                            <span>KOMITMEN KAMI</span>
                        </div>
                        <h2 class="section-title fw-bold text-brown-dark mb-3">Misi Perusahaan</h2>
                        <p class="section-subtitle text-brown-medium">Langkah konkret untuk mewujudkan visi yang lebih baik</p>
                        <div class="section-ornament">
                            <div class="ornament-line"></div>
                            <div class="ornament-diamond"></div>
                            <div class="ornament-line"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="missions-scroll-container">
                        <div class="missions-scroll-row">
                            <!-- Mission 1 -->
                            <div class="mission-scroll-item">
                                <div class="mission-card animate-on-scroll" data-delay="0">
                                    <div class="mission-header">
                                        <div class="mission-number">01</div>
                                        <div class="mission-icon">
                                            <i class="fas fa-medal"></i>
                                        </div>
                                    </div>
                                    <div class="mission-body">
                                        <h4 class="mission-title">Kualitas Layanan</h4>
                                        <p class="mission-description">
                                            Membentuk layanan konsultasi yang berkualitas tinggi dengan standar
                                            profesionalisme tertinggi di setiap proyek yang kami lansir.
                                        </p>
                                        <div class="mission-features">
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Penerapan standar internasional</span>
                                            </div>
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Pengawasan kualitas berkelanjutan</span>
                                            </div>
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Evaluasi hasil secara berkala</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mission-footer">
                                        <span class="mission-tag">Quality First</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Mission 2 -->
                            <div class="mission-scroll-item">
                                <div class="mission-card animate-on-scroll" data-delay="100">
                                    <div class="mission-header">
                                        <div class="mission-number">02</div>
                                        <div class="mission-icon">
                                            <i class="fas fa-rocket"></i>
                                        </div>
                                    </div>
                                    <div class="mission-body">
                                        <h4 class="mission-title">Inovasi Berkelanjutan</h4>
                                        <p class="mission-description">
                                            Mengembangkan solusi inovatif dan berkelanjutan yang relevan dengan
                                            perkembangan teknologi dan kebutuhan zaman.
                                        </p>
                                        <div class="mission-features">
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Riset dan pengembangan teknologi</span>
                                            </div>
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Adaptasi teknologi terbaru</span>
                                            </div>
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Solusi aman lingkungan</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mission-footer">
                                        <span class="mission-tag">Innovation Driven</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Mission 3 -->
                            <div class="mission-scroll-item">
                                <div class="mission-card animate-on-scroll" data-delay="200">
                                    <div class="mission-header">
                                        <div class="mission-number">03</div>
                                        <div class="mission-icon">
                                            <i class="fas fa-handshake"></i>
                                        </div>
                                    </div>
                                    <div class="mission-body">
                                        <h4 class="mission-title">Kemitraan Jangka Panjang</h4>
                                        <p class="mission-description">
                                            Membangun kemitraan jangka panjang yang saling menguntungkan dengan
                                            klien berdasarkan kepercayaan dan komitmen bersama.
                                        </p>
                                        <div class="mission-features">
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Komunikasi transparan</span>
                                            </div>
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Pemahaman kebutuhan klien</span>
                                            </div>
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Dukungan pasca proyek</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mission-footer">
                                        <span class="mission-tag">Partnership Focused</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Mission 4 -->
                            <div class="mission-scroll-item">
                                <div class="mission-card animate-on-scroll" data-delay="300">
                                    <div class="mission-header">
                                        <div class="mission-number">04</div>
                                        <div class="mission-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <div class="mission-body">
                                        <h4 class="mission-title">Pengembangan SDM</h4>
                                        <p class="mission-description">
                                            Meningkatkan kompetensi dan profesionalisme sumber daya manusia
                                            secara berkaitan dengan pelatihan dan pengembangan.
                                        </p>
                                        <div class="mission-features">
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Program pelatihan berkualitas</span>
                                            </div>
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Pengembangan sistem kontributor</span>
                                            </div>
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Sertifikasi kompetensi</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mission-footer">
                                        <span class="mission-tag">People Development</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Mission 5 -->
                            <div class="mission-scroll-item">
                                <div class="mission-card animate-on-scroll" data-delay="400">
                                    <div class="mission-header">
                                        <div class="mission-number">05</div>
                                        <div class="mission-icon">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="mission-body">
                                        <h4 class="mission-title">Kontribusi Sosial</h4>
                                        <p class="mission-description">
                                            Berkontribusi positif bagi pembangunan masyarakat dan pelestarian
                                            lingkungan melalui program-program berkelanjutan.
                                        </p>
                                        <div class="mission-features">
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Program CSR terintegrasi</span>
                                            </div>
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Pembangunan berkelanjutan</span>
                                            </div>
                                            <div class="feature-item">
                                                <i class="fas fa-check-circle feature-icon"></i>
                                                <span>Pelestarian lingkungan</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mission-footer">
                                        <span class="mission-tag">Social Responsibility</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Core Values - SEMUA DALAM SATU BARIS -->
            <div class="row mb-7">
                <div class="col-12 mb-5">
                    <div class="section-header text-center">
                        <div class="section-badge">
                            <span>NILAI KAMI</span>
                        </div>
                        <h2 class="section-title fw-bold text-brown-dark mb-3">Nilai-Nilai Inti</h2>
                        <p class="section-subtitle text-brown-medium">Prinsip dasar yang membimbing setiap tindakan dan keputusan kami</p>
                        <div class="section-ornament">
                            <div class="ornament-line"></div>
                            <div class="ornament-hexagon"></div>
                            <div class="ornament-line"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="values-container">
                        <div class="values-scroll-row">
                            <!-- Value 1 -->
                            <div class="value-item">
                                <div class="core-value-card text-center animate-on-scroll" data-delay="0">
                                    <div class="value-badge">I</div>
                                    <div class="value-icon">
                                        <div class="icon-bg"></div>
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <div class="value-content">
                                        <h5 class="value-title">Integritas</h5>
                                        <p class="value-description">
                                            Bertindak jujur, transparan, dan konsisten dalam setiap aspek pekerjaan
                                            dan hubungan dengan stakeholders.
                                        </p>
                                    </div>
                                    <div class="value-ornament">
                                        <div class="ornament-dot"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Value 2 -->
                            <div class="value-item">
                                <div class="core-value-card text-center animate-on-scroll" data-delay="100">
                                    <div class="value-badge">P</div>
                                    <div class="value-icon">
                                        <div class="icon-bg"></div>
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                    <div class="value-content">
                                        <h5 class="value-title">Profesionalisme</h5>
                                        <p class="value-description">
                                            Menjunjung tinggi etika profesi dan kompetensi dalam setiap layanan
                                            yang kami berikan kepada klien.
                                        </p>
                                    </div>
                                    <div class="value-ornament">
                                        <div class="ornament-dot"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Value 3 -->
                            <div class="value-item">
                                <div class="core-value-card text-center animate-on-scroll" data-delay="200">
                                    <div class="value-badge">I</div>
                                    <div class="value-icon">
                                        <div class="icon-bg"></div>
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="value-content">
                                        <h5 class="value-title">Inovasi</h5>
                                        <p class="value-description">
                                            Terus mencari cara baru dan lebih baik dalam menyelesaikan masalah
                                            dan meningkatkan efisiensi kerja.
                                        </p>
                                    </div>
                                    <div class="value-ornament">
                                        <div class="ornament-dot"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Value 4 -->
                            <div class="value-item">
                                <div class="core-value-card text-center animate-on-scroll" data-delay="300">
                                    <div class="value-badge">K</div>
                                    <div class="value-icon">
                                        <div class="icon-bg"></div>
                                        <i class="fas fa-people-arrows"></i>
                                    </div>
                                    <div class="value-content">
                                        <h5 class="value-title">Kolaborasi</h5>
                                        <p class="value-description">
                                            Bekerja sama dengan semangat tim untuk mencapai hasil terbaik
                                            melalui sinergi dan dukungan bersama.
                                        </p>
                                    </div>
                                    <div class="value-ornament">
                                        <div class="ornament-dot"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="row mt-8">
                <div class="col-12">
                    <div class="cta-banner animate-on-scroll">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h3 class="cta-title text-cream-light mb-3">Siap Bekerja Sama dengan Kami?</h3>
                                <p class="cta-description text-cream-medium mb-0">
                                    Jadilah bagian dari perjalanan kami dalam mewujudkan visi dan misi
                                    untuk memberikan solusi terbaik bagi Anda.
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <a href="{{ route('contact') }}" class="btn btn-cream btn-lg rounded-pill px-5">
                                    <i class="fas fa-handshake me-2"></i>Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="row mt-6">
                <div class="col-12 text-center">
                    <a href="{{ route('about') }}" class="btn btn-outline-brown px-5 py-3 rounded-pill">
                        <i class="fas fa-arrow-left me-2"></i>Kembali ke Profil Perusahaan
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Color Variables */
    :root {
        --brown-50: #EFEBE9;
        --brown-100: #D7CCC8;
        --brown-200: #BCAAA4;
        --brown-300: #A1887F;
        --brown-400: #8D6E63;
        --brown-500: #795548;
        --brown-600: #6D4C41;
        --brown-700: #5D4037;
        --brown-800: #4E342E;
        --brown-900: #3E2723;
        
        --cream-50: #FFFDF7;
        --cream-100: #F9F5EB;
        --cream-200: #F5F0E6;
        --cream-300: #EEE6D9;
        --cream-400: #E8DCCE;
        --cream-500: #E3D6C6;
        --cream-600: #DDCFBD;
        --cream-700: #D7C8B4;
        --cream-800: #D2C1AB;
        --cream-900: #CCBAA2;
        
        --accent-gold: #D4AF37;
        --accent-gold-light: #F0E68C;
        
        --brown-light: var(--brown-300);
        --brown-medium: var(--brown-500);
        --brown-dark: var(--brown-700);
        --cream-light: var(--cream-100);
        --cream-medium: var(--cream-300);
        --cream-dark: var(--cream-500);
    }

    /* Page Header */
    .page-header {
        background: linear-gradient(135deg, 
            rgba(62, 39, 35, 0.95) 0%, 
            rgba(93, 64, 55, 0.9) 50%, 
            rgba(121, 85, 72, 0.85) 100%), 
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><rect width="100" height="100" fill="none"/><path d="M0,50 Q25,40 50,50 T100,50" stroke="rgba(255,255,255,0.1)" stroke-width="2" fill="none"/></svg>');
        color: var(--cream-light);
        padding: 6rem 0 4rem;
        position: relative;
        overflow: hidden;
    }

    .page-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 70% 30%, rgba(212, 175, 55, 0.15) 0%, transparent 70%);
        pointer-events: none;
    }

    .header-content {
        position: relative;
        z-index: 2;
    }

    .vision-mission-header {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1.5rem;
    }

    .header-icon {
        font-size: 2.5rem;
        color: var(--accent-gold-light);
        animation: float 3s ease-in-out infinite;
    }

    .header-ornament {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        margin-top: 2rem;
    }

    .ornament-line {
        width: 60px;
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--accent-gold), transparent);
    }

    .ornament-dot {
        width: 8px;
        height: 8px;
        background: var(--accent-gold);
        border-radius: 50%;
    }

    /* Breadcrumb */
    .breadcrumb-section {
        background: var(--cream-light);
        border-bottom: 1px solid var(--cream-dark);
    }

    .breadcrumb {
        background: transparent;
        padding: 0;
        margin: 0;
    }

    .breadcrumb-item a {
        color: var(--brown-medium);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: var(--brown-dark);
    }

    .breadcrumb-item.active {
        color: var(--brown-dark);
        font-weight: 600;
    }

    /* Vision Section */
    .vision-hero {
        padding: 2rem;
        background: linear-gradient(135deg, 
            rgba(249, 245, 235, 0.95) 0%, 
            rgba(242, 237, 226, 0.9) 100%);
        border-radius: 20px;
        border: 1px solid var(--cream-dark);
        box-shadow: 0 10px 30px rgba(62, 39, 35, 0.08);
        position: relative;
        overflow: hidden;
    }

    .vision-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
        border-radius: 50%;
    }

    .vision-badge {
        display: inline-block;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        color: var(--cream-light);
        padding: 0.5rem 1.5rem;
        border-radius: 25px;
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 1rem;
    }

    .vision-icon-large {
        position: relative;
        width: 120px;
        height: 120px;
        margin: 0 auto 2rem;
    }

    .icon-circle {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 3rem;
        position: relative;
        z-index: 2;
        box-shadow: 0 10px 20px rgba(62, 39, 35, 0.2);
    }

    .icon-rings {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 140px;
        height: 140px;
    }

    .ring {
        position: absolute;
        border: 2px solid var(--brown-light);
        border-radius: 50%;
        animation: pulse 2s ease-in-out infinite;
    }

    .ring-1 {
        width: 100%;
        height: 100%;
        animation-delay: 0s;
    }

    .ring-2 {
        width: 120%;
        height: 120%;
        top: -10%;
        left: -10%;
        animation-delay: 0.5s;
    }

    .vision-quote {
        position: relative;
        padding: 1.5rem;
        background: var(--cream-light);
        border-radius: 15px;
        border: 1px solid var(--cream-dark);
    }

    .quote-icon {
        position: absolute;
        top: -15px;
        left: 30px;
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--brown-light), var(--accent-gold));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.2rem;
    }

    .vision-statement {
        font-size: 1.4rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
        color: var(--brown-dark);
    }

    .quote-author {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .author-line {
        flex: 1;
        height: 1px;
        background: linear-gradient(90deg, var(--brown-light), transparent);
    }

    .author-text {
        color: var(--brown-medium);
        font-style: italic;
        font-size: 0.9rem;
    }

    .vision-details {
        height: 100%;
    }

    .vision-explanation {
        background: var(--white);
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(62, 39, 35, 0.1);
        border: 1px solid var(--cream-dark);
        height: 100%;
        position: relative;
        padding: 2rem;
    }

    .vision-explanation::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--brown-light), var(--accent-gold), var(--brown-light));
        border-radius: 2px 2px 0 0;
    }

    .section-subtitle {
        color: var(--brown-dark);
        font-weight: 600;
        font-size: 1.25rem;
        position: relative;
        padding-bottom: 0.5rem;
    }

    .section-subtitle::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(90deg, var(--brown-light), transparent);
    }

    .vision-components {
        margin-top: 2rem;
    }

    .component-card {
        padding: 1.25rem;
        background: var(--cream-light);
        border-radius: 12px;
        border: 1px solid var(--cream-dark);
        transition: all 0.3s ease;
    }

    .component-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(62, 39, 35, 0.1);
        border-color: var(--brown-light);
    }

    .icon-wrapper {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--brown-light), var(--brown-medium));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .component-text h5 {
        color: var(--brown-dark);
    }

    .component-text p {
        color: var(--brown-light);
        font-size: 0.85rem;
    }

    /* Mission Section - SEMUA DALAM SATU BARIS */
    .missions-scroll-container {
        width: 100%;
        overflow-x: auto;
        padding-bottom: 15px;
        scrollbar-width: thin;
    }

    .missions-scroll-container::-webkit-scrollbar {
        height: 6px;
    }

    .missions-scroll-container::-webkit-scrollbar-thumb {
        background: var(--brown-light);
        border-radius: 3px;
    }

    .missions-scroll-container::-webkit-scrollbar-track {
        background: var(--cream-light);
    }

    .missions-scroll-row {
        display: flex;
        gap: 1rem;
        flex-wrap: nowrap;
        padding: 10px 5px;
        min-width: min-content;
    }

    .mission-scroll-item {
        flex: 0 0 auto;
        width: 320px;
    }

    .mission-card {
        background: linear-gradient(135deg, var(--cream-light) 0%, #FDFCF6 100%);
        border-radius: 15px;
        padding: 1.5rem;
        height: 100%;
        border: 1px solid var(--cream-dark);
        box-shadow: 0 8px 20px rgba(62, 39, 35, 0.08);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateY(20px);
    }

    .mission-card.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .mission-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--brown-light), var(--accent-gold));
    }

    .mission-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(62, 39, 35, 0.15);
        border-color: var(--brown-light);
    }

    .mission-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 1rem;
    }

    .mission-number {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--brown-light);
        opacity: 0.7;
        line-height: 1;
    }

    .mission-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--brown-light), var(--brown-medium));
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.3rem;
        box-shadow: 0 5px 15px rgba(62, 39, 35, 0.2);
        transition: all 0.3s ease;
    }

    .mission-card:hover .mission-icon {
        transform: scale(1.1) rotate(5deg);
        background: linear-gradient(135deg, var(--accent-gold), var(--brown-medium));
    }

    .mission-body {
        margin-bottom: 1rem;
    }

    .mission-title {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 0.75rem;
        font-size: 1.1rem;
        line-height: 1.3;
    }

    .mission-description {
        color: var(--brown-medium);
        line-height: 1.6;
        margin-bottom: 1rem;
        font-size: 0.95rem;
    }

    .mission-features {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .feature-icon {
        color: var(--accent-gold);
        font-size: 0.85rem;
        flex-shrink: 0;
    }

    .feature-item span {
        color: var(--brown-medium);
        font-size: 0.85rem;
        line-height: 1.4;
    }

    .mission-footer {
        padding-top: 0.75rem;
        border-top: 1px solid var(--cream-dark);
    }

    .mission-tag {
        display: inline-block;
        background: rgba(212, 175, 55, 0.1);
        color: var(--accent-gold);
        padding: 0.2rem 0.75rem;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 600;
        border: 1px solid rgba(212, 175, 55, 0.3);
    }

    /* Core Values - SEMUA DALAM SATU BARIS */
    .values-container {
        width: 100%;
        overflow-x: auto;
        padding-bottom: 15px;
        scrollbar-width: thin;
    }

    .values-container::-webkit-scrollbar {
        height: 6px;
    }

    .values-container::-webkit-scrollbar-thumb {
        background: var(--brown-light);
        border-radius: 3px;
    }

    .values-container::-webkit-scrollbar-track {
        background: var(--cream-light);
    }

    .values-scroll-row {
        display: flex;
        gap: 1rem;
        flex-wrap: nowrap;
        padding: 10px 5px;
        min-width: min-content;
    }

    .value-item {
        flex: 0 0 auto;
        width: 260px;
    }

    .core-value-card {
        background: linear-gradient(135deg, var(--cream-light) 0%, #FDFCF6 100%);
        border-radius: 15px;
        padding: 1.5rem;
        height: 100%;
        border: 1px solid var(--cream-dark);
        box-shadow: 0 8px 20px rgba(62, 39, 35, 0.08);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateY(20px);
    }

    .core-value-card.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .core-value-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(62, 39, 35, 0.15);
        border-color: var(--brown-light);
    }

    .core-value-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--accent-gold), var(--brown-light));
    }

    .value-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        width: 35px;
        height: 35px;
        background: linear-gradient(135deg, var(--accent-gold), var(--brown-medium));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-weight: 700;
        font-size: 1rem;
        box-shadow: 0 4px 10px rgba(212, 175, 55, 0.3);
    }

    .value-icon {
        width: 70px;
        height: 70px;
        margin: 0 auto 1rem;
        position: relative;
    }

    .icon-bg {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--brown-light), var(--brown-medium));
        border-radius: 50%;
        opacity: 0.9;
    }

    .value-icon i {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: var(--cream-light);
        font-size: 1.8rem;
        z-index: 2;
    }

    .core-value-card:hover .icon-bg {
        background: linear-gradient(135deg, var(--accent-gold), var(--brown-medium));
        opacity: 1;
    }

    .value-content {
        padding: 0 0.25rem;
    }

    .value-title {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 0.75rem;
        font-size: 1.1rem;
    }

    .value-description {
        color: var(--brown-medium);
        line-height: 1.5;
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }

    .value-ornament {
        display: flex;
        justify-content: center;
        margin-top: 0.5rem;
    }

    .value-ornament .ornament-dot {
        width: 6px;
        height: 6px;
        background: var(--accent-gold);
    }

    /* CTA Banner */
    .cta-banner {
        background: linear-gradient(135deg, 
            rgba(93, 64, 55, 0.95) 0%, 
            rgba(121, 85, 72, 0.9) 100%);
        border-radius: 15px;
        padding: 2rem;
        position: relative;
        overflow: hidden;
        margin-top: 3rem;
    }

    .cta-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="2"/></svg>');
        background-size: 200px;
        opacity: 0.5;
    }

    .cta-title {
        font-size: 1.5rem;
        font-weight: 600;
        position: relative;
        z-index: 2;
    }

    .cta-description {
        font-size: 1rem;
        position: relative;
        z-index: 2;
    }

    .btn-cream {
        background: linear-gradient(135deg, var(--cream-light), var(--cream-medium));
        color: var(--brown-dark);
        border: 2px solid var(--cream-dark);
        font-weight: 600;
        padding: 0.6rem 1.5rem;
        transition: all 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .btn-cream:hover {
        background: linear-gradient(135deg, var(--cream-light), var(--accent-gold-light));
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(62, 39, 35, 0.2);
        border-color: var(--accent-gold);
    }

    /* Back Button */
    .btn-outline-brown {
        background: transparent;
        border: 2px solid var(--brown-medium);
        color: var(--brown-medium);
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-outline-brown:hover {
        background: var(--brown-medium);
        color: var(--cream-light);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(62, 39, 35, 0.15);
    }

    /* Animations */
    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        100% {
            transform: scale(1.2);
            opacity: 0;
        }
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .mission-scroll-item {
            width: 300px;
        }
        
        .value-item {
            width: 240px;
        }
    }

    @media (max-width: 992px) {
        .section-title {
            font-size: 1.8rem;
        }

        .mission-card, .core-value-card {
            padding: 1.25rem;
        }

        .vision-hero {
            padding: 1.5rem;
        }

        .vision-statement {
            font-size: 1.2rem;
        }
        
        .mission-scroll-item {
            width: 280px;
        }
        
        .value-item {
            width: 220px;
        }
    }

    @media (max-width: 768px) {
        .page-header {
            padding: 4rem 0 2.5rem;
        }

        .vision-mission-header {
            gap: 1rem;
        }

        .header-icon {
            font-size: 2rem;
        }

        .vision-hero {
            padding: 1.25rem;
        }

        .vision-icon-large {
            width: 100px;
            height: 100px;
        }

        .icon-circle {
            font-size: 2.5rem;
        }

        .vision-quote {
            padding: 1.25rem;
        }

        .vision-statement {
            font-size: 1.1rem;
        }
        
        .mission-scroll-item {
            width: 260px;
        }
        
        .value-item {
            width: 200px;
        }

        .cta-banner {
            padding: 1.5rem;
        }

        .cta-title {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 576px) {
        .section-title {
            font-size: 1.6rem;
        }

        .mission-card, .core-value-card {
            padding: 1rem;
        }

        .vision-explanation {
            padding: 1.5rem;
        }

        .component-card {
            padding: 1rem;
        }

        .component-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .icon-wrapper {
            margin-bottom: 0.75rem;
        }

        .component-body {
            padding-left: 0;
            padding-top: 0.75rem;
        }
        
        .mission-scroll-item {
            width: 220px;
        }
        
        .value-item {
            width: 180px;
        }
        
        .cta-banner .row {
            text-align: center;
        }
        
        .cta-banner .col-lg-4 {
            margin-top: 1rem;
        }
        
        .btn-cream {
            width: 100%;
            max-width: 250px;
            margin: 0 auto;
        }
    }

    @media (max-width: 480px) {
        .mission-scroll-item {
            width: 200px;
        }
        
        .value-item {
            width: 160px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animation on scroll with delay
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const delay = element.getAttribute('data-delay') || 0;
                    
                    setTimeout(() => {
                        element.classList.add('visible');
                    }, parseInt(delay));
                }
            });
        }, observerOptions);

        // Observe all elements with animation class
        document.querySelectorAll('.animate-on-scroll').forEach(element => {
            observer.observe(element);
        });

        // Hover effects for cards
        const cards = document.querySelectorAll('.mission-card, .core-value-card, .component-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.mission-icon, .value-icon, .icon-wrapper');
                if (icon) {
                    icon.style.transform = 'scale(1.1)';
                    icon.style.transition = 'transform 0.3s ease';
                }
            });

            card.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.mission-icon, .value-icon, .icon-wrapper');
                if (icon) {
                    icon.style.transform = 'scale(1)';
                }
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
</script>
@endpush