@extends('user.layouts.app')

@section('title', 'Sertifikasi dan Legalitas | PT Mitra Nusa Konsulindo')
@section('description', 'Data legalitas, sertifikasi, dan asosiasi perusahaan PT Mitra Nusa Konsulindo.')

@section('content')
<section class="legal-hero position-relative overflow-hidden">
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
                        <i class="fas fa-gavel me-2"></i>LEGALITAS & SERTIFIKASI
                    </span>
                </div>
                <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                    Sertifikasi <span class="text-gradient-brown">& Legalitas</span>
                </h1>
                <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.2s;">
                    Seluruh izin, sertifikat, dan keanggotaan asosiasi yang dimiliki perusahaan.
                </p>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <a href="#legal-content" class="scroll-down"><i class="fas fa-chevron-down"></i></a>
    </div>
</section>

<section id="legal-content" class="py-6 bg-white position-relative">
    <div class="section-bg-decoration">
        <div class="decoration-circle"></div>
        <div class="decoration-circle"></div>
    </div>
    <div class="container position-relative z-2">
        <div class="row g-5">
            <!-- Kolom Kiri: Identitas Perusahaan -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-3d rounded-4 p-4 p-lg-5 bg-white h-100">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-circle bg-brown-subtle text-brown-dark me-3">
                            <i class="fas fa-building fa-lg"></i>
                        </div>
                        <h2 class="h3 fw-bold text-brown-dark mb-0">Identitas Perusahaan</h2>
                    </div>
                    <div class="legal-list">
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-map-marker-alt text-cream-gold me-2"></i>Domisili</div>
                            <div class="data-value">{{ $companyProfile->address_main ?? '-' }}
                                    @if($companyProfile->address_main && $companyProfile->address_branch)&nbsp;&amp;&nbsp;@endif
                                {{ $companyProfile->address_branch ?? '-' }}</div>
                        </div>
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-file-alt text-cream-gold me-2"></i>Akta Pendirian</div>
                            <div class="legal-value">{{ $certificate->akta_pendirian ?? 'Akta Pendirian No. 19 tanggal 22 Oktober 2020 oleh Susyana Herlawati, SH, M.Kn' }}</div>
                        </div>
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-file-contract text-cream-gold me-2"></i>Akta Perubahan</div>
                            <div class="legal-value">{{ $certificate->akta_perubahan ?? 'Akta Perubahan No. 03 tanggal 07 Desember 2023' }}</div>
                        </div>
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-stamp text-cream-gold me-2"></i>Pengesahan AHU</div>
                            <div class="legal-value">{{ $certificate->pengesahan_ahu ?? 'AHU-0057316.AH.01.01.TAHUN 2020, tanggal 4 November 2020' }}</div>
                        </div>
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-id-card text-cream-gold me-2"></i>NPWP</div>
                            <div class="legal-value">{{ $companyProfile->npwp ?? '-' }}</div>
                        </div>
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-qrcode text-cream-gold me-2"></i>NIB</div>
                            <div class="legal-value">{{ $companyProfile->nib ?? '-' }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Sertifikasi dan Asosiasi -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-3d rounded-4 p-4 p-lg-5 bg-white h-100">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-circle bg-brown-subtle text-brown-dark me-3">
                            <i class="fas fa-certificate fa-lg"></i>
                        </div>
                        <h2 class="h3 fw-bold text-brown-dark mb-0">Sertifikasi & Asosiasi</h2>
                    </div>
                    <div class="legal-list">
                        @php
                            $cert = $certificates;
                        @endphp
                        {{-- <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-briefcase text-cream-gold me-2"></i>SIUJK</div>
                            <div class="legal-value">{{ $cert->siujk ?? '-' }}</div>
                        </div> --}}
                        {{-- <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-store text-cream-gold me-2"></i>SIUP</div>
                            <div class="legal-value">{{ $cert->siup ?? '-' }}</div>
                        </div> --}}
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-chart-line text-cream-gold me-2"></i>PKP</div>
                            <div class="legal-value">{{ $certificates->pkp ?? '-' }}</div>
                        </div>
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-file-invoice text-cream-gold me-2"></i>SKT Pajak</div>
                            <div class="legal-value">{{ $certificates->skt_pajak ?? 'Terdaftar DJP sejak 4 November 2020, NPWP 96.431.796.0-429.000' }}</div>
                        </div>
                        {{-- <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-calendar-check text-cream-gold me-2"></i>Bukti SPT Tahunan</div>
                            <div class="legal-value">{{ $cert->bukti_spt ?? 'SPT 1771 Tahun Pajak 2024, status Nihil, tanggal penyampaian 10/03/2025' }}</div>
                        </div> --}}
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-hard-hat text-cream-gold me-2"></i>SBU Konstruksi</div>
                            <div class="legal-value">
                                @if($certificates->sbu_konstruksi)
                                    {{ $certificates->sbu_konstruksi }}
                                @else
                                    AL001, AL002, AL003, AL004, AR001, AR002, AR003, RK001, RK002, RK003, RK005
                                @endif
                            </div>
                        </div>
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-chalkboard-user text-cream-gold me-2"></i>SBU Non‑Konstruksi</div>
                            <div class="legal-value">
                                @if($certificates->sbu_non_konstruksi)
                                    {{ $certificates->sbu_non_konstruksi }}
                                @else
                                    Pertanian, Transportasi, Telematika, Manajemen, Jasa Khusus, Studi/Penelitian, Survey
                                @endif
                            </div>
                        </div>
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-certificate text-cream-gold me-2"></i>Sertifikat ISO</div>
                            <div class="legal-value">{{ $certificates->iso ?? 'Dokumen tersedia pada galeri perusahaan.' }}</div>
                        </div>
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-star-of-life text-cream-gold me-2"></i>Sertifikasi Baru</div>
                            <div class="legal-value">{{ $certificates->sertifikasi_baru ?? '-' }}</div>
                        </div>
                        @if($certificates->image)
                        <div class="legal-item">
                            <div class="legal-label"><i class="fas fa-image text-cream-gold me-2"></i>Dokumen Pendukung</div>
                            <div class="legal-value">
                                <a href="{{ asset($certificates->image) }}" target="_blank" class="btn btn-outline-brown-3d btn-sm rounded-pill">
                                    <i class="fas fa-external-link-alt"></i> Lihat Sertifikat
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Catatan tambahan jika ada -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 shadow-3d rounded-4 p-4 bg-cream-light text-center">
                    <p class="text-brown-medium mb-0">
                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                        Seluruh dokumen legal dan sertifikasi dapat diverifikasi kebenarannya melalui instansi penerbit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION (optional, sama seperti halaman lain) -->
<section class="py-6 cta-elegant">
    <div class="container">
        <div class="cta-content-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-6 fw-bold mb-3">Butuh informasi lebih lengkap?</h2>
                    <p class="lead mb-0">
                        Silakan hubungi tim administrasi kami untuk dokumen legalitas lebih detail.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 rounded-pill">
                        <i class="fas fa-envelope me-2"></i>Hubungi Kami
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
    /* ===== GAYA PREMIUM ===== */
    :root {
        --brown-dark: #241b64;
        --brown-medium: #302574;
        --brown-light: #4b3dad;
        --cream-gold: #ef332d;
        --cream-dark: #eef2ff;
        --cream-medium: #f8fafc;
        --cream-light: #f8fafc;
        --white: #ffffff;
        --shadow-3d: 0 20px 40px rgba(36,27,100,0.16), 0 10px 20px rgba(0,0,0,0.08);
    }

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
        background: rgba(36, 27, 100, 0.05);
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
        background: rgba(239, 51, 45, 0.05);
        animation-delay: 10s;
    }
    .pattern-square {
        position: absolute;
        background: rgba(36, 27, 100, 0.03);
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
        background: rgba(239, 51, 45, 0.03);
        animation-delay: -15s;
    }
    @keyframes float {
        0%,100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .min-vh-60 { min-height: 60vh; }
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
    .badge.bg-brown-dark {
        background-color: rgba(36, 27, 100, 0.9) !important;
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        color: white;
    }
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
        background: rgba(255,255,255,0.9);
        box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
        transition: all 0.3s;
    }
    .scroll-down:hover {
        background: white;
        transform: scale(1.1);
    }
    @keyframes bounce {
        0%,20%,50%,80%,100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
    }

    /* Card dan shadow */
    .shadow-3d {
        box-shadow: var(--shadow-3d);
        border-radius: 1.5rem !important;
    }
    .icon-circle {
        width: 48px;
        height: 48px;
        background: rgba(36,27,100,0.08);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }
    .legal-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .legal-item {
        border-bottom: 1px solid rgba(36,27,100,0.08);
        padding-bottom: 0.8rem;
    }
    .legal-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    .legal-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--brown-medium);
        font-weight: 700;
        margin-bottom: 0.25rem;
        display: flex;
        align-items: center;
    }
    .legal-value {
        font-size: 0.9rem;
        color: var(--brown-dark);
        font-weight: 500;
        line-height: 1.45;
    }
    .btn-outline-brown-3d {
        border: 2px solid var(--brown-dark);
        color: var(--brown-dark);
        background: transparent;
        font-weight: 600;
        transition: all 0.3s;
    }
    .btn-outline-brown-3d:hover {
        background: var(--brown-dark);
        color: white;
        transform: translateY(-3px);
    }
    .btn-brown-3d {
        background: linear-gradient(145deg, var(--brown-dark), #171247);
        border: none;
        color: white;
        font-weight: 600;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 16px rgba(36,27,100,0.2);
    }
    .btn-brown-3d:hover {
        transform: translateY(-3px);
        background: linear-gradient(145deg, #171247, var(--brown-dark));
        color: var(--cream-gold);
    }
    .btn-brown-3d .btn-shine {
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(120deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }
    .btn-brown-3d:hover .btn-shine {
        left: 100%;
    }
    .cta-elegant {
        background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
        position: relative;
        overflow: hidden;
    }
    .cta-elegant::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 20% 30%, rgba(36,27,100,0.12) 0%, transparent 50%),
                    radial-gradient(circle at 80% 70%, rgba(239,51,45,0.10) 0%, transparent 55%);
    }
    .cta-content-wrapper {
        position: relative;
        z-index: 2;
        padding: 3rem;
        background: rgba(255,255,255,0.92);
        border-radius: 1.5rem;
        box-shadow: 0 14px 40px rgba(0,0,0,0.12);
        border: 1px solid rgba(255,255,255,0.6);
        backdrop-filter: blur(14px);
    }
    .cta-elegant h2 {
        background: linear-gradient(135deg, #241b64, #302574);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .cta-elegant .lead {
        color: #4b3dad;
    }
    .bg-cream-light {
        background-color: var(--cream-light) !important;
    }
    .py-6 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important;
    }

    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-down { animation: fadeInDown 0.8s ease-out forwards; }
    .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }

    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .legal-hero { padding: 5rem 0 3rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }
    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
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
        // Smooth scroll untuk anchor
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
            });
        });
    });
</script>
@endpush

{{-- @extends('user.layouts.app')

@section('title', 'Sertifikasi dan Legalitas | PT Mitra Nusa Konsulindo')
@section('description', 'Data legalitas, sertifikasi, dan asosiasi perusahaan PT Mitra Nusa Konsulindo.')

@section('content')
<section class="legal-hero position-relative overflow-hidden">
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
                        <i class="fas fa-gavel me-2"></i>LEGALITAS & SERTIFIKASI
                    </span>
                </div>
                <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                    Sertifikasi <span class="text-gradient-brown">& Legalitas</span>
                </h1>
                <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.2s;">
                    Seluruh izin, sertifikat, dan keanggotaan asosiasi yang dimiliki perusahaan.
                </p>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <a href="#legal-content" class="scroll-down"><i class="fas fa-chevron-down"></i></a>
    </div>
</section>

<section id="legal-content" class="py-6 bg-white position-relative">
    <div class="section-bg-decoration">
        <div class="decoration-circle"></div>
        <div class="decoration-circle"></div>
    </div>
    <div class="container position-relative z-2">
        <!-- Tabel Daftar Sertifikat -->
        <div class="card border-0 shadow-3d rounded-4 overflow-hidden">
            <div class="card-header bg-brown-dark text-white py-3">
                <h3 class="h4 mb-0 fw-semibold"><i class="fas fa-certificate me-2"></i> Seluruh Dokumen Sertifikat & Legalitas</h3>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-cream-light">
                            <tr>
                                <th class="px-4 py-3">No</th>
                                <th class="px-4 py-3">Jenis</th>
                                <th class="px-4 py-3">Nomor Dokumen</th>
                                <th class="px-4 py-3">Nama</th>
                                <th class="px-4 py-3">Penerbit</th>
                                <th class="px-4 py-3">Tanggal Terbit</th>
                                <th class="px-4 py-3">Berlaku s.d.</th>
                                <th class="px-4 py-3">Kualifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($certificates as $index => $cert)
                            <tr>
                                <td class="px-4 py-3">{{ $index + $certificates->firstItem() }}</td>
                                <td class="px-4 py-3">
                                    <span class="badge bg-brown-subtle text-brown-dark px-3 py-2 rounded-pill fw-semibold">
                                        {{ $cert->jenis_sertifikat }}
                                    </span>
                                </td>
                                <td class="px-4 py-3"><code>{{ $cert->nomor_sertifikat }}</code></td>
                                <td class="px-4 py-3 fw-semibold">{{ $cert->nama_sertifikat }}</td>
                                <td class="px-4 py-3">{{ $cert->penerbit }}</td>
                                <td class="px-4 py-3">{{ $cert->tanggal_terbit ? date('d/m/Y', strtotime($cert->tanggal_terbit)) : '-' }}</td>
                                <td class="px-4 py-3">{{ $cert->tanggal_berlaku_sampai ? date('d/m/Y', strtotime($cert->tanggal_berlaku_sampai)) : 'Tidak terbatas' }}</td>
                                <td class="px-4 py-3">{{ $cert->kualifikasi ?? '-' }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center py-5 text-brown-medium">Belum ada data sertifikat.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white border-0 py-3 d-flex justify-content-center">
                {{-- PAGINATION MANUAL: hanya < 1 2 > --}}
                {{-- @php
                    $currentPage = $certificates->currentPage();
                    $lastPage = $certificates->lastPage();
                    $prevUrl = $certificates->previousPageUrl();
                    $nextUrl = $certificates->nextPageUrl();
                @endphp
                @if ($lastPage > 1)
                    <ul class="pagination-custom">
                        {{-- Tombol < --}}
                        {{-- @if ($prevUrl)
                            <li><a href="{{ $prevUrl }}" class="page-link-custom">&lt;</a></li>
                        @else
                            <li><span class="page-link-custom disabled">&lt;</span></li>
                        @endif

                        {{-- Nomor halaman (hanya 1 dan 2, seperti screenshot) --}}
                        {{-- @for ($i = 1; $i <= min($lastPage, 2); $i++)
                            @if ($i == $currentPage)
                                <li><span class="page-link-custom active">{{ $i }}</span></li>
                            @else
                                <li><a href="{{ $certificates->url($i) }}" class="page-link-custom">{{ $i }}</a></li>
                            @endif
                        @endfor

                        {{-- Tombol > --}}
                        {{-- @if ($nextUrl)
                            <li><a href="{{ $nextUrl }}" class="page-link-custom">&gt;</a></li>
                        @else
                            <li><span class="page-link-custom disabled">&gt;</span></li>
                        @endif
                    </ul>
                @endif
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 shadow-3d rounded-4 p-4 bg-cream-light text-center">
                    <p class="text-brown-medium mb-0">
                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                        Seluruh dokumen legal dan sertifikasi dapat diverifikasi kebenarannya melalui instansi penerbit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-6 cta-elegant">
    <div class="container">
        <div class="cta-content-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-6 fw-bold mb-3">Butuh informasi lebih lengkap?</h2>
                    <p class="lead mb-0">Silakan hubungi tim administrasi kami untuk dokumen legalitas lebih detail.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 rounded-pill">
                        <i class="fas fa-envelope me-2"></i>Hubungi Kami
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
    /* ===== GAYA PREMIUM ===== */
    :root {
        --brown-dark: #241b64;
        --brown-medium: #302574;
        --brown-light: #4b3dad;
        --cream-gold: #ef332d;
        --cream-light: #f8fafc;
        --white: #ffffff;
        --shadow-3d: 0 20px 40px rgba(36,27,100,0.16), 0 10px 20px rgba(0,0,0,0.08);
    }
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
        background: rgba(36, 27, 100, 0.05);
        animation: float 20s ease-in-out infinite;
    }
    .pattern-circle.circle-1 {
        width: 300px;
        height: 300px;
        top: -150px;
        right: -100px;
    }
    .pattern-circle.circle-2 {
        width: 200px;
        height: 200px;
        bottom: -80px;
        left: -80px;
        background: rgba(239, 51, 45, 0.05);
        animation-delay: 10s;
    }
    .pattern-square {
        position: absolute;
        background: rgba(36, 27, 100, 0.03);
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
        background: rgba(239, 51, 45, 0.03);
    }
    @keyframes float {
        0%,100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .min-vh-60 { min-height: 60vh; }
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
    .badge.bg-brown-dark {
        background-color: rgba(36, 27, 100, 0.9) !important;
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
    }
    .badge.bg-brown-subtle {
        background-color: rgba(36,27,100,0.12) !important;
        color: var(--brown-dark) !important;
        font-weight: 600;
    }
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
        background: rgba(255,255,255,0.9);
        box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
        transition: all 0.3s;
    }
    .scroll-down:hover {
        background: white;
        transform: scale(1.1);
    }
    @keyframes bounce {
        0%,20%,50%,80%,100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
    }
    .shadow-3d {
        box-shadow: var(--shadow-3d);
        border-radius: 1.5rem !important;
    }
    .bg-brown-dark {
        background-color: var(--brown-dark) !important;
    }
    .bg-cream-light {
        background-color: var(--cream-light) !important;
    }
    .table th {
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
        color: var(--brown-dark);
    }
    .table td {
        font-size: 0.85rem;
        vertical-align: middle;
    }
    .table code {
        font-size: 0.8rem;
        background: #f1f5f9;
        padding: 0.2rem 0.4rem;
        border-radius: 6px;
        color: var(--brown-dark);
    }
    .btn-brown-3d {
        background: linear-gradient(145deg, var(--brown-dark), #171247);
        border: none;
        color: white;
        font-weight: 600;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 16px rgba(36,27,100,0.2);
    }
    .btn-brown-3d:hover {
        transform: translateY(-3px);
        background: linear-gradient(145deg, #171247, var(--brown-dark));
        color: var(--cream-gold);
    }
    .btn-brown-3d .btn-shine {
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(120deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }
    .btn-brown-3d:hover .btn-shine {
        left: 100%;
    }
    .cta-elegant {
        background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
        position: relative;
        overflow: hidden;
    }
    .cta-elegant::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 20% 30%, rgba(36,27,100,0.12) 0%, transparent 50%),
                    radial-gradient(circle at 80% 70%, rgba(239,51,45,0.10) 0%, transparent 55%);
    }
    .cta-content-wrapper {
        position: relative;
        z-index: 2;
        padding: 3rem;
        background: rgba(255,255,255,0.92);
        border-radius: 1.5rem;
        box-shadow: 0 14px 40px rgba(0,0,0,0.12);
        border: 1px solid rgba(255,255,255,0.6);
        backdrop-filter: blur(14px);
    }
    .cta-elegant h2 {
        background: linear-gradient(135deg, #241b64, #302574);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .py-6 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important;
    }
    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-down { animation: fadeInDown 0.8s ease-out forwards; }
    .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }

    /* ===== PAGINATION MANUAL: < 1 2 > ===== */
    .pagination-custom {
        display: flex;
        gap: 0.5rem;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .pagination-custom li {
        display: inline-block;
    }
    .page-link-custom {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 2.5rem;
        height: 2.5rem;
        padding: 0 0.75rem;
        border-radius: 0.5rem;
        background-color: white;
        border: 1px solid #dee2e6;
        color: #4a5568;   /* abu-abu gelap untuk angka tidak aktif */
        font-weight: 600;
        text-decoration: none;
        transition: all 0.2s;
    }
    .page-link-custom:hover:not(.disabled) {
        background-color: #e9ecef;
        color: #ef332d;
        border-color: #ced4da;
    }
    .page-link-custom.active {
        background-color: #241b64;
        border-color: #241b64;
        color: white !important;   /* ANGKA AKTIF WARNA PUTIH */
    }
    .page-link-custom.disabled {
        color: #a0aec0;
        pointer-events: none;
        background-color: #f8f9fa;
        border-color: #dee2e6;
    }
    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .table th, .table td { font-size: 0.7rem; padding: 0.5rem; }
        .page-link-custom { min-width: 2rem; height: 2rem; padding: 0 0.5rem; font-size: 0.8rem; }
    }
    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
    }
</style>
@endpush --}} --}} --}} --}} --}}
