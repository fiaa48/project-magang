@extends('layouts.app')

@section('title', 'Sertifikasi ISO - Sertifikasi & Lisensi')
@section('description', 'Sertifikasi Sistem Manajemen ISO PT Mitra Nusa Konsulindo: ISO 9001, ISO 14001, ISO 45001, dan ISO 37001.')

@section('content')
    <!-- Hero Banner -->
    <div class="iso-hero-banner">
        <div class="hero-bg-pattern"></div>
        <div class="hero-glow"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-content">
                        <div class="breadcrumb-wrapper">
                            <a href="{{ route('home') }}" class="breadcrumb-link">Home</a>
                            <span class="breadcrumb-divider">/</span>
                            <a href="{{ route('certifications.index') }}" class="breadcrumb-link">Sertifikasi</a>
                            <span class="breadcrumb-divider">/</span>
                            <span class="breadcrumb-link active">ISO Certification</span>
                        </div>

                        <h1 class="hero-title">
                            <span class="title-line">Sertifikasi Sistem</span>
                            <span class="title-highlight">Manajemen ISO</span>
                        </h1>

                        <p class="hero-description">
                            Kami telah tersertifikasi dengan standar ISO internasional untuk memastikan kualitas,
                            keselamatan, dan keberlanjutan dalam setiap layanan kami.
                        </p>

                        <div class="hero-stats">
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number">4</div>
                                    <div class="stat-text">Standar ISO</div>
                                </div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number">100%</div>
                                    <div class="stat-text">Terakreditasi</div>
                                </div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number">24/7</div>
                                    <div class="stat-text">Support</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="hero-visual">
                        <div class="certificate-badge floating">
                            <div class="badge-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="badge-content">
                                <span class="badge-title">ISO Certified</span>
                                <span class="badge-subtitle">Since 2020</span>
                            </div>
                        </div>

                        <div class="certificate-card">
                            <div class="card-glow"></div>
                            <div class="certificate-seal">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="certificate-content">
                                <h4>PT MITRA NUSA KONSULINDO</h4>
                                <p>Integrated Management System Certification</p>
                                <div class="certificate-ribbon">
                                    <span>TUV RHEINLAND</span>
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <div class="certificate-footer">
                                <span class="cert-number">Cert: MNK-ISO-2022-001</span>
                                <span class="cert-valid">Valid: 2022-2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ISO Standards Grid -->
    <section class="iso-standards-section">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">
                    <i class="fas fa-globe"></i>
                    <span>INTERNATIONAL STANDARDS</span>
                </div>
                <h2 class="section-title">Standar ISO yang Kami Miliki</h2>
                <p class="section-subtitle">Sertifikasi sistem manajemen terintegrasi untuk keunggulan bisnis dan kepuasan pelanggan</p>
            </div>

            <div class="iso-grid">
                <!-- ISO 9001 -->
                <div class="iso-card card-1">
                    <div class="card-hover-effect"></div>
                    <div class="card-header">
                        <div class="card-icon">
                            <div class="icon-wrapper">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="card-badge">ISO 9001:2015</div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Quality Management System</h3>
                        <p class="card-description">Sistem manajemen mutu untuk memastikan konsistensi dan peningkatan berkelanjutan.</p>

                        <div class="card-details">
                            <div class="detail-item">
                                <span class="detail-label">Certificate No</span>
                                <span class="detail-value">01.002.2022.1234</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Valid Until</span>
                                <span class="detail-value">2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Issued By</span>
                                <span class="detail-value">TUV Rheinland</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ asset('storage/certificates/iso-9001.pdf') }}" target="_blank" class="card-link">
                            View Certificate
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="card-status">
                            <i class="fas fa-circle"></i>
                            <span>Active</span>
                        </div>
                    </div>
                </div>

                <!-- ISO 14001 -->
                <div class="iso-card card-2">
                    <div class="card-hover-effect"></div>
                    <div class="card-header">
                        <div class="card-icon">
                            <div class="icon-wrapper">
                                <i class="fas fa-leaf"></i>
                            </div>
                        </div>
                        <div class="card-badge">ISO 14001:2015</div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Environmental Management</h3>
                        <p class="card-description">Sistem manajemen lingkungan untuk mendukung keberlanjutan dan tanggung jawab ekologis.</p>

                        <div class="card-details">
                            <div class="detail-item">
                                <span class="detail-label">Certificate No</span>
                                <span class="detail-value">02.003.2022.1235</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Valid Until</span>
                                <span class="detail-value">2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Issued By</span>
                                <span class="detail-value">TUV Rheinland</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ asset('storage/certificates/iso-14001.pdf') }}" target="_blank" class="card-link">
                            View Certificate
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="card-status">
                            <i class="fas fa-circle"></i>
                            <span>Active</span>
                        </div>
                    </div>
                </div>

                <!-- ISO 45001 -->
                <div class="iso-card card-3">
                    <div class="card-hover-effect"></div>
                    <div class="card-header">
                        <div class="card-icon">
                            <div class="icon-wrapper">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <div class="card-badge">ISO 45001:2018</div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Occupational Health & Safety</h3>
                        <p class="card-description">Sistem manajemen K3 untuk memastikan tempat kerja yang aman dan sehat.</p>

                        <div class="card-details">
                            <div class="detail-item">
                                <span class="detail-label">Certificate No</span>
                                <span class="detail-value">03.004.2022.1236</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Valid Until</span>
                                <span class="detail-value">2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Issued By</span>
                                <span class="detail-value">TUV Rheinland</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ asset('storage/certificates/iso-45001.pdf') }}" target="_blank" class="card-link">
                            View Certificate
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="card-status">
                            <i class="fas fa-circle"></i>
                            <span>Active</span>
                        </div>
                    </div>
                </div>

                <!-- ISO 37001 -->
                <div class="iso-card card-4">
                    <div class="card-hover-effect"></div>
                    <div class="card-header">
                        <div class="card-icon">
                            <div class="icon-wrapper">
                                <i class="fas fa-handshake"></i>
                            </div>
                        </div>
                        <div class="card-badge">ISO 37001:2016</div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Anti-Bribery Management</h3>
                        <p class="card-description">Sistem manajemen anti-suap untuk transparansi dan integritas bisnis.</p>

                        <div class="card-details">
                            <div class="detail-item">
                                <span class="detail-label">Certificate No</span>
                                <span class="detail-value">04.005.2022.1237</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Valid Until</span>
                                <span class="detail-value">2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Issued By</span>
                                <span class="detail-value">TUV Rheinland</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ asset('storage/certificates/iso-37001.pdf') }}" target="_blank" class="card-link">
                            View Certificate
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="card-status">
                            <i class="fas fa-circle"></i>
                            <span>Active</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Manfaat Sertifikasi ISO</h2>
                <p class="section-subtitle">Keunggulan kompetitif yang kami dapatkan dengan standar internasional</p>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Operasional Efisien</h3>
                    <p>Proses terstandarisasi meningkatkan produktivitas dan mengurangi pemborosan.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Kepercayaan Klien</h3>
                    <p>Standar internasional membangun kepercayaan dan kepuasan pelanggan.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Manajemen Risiko</h3>
                    <p>Identifikasi dan pengendalian risiko secara proaktif dalam operasional.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Akses Global</h3>
                    <p>Memenuhi persyaratan untuk berkolaborasi dengan perusahaan internasional.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Peningkatan Berkelanjutan</h3>
                    <p>Kultur perbaikan terus-menerus untuk mencapai keunggulan operasional.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Reputasi Perusahaan</h3>
                    <p>Meningkatkan citra perusahaan sebagai organisasi yang profesional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Documents Section -->
    <section class="documents-section">
        <div class="documents-pattern"></div>
        <div class="container">
            <div class="documents-header">
                <h2 class="documents-title">Certification Documents</h2>
                <p class="documents-subtitle">Akses dan unduh dokumen sertifikasi resmi kami</p>
            </div>

            <div class="documents-grid">
                <div class="document-card" data-doc-name="ISO 9001 Certificate" data-doc-url="{{ asset('storage/certificates/iso-9001.pdf') }}">
                    <div class="document-header">
                        <div class="document-icon">
                            <i class="fas fa-file-certificate"></i>
                        </div>
                        <div class="document-tag">Primary</div>
                    </div>

                    <div class="document-body">
                        <h4 class="document-title">ISO 9001 Certificate</h4>
                        <p class="document-description">Sertifikat Sistem Manajemen Mutu</p>

                        <div class="document-meta">
                            <div class="meta-item">
                                <i class="fas fa-file-pdf"></i>
                                <span>PDF, 2.4 MB</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Valid: 2022-2025</span>
                            </div>
                        </div>
                    </div>

                    <div class="document-footer">
                        <button class="doc-action-btn preview" data-action="preview">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="doc-action-btn download" data-action="download">
                            <i class="fas fa-download"></i>
                        </button>
                        <button class="doc-action-btn share" data-action="share">
                            <i class="fas fa-share-alt"></i>
                        </button>
                    </div>
                </div>

                <div class="document-card" data-doc-name="Integrated ISO Certificate" data-doc-url="{{ asset('storage/certificates/integrated-iso.pdf') }}">
                    <div class="document-header">
                        <div class="document-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div class="document-tag">Integrated</div>
                    </div>

                    <div class="document-body">
                        <h4 class="document-title">Integrated ISO Certificate</h4>
                        <p class="document-description">Sertifikat Terintegrasi Sistem Manajemen</p>

                        <div class="document-meta">
                            <div class="meta-item">
                                <i class="fas fa-file-pdf"></i>
                                <span>PDF, 3.1 MB</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Valid: 2022-2025</span>
                            </div>
                        </div>
                    </div>

                    <div class="document-footer">
                        <button class="doc-action-btn preview" data-action="preview">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="doc-action-btn download" data-action="download">
                            <i class="fas fa-download"></i>
                        </button>
                        <button class="doc-action-btn share" data-action="share">
                            <i class="fas fa-share-alt"></i>
                        </button>
                    </div>
                </div>

                <div class="document-card" data-doc-name="ISO Audit Report 2024" data-doc-url="{{ asset('storage/certificates/iso-audit-2024.pdf') }}">
                    <div class="document-header">
                        <div class="document-icon">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <div class="document-tag">Report</div>
                    </div>

                    <div class="document-body">
                        <h4 class="document-title">ISO Audit Report 2024</h4>
                        <p class="document-description">Laporan Audit Tahunan 2024</p>

                        <div class="document-meta">
                            <div class="meta-item">
                                <i class="fas fa-file-pdf"></i>
                                <span>PDF, 4.2 MB</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Issued: Jan 2024</span>
                            </div>
                        </div>
                    </div>

                    <div class="document-footer">
                        <button class="doc-action-btn preview" data-action="preview">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="doc-action-btn download" data-action="download">
                            <i class="fas fa-download"></i>
                        </button>
                        <button class="doc-action-btn share" data-action="share">
                            <i class="fas fa-share-alt"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="documents-footer">
                <div class="audit-info">
                    <div class="audit-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <div class="audit-content">
                        <h4>Regular Surveillance Audits</h4>
                        <p>Sertifikasi ISO kami dilakukan audit surveilance setiap tahun dan audit re-sertifikasi setiap 3 tahun untuk memastikan kepatuhan berkelanjutan.</p>
                    </div>
                </div>

                <button class="btn-download-all" id="downloadAll">
                    <i class="fas fa-download"></i>
                    Download All Documents
                </button>
            </div>
        </div>
    </section>

    <!-- Modal for Preview -->
    <div class="modal fade" id="previewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Document Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe id="previewFrame" class="preview-iframe" style="width: 100%; height: 600px; border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <a href="#" id="downloadFromPreview" class="btn btn-primary">
                        <i class="fas fa-download"></i> Download
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Certification Body -->
    <section class="cert-body-section">
        <div class="container">
            <div class="cert-body-card">
                <div class="cert-body-header">
                    <h2 class="cert-body-title">Certification Body</h2>
                    <p class="cert-body-subtitle">Dikeluarkan oleh lembaga sertifikasi terakreditasi internasional</p>
                </div>

                <div class="cert-body-content">
                    <div class="cert-body-logo">
                        <div class="logo-container">
                            <i class="fas fa-landmark"></i>
                            <span class="logo-text">TUV Rheinland</span>
                        </div>
                        <div class="cert-badge">Accredited</div>
                    </div>

                    <div class="cert-body-info">
                        <h3>TUV Rheinland Indonesia</h3>
                        <p class="cert-body-description">
                            Lembaga sertifikasi internasional yang terakreditasi dengan standar global,
                            menyediakan layanan pengujian, inspeksi, dan sertifikasi.
                        </p>

                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>MidPlaza 2, Jl. Jend. Sudirman, Jakarta</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>(021) 570-1505</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-globe"></i>
                                <span>www.tuv.com/id-id</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>info@tuv.com</span>
                            </div>
                        </div>

                        <div class="cert-body-actions">
                            <a href="https://www.tuv.com/id-id" target="_blank" class="btn-visit-website">
                                <i class="fas fa-external-link-alt"></i>
                                Visit Website
                            </a>
                            <a href="mailto:info@tuv.com" class="btn-contact">
                                <i class="fas fa-envelope"></i>
                                Contact
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="iso-cta-section">
        <div class="cta-glow"></div>
        <div class="container">
            <div class="cta-card">
                <div class="cta-content">
                    <h2 class="cta-title">Need More Information?</h2>
                    <p class="cta-text">
                        Hubungi kami untuk konsultasi gratis mengenai sertifikasi ISO dan
                        bagaimana kami dapat membantu meningkatkan standar bisnis Anda.
                    </p>
                </div>

                <div class="cta-actions">
                    <a href="{{ route('contact') }}" class="btn-cta-primary">
                        <i class="fas fa-comments"></i>
                        Free Consultation
                    </a>
                    <a href="tel:+622220502071" class="btn-cta-secondary">
                        <i class="fas fa-phone"></i>
                        Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Modern Brown Aesthetic Palette */
    :root {
        /* Main Brown Shades */
        --brown-50: #FAF5F0;
        --brown-100: #F4ECE1;
        --brown-200: #E8DBC6;
        --brown-300: #D4C2A0;
        --brown-400: #BFA67A;
        --brown-500: #A88B5C;
        --brown-600: #8C7047;
        --brown-700: #70583A;
        --brown-800: #54432C;
        --brown-900: #3D3221;

        /* Accent Colors */
        --accent-gold: #E6B325;
        --accent-bronze: #CD7F32;
        --accent-copper: #B87333;
        --accent-cream: #FFF8E1;

        /* Metallic Gradients */
        --gradient-gold: linear-gradient(135deg, #E6B325 0%, #F4D03F 100%);
        --gradient-bronze: linear-gradient(135deg, #CD7F32 0%, #E6B325 100%);
        --gradient-brown: linear-gradient(135deg, var(--brown-600) 0%, var(--brown-800) 100%);
        --gradient-light-brown: linear-gradient(135deg, var(--brown-200) 0%, var(--brown-300) 100%);

        /* Shadows */
        --shadow-sm: 0 2px 4px rgba(61, 50, 33, 0.1);
        --shadow-md: 0 4px 6px -1px rgba(61, 50, 33, 0.1), 0 2px 4px -1px rgba(61, 50, 33, 0.06);
        --shadow-lg: 0 10px 15px -3px rgba(61, 50, 33, 0.1), 0 4px 6px -2px rgba(61, 50, 33, 0.05);
        --shadow-xl: 0 20px 25px -5px rgba(61, 50, 33, 0.1), 0 10px 10px -5px rgba(61, 50, 33, 0.04);
        --shadow-2xl: 0 25px 50px -12px rgba(61, 50, 33, 0.25);

        /* Card Effects */
        --card-shadow: 0 8px 32px rgba(168, 139, 92, 0.1);
        --card-hover-shadow: 0 20px 40px rgba(168, 139, 92, 0.2);

        /* Border Radius */
        --radius-sm: 8px;
        --radius-md: 16px;
        --radius-lg: 24px;
        --radius-xl: 32px;
        --radius-full: 9999px;
    }

    /* Base Styles */
    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        background-color: var(--brown-50);
        color: var(--brown-900);
        line-height: 1.6;
    }

    /* Hero Banner - FIXED */
    .iso-hero-banner {
        background: var(--gradient-brown);
        color: white;
        padding: 100px 0 60px;
        position: relative;
        overflow: hidden;
        margin-top: -20px;
    }

    .hero-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image:
            radial-gradient(circle at 20% 30%, rgba(230, 179, 37, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(205, 127, 50, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .hero-glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80vw;
        height: 80vh;
        background: radial-gradient(circle, rgba(230, 179, 37, 0.15) 0%, transparent 70%);
        pointer-events: none;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .breadcrumb-wrapper {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 30px;
    }

    .breadcrumb-link {
        color: rgba(255, 248, 225, 0.8);
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
        padding: 6px 14px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: var(--radius-full);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .breadcrumb-link:hover {
        color: var(--accent-gold);
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-2px);
    }

    .breadcrumb-link.active {
        color: var(--accent-gold);
        background: rgba(230, 179, 37, 0.15);
        border-color: rgba(230, 179, 37, 0.3);
    }

    .breadcrumb-divider {
        color: rgba(255, 248, 225, 0.5);
        font-size: 12px;
    }

    .hero-title {
        font-size: 2.8rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 20px;
        letter-spacing: -0.5px;
    }

    .title-line {
        display: block;
        color: white;
    }

    .title-highlight {
        color: var(--accent-gold);
        position: relative;
        display: inline-block;
    }

    .title-highlight::after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 0;
        width: 100%;
        height: 8px;
        background: rgba(230, 179, 37, 0.3);
        z-index: -1;
        transform: skewX(-15deg);
    }

    .hero-description {
        font-size: 1.1rem;
        color: rgba(255, 248, 225, 0.9);
        max-width: 500px;
        margin-bottom: 40px;
        line-height: 1.7;
    }

    .hero-stats {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .stat-card {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 16px 20px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: var(--radius-md);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
        flex: 1;
        min-width: 180px;
    }

    .stat-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-4px);
        border-color: rgba(230, 179, 37, 0.3);
    }

    .stat-icon {
        width: 42px;
        height: 42px;
        background: var(--gradient-gold);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--brown-900);
        font-size: 1.1rem;
    }

    .stat-content {
        display: flex;
        flex-direction: column;
    }

    .stat-number {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--accent-gold);
        line-height: 1;
    }

    .stat-text {
        font-size: 0.85rem;
        color: rgba(255, 248, 225, 0.8);
        margin-top: 4px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .hero-visual {
        position: relative;
        height: 100%;
        min-height: 350px;
    }

    .certificate-badge {
        position: absolute;
        top: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(20px);
        border-radius: var(--radius-lg);
        padding: 14px 20px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        display: flex;
        align-items: center;
        gap: 12px;
        z-index: 2;
        animation: float 3s ease-in-out infinite;
        max-width: 200px;
    }

    .floating {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(2deg); }
    }

    .badge-icon {
        width: 48px;
        height: 48px;
        background: var(--gradient-gold);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--brown-900);
        font-size: 1.3rem;
        box-shadow: 0 4px 12px rgba(230, 179, 37, 0.3);
        flex-shrink: 0;
    }

    .badge-title {
        display: block;
        font-weight: 700;
        color: white;
        font-size: 1rem;
        white-space: nowrap;
    }

    .badge-subtitle {
        display: block;
        font-size: 0.85rem;
        color: rgba(255, 248, 225, 0.7);
        white-space: nowrap;
    }

    .certificate-card {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        max-width: 320px;
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(25px);
        border-radius: var(--radius-xl);
        padding: 24px;
        border: 1px solid rgba(255, 255, 255, 0.25);
        transform-style: preserve-3d;
        perspective: 1000px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }

    .card-glow {
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, var(--accent-gold), var(--accent-bronze), var(--accent-gold));
        border-radius: calc(var(--radius-xl) + 2px);
        z-index: -1;
        opacity: 0.2;
        filter: blur(8px);
    }

    .certificate-seal {
        position: absolute;
        top: -15px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: var(--gradient-gold);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--brown-900);
        font-size: 1.3rem;
        box-shadow: 0 8px 20px rgba(230, 179, 37, 0.4);
        z-index: 1;
    }

    .certificate-content {
        text-align: center;
        position: relative;
        z-index: 2;
        margin-bottom: 20px;
    }

    .certificate-content h4 {
        color: white;
        font-weight: 800;
        margin-bottom: 10px;
        font-size: 1.2rem;
        letter-spacing: 0.5px;
    }

    .certificate-content p {
        color: rgba(255, 248, 225, 0.8);
        font-size: 0.9rem;
        margin-bottom: 20px;
        line-height: 1.4;
    }

    .certificate-ribbon {
        background: linear-gradient(90deg, var(--accent-gold), var(--accent-bronze));
        color: var(--brown-900);
        padding: 10px 20px;
        border-radius: var(--radius-full);
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-weight: 700;
        font-size: 0.9rem;
        box-shadow: 0 4px 12px rgba(230, 179, 37, 0.3);
        flex-wrap: wrap;
        justify-content: center;
    }

    .certificate-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 16px;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        color: rgba(255, 248, 225, 0.7);
        font-size: 0.8rem;
        flex-wrap: wrap;
        gap: 10px;
    }

    /* ISO Standards Section - FIXED */
    .iso-standards-section {
        padding: 80px 0;
        background: var(--brown-50);
    }

    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-tag {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--gradient-light-brown);
        color: var(--brown-700);
        padding: 8px 20px;
        border-radius: var(--radius-full);
        font-weight: 700;
        font-size: 0.8rem;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        margin-bottom: 20px;
        box-shadow: var(--shadow-sm);
    }

    .section-title {
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--brown-900);
        margin-bottom: 12px;
        letter-spacing: -0.5px;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: var(--brown-600);
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .iso-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 24px;
    }

    .iso-card {
        background: white;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--card-shadow);
        transition: all 0.4s ease;
        position: relative;
        border: 1px solid var(--brown-200);
    }

    .card-hover-effect {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--gradient-gold);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .iso-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--card-hover-shadow);
        border-color: var(--brown-300);
    }

    .iso-card:hover .card-hover-effect {
        opacity: 1;
    }

    .card-header {
        padding: 24px 24px 16px;
        position: relative;
    }

    .card-icon {
        margin-bottom: 20px;
    }

    .icon-wrapper {
        width: 70px;
        height: 70px;
        border-radius: 18px;
        background: linear-gradient(135deg, var(--brown-100), var(--brown-200));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: var(--brown-700);
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(168, 139, 92, 0.1);
    }

    .iso-card:hover .icon-wrapper {
        background: var(--gradient-gold);
        color: var(--brown-900);
        transform: rotate(10deg) scale(1.1);
    }

    .card-badge {
        position: absolute;
        top: 24px;
        right: 24px;
        background: var(--brown-100);
        color: var(--brown-700);
        padding: 6px 16px;
        border-radius: var(--radius-full);
        font-weight: 700;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
        box-shadow: var(--shadow-sm);
    }

    .card-body {
        padding: 0 24px 20px;
    }

    .card-title {
        font-size: 1.3rem;
        font-weight: 800;
        color: var(--brown-900);
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .card-description {
        color: var(--brown-600);
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 20px;
    }

    .card-details {
        background: var(--brown-50);
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid var(--brown-200);
    }

    .detail-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid var(--brown-200);
    }

    .detail-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .detail-item:first-child {
        padding-top: 0;
    }

    .detail-label {
        color: var(--brown-600);
        font-size: 0.85rem;
        font-weight: 500;
    }

    .detail-value {
        color: var(--brown-800);
        font-size: 0.9rem;
        font-weight: 700;
    }

    .card-footer {
        padding: 20px 24px;
        background: var(--brown-50);
        border-top: 1px solid var(--brown-200);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .card-link {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--brown-700);
        text-decoration: none;
        font-weight: 700;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        padding: 8px 16px;
        background: white;
        border-radius: var(--radius-full);
        border: 1px solid var(--brown-200);
    }

    .card-link:hover {
        background: var(--brown-900);
        color: white;
        border-color: var(--brown-900);
        transform: translateX(5px);
    }

    .card-link i {
        transition: transform 0.3s ease;
    }

    .card-link:hover i {
        transform: translateX(5px);
    }

    .card-status {
        display: flex;
        align-items: center;
        gap: 6px;
        color: var(--brown-600);
        font-size: 0.85rem;
        font-weight: 500;
    }

    .card-status i {
        color: #10B981;
        font-size: 0.6rem;
    }

    /* Benefits Section - FIXED */
    .benefits-section {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--brown-100) 0%, var(--brown-50) 100%);
    }

    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 24px;
    }

    .benefit-card {
        background: white;
        padding: 30px 24px;
        border-radius: var(--radius-lg);
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid var(--brown-200);
        box-shadow: var(--card-shadow);
    }

    .benefit-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--card-hover-shadow);
        border-color: var(--brown-300);
    }

    .benefit-icon {
        width: 70px;
        height: 70px;
        background: var(--gradient-light-brown);
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 1.8rem;
        color: var(--brown-700);
        transition: all 0.3s ease;
    }

    .benefit-card:hover .benefit-icon {
        background: var(--gradient-gold);
        color: var(--brown-900);
        transform: rotate(15deg) scale(1.1);
    }

    .benefit-card h3 {
        font-size: 1.2rem;
        font-weight: 800;
        color: var(--brown-900);
        margin-bottom: 12px;
    }

    .benefit-card p {
        color: var(--brown-600);
        font-size: 0.95rem;
        line-height: 1.5;
    }

    /* Documents Section - FIXED */
    .documents-section {
        padding: 80px 0;
        background: var(--brown-50);
        position: relative;
        overflow: hidden;
    }

    .documents-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image:
            radial-gradient(circle at 10% 20%, rgba(168, 139, 92, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 90% 80%, rgba(168, 139, 92, 0.05) 0%, transparent 50%);
        pointer-events: none;
    }

    .documents-header {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        z-index: 1;
    }

    .documents-title {
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--brown-900);
        margin-bottom: 12px;
        letter-spacing: -0.5px;
    }

    .documents-subtitle {
        color: var(--brown-600);
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .documents-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 24px;
        margin-bottom: 40px;
        position: relative;
        z-index: 1;
    }

    .document-card {
        background: white;
        border-radius: var(--radius-lg);
        padding: 24px;
        box-shadow: var(--card-shadow);
        border: 1px solid var(--brown-200);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .document-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--card-hover-shadow);
        border-color: var(--brown-300);
    }

    .document-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 20px;
    }

    .document-icon {
        width: 56px;
        height: 56px;
        background: var(--gradient-light-brown);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--brown-700);
        font-size: 1.6rem;
        transition: all 0.3s ease;
    }

    .document-card:hover .document-icon {
        background: var(--gradient-gold);
        color: var(--brown-900);
        transform: rotate(-10deg) scale(1.1);
    }

    .document-tag {
        background: var(--brown-100);
        color: var(--brown-700);
        padding: 4px 12px;
        border-radius: var(--radius-full);
        font-weight: 700;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
    }

    .document-body {
        flex-grow: 1;
        margin-bottom: 20px;
    }

    .document-title {
        font-size: 1.2rem;
        font-weight: 800;
        color: var(--brown-900);
        margin-bottom: 8px;
    }

    .document-description {
        color: var(--brown-600);
        font-size: 0.95rem;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .document-meta {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 6px;
        color: var(--brown-500);
        font-size: 0.85rem;
    }

    .meta-item i {
        font-size: 0.95rem;
    }

    .document-footer {
        display: flex;
        gap: 10px;
        padding-top: 20px;
        border-top: 1px solid var(--brown-200);
    }

    .doc-action-btn {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        border: 1px solid var(--brown-200);
        background: white;
        color: var(--brown-600);
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        position: relative;
    }

    .doc-action-btn:hover {
        transform: translateY(-2px);
    }

    .doc-action-btn.preview:hover {
        background: var(--brown-900);
        color: white;
        border-color: var(--brown-900);
    }

    .doc-action-btn.download:hover {
        background: var(--gradient-gold);
        color: var(--brown-900);
        border-color: transparent;
    }

    .doc-action-btn.share:hover {
        background: var(--brown-100);
        color: var(--brown-800);
        border-color: var(--brown-300);
    }

    /* Tooltip for action buttons */
    .doc-action-btn::after {
        content: attr(data-tooltip);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        background: var(--brown-800);
        color: white;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 0.8rem;
        white-space: nowrap;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        pointer-events: none;
        margin-bottom: 8px;
    }

    .doc-action-btn::before {
        content: '';
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        border: 5px solid transparent;
        border-top-color: var(--brown-800);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        pointer-events: none;
        margin-bottom: -2px;
    }

    .doc-action-btn:hover::after,
    .doc-action-btn:hover::before {
        opacity: 1;
        visibility: visible;
    }

    .documents-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px;
        background: white;
        border-radius: var(--radius-lg);
        border: 1px solid var(--brown-200);
        margin-top: 40px;
        position: relative;
        z-index: 1;
        box-shadow: var(--card-shadow);
        flex-wrap: wrap;
        gap: 20px;
    }

    .audit-info {
        display: flex;
        align-items: center;
        gap: 20px;
        flex: 1;
    }

    .audit-icon {
        width: 56px;
        height: 56px;
        background: var(--gradient-light-brown);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--brown-700);
        font-size: 1.6rem;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .audit-icon:hover {
        background: var(--gradient-gold);
        color: var(--brown-900);
        transform: rotate(15deg);
    }

    .audit-content h4 {
        font-size: 1.2rem;
        font-weight: 800;
        color: var(--brown-900);
        margin-bottom: 6px;
    }

    .audit-content p {
        color: var(--brown-600);
        font-size: 0.95rem;
        line-height: 1.5;
    }

    .btn-download-all {
        background: var(--brown-900);
        color: white;
        border: none;
        padding: 14px 28px;
        border-radius: var(--radius-full);
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
        flex-shrink: 0;
        box-shadow: 0 4px 12px rgba(61, 50, 33, 0.2);
    }

    .btn-download-all:hover {
        background: var(--brown-800);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(61, 50, 33, 0.3);
    }

    /* Certification Body Section - FIXED */
    .cert-body-section {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--brown-100) 0%, var(--brown-50) 100%);
    }

    .cert-body-card {
        background: white;
        border-radius: var(--radius-xl);
        padding: 48px;
        box-shadow: var(--card-hover-shadow);
        border: 1px solid var(--brown-200);
    }

    .cert-body-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .cert-body-title {
        font-size: 2rem;
        font-weight: 800;
        color: var(--brown-900);
        margin-bottom: 12px;
    }

    .cert-body-subtitle {
        color: var(--brown-600);
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto;
    }

    .cert-body-content {
        display: flex;
        align-items: center;
        gap: 48px;
        flex-wrap: wrap;
    }

    .cert-body-logo {
        text-align: center;
        flex: 1;
        min-width: 200px;
    }

    .logo-container {
        width: 150px;
        height: 150px;
        background: var(--gradient-light-brown);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 12px;
        margin: 0 auto 20px;
        color: var(--brown-700);
        font-size: 2.5rem;
        transition: all 0.3s ease;
    }

    .logo-container:hover {
        background: var(--gradient-gold);
        color: var(--brown-900);
        transform: scale(1.05);
    }

    .logo-text {
        font-size: 1.3rem;
        font-weight: 800;
        letter-spacing: 1px;
    }

    .cert-badge {
        background: var(--gradient-gold);
        color: var(--brown-900);
        padding: 8px 24px;
        border-radius: var(--radius-full);
        font-weight: 800;
        font-size: 0.95rem;
        display: inline-block;
        box-shadow: 0 4px 12px rgba(230, 179, 37, 0.3);
    }

    .cert-body-info {
        flex: 2;
        min-width: 300px;
    }

    .cert-body-info h3 {
        font-size: 1.8rem;
        font-weight: 800;
        color: var(--brown-900);
        margin-bottom: 16px;
    }

    .cert-body-description {
        color: var(--brown-600);
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 28px;
    }

    .contact-info {
        margin-bottom: 28px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
        color: var(--brown-600);
        font-size: 0.95rem;
    }

    .contact-item i {
        color: var(--brown-700);
        width: 20px;
        font-size: 1rem;
        flex-shrink: 0;
    }

    .cert-body-actions {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }

    .btn-visit-website, .btn-contact {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 28px;
        border-radius: var(--radius-full);
        font-weight: 700;
        font-size: 1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        min-width: 160px;
        justify-content: center;
    }

    .btn-visit-website {
        background: var(--brown-900);
        color: white;
        border: 2px solid var(--brown-900);
        box-shadow: 0 4px 12px rgba(61, 50, 33, 0.2);
    }

    .btn-visit-website:hover {
        background: var(--brown-800);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(61, 50, 33, 0.3);
    }

    .btn-contact {
        background: transparent;
        color: var(--brown-700);
        border: 2px solid var(--brown-300);
    }

    .btn-contact:hover {
        background: var(--brown-100);
        border-color: var(--brown-400);
        transform: translateY(-2px);
    }

    /* CTA Section - FIXED */
    .iso-cta-section {
        padding: 80px 0;
        background: var(--gradient-brown);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .cta-glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60vw;
        height: 60vh;
        background: radial-gradient(circle, rgba(230, 179, 37, 0.2) 0%, transparent 70%);
        pointer-events: none;
    }

    .cta-card {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(25px);
        border-radius: var(--radius-xl);
        padding: 56px 48px;
        border: 1px solid rgba(255, 255, 255, 0.25);
        text-align: center;
        position: relative;
        z-index: 1;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }

    .cta-content {
        margin-bottom: 40px;
    }

    .cta-title {
        font-size: 2.2rem;
        font-weight: 800;
        margin-bottom: 20px;
        color: white;
        letter-spacing: -0.5px;
    }

    .cta-text {
        font-size: 1.1rem;
        color: rgba(255, 248, 225, 0.9);
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .cta-actions {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-cta-primary, .btn-cta-secondary {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 18px 40px;
        border-radius: var(--radius-full);
        font-weight: 800;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        min-width: 240px;
        justify-content: center;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    .btn-cta-primary {
        background: var(--gradient-gold);
        color: var(--brown-900);
    }

    .btn-cta-primary:hover {
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 16px 40px rgba(230, 179, 37, 0.4);
    }

    .btn-cta-secondary {
        background: transparent;
        color: white;
        border: 3px solid rgba(255, 255, 255, 0.4);
    }

    .btn-cta-secondary:hover {
        background: rgba(255, 255, 255, 0.15);
        border-color: white;
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(255, 255, 255, 0.2);
    }

    /* Modal Custom Styles */
    .modal-content {
        background: var(--brown-50);
        border: 1px solid var(--brown-200);
        border-radius: var(--radius-lg);
    }

    .modal-header {
        background: var(--brown-100);
        border-bottom: 1px solid var(--brown-200);
        padding: 20px 30px;
    }

    .modal-title {
        color: var(--brown-900);
        font-weight: 800;
        font-size: 1.3rem;
    }

    .modal-footer {
        background: var(--brown-100);
        border-top: 1px solid var(--brown-200);
        padding: 20px 30px;
    }

    .preview-iframe {
        border-radius: 8px;
        background: white;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .cert-body-content {
            flex-direction: column;
            text-align: center;
            gap: 40px;
        }

        .cert-body-actions {
            justify-content: center;
        }

        .logo-container {
            width: 140px;
            height: 140px;
            font-size: 2.2rem;
        }
    }

    @media (max-width: 992px) {
        .iso-hero-banner {
            padding: 80px 0 50px;
        }

        .hero-title {
            font-size: 2.2rem;
        }

        .hero-stats {
            gap: 16px;
            flex-wrap: wrap;
        }

        .stat-card {
            min-width: 160px;
        }

        .certificate-card {
            position: relative;
            margin-top: 60px;
            max-width: 100%;
        }

        .section-title, .documents-title, .cert-body-title, .cta-title {
            font-size: 2rem;
        }

        .cta-card {
            padding: 48px 32px;
        }
    }

    @media (max-width: 768px) {
        .iso-hero-banner {
            padding: 70px 0 40px;
        }

        .hero-title {
            font-size: 1.8rem;
        }

        .hero-description {
            font-size: 1rem;
        }

        .hero-stats {
            flex-direction: column;
            gap: 12px;
        }

        .stat-card {
            width: 100%;
            min-width: auto;
        }

        .section-title, .documents-title, .cert-body-title, .cta-title {
            font-size: 1.8rem;
        }

        .section-subtitle, .hero-description, .cta-text {
            font-size: 1rem;
        }

        .cert-body-card {
            padding: 32px 24px;
        }

        .documents-footer {
            flex-direction: column;
            gap: 24px;
            text-align: center;
            padding: 24px;
        }

        .audit-info {
            flex-direction: column;
            text-align: center;
        }

        .cta-actions {
            flex-direction: column;
            align-items: center;
        }

        .btn-cta-primary, .btn-cta-secondary {
            width: 100%;
            max-width: 300px;
        }

        .certificate-badge {
            position: relative;
            margin-bottom: 20px;
            max-width: none;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 1.6rem;
        }

        .breadcrumb-wrapper {
            flex-wrap: wrap;
            gap: 6px;
        }

        .breadcrumb-link {
            padding: 5px 10px;
            font-size: 0.85rem;
        }

        .section-title {
            font-size: 1.6rem;
        }

        .iso-grid, .benefits-grid, .documents-grid {
            grid-template-columns: 1fr;
        }

        .cert-body-actions {
            flex-direction: column;
            width: 100%;
        }

        .btn-visit-website, .btn-contact {
            width: 100%;
            justify-content: center;
        }

        .cta-card {
            padding: 32px 20px;
        }

        .btn-cta-primary, .btn-cta-secondary {
            padding: 16px 28px;
            min-width: auto;
            font-size: 1rem;
        }

        .certificate-card {
            position: relative;
            margin: 40px auto 0;
            max-width: 280px;
        }

        .certificate-badge {
            position: relative;
            margin: 0 auto 20px;
            width: fit-content;
        }
    }

    /* Small mobile devices */
    @media (max-width: 400px) {
        .hero-title {
            font-size: 1.4rem;
        }

        .hero-description {
            font-size: 0.95rem;
        }

        .section-title, .documents-title, .cert-body-title, .cta-title {
            font-size: 1.4rem;
        }

        .certificate-card {
            padding: 20px;
            max-width: 260px;
        }

        .certificate-ribbon {
            font-size: 0.8rem;
            padding: 8px 16px;
        }

        .certificate-content h4 {
            font-size: 1.1rem;
        }

        .certificate-footer {
            font-size: 0.75rem;
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tooltip for action buttons
        document.querySelectorAll('.doc-action-btn').forEach(btn => {
            const action = btn.dataset.action;
            let tooltip = '';

            switch(action) {
                case 'preview': tooltip = 'Preview Document'; break;
                case 'download': tooltip = 'Download Document'; break;
                case 'share': tooltip = 'Share Document'; break;
                default: tooltip = 'Action';
            }

            btn.setAttribute('data-tooltip', tooltip);
        });

        // Document action handlers
        document.querySelectorAll('.doc-action-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const card = this.closest('.document-card');
                const docName = card.dataset.docName;
                const docUrl = card.dataset.docUrl;
                const action = this.dataset.action;

                switch(action) {
                    case 'preview':
                        previewDocument(docName, docUrl);
                        break;
                    case 'download':
                        downloadDocument(docName, docUrl);
                        break;
                    case 'share':
                        shareDocument(docName, docUrl);
                        break;
                }
            });
        });

        // Download all button
        document.getElementById('downloadAll')?.addEventListener('click', function() {
            const documents = [
                { name: 'ISO 9001 Certificate', url: '{{ asset("storage/certificates/iso-9001.pdf") }}' },
                { name: 'ISO 14001 Certificate', url: '{{ asset("storage/certificates/iso-14001.pdf") }}' },
                { name: 'ISO 45001 Certificate', url: '{{ asset("storage/certificates/iso-45001.pdf") }}' },
                { name: 'ISO 37001 Certificate', url: '{{ asset("storage/certificates/iso-37001.pdf") }}' },
                { name: 'Integrated ISO Certificate', url: '{{ asset("storage/certificates/integrated-iso.pdf") }}' },
                { name: 'ISO Audit Report 2024', url: '{{ asset("storage/certificates/iso-audit-2024.pdf") }}' }
            ];

            showNotification('Preparing all documents for download...', 'info');

            // Simulate download process
            setTimeout(() => {
                documents.forEach((doc, index) => {
                    setTimeout(() => {
                        const link = document.createElement('a');
                        link.href = doc.url;
                        link.download = doc.name.replace(/\s+/g, '_') + '.pdf';
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);

                        if (index === documents.length - 1) {
                            showNotification('All documents downloaded successfully!', 'success');
                        }
                    }, index * 300);
                });
            }, 1000);
        });

        // Document preview function
        function previewDocument(name, url) {
            const modal = new bootstrap.Modal(document.getElementById('previewModal'));
            const iframe = document.getElementById('previewFrame');
            const downloadBtn = document.getElementById('downloadFromPreview');
            const modalTitle = document.getElementById('previewModalLabel');

            modalTitle.textContent = `Preview: ${name}`;
            iframe.src = url;
            downloadBtn.href = url;
            downloadBtn.download = name.replace(/\s+/g, '_') + '.pdf';

            modal.show();
        }

        // Document download function
        function downloadDocument(name, url) {
            showNotification(`Downloading: ${name}...`, 'download');

            setTimeout(() => {
                const link = document.createElement('a');
                link.href = url;
                link.download = name.replace(/\s+/g, '_') + '.pdf';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);

                setTimeout(() => {
                    showNotification(`${name} downloaded successfully!`, 'success');
                }, 500);
            }, 300);
        }

        // Document share function
        function shareDocument(name, url) {
            if (navigator.share) {
                navigator.share({
                    title: name,
                    text: `Check out this document: ${name}`,
                    url: window.location.href
                })
                .then(() => showNotification('Document shared successfully!', 'share'))
                .catch(err => {
                    console.error('Error sharing:', err);
                    copyToClipboard(window.location.href);
                    showNotification('Link copied to clipboard!', 'info');
                });
            } else {
                copyToClipboard(window.location.href);
                showNotification('Link copied to clipboard!', 'info');
            }
        }

        // Copy to clipboard function
        function copyToClipboard(text) {
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
        }

        // Initialize animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all cards and sections
        document.querySelectorAll('.iso-card, .benefit-card, .document-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(el);
        });

        // Add CSS for animations
        const style = document.createElement('style');
        style.textContent = `
            .animate-in {
                opacity: 1 !important;
                transform: translateY(0) !important;
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .notification {
                position: fixed;
                top: 20px;
                right: 20px;
                background: white;
                padding: 14px 20px;
                border-radius: 10px;
                box-shadow: var(--shadow-xl);
                z-index: 10000;
                animation: slideInRight 0.3s ease;
                border-left: 4px solid var(--brown-600);
                display: flex;
                align-items: center;
                gap: 12px;
                max-width: 350px;
            }

            .notification.success {
                border-left-color: #10B981;
                background: #F0FDF4;
            }

            .notification.info {
                border-left-color: #3B82F6;
                background: #EFF6FF;
            }

            .notification.download {
                border-left-color: var(--accent-gold);
                background: var(--accent-cream);
            }

            .notification.share {
                border-left-color: #EC4899;
                background: #FDF2F8;
            }

            .notification-content {
                display: flex;
                align-items: center;
                gap: 10px;
                flex: 1;
            }

            .notification-content i {
                font-size: 1.1rem;
            }

            .notification.success i { color: #10B981; }
            .notification.info i { color: #3B82F6; }
            .notification.download i { color: var(--accent-gold); }
            .notification.share i { color: #EC4899; }

            .notification-content span {
                color: var(--brown-800);
                font-weight: 500;
                font-size: 0.9rem;
            }

            .notification-close {
                background: none;
                border: none;
                color: var(--brown-400);
                cursor: pointer;
                padding: 4px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: color 0.3s ease;
            }

            .notification-close:hover {
                color: var(--brown-600);
            }

            @keyframes slideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }

            @keyframes slideOutRight {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(100%);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Notification system
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.innerHTML = `
                <div class="notification-content">
                    <i class="fas fa-${type === 'success' ? 'check-circle' :
                                    type === 'download' ? 'download' :
                                    type === 'preview' ? 'eye' :
                                    type === 'share' ? 'share-alt' : 'info-circle'}"></i>
                    <span>${message}</span>
                </div>
                <button class="notification-close">
                    <i class="fas fa-times"></i>
                </button>
            `;

            document.body.appendChild(notification);

            // Close button
            notification.querySelector('.notification-close').addEventListener('click', () => {
                notification.style.animation = 'slideOutRight 0.3s ease';
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.remove();
                    }
                }, 300);
            });

            // Auto remove
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.style.animation = 'slideOutRight 0.3s ease';
                    setTimeout(() => {
                        if (notification.parentNode) {
                            notification.remove();
                        }
                    }, 300);
                }
            }, 4000);
        }
    });
</script>
@endpush
