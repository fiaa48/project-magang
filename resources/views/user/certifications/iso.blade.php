@extends('user.layouts.app')

@section('title', 'Sertifikasi ISO - PT Mitra Nusa Konsulindo')
@section('description', 'Sertifikasi Sistem Manajemen ISO PT Mitra Nusa Konsulindo: ISO 9001, ISO 14001, ISO 45001, dan ISO 37001.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="iso-hero position-relative overflow-hidden">
        <!-- Background Pattern (same as home) -->
        <div class="hero-bg-pattern">
            <div class="pattern-circle circle-1"></div>
            <div class="pattern-circle circle-2"></div>
            <div class="pattern-square square-1"></div>
            <div class="pattern-square square-2"></div>
        </div>

        <div class="container position-relative z-3">
            <div class="row min-vh-60 align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <!-- Animated Badge – glassmorphism -->
                    <div class="company-badge mb-5 animate-fade-in-down">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 fs-6 fw-normal">
                            <i class="fas fa-certificate me-2"></i>SERTIFIKASI ISO
                        </span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Sistem Manajemen <span class="text-gradient-brown">Internasional</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Jaminan Mutu, Lingkungan, K3 & Anti-Suap
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                ISO 9001 · ISO 14001 · ISO 45001 · ISO 37001
                            </span>
                        </div>
                    </div>

                    <!-- Breadcrumb with glassmorphism -->
                    <nav aria-label="breadcrumb" class="breadcrumb-nav mt-5 animate-fade-in-up" style="animation-delay: 0.4s;">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class="text-brown-medium">Beranda</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('certifications.index') }}" class="text-brown-medium">Sertifikasi</a>
                            </li>
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">ISO</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <a href="#iso-standards" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- ISO STANDARDS GRID – 3D CARDS -->
    <section id="iso-standards" class="py-6 bg-white position-relative">
        <!-- Subtle background decoration -->
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-globe me-2"></i>STANDAR INTERNASIONAL
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Standar ISO yang Kami Miliki</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Sertifikasi sistem manajemen terintegrasi untuk keunggulan bisnis dan kepuasan pelanggan.
                </p>
            </div>

            <div class="row g-4">
                <!-- ISO 9001 -->
                <div class="col-md-6 col-lg-3">
                    <div class="iso-card-3d animate-on-scroll">
                        <div class="iso-card-inner">
                            <div class="card-header d-flex justify-content-between align-items-start mb-3">
                                <div class="card-icon-wrapper">
                                    <i class="fas fa-chart-line fa-2x text-brown-dark"></i>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">
                                    ISO 9001:2015
                                </span>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-3">Quality Management System</h3>
                            <p class="text-brown-medium mb-4">Sistem manajemen mutu untuk memastikan konsistensi dan peningkatan berkelanjutan.</p>
                            <div class="card-details bg-brown-light-subtle rounded-3 p-3 mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-brown-medium">No. Sertifikat:</span>
                                    <span class="fw-bold text-brown-dark">01.002.2022.1234</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-brown-medium">Berlaku s/d:</span>
                                    <span class="fw-bold text-brown-dark">2025</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="text-brown-medium">Diterbitkan oleh:</span>
                                    <span class="fw-bold text-brown-dark">TUV Rheinland</span>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="{{ asset('storage/certificates/iso-9001.pdf') }}" target="_blank" class="btn btn-outline-brown-3d rounded-pill px-4 py-2">
                                    <i class="fas fa-eye me-2"></i>Lihat
                                </a>
                                <span class="text-brown-medium">
                                    <i class="fas fa-circle text-success me-1" style="font-size: 0.6rem;"></i>Aktif
                                </span>
                            </div>
                            <!-- 3D decorative corners -->
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- ISO 14001 -->
                <div class="col-md-6 col-lg-3">
                    <div class="iso-card-3d animate-on-scroll">
                        <div class="iso-card-inner">
                            <div class="card-header d-flex justify-content-between align-items-start mb-3">
                                <div class="card-icon-wrapper">
                                    <i class="fas fa-leaf fa-2x text-brown-dark"></i>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">
                                    ISO 14001:2015
                                </span>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-3">Environmental Management</h3>
                            <p class="text-brown-medium mb-4">Sistem manajemen lingkungan untuk mendukung keberlanjutan dan tanggung jawab ekologis.</p>
                            <div class="card-details bg-brown-light-subtle rounded-3 p-3 mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-brown-medium">No. Sertifikat:</span>
                                    <span class="fw-bold text-brown-dark">02.003.2022.1235</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-brown-medium">Berlaku s/d:</span>
                                    <span class="fw-bold text-brown-dark">2025</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="text-brown-medium">Diterbitkan oleh:</span>
                                    <span class="fw-bold text-brown-dark">TUV Rheinland</span>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="{{ asset('storage/certificates/iso-14001.pdf') }}" target="_blank" class="btn btn-outline-brown-3d rounded-pill px-4 py-2">
                                    <i class="fas fa-eye me-2"></i>Lihat
                                </a>
                                <span class="text-brown-medium">
                                    <i class="fas fa-circle text-success me-1" style="font-size: 0.6rem;"></i>Aktif
                                </span>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- ISO 45001 -->
                <div class="col-md-6 col-lg-3">
                    <div class="iso-card-3d animate-on-scroll">
                        <div class="iso-card-inner">
                            <div class="card-header d-flex justify-content-between align-items-start mb-3">
                                <div class="card-icon-wrapper">
                                    <i class="fas fa-shield-alt fa-2x text-brown-dark"></i>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">
                                    ISO 45001:2018
                                </span>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-3">Occupational Health & Safety</h3>
                            <p class="text-brown-medium mb-4">Sistem manajemen K3 untuk memastikan tempat kerja yang aman dan sehat.</p>
                            <div class="card-details bg-brown-light-subtle rounded-3 p-3 mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-brown-medium">No. Sertifikat:</span>
                                    <span class="fw-bold text-brown-dark">03.004.2022.1236</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-brown-medium">Berlaku s/d:</span>
                                    <span class="fw-bold text-brown-dark">2025</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="text-brown-medium">Diterbitkan oleh:</span>
                                    <span class="fw-bold text-brown-dark">TUV Rheinland</span>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="{{ asset('storage/certificates/iso-45001.pdf') }}" target="_blank" class="btn btn-outline-brown-3d rounded-pill px-4 py-2">
                                    <i class="fas fa-eye me-2"></i>Lihat
                                </a>
                                <span class="text-brown-medium">
                                    <i class="fas fa-circle text-success me-1" style="font-size: 0.6rem;"></i>Aktif
                                </span>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- ISO 37001 -->
                <div class="col-md-6 col-lg-3">
                    <div class="iso-card-3d animate-on-scroll">
                        <div class="iso-card-inner">
                            <div class="card-header d-flex justify-content-between align-items-start mb-3">
                                <div class="card-icon-wrapper">
                                    <i class="fas fa-handshake fa-2x text-brown-dark"></i>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">
                                    ISO 37001:2016
                                </span>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-3">Anti-Bribery Management</h3>
                            <p class="text-brown-medium mb-4">Sistem manajemen anti-suap untuk transparansi dan integritas bisnis.</p>
                            <div class="card-details bg-brown-light-subtle rounded-3 p-3 mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-brown-medium">No. Sertifikat:</span>
                                    <span class="fw-bold text-brown-dark">04.005.2022.1237</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-brown-medium">Berlaku s/d:</span>
                                    <span class="fw-bold text-brown-dark">2025</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="text-brown-medium">Diterbitkan oleh:</span>
                                    <span class="fw-bold text-brown-dark">TUV Rheinland</span>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="{{ asset('storage/certificates/iso-37001.pdf') }}" target="_blank" class="btn btn-outline-brown-3d rounded-pill px-4 py-2">
                                    <i class="fas fa-eye me-2"></i>Lihat
                                </a>
                                <span class="text-brown-medium">
                                    <i class="fas fa-circle text-success me-1" style="font-size: 0.6rem;"></i>Aktif
                                </span>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFITS SECTION – 3D CARDS -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-star me-2"></i>KEUNGGULAN
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Manfaat Sertifikasi ISO</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Keunggulan kompetitif yang kami dapatkan dengan standar internasional.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="benefit-card-3d animate-on-scroll">
                        <div class="benefit-inner">
                            <div class="benefit-icon-wrapper mb-3">
                                <i class="fas fa-rocket fa-2x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Operasional Efisien</h5>
                            <p class="text-brown-medium">Proses terstandarisasi meningkatkan produktivitas dan mengurangi pemborosan.</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card-3d animate-on-scroll">
                        <div class="benefit-inner">
                            <div class="benefit-icon-wrapper mb-3">
                                <i class="fas fa-users fa-2x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Kepercayaan Klien</h5>
                            <p class="text-brown-medium">Standar internasional membangun kepercayaan dan kepuasan pelanggan.</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card-3d animate-on-scroll">
                        <div class="benefit-inner">
                            <div class="benefit-icon-wrapper mb-3">
                                <i class="fas fa-shield-alt fa-2x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Manajemen Risiko</h5>
                            <p class="text-brown-medium">Identifikasi dan pengendalian risiko secara proaktif dalam operasional.</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card-3d animate-on-scroll">
                        <div class="benefit-inner">
                            <div class="benefit-icon-wrapper mb-3">
                                <i class="fas fa-globe fa-2x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Akses Global</h5>
                            <p class="text-brown-medium">Memenuhi persyaratan untuk berkolaborasi dengan perusahaan internasional.</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card-3d animate-on-scroll">
                        <div class="benefit-inner">
                            <div class="benefit-icon-wrapper mb-3">
                                <i class="fas fa-chart-bar fa-2x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Peningkatan Berkelanjutan</h5>
                            <p class="text-brown-medium">Kultur perbaikan terus-menerus untuk mencapai keunggulan operasional.</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card-3d animate-on-scroll">
                        <div class="benefit-inner">
                            <div class="benefit-icon-wrapper mb-3">
                                <i class="fas fa-award fa-2x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Reputasi Perusahaan</h5>
                            <p class="text-brown-medium">Meningkatkan citra perusahaan sebagai organisasi yang profesional.</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DOCUMENTS SECTION – PREMIUM CARD -->
    <section class="py-6 bg-white position-relative">
        <div class="container">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-file-alt me-2"></i>DOKUMEN SERTIFIKASI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Dokumen Resmi</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Akses dan unduh dokumen sertifikasi ISO kami.
                </p>
            </div>

            <div class="row g-4">
                <!-- Document Card 1 -->
                <div class="col-md-4">
                    <div class="document-card-3d animate-on-scroll">
                        <div class="document-inner">
                            <div class="document-header d-flex align-items-center mb-3">
                                <div class="document-icon me-3">
                                    <i class="fas fa-file-certificate fa-2x text-brown-dark"></i>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">Primary</span>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-2">ISO 9001 Certificate</h5>
                            <p class="text-brown-medium small mb-3">Sertifikat Sistem Manajemen Mutu</p>
                            <div class="d-flex gap-3 mb-3">
                                <span class="text-brown-light small"><i class="fas fa-file-pdf me-1"></i>PDF, 2.4 MB</span>
                                <span class="text-brown-light small"><i class="fas fa-calendar-alt me-1"></i>2022-2025</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="{{ asset('storage/certificates/iso-9001.pdf') }}" target="_blank" class="btn-action preview" title="Preview">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ asset('storage/certificates/iso-9001.pdf') }}" download class="btn-action download" title="Download">
                                    <i class="fas fa-download"></i>
                                </a>
                                <button class="btn-action share" title="Share" onclick="shareDocument('ISO 9001 Certificate')">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- Document Card 2 -->
                <div class="col-md-4">
                    <div class="document-card-3d animate-on-scroll">
                        <div class="document-inner">
                            <div class="document-header d-flex align-items-center mb-3">
                                <div class="document-icon me-3">
                                    <i class="fas fa-file-contract fa-2x text-brown-dark"></i>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">Integrated</span>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-2">Integrated ISO Certificate</h5>
                            <p class="text-brown-medium small mb-3">Sertifikat Terintegrasi Sistem Manajemen</p>
                            <div class="d-flex gap-3 mb-3">
                                <span class="text-brown-light small"><i class="fas fa-file-pdf me-1"></i>PDF, 3.1 MB</span>
                                <span class="text-brown-light small"><i class="fas fa-calendar-alt me-1"></i>2022-2025</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="{{ asset('storage/certificates/integrated-iso.pdf') }}" target="_blank" class="btn-action preview" title="Preview">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ asset('storage/certificates/integrated-iso.pdf') }}" download class="btn-action download" title="Download">
                                    <i class="fas fa-download"></i>
                                </a>
                                <button class="btn-action share" title="Share" onclick="shareDocument('Integrated ISO Certificate')">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- Document Card 3 -->
                <div class="col-md-4">
                    <div class="document-card-3d animate-on-scroll">
                        <div class="document-inner">
                            <div class="document-header d-flex align-items-center mb-3">
                                <div class="document-icon me-3">
                                    <i class="fas fa-file-invoice fa-2x text-brown-dark"></i>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">Report</span>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-2">ISO Audit Report 2024</h5>
                            <p class="text-brown-medium small mb-3">Laporan Audit Tahunan 2024</p>
                            <div class="d-flex gap-3 mb-3">
                                <span class="text-brown-light small"><i class="fas fa-file-pdf me-1"></i>PDF, 4.2 MB</span>
                                <span class="text-brown-light small"><i class="fas fa-calendar-alt me-1"></i>Issued: Jan 2024</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="{{ asset('storage/certificates/iso-audit-2024.pdf') }}" target="_blank" class="btn-action preview" title="Preview">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ asset('storage/certificates/iso-audit-2024.pdf') }}" download class="btn-action download" title="Download">
                                    <i class="fas fa-download"></i>
                                </a>
                                <button class="btn-action share" title="Share" onclick="shareDocument('ISO Audit Report 2024')">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Download All Button -->
            <div class="text-center mt-6">
                <button class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill" id="downloadAll">
                    <i class="fas fa-download me-2"></i>Download All Documents
                    <span class="btn-shine"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- CERTIFICATION BODY SECTION -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="cert-body-card-3d animate-on-scroll">
                <div class="cert-body-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-5 text-center mb-4 mb-lg-0">
                            <div class="cert-logo-wrapper mb-3">
                                <i class="fas fa-landmark fa-4x text-brown-dark"></i>
                            </div>
                            <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2">Accredited</span>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="fw-bold text-brown-dark mb-3">TUV Rheinland Indonesia</h3>
                            <p class="text-brown-medium mb-4">
                                Lembaga sertifikasi internasional yang terakreditasi dengan standar global,
                                menyediakan layanan pengujian, inspeksi, dan sertifikasi.
                            </p>
                            <div class="row g-3 mb-4">
                                <div class="col-12">
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="fas fa-map-marker-alt text-brown-dark"></i>
                                        <span class="text-brown-medium">MidPlaza 2, Jl. Jend. Sudirman, Jakarta</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="fas fa-phone text-brown-dark"></i>
                                        <span class="text-brown-medium">(021) 570-1505</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="fas fa-globe text-brown-dark"></i>
                                        <span class="text-brown-medium">www.tuv.com/id-id</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="https://www.tuv.com/id-id" target="_blank" class="btn btn-brown-3d rounded-pill px-4 py-2">
                                    <i class="fas fa-external-link-alt me-2"></i>Visit Website
                                    <span class="btn-shine"></span>
                                </a>
                                <a href="mailto:info@tuv.com" class="btn btn-outline-brown-3d rounded-pill px-4 py-2">
                                    <i class="fas fa-envelope me-2"></i>Contact
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 3D decorative corners -->
                    <div class="card-corner corner-1"></div>
                    <div class="card-corner corner-2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION – SAME ELEGANT STYLE AS HOME -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Butuh Informasi Lebih Lanjut?</h2>
                        <p class="lead mb-0">
                            Hubungi kami untuk konsultasi gratis mengenai sertifikasi ISO dan bagaimana kami dapat membantu.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-comments me-2"></i>Konsultasi Gratis
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
    /* ===== INHERIT FULL STYLE FROM HOME PAGE ===== */
    :root {
        --brown-dark: #5D4037;
        --brown-medium: #8B6B61;
        --brown-light: #A1887F;
        --cream-gold: #D4AF37;
        --cream-dark: #D7CCC8;
        --cream-medium: #EFEBE9;
        --cream-light: #F5F0ED;
        --white: #ffffff;
        --shadow-sm: 0 .125rem .25rem rgba(0,0,0,.075);
        --shadow-md: 0 .5rem 1rem rgba(0,0,0,.15);
        --shadow-lg: 0 1rem 3rem rgba(0,0,0,.175);
        --shadow-3d: 0 20px 40px rgba(93,64,55,0.2), 0 10px 20px rgba(0,0,0,0.1);
    }

    /* ----- Hero Section (same as home) ----- */
    .iso-hero {
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

    .pattern-circle.circle-1 {
        width: 300px;
        height: 300px;
        top: -150px;
        right: -100px;
        animation-delay: 0s;
    }

    .pattern-circle.circle-2 {
        width: 200px;
        height: 200px;
        bottom: -80px;
        left: -80px;
        background: rgba(212, 175, 55, 0.05);
        animation-delay: 10s;
    }

    .pattern-square {
        position: absolute;
        background: rgba(161, 136, 127, 0.03);
        animation: rotate 30s linear infinite;
    }

    .pattern-square.square-1 {
        width: 150px;
        height: 150px;
        top: 30%;
        right: 15%;
        transform: rotate(45deg);
    }

    .pattern-square.square-2 {
        width: 100px;
        height: 100px;
        bottom: 20%;
        left: 10%;
        transform: rotate(15deg);
        background: rgba(212, 175, 55, 0.03);
        animation-delay: -15s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .min-vh-60 { min-height: 60vh; }

    /* ----- Typography & Badges (same as home) ----- */
    .display-2 {
        font-weight: 800 !important;
        letter-spacing: -0.02em;
        line-height: 1.15;
    }

    .text-gradient-brown {
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .company-badge {
        animation: fadeInDown 0.8s ease-out;
    }

    .badge.bg-brown-dark {
        background-color: rgba(93, 64, 55, 0.9) !important;
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
    }

    .badge.bg-brown-light-subtle {
        background-color: rgba(161,136,127,0.1) !important;
        color: var(--brown-dark);
    }

    /* ----- Typewriter Effect (same as home) ----- */
    .typewriter-wrapper {
        display: inline-block;
        position: relative;
    }

    .typewriter-text {
        position: relative;
        display: inline-block;
        color: var(--brown-dark) !important;
    }

    .typewriter-text::after {
        content: '';
        position: absolute;
        right: -8px;
        top: 50%;
        transform: translateY(-50%);
        width: 3px;
        height: 1.2em;
        background-color: var(--brown-dark);
        animation: blink 1s infinite;
    }

    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }

    /* ----- Scroll Indicator (same as home) ----- */
    .scroll-indicator {
        position: absolute;
        bottom: 2rem;
        left: 0;
        right: 0;
        text-align: center;
    }

    .scroll-down {
        color: var(--brown-dark);
        font-size: 1.5rem;
        animation: bounce 2s infinite;
        display: inline-block;
        width: 50px;
        height: 50px;
        line-height: 50px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: var(--shadow-sm);
        transition: all 0.3s;
    }

    .scroll-down:hover {
        background: white;
        transform: scale(1.1);
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
    }

    /* ----- Breadcrumb (glassmorphism) ----- */
    .breadcrumb-nav .breadcrumb {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border-radius: 50px;
        padding: 0.75rem 1.5rem;
        border: 1px solid rgba(93,64,55,0.1);
        display: inline-flex;
    }

    .breadcrumb-item a {
        text-decoration: none;
        transition: color 0.3s;
    }

    .breadcrumb-item a:hover {
        color: var(--brown-dark) !important;
    }

    /* ===== 3D ISO CARD ===== */
    .iso-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .iso-card-inner {
        background: white;
        border-radius: 2rem;
        padding: 1.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .iso-card-3d:hover .iso-card-inner {
        transform: rotateY(-2deg) rotateX(1deg) translateY(-8px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.25);
    }

    .card-icon-wrapper {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .iso-card-3d:hover .card-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .card-details {
        background: rgba(245,240,237,0.3);
        border: 1px solid rgba(93,64,55,0.05);
    }

    /* ===== 3D BENEFIT CARD ===== */
    .benefit-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .benefit-inner {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem 1.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
        text-align: center;
    }

    .benefit-card-3d:hover .benefit-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .benefit-icon-wrapper {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        transition: all 0.3s;
    }

    .benefit-card-3d:hover .benefit-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    /* ===== 3D DOCUMENT CARD ===== */
    .document-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .document-inner {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .document-card-3d:hover .document-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .document-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .document-card-3d:hover .document-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .btn-action {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        border: 1px solid rgba(93,64,55,0.1);
        background: white;
        color: var(--brown-medium);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
        cursor: pointer;
    }

    .btn-action.preview:hover {
        background: var(--brown-dark);
        color: white;
        transform: translateY(-2px);
    }

    .btn-action.download:hover {
        background: var(--cream-gold);
        color: white;
        transform: translateY(-2px);
    }

    .btn-action.share:hover {
        background: var(--brown-medium);
        color: white;
        transform: translateY(-2px);
    }

    /* ===== 3D CERT BODY CARD ===== */
    .cert-body-card-3d {
        perspective: 1000px;
    }

    .cert-body-inner {
        background: white;
        border-radius: 2rem;
        padding: 3rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
    }

    .cert-body-card-3d:hover .cert-body-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .cert-logo-wrapper {
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        transition: all 0.3s;
    }

    .cert-body-card-3d:hover .cert-logo-wrapper {
        transform: scale(1.05) rotate(5deg);
    }

    /* ===== 3D BUTTONS (same as home) ===== */
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

    .btn-brown-3d:hover {
        transform: translateY(-3px) rotateX(2deg);
        box-shadow: 0 15px 30px rgba(93,64,55,0.3);
        background: linear-gradient(145deg, #4A342E, var(--brown-dark));
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
        box-shadow: 0 10px 20px rgba(93,64,55,0.2);
    }

    .btn-brown-3d::before,
    .btn-outline-brown-3d::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.6s;
    }

    .btn-brown-3d:hover::before,
    .btn-outline-brown-3d:hover::before {
        left: 100%;
    }

    /* 3D decorative corners */
    .card-corner {
        position: absolute;
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, transparent 50%, rgba(212,175,55,0.1) 50%);
        z-index: 1;
    }

    .card-corner.corner-1 {
        top: 0;
        right: 0;
        transform: rotate(90deg);
    }

    .card-corner.corner-2 {
        bottom: 0;
        left: 0;
        transform: rotate(270deg);
    }

    /* ----- Background decorations ----- */
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
        background: rgba(212, 175, 55, 0.03);
        width: 300px;
        height: 300px;
    }

    .decoration-circle:nth-child(1) {
        top: -100px;
        right: -100px;
        background: rgba(93,64,55,0.02);
        animation: float 25s infinite;
    }

    .decoration-circle:nth-child(2) {
        bottom: -50px;
        left: -50px;
        width: 200px;
        height: 200px;
        background: rgba(212,175,55,0.02);
        animation: float 20s infinite reverse;
    }

    .bg-cream-light {
        background-color: var(--cream-light) !important;
        position: relative;
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

    /* ----- CTA Section (same as home) ----- */
    .cta-elegant {
        background: linear-gradient(135deg, #EFEBE9 0%, #D7CCC8 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-elegant::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 20% 30%, rgba(92, 64, 51, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(210, 180, 140, 0.1) 0%, transparent 50%);
    }

    .cta-content-wrapper {
        position: relative;
        z-index: 2;
        padding: 3rem;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 1.5rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
    }

    .cta-elegant h2 {
        color: #5D4037;
        background: linear-gradient(135deg, #5D4037, #8B6B61);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .cta-elegant .lead {
        color: #795548;
    }

    /* ----- Animations ----- */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.8s ease-out forwards;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .animate-on-scroll {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
    }

    /* ----- Utilities ----- */
    .py-6 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important;
    }

    .mb-6 {
        margin-bottom: 5rem !important;
    }

    .mt-6 {
        margin-top: 5rem !important;
    }

    /* ----- Responsive ----- */
    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .iso-hero { padding: 5rem 0 3rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
        .cert-body-inner { padding: 2rem; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
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
        // ----- TYPEWRITER EFFECT (like home) -----
        const textElement = document.querySelector('.typewriter-text');
        if (textElement) {
            const originalText = textElement.textContent.trim();
            let charIndex = 0;
            let isDeleting = false;
            let typingSpeed = 100;

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

        // ----- SMOOTH SCROLL FOR ANCHOR -----
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // ----- OBSERVER FOR SCROLL ANIMATIONS -----
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // ----- 3D HOVER EFFECT ENHANCEMENT -----
        const cards = document.querySelectorAll('.iso-card-inner, .benefit-inner, .document-inner, .cert-body-inner');
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

        // ----- SHARE FUNCTION -----
        window.shareDocument = function(docName) {
            if (navigator.share) {
                navigator.share({
                    title: docName,
                    text: `Lihat dokumen sertifikasi: ${docName}`,
                    url: window.location.href
                }).catch(() => {
                    copyToClipboard(window.location.href);
                    showNotification('Link disalin ke clipboard!', 'info');
                });
            } else {
                copyToClipboard(window.location.href);
                showNotification('Link disalin ke clipboard!', 'info');
            }
        };

        function copyToClipboard(text) {
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
        }

        function showNotification(message, type) {
            // Simple alert for now (could be enhanced)
            alert(message);
        }

        // ----- DOWNLOAD ALL -----
        document.getElementById('downloadAll')?.addEventListener('click', function() {
            const docs = [
                'iso-9001.pdf',
                'iso-14001.pdf',
                'iso-45001.pdf',
                'iso-37001.pdf',
                'integrated-iso.pdf',
                'iso-audit-2024.pdf'
            ];
            docs.forEach((doc, i) => {
                setTimeout(() => {
                    const a = document.createElement('a');
                    a.href = `{{ asset('storage/certificates/') }}/${doc}`;
                    a.download = doc;
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                }, i * 300);
            });
        });
    });
</script>
@endpush
