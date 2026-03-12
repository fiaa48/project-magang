@extends('layouts.app')

@section('content')

<div class="container py-5">

<!-- BREADCRUMB SIMPLE -->
<div class="mb-4">
    <a href="{{ url()->previous() }}" class="text-decoration-none" style="color: #0A2647;">
        <i class="bi bi-arrow-left me-1"></i>Kembali
    </a>
    <span class="mx-2 text-muted">|</span>
    <span class="text-muted">Detail Sertifikat</span>
</div>

<!-- HEADER SECTION -->
<div class="text-center mb-5 position-relative">
    <!-- Badge Kategori -->
    <div class="d-flex justify-content-center gap-2 mb-3">
        <span class="badge px-3 py-2 rounded-pill" style="background: #F1F5F9; color: #0A2647; border: 1px solid #E2E8F0;">
            <i class="bi bi-patch-check-fill me-1" style="color: #DC2626;"></i>
            {{ strtoupper($certificate->type ?? 'SERTIFIKAT') }}
        </span>
    </div>

    <h2 class="display-6 fw-bold mb-3" style="color: #0A2647;">
        {{ $certificate->name }}
    </h2>

    <p class="text-muted mb-0" style="font-size: 1.1rem; color: #4B5563 !important;">
        <i class="bi bi-file-earmark-text me-2" style="color: #DC2626;"></i>
        Dokumen sertifikasi perusahaan
    </p>
</div>

<!-- MAIN CONTENT -->
<div class="row justify-content-center">
    <div class="col-lg-9">

        <!-- CARD UTAMA -->
        <div class="cert-card">

            <!-- BADGE TAHUN (FLOATING) -->
            <div class="position-relative">
                <div class="position-absolute top-0 end-0 mt-4 me-4" style="z-index: 10;">
                    <span class="badge px-4 py-3 rounded-pill shadow-sm" style="background: #0A2647; color: white; border: 2px solid white;">
                        <i class="bi bi-calendar-check me-2" style="color: #DC2626;"></i>
                        {{ $certificate->year }}
                    </span>
                </div>
            </div>

            <!-- IMAGE SECTION DENGAN FRAME -->
            <div class="cert-image-wrapper text-center mb-4">
                <div class="cert-image-border">
                    <div class="cert-image">
                        <img src="{{ asset($certificate->image) }}"
                             class="img-fluid"
                             alt="{{ $certificate->name }}"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/800x600?text=Image+Not+Found';">
                    </div>
                </div>
            </div>

            <!-- INFO TAMBAHAN (OPTIONAL, BISA DIISI META DATA) -->
            <div class="cert-meta mb-4">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-3" style="background: #F8FAFC; border: 1px solid #E2E8F0;">
                            <div class="me-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                     style="width: 40px; height: 40px; background: white;">
                                    <i class="bi bi-building" style="color: #DC2626;"></i>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted d-block">Penerbit</small>
                                <span class="fw-semibold" style="color: #0A2647;">PT. Perusahaan Terpercaya</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-3" style="background: #F8FAFC; border: 1px solid #E2E8F0;">
                            <div class="me-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                     style="width: 40px; height: 40px; background: white;">
                                    <i class="bi bi-calendar2-week" style="color: #DC2626;"></i>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted d-block">Masa Berlaku</small>
                                <span class="fw-semibold" style="color: #0A2647;">{{ $certificate->expiry_date ?? 'Belum ditentukan' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DESKRIPSI (OPTIONAL) -->
            @if(isset($certificate->description))
            <div class="cert-description mb-4 p-4 rounded-3" style="background: #F8FAFC; border: 1px solid #E2E8F0;">
                <h6 class="fw-semibold mb-3" style="color: #0A2647;">
                    <i class="bi bi-info-circle me-2" style="color: #DC2626;"></i>Deskripsi
                </h6>
                <p class="text-muted mb-0">{{ $certificate->description }}</p>
            </div>
            @endif

            <!-- ACTION BUTTONS -->
            <div class="cert-actions mt-4 pt-3">
                <div class="d-flex justify-content-center gap-3 flex-wrap">

                    <a href="{{ url()->previous() }}" class="btn-outline-primary">
                        <i class="bi bi-arrow-left me-2"></i>
                        Kembali
                    </a>

                    <a href="{{ asset($certificate->image) }}"
                       target="_blank"
                       class="btn-primary">
                        <i class="bi bi-eye-fill me-2"></i>
                        Lihat Fullscreen
                    </a>

                    <a href="{{ asset($certificate->image) }}"
                       download="{{ $certificate->name }}.jpg"
                       class="btn-outline-primary">
                        <i class="bi bi-download me-2"></i>
                        Download
                    </a>

                </div>

                <!-- TIPS (OPTIONAL) -->
                <p class="text-center text-muted mt-4 mb-0 small">
                    <i class="bi bi-lightbulb me-1" style="color: #DC2626;"></i>
                    Klik "Lihat Fullscreen" untuk melihat sertifikat dalam ukuran besar
                </p>
            </div>

        </div>

        <!-- RELATED CERTIFICATES (OPTIONAL) -->
        @if(isset($relatedCertificates) && $relatedCertificates->count() > 0)
        <div class="related-section mt-5">
            <h5 class="fw-semibold mb-4" style="color: #0A2647;">
                <i class="bi bi-link-45deg me-2" style="color: #DC2626;"></i>
                Sertifikat Lainnya
            </h5>
            <div class="row g-3">
                @foreach($relatedCertificates as $related)
                <div class="col-md-4">
                    <a href="{{ route('certifications.view', $related->id) }}" class="text-decoration-none">
                        <div class="card border-0 shadow-sm rounded-4 p-3" style="background: #F8FAFC; border: 1px solid #E2E8F0;">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                                     style="width: 40px; height: 40px; background: white;">
                                    <i class="bi bi-file-earmark-text" style="color: #DC2626;"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">{{ $related->year }}</small>
                                    <span class="fw-semibold" style="color: #0A2647;">{{ Str::limit($related->name, 20) }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>

</div>

<style>
/* BOOTSTRAP ICONS */
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

:root {
    --dark-blue: #0A2647;
    --red-accent: #DC2626;
    --light-bg: #F8FAFC;
    --border-color: #E2E8F0;
}

/* MAIN CARD STYLE */
.cert-card {
    background: white;
    padding: 40px;
    border-radius: 32px;
    box-shadow: 0 20px 40px rgba(10, 38, 71, 0.08);
    border: 1px solid var(--border-color);
    position: relative;
    transition: all 0.3s ease;
}

.cert-card:hover {
    box-shadow: 0 30px 50px rgba(10, 38, 71, 0.12);
}

/* IMAGE WRAPPER */
.cert-image-wrapper {
    padding: 20px;
    background: var(--light-bg);
    border-radius: 24px;
    border: 1px solid var(--border-color);
}

.cert-image-border {
    padding: 10px;
    background: white;
    border-radius: 16px;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);
}

.cert-image {
    border-radius: 12px;
    overflow: hidden;
    background: #f9f9f9;
}

.cert-image img {
    max-height: 500px;
    width: 100%;
    object-fit: contain;
    transition: transform 0.5s ease;
}

.cert-image:hover img {
    transform: scale(1.02);
}

/* BUTTON STYLES */
.btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 28px;
    border-radius: 50px;
    background: var(--dark-blue);
    color: white;
    font-size: 0.95rem;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid var(--dark-blue);
    box-shadow: 0 4px 12px rgba(10, 38, 71, 0.2);
}

.btn-primary:hover {
    background: var(--red-accent);
    border-color: var(--red-accent);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(220, 38, 38, 0.3);
    color: white;
}

.btn-outline-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 28px;
    border-radius: 50px;
    background: transparent;
    color: var(--dark-blue);
    font-size: 0.95rem;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid var(--dark-blue);
}

.btn-outline-primary:hover {
    background: var(--dark-blue);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(10, 38, 71, 0.2);
}

.btn-outline-primary i {
    transition: transform 0.2s ease;
}

.btn-outline-primary:hover i {
    transform: translateX(-3px);
}

/* BREADCRUMB LINK */
a[href="{{ url()->previous() }}"]:not(.btn-outline-primary) {
    color: var(--dark-blue);
    font-weight: 500;
    transition: color 0.2s ease;
}

a[href="{{ url()->previous() }}"]:not(.btn-outline-primary):hover {
    color: var(--red-accent);
}

/* BADGE STYLE */
.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}

/* META INFO CARDS */
.rounded-3 {
    transition: all 0.2s ease;
}

.rounded-3:hover {
    border-color: var(--red-accent) !important;
    background: white !important;
}

/* ANIMATIONS */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.cert-card {
    animation: slideIn 0.4s ease forwards;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .cert-card {
        padding: 20px;
    }

    .btn-primary, .btn-outline-primary {
        padding: 10px 20px;
        font-size: 0.9rem;
        width: 100%;
    }

    .position-absolute {
        position: relative !important;
        text-align: right;
        margin-bottom: 15px;
    }

    .badge.px-4.py-3 {
        font-size: 0.9rem;
        padding: 8px 16px !important;
    }
}

/* PRINT STYLE (OPTIONAL) */
@media print {
    .btn-primary, .btn-outline-primary, .related-section {
        display: none;
    }

    .cert-card {
        box-shadow: none;
        border: 1px solid #ccc;
    }
}

/* CUSTOM SCROLLBAR */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: var(--light-bg);
}

::-webkit-scrollbar-thumb {
    background: var(--dark-blue);
    border-radius: 8px;
}

::-webkit-scrollbar-thumb:hover {
    background: var(--red-accent);
}

/* GLOW EFFECT FOR IMAGE */
.cert-image {
    position: relative;
}

.cert-image::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 12px;
    box-shadow: 0 0 0 1px rgba(10, 38, 71, 0.05);
    pointer-events: none;
}

/* LINK STYLES */
a {
    transition: all 0.2s ease;
}

/* SELECTION COLOR */
::selection {
    background: var(--dark-blue);
    color: white;
}
</style>

@endsection
