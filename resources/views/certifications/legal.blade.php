@extends('layouts.app')

@section('title', 'Dokumen Legal - PT Mitra Nusa Konsulindo')
@section('description', 'Dokumen legal PT Mitra Nusa Konsulindo: Akta Pendirian, NIB, NPWP, SIUP, dan dokumen legalitas perusahaan lainnya.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="legal-hero position-relative overflow-hidden">
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
                            <i class="fas fa-balance-scale me-2"></i>DOKUMEN LEGALITAS
                        </span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Legalitas <span class="text-gradient-brown">Perusahaan</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Dokumen Resmi dan Terdaftar
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                Akta · NIB · NPWP · SIUP
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
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">Dokumen Legal</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <a href="#legal-documents" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- MAIN CONTENT SECTION -->
    <section id="legal-documents" class="py-6 bg-white position-relative">
        <!-- Subtle background decoration -->
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="row g-5">
                <!-- LEFT COLUMN: TABLE OF LEGAL DOCUMENTS -->
                <div class="col-lg-8">
                    <div class="legal-table-card-3d animate-on-scroll">
                        <div class="legal-table-inner">
                            <div class="section-header mb-4">
                                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                                    <i class="fas fa-file-alt me-2"></i>DAFTAR DOKUMEN
                                </span>
                                <h3 class="display-6 fw-bold text-brown-dark mb-3">Dokumen Legal Perusahaan</h3>
                                <p class="text-brown-medium">
                                    Berikut adalah dokumen-dokumen legal yang dimiliki PT Mitra Nusa Konsulindo.
                                </p>
                            </div>

                            <div class="table-responsive">
                                <table class="table premium-table">
                                    <thead>
                                        <tr>
                                            <th>Jenis Dokumen</th>
                                            <th>Nomor</th>
                                            <th>Tanggal Terbit</th>
                                            <th>Masa Berlaku</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="legal-row">
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-brown-dark">Akta Pendirian</strong>
                                                    <small class="text-brown-medium">Notaris Syahrul, SH.</small>
                                                </div>
                                            </td>
                                            <td class="text-brown-dark">12/01/06.01.2020</td>
                                            <td class="text-brown-medium">10 Jan 2020</td>
                                            <td class="text-brown-medium">Permanen</td>
                                            <td><span class="status-badge active">Aktif</span></td>
                                            <td>
                                                <div class="action-buttons">
                                                    <button class="btn-action view" onclick="previewDocument('Akta Pendirian')" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-action download" onclick="downloadDocument('akta-pendirian.pdf')" title="Download">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="legal-row">
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-brown-dark">Pengesahan Kemenkumham</strong>
                                                    <small class="text-brown-medium">Kementerian Hukum dan HAM</small>
                                                </div>
                                            </td>
                                            <td class="text-brown-dark">AHU-0015442.AH.01.11.TAHUN 2020</td>
                                            <td class="text-brown-medium">15 Jan 2020</td>
                                            <td class="text-brown-medium">Permanen</td>
                                            <td><span class="status-badge active">Aktif</span></td>
                                            <td>
                                                <div class="action-buttons">
                                                    <button class="btn-action view" onclick="previewDocument('Pengesahan Kemenkumham')" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-action download" onclick="downloadDocument('pengesahan-kemenkumham.pdf')" title="Download">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="legal-row">
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-brown-dark">Nomor Induk Berusaha (NIB)</strong>
                                                    <small class="text-brown-medium">OSS RBA</small>
                                                </div>
                                            </td>
                                            <td class="text-brown-dark">912020123456789</td>
                                            <td class="text-brown-medium">20 Jan 2020</td>
                                            <td class="text-brown-medium">Permanen</td>
                                            <td><span class="status-badge active">Aktif</span></td>
                                            <td>
                                                <div class="action-buttons">
                                                    <button class="btn-action view" onclick="previewDocument('NIB')" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-action download" onclick="downloadDocument('nib.pdf')" title="Download">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="legal-row">
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-brown-dark">NPWP Perusahaan</strong>
                                                    <small class="text-brown-medium">Direktorat Jenderal Pajak</small>
                                                </div>
                                            </td>
                                            <td class="text-brown-dark">12.345.678.9-012.345</td>
                                            <td class="text-brown-medium">25 Jan 2020</td>
                                            <td class="text-brown-medium">Permanen</td>
                                            <td><span class="status-badge active">Aktif</span></td>
                                            <td>
                                                <div class="action-buttons">
                                                    <button class="btn-action view" onclick="previewDocument('NPWP')" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-action download" onclick="downloadDocument('npwp.pdf')" title="Download">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="legal-row">
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-brown-dark">Surat Izin Usaha Perdagangan (SIUP)</strong>
                                                    <small class="text-brown-medium">Kementerian Perdagangan</small>
                                                </div>
                                            </td>
                                            <td class="text-brown-dark">503/321/SIUP/PM/2020</td>
                                            <td class="text-brown-medium">30 Jan 2020</td>
                                            <td class="text-brown-medium">Permanen</td>
                                            <td><span class="status-badge active">Aktif</span></td>
                                            <td>
                                                <div class="action-buttons">
                                                    <button class="btn-action view" onclick="previewDocument('SIUP')" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-action download" onclick="downloadDocument('siup.pdf')" title="Download">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="legal-row">
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-brown-dark">Tanda Daftar Perusahaan (TDP)</strong>
                                                    <small class="text-brown-medium">Dinas Perindustrian dan Perdagangan</small>
                                                </div>
                                            </td>
                                            <td class="text-brown-dark">12.34.5.678910.11.12.13</td>
                                            <td class="text-brown-medium">5 Feb 2020</td>
                                            <td class="text-brown-medium">Permanen</td>
                                            <td><span class="status-badge active">Aktif</span></td>
                                            <td>
                                                <div class="action-buttons">
                                                    <button class="btn-action view" onclick="previewDocument('TDP')" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-action download" onclick="downloadDocument('tdp.pdf')" title="Download">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="legal-row">
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-brown-dark">Surat Keterangan Domisili Perusahaan (SKDP)</strong>
                                                    <small class="text-brown-medium">Kelurahan Setiabudi</small>
                                                </div>
                                            </td>
                                            <td class="text-brown-dark">503/45/SKDP/II/2020</td>
                                            <td class="text-brown-medium">10 Feb 2020</td>
                                            <td class="text-brown-medium">1 Tahun</td>
                                            <td><span class="status-badge active">Aktif</span></td>
                                            <td>
                                                <div class="action-buttons">
                                                    <button class="btn-action view" onclick="previewDocument('SKDP')" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-action download" onclick="downloadDocument('skdp.pdf')" title="Download">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- 3D decorative corners -->
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN: LEGAL STATUS CARD -->
                <div class="col-lg-4">
                    <div class="legal-status-card-3d animate-on-scroll">
                        <div class="legal-status-inner">
                            <div class="status-icon-wrapper mb-4">
                                <i class="fas fa-balance-scale fa-4x text-brown-dark"></i>
                            </div>
                            <h4 class="fw-bold text-brown-dark mb-3">Legalitas Perusahaan</h4>
                            <p class="text-brown-medium mb-4">
                                PT Mitra Nusa Konsulindo telah memenuhi semua persyaratan legal untuk beroperasi
                                sebagai perusahaan konsultan yang terdaftar dan berbadan hukum di Indonesia.
                            </p>

                            <div class="status-items mb-4">
                                <div class="status-item d-flex align-items-center mb-3">
                                    <div class="status-icon me-3">
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="status-content">
                                        <h6 class="mb-0 fw-bold text-brown-dark">Badan Hukum PT</h6>
                                        <p class="text-brown-medium small mb-0">Perseroan Terbatas</p>
                                    </div>
                                </div>
                                <div class="status-item d-flex align-items-center mb-3">
                                    <div class="status-icon me-3">
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="status-content">
                                        <h6 class="mb-0 fw-bold text-brown-dark">Terdaftar OSS</h6>
                                        <p class="text-brown-medium small mb-0">Online Single Submission</p>
                                    </div>
                                </div>
                                <div class="status-item d-flex align-items-center">
                                    <div class="status-icon me-3">
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="status-content">
                                        <h6 class="mb-0 fw-bold text-brown-dark">Wajib Pajak Aktif</h6>
                                        <p class="text-brown-medium small mb-0">NPWP Perusahaan</p>
                                    </div>
                                </div>
                            </div>

                            <div class="alert-info-3d p-3 rounded-3">
                                <i class="fas fa-info-circle me-2 text-brown-dark"></i>
                                <span class="text-brown-dark fw-semibold">Informasi:</span>
                                <p class="text-brown-medium mt-2 mb-0 small">
                                    Semua dokumen legal telah diverifikasi dan terdaftar di instansi terkait.
                                </p>
                            </div>

                            <!-- 3D decorative corners -->
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DOCUMENT CATEGORIES SECTION – 3D CARDS -->
            <div class="row g-4 mt-6">
                <div class="col-12">
                    <div class="section-header text-center mb-5">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                            <i class="fas fa-tags me-2"></i>KATEGORI DOKUMEN
                        </span>
                        <h2 class="display-5 fw-bold text-brown-dark">Kategori Dokumen Legal</h2>
                    </div>
                </div>

                <!-- Category 1: Company Establishment -->
                <div class="col-md-4">
                    <div class="category-card-3d animate-on-scroll">
                        <div class="category-inner">
                            <div class="category-icon-wrapper mb-3">
                                <i class="fas fa-building fa-3x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Pendirian Perusahaan</h5>
                            <p class="text-brown-medium mb-3">Dokumen pendirian dan pengesahan badan hukum</p>
                            <ul class="category-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i>Akta Pendirian</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i>Pengesahan Kemenkumham</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i>Anggaran Dasar</li>
                            </ul>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- Category 2: Business License -->
                <div class="col-md-4">
                    <div class="category-card-3d animate-on-scroll">
                        <div class="category-inner">
                            <div class="category-icon-wrapper mb-3">
                                <i class="fas fa-file-contract fa-3x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Perizinan Usaha</h5>
                            <p class="text-brown-medium mb-3">Dokumen perizinan dan operasional usaha</p>
                            <ul class="category-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i>NIB (OSS RBA)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i>SIUP</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i>TDP</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i>SKDP</li>
                            </ul>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- Category 3: Tax Documents -->
                <div class="col-md-4">
                    <div class="category-card-3d animate-on-scroll">
                        <div class="category-inner">
                            <div class="category-icon-wrapper mb-3">
                                <i class="fas fa-receipt fa-3x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Perpajakan</h5>
                            <p class="text-brown-medium mb-3">Dokumen perpajakan dan keuangan</p>
                            <ul class="category-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i>NPWP Perusahaan</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i>PKP (Pengusaha Kena Pajak)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i>SKT Pajak</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i>Laporan Keuangan</li>
                            </ul>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VERIFICATION INFORMATION SECTION -->
            <div class="row mt-6">
                <div class="col-12">
                    <div class="verification-card-3d animate-on-scroll">
                        <div class="verification-inner">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h5 class="fw-bold text-brown-dark mb-3">
                                        <i class="fas fa-check-circle me-2 text-brown-dark"></i>Verifikasi Online
                                    </h5>
                                    <p class="text-brown-medium mb-3">Dokumen legal dapat diverifikasi melalui sistem online berikut:</p>
                                    <div class="verification-links d-flex flex-column gap-2">
                                        <a href="https://oss.go.id" target="_blank" class="btn btn-outline-brown-3d rounded-pill px-4 py-2">
                                            <i class="fas fa-external-link-alt me-2"></i>OSS RBA
                                        </a>
                                        <a href="https://www.pajak.go.id" target="_blank" class="btn btn-outline-brown-3d rounded-pill px-4 py-2">
                                            <i class="fas fa-external-link-alt me-2"></i>DJP Online
                                        </a>
                                        <a href="https://ahu.go.id" target="_blank" class="btn btn-outline-brown-3d rounded-pill px-4 py-2">
                                            <i class="fas fa-external-link-alt me-2"></i>Kemenkumham
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold text-brown-dark mb-3">
                                        <i class="fas fa-phone-alt me-2 text-brown-dark"></i>Kontak Verifikasi
                                    </h5>
                                    <p class="text-brown-medium mb-3">Untuk verifikasi langsung, hubungi:</p>
                                    <div class="contact-info">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-envelope text-brown-dark me-3" style="width: 20px;"></i>
                                            <span class="text-brown-medium">legal@mitranusakonsulindo.co.id</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-phone text-brown-dark me-3" style="width: 20px;"></i>
                                            <span class="text-brown-medium">(021) 1234-5678</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-map-marker-alt text-brown-dark me-3" style="width: 20px;"></i>
                                            <span class="text-brown-medium">Jl. Setiabudi No. 123, Jakarta Selatan</span>
                                        </div>
                                    </div>
                                    <div class="alert-info-3d p-3 mt-4 rounded-3">
                                        <i class="fas fa-clock me-2 text-brown-dark"></i>
                                        <span class="text-brown-medium">Senin-Jumat, 08:00-17:00 WIB</span>
                                    </div>
                                </div>
                            </div>
                            <!-- 3D decorative corners -->
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
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
                        <h2 class="display-6 fw-bold mb-3">Butuh Dokumen Legal Lainnya?</h2>
                        <p class="lead mb-0">
                            Hubungi kami untuk permintaan dokumen atau informasi lebih lanjut.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-envelope me-2"></i>Hubungi Kami
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
    .legal-hero {
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

    /* ===== LEGAL TABLE CARD ===== */
    .legal-table-card-3d {
        perspective: 1000px;
    }

    .legal-table-inner {
        background: white;
        border-radius: 2rem;
        padding: 2rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
    }

    .legal-table-card-3d:hover .legal-table-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .premium-table {
        margin-bottom: 0;
    }

    .premium-table thead th {
        background: linear-gradient(135deg, var(--brown-dark), #4A342E);
        color: white;
        font-weight: 600;
        padding: 1rem;
        border: none;
        white-space: nowrap;
    }

    .premium-table thead th:first-child {
        border-radius: 1rem 0 0 0;
    }

    .premium-table thead th:last-child {
        border-radius: 0 1rem 0 0;
    }

    .premium-table tbody tr {
        transition: all 0.3s;
        border-bottom: 1px solid rgba(93,64,55,0.05);
    }

    .premium-table tbody tr:hover {
        background: rgba(212,175,55,0.02);
        transform: scale(1.01);
        box-shadow: 0 5px 15px rgba(93,64,55,0.05);
    }

    .premium-table td {
        padding: 1rem;
        vertical-align: middle;
        color: var(--brown-medium);
    }

    .status-badge {
        display: inline-block;
        padding: 0.35rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .status-badge.active {
        background: linear-gradient(135deg, #2E7D32, #4CAF50);
        color: white;
    }

    .action-buttons {
        display: flex;
        gap: 0.5rem;
    }

    .btn-action {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
        border: 1px solid transparent;
        background: none;
        cursor: pointer;
    }

    .btn-action.view {
        background: rgba(93,64,55,0.1);
        color: var(--brown-dark);
    }

    .btn-action.view:hover {
        background: var(--brown-dark);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 10px rgba(93,64,55,0.2);
    }

    .btn-action.download {
        background: rgba(212,175,55,0.1);
        color: var(--cream-gold);
    }

    .btn-action.download:hover {
        background: var(--cream-gold);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 10px rgba(212,175,55,0.3);
    }

    /* ===== LEGAL STATUS CARD ===== */
    .legal-status-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .legal-status-inner {
        background: white;
        border-radius: 2rem;
        padding: 2rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .legal-status-card-3d:hover .legal-status-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .status-icon-wrapper {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        transition: all 0.3s;
    }

    .legal-status-card-3d:hover .status-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .status-item {
        padding: 0.75rem;
        background: rgba(245,240,237,0.5);
        border-radius: 1rem;
        border: 1px solid rgba(93,64,55,0.05);
    }

    .status-item .status-icon i {
        font-size: 1.2rem;
    }

    .alert-info-3d {
        background: rgba(212,175,55,0.05);
        border-left: 4px solid var(--cream-gold);
    }

    /* ===== CATEGORY CARD ===== */
    .category-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .category-inner {
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
    }

    .category-card-3d:hover .category-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .category-icon-wrapper {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .category-card-3d:hover .category-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .category-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .category-list li {
        margin-bottom: 0.5rem;
        color: var(--brown-medium);
        font-size: 0.95rem;
    }

    .category-list li i {
        color: var(--cream-gold);
    }

    /* ===== VERIFICATION CARD ===== */
    .verification-card-3d {
        perspective: 1000px;
    }

    .verification-inner {
        background: white;
        border-radius: 2rem;
        padding: 2rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
    }

    .verification-card-3d:hover .verification-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .verification-links .btn-outline-brown-3d {
        width: 100%;
        justify-content: center;
    }

    .contact-info i {
        color: var(--brown-dark);
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
        .legal-hero { padding: 5rem 0 3rem; }
        .legal-table-inner { padding: 1.5rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .premium-table thead th { white-space: normal; }
        .action-buttons { flex-wrap: wrap; }
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
        const cards = document.querySelectorAll('.legal-table-inner, .legal-status-inner, .category-inner, .verification-inner');
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

        // ----- PREVIEW & DOWNLOAD FUNCTIONS -----
        window.previewDocument = function(docName) {
            alert('Preview fitur akan segera tersedia untuk: ' + docName);
        };

        window.downloadDocument = function(filename) {
            // Simulate download (you can replace with actual file links)
            alert('Download dimulai untuk: ' + filename);
            // In production, you can trigger an anchor click:
            // const a = document.createElement('a');
            // a.href = '/path/to/' + filename;
            // a.download = filename;
            // document.body.appendChild(a);
            // a.click();
            // document.body.removeChild(a);
        };
    });
</script>
@endpush
