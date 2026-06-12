@extends('user.layouts.app')

@section('title', 'Proyek Kami | PT Mitra Nusa Konsulindo')
@section('description', 'Daftar proyek konsultansi konstruksi dan non-konstruksi yang telah kami selesaikan dengan profesional.')

@section('content')
    <!-- HERO SECTION -->
    <section class="project-hero position-relative overflow-hidden">
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
                            <i class="fas fa-folder-open me-2"></i>PORTOFOLIO PROYEK
                        </span>
                    </div>
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Proyek <span class="text-gradient-brown">Kami</span>
                    </h1>
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.2s;">
                        Berikut adalah proyek-proyek terpilih yang telah kami selesaikan dengan standar profesional tertinggi.
                    </p>
                    <div class="scroll-indicator mt-5">
                        <a href="#project-table" class="scroll-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TABEL PROYEK -->
    <section id="project-table" class="py-6 bg-white">
        <div class="container">
            <div class="section-header text-center mb-5">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-table me-2"></i>DAFTAR PROYEK
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Proyek yang Telah Dilaksanakan</h2>
                <p class="lead text-brown-medium">Berbagai proyek konstruksi dan non‑konstruksi dari berbagai sektor.</p>
            </div>

            @if($projects->count() > 0)
            <div class="table-responsive">
                <table class="table premium-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Proyek</th>
                            <th>Kategori</th>
                            <th>Lokasi</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $index => $project)
                        <tr>
                            {{-- Nomor urut dengan pagination --}}
                            <td data-label="No">
                                {{ $loop->iteration + (method_exists($projects, 'currentPage') ? ($projects->currentPage() - 1) * $projects->perPage() : 0) }}
                            </td>
                            <td data-label="Nama Proyek"><strong>{{ is_object($project) ? $project->title : $project }}</strong></td>
                            <td data-label="Kategori">
                                <span class="badge bg-brown-light-subtle text-brown-dark">{{ is_object($project) ? ($project->category ?? '-') : '-' }}</span>
                            </td>
                            <td data-label="Lokasi">{{ is_object($project) ? ($project->location ?? '-') : '-' }}</td>
                            <td data-label="Tahun">{{ is_object($project) ? ($project->year ?? '-') : '-' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- PAGINATION (seperti gaya admin) --}}
            @if(method_exists($projects, 'hasPages') && $projects->hasPages())
            <div class="d-flex justify-content-center mt-5">
                <ul class="pagination-custom">
                    {{-- Previous --}}
                    @if($projects->onFirstPage())
                        <li><span class="page-link-custom disabled"><i class="fas fa-chevron-left"></i></span></li>
                    @else
                        <li><a href="{{ $projects->previousPageUrl() }}" class="page-link-custom"><i class="fas fa-chevron-left"></i></a></li>
                    @endif

                    {{-- Halaman pertama --}}
                    @if($projects->currentPage() > 3)
                        <li><a href="{{ $projects->url(1) }}" class="page-link-custom">1</a></li>
                        @if($projects->currentPage() > 4)
                            <li><span class="page-link-custom disabled">...</span></li>
                        @endif
                    @endif

                    {{-- Halaman sekitar current --}}
                    @php
                        $start = max(1, $projects->currentPage() - 2);
                        $end = min($projects->lastPage(), $projects->currentPage() + 2);
                    @endphp
                    @for($i = $start; $i <= $end; $i++)
                        @if($i == $projects->currentPage())
                            <li><span class="page-link-custom active">{{ $i }}</span></li>
                        @else
                            <li><a href="{{ $projects->url($i) }}" class="page-link-custom">{{ $i }}</a></li>
                        @endif
                    @endfor

                    {{-- Halaman terakhir --}}
                    @if($projects->currentPage() < $projects->lastPage() - 2)
                        @if($projects->currentPage() < $projects->lastPage() - 3)
                            <li><span class="page-link-custom disabled">...</span></li>
                        @endif
                        <li><a href="{{ $projects->url($projects->lastPage()) }}" class="page-link-custom">{{ $projects->lastPage() }}</a></li>
                    @endif

                    {{-- Next --}}
                    @if($projects->hasMorePages())
                        <li><a href="{{ $projects->nextPageUrl() }}" class="page-link-custom"><i class="fas fa-chevron-right"></i></a></li>
                    @else
                        <li><span class="page-link-custom disabled"><i class="fas fa-chevron-right"></i></span></li>
                    @endif
                </ul>
            </div>
            @endif

            @else
            <div class="text-center py-5">
                <i class="fas fa-folder-open fa-3x text-brown-light mb-3"></i>
                <h4 class="text-brown-dark">Belum Ada Proyek</h4>
                <p class="text-brown-medium">Informasi proyek akan segera kami update.</p>
            </div>
            @endif
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Tertarik dengan Proyek Serupa?</h2>
                        <p class="lead mb-0">
                            Konsultasikan kebutuhan proyek Anda dengan tim ahli kami. Dapatkan solusi terbaik dan tepat guna.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 rounded-pill">
                            <i class="fas fa-paper-plane me-2"></i>Hubungi Kami
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
    /* ===== SEMUA STYLE SAMA PERSIS DENGAN YANG SUDAH ADA, hanya menambahkan style pagination yang lebih rapi ===== */
    :root {
        --brown-dark: #241b64;
        --brown-medium: #302574;
        --brown-light: #A1887F;
        --cream-gold: #D4AF37;
        --cream-light: #f8fafc;
        --white: #ffffff;
        --shadow-3d: 0 20px 40px rgba(93,64,55,0.2), 0 10px 20px rgba(0,0,0,0.1);
    }

    .project-hero {
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
        background-color: rgba(93, 64, 55, 0.9) !important;
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        color: white !important;
    }
    .badge.bg-brown-light-subtle {
        background-color: rgba(161,136,127,0.15) !important;
        color: var(--brown-dark) !important;
        font-weight: 500;
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

    /* TABEL PREMIUM */
    .premium-table {
        background: white;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        width: 100%;
    }
    .premium-table thead th {
        background: linear-gradient(135deg, var(--brown-dark), #4A342E);
        color: white !important;
        font-weight: 600;
        padding: 1.2rem 1rem;
        border: none;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .premium-table thead th:first-child { border-radius: 1.5rem 0 0 0; }
    .premium-table thead th:last-child { border-radius: 0 1.5rem 0 0; }
    .premium-table tbody tr {
        transition: all 0.3s;
        border-bottom: 1px solid rgba(93,64,55,0.05);
    }
    .premium-table tbody tr:hover {
        background: rgba(212,175,55,0.05);
        transform: scale(1.01);
    }
    .premium-table td {
        padding: 1rem;
        vertical-align: middle;
        color: var(--brown-medium) !important;
        font-size: 0.95rem;
        background-color: white;
    }
    .premium-table td strong {
        color: var(--brown-dark) !important;
        font-weight: 700;
    }
    @media (max-width: 768px) {
        .premium-table thead { display: none; }
        .premium-table tbody tr { display: block; margin-bottom: 1rem; border: 1px solid rgba(93,64,55,0.1); border-radius: 1rem; }
        .premium-table tbody td { display: block; text-align: right; padding: 0.75rem 1rem; position: relative; border-bottom: 1px solid rgba(93,64,55,0.05); }
        .premium-table tbody td:last-child { border-bottom: none; }
        .premium-table tbody td::before { content: attr(data-label); position: absolute; left: 1rem; font-weight: 600; color: var(--brown-dark); text-transform: uppercase; font-size: 0.75rem; }
    }

    /* PAGINATION (sama dengan gaya admin) */
    .pagination-custom {
        display: flex;
        gap: 0.5rem;
        list-style: none;
        padding: 0;
        margin: 0;
        flex-wrap: wrap;
        justify-content: center;
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
        color: #4a5568;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.2s;
    }
    .page-link-custom i {
        font-size: 0.8rem;
    }
    .page-link-custom:hover:not(.disabled) {
        background-color: #e9ecef;
        color: #ef332d;
        border-color: #ced4da;
    }
    .page-link-custom.active {
        background-color: #241b64;
        border-color: #241b64;
        color: white !important;
    }
    .page-link-custom.disabled {
        color: #a0aec0;
        pointer-events: none;
        background-color: #f8f9fa;
        border-color: #dee2e6;
    }

    /* CTA SECTION */
    .cta-elegant {
        background: linear-gradient(135deg, #f8fafc 0%, #D7CCC8 100%);
        position: relative;
        overflow: hidden;
    }
    .cta-elegant::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 20% 30%, rgba(92, 64, 51, 0.1) 0%, transparent 50%),
                    radial-gradient(circle at 80% 70%, rgba(210, 180, 140, 0.1) 0%, transparent 55%);
    }
    .cta-content-wrapper {
        position: relative;
        z-index: 2;
        padding: 3rem;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 1.5rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.3);
    }
    .cta-elegant h2 {
        background: linear-gradient(135deg, #241b64, #302574);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .cta-elegant .lead {
        color: #4b3dad !important;
    }
    .btn-brown-3d {
        background: linear-gradient(145deg, var(--brown-dark), #4A342E);
        border: none;
        color: white;
        font-weight: 600;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 16px rgba(93,64,55,0.2);
    }
    .btn-brown-3d:hover {
        transform: translateY(-3px);
        background: linear-gradient(145deg, #4A342E, var(--brown-dark));
        color: white;
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
    .py-6 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important;
    }

    /* Animasi */
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

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .page-link-custom { min-width: 2rem; height: 2rem; padding: 0 0.5rem; font-size: 0.8rem; }
        .cta-content-wrapper { padding: 1.5rem; }
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

        // Menambahkan data-label untuk responsive table
        const headers = document.querySelectorAll('.premium-table thead th');
        const rows = document.querySelectorAll('.premium-table tbody tr');
        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            cells.forEach((cell, index) => {
                if (headers[index]) {
                    cell.setAttribute('data-label', headers[index].textContent.trim());
                }
            });
        });
    });
</script>
@endpush
