@extends('layouts.app')

@section('content')

<div class="container py-5">

<!-- HEADER SECTION DENGAN AKSEN MERAH -->
<div class="text-center mb-5 position-relative">
    <!-- Decorative Line -->
    <div class="d-flex justify-content-center gap-2 mb-3">
        <span class="badge px-3 py-2 rounded-pill" style="background: #0A2647; color: white; font-weight: 500; border: 1px solid rgba(255,255,255,0.1);">
            <i class="bi bi-patch-check-fill me-1" style="color: #DC2626;"></i> CERTIFICATIONS
        </span>
    </div>

    <h2 class="display-6 fw-bold mb-3" style="color: #0A2647;">
        Sertifikat {{ strtoupper($type) }}
    </h2>

    <p class="text-muted mb-0" style="font-size: 1.1rem; color: #4B5563 !important;">
        <i class="bi bi-folder2-open me-2" style="color: #DC2626;"></i>Daftar lengkap sertifikat perusahaan
    </p>
</div>

<!-- STATS CARD DENGAN BIRU DONGKER -->
<div class="row justify-content-center mb-4 g-3">
    <div class="col-md-4 col-6">
        <div class="card border-0 shadow-sm rounded-4 p-3 text-center" style="background: #F8FAFC; border: 1px solid #E2E8F0;">
            <h4 class="fw-bold mb-1" style="color: #0A2647;">{{ $certificates->count() }}</h4>
            <small class="text-muted">Total Sertifikat</small>
        </div>
    </div>
    <div class="col-md-4 col-6">
        <div class="card border-0 shadow-sm rounded-4 p-3 text-center" style="background: #F8FAFC; border: 1px solid #E2E8F0;">
            <h4 class="fw-bold mb-1" style="color: #0A2647;">{{ $certificates->unique('year')->count() }}</h4>
            <small class="text-muted">Tahun Terbit</small>
        </div>
    </div>
</div>

<!-- TABLE CARD -->
<div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="border: 1px solid #E2E8F0;">
    <div class="card-header bg-white border-0 pt-4 px-4 pb-0">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-semibold" style="color: #0A2647;">
                <i class="bi bi-table me-2" style="color: #DC2626;"></i>Data Sertifikat
            </h5>
            <span class="badge px-3 py-2 rounded-pill" style="background: #F1F5F9; color: #0A2647; border: 1px solid #E2E8F0;">
                <i class="bi bi-calendar3 me-1" style="color: #DC2626;"></i>{{ now()->format('d M Y') }}
            </span>
        </div>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table custom-table align-middle mb-0">
                <thead>
                    <tr>
                        <th width="80" class="text-center">NO</th>
                        <th>NAMA SERTIFIKAT</th>
                        <th width="120" class="text-center">TAHUN</th>
                        <th width="150" class="text-center">AKSI</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($certificates as $cert)
                    <tr class="border-bottom">
                        <td class="text-center fw-medium" style="color: #0A2647;">{{ $loop->iteration }}</td>

                        <td>
                            <div class="d-flex align-items-center">
                                <div class="icon-box me-3 rounded-circle d-flex align-items-center justify-content-center"
                                     style="width: 40px; height: 40px; background: #F1F5F9; border: 1px solid #E2E8F0;">
                                    <i class="bi bi-file-earmark-text" style="color: #DC2626;"></i>
                                </div>
                                <div>
                                    <span class="fw-semibold d-block" style="color: #0A2647;">{{ $cert->name }}</span>
                                    <small class="text-muted">
                                        <i class="bi bi-tag me-1" style="color: #DC2626;"></i>Sertifikat {{ $type }}
                                    </small>
                                </div>
                            </div>
                        </td>

                        <td class="text-center">
                            <span class="badge px-3 py-2 rounded-pill" style="background: #F1F5F9; color: #0A2647; border: 1px solid #E2E8F0;">
                                <i class="bi bi-calendar me-1" style="color: #DC2626;"></i>{{ $cert->year }}
                            </span>
                        </td>

                        <td class="text-center">
                            <a href="{{ route('certifications.view', $cert->id) }}"
                               class="btn btn-view">
                                <i class="bi bi-eye me-1"></i>Lihat
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-5">
                            <div class="empty-state">
                                <div class="mb-3">
                                    <i class="bi bi-folder-x display-1" style="color: #DC2626; opacity: 0.3;"></i>
                                </div>
                                <h5 class="fw-semibold mb-2" style="color: #0A2647;">Belum Ada Sertifikat</h5>
                                <p class="text-muted mb-0">Sertifikat akan ditampilkan di sini setelah ditambahkan.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- FOOTER TABLE -->
    @if($certificates->isNotEmpty())
    <div class="card-footer bg-white border-0 py-3 px-4" style="border-top: 1px solid #E2E8F0 !important;">
        <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">
                <i class="bi bi-info-circle me-1" style="color: #DC2626;"></i>Menampilkan {{ $certificates->count() }} sertifikat
            </small>
            <small class="text-muted">
                <i class="bi bi-arrow-up me-1" style="color: #DC2626;"></i>Urut berdasarkan tahun terbaru
            </small>
        </div>
    </div>
    @endif
</div>

</div>

<style>
/* FONT AWESOME / BOOTSTRAP ICONS */
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

/* MODERN TABLE STYLES - BIRU DONGKER THEME */
:root {
    --dark-blue: #0A2647;
    --red-accent: #DC2626;
    --light-bg: #F8FAFC;
    --border-color: #E2E8F0;
}

.custom-table {
    border-collapse: separate;
    border-spacing: 0;
}

/* HEADER TABLE - BIRU DONGKER */
.custom-table thead th {
    background: #0A2647;
    color: white;
    padding: 1rem 1.5rem;
    font-size: 0.85rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border: none;
    white-space: nowrap;
}

/* BIKIN BAGIAN ATAS TABLE MELENGKUNG */
.custom-table thead th:first-child {
    border-top-left-radius: 16px;
}

.custom-table thead th:last-child {
    border-top-right-radius: 16px;
}

/* BODY TABLE */
.custom-table tbody tr {
    transition: all 0.2s ease;
    background: white;
}

.custom-table tbody tr:hover {
    background: #F8FAFC;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(10, 38, 71, 0.08);
    position: relative;
    z-index: 1;
}

.custom-table td {
    padding: 1.2rem 1.5rem;
    font-size: 0.95rem;
    color: #1E293B;
    vertical-align: middle;
    background: transparent;
    border-bottom: 1px solid #E2E8F0;
}

/* CUSTOM BUTTON - BIRU DONGKER DENGAN HOVER MERAH */
.btn-view {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.6rem 1.2rem;
    border-radius: 50px;
    background: #0A2647;
    color: white;
    font-size: 0.85rem;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 1px solid #0A2647;
    box-shadow: 0 4px 12px rgba(10, 38, 71, 0.2);
}

.btn-view:hover {
    background: #DC2626;
    border-color: #DC2626;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(220, 38, 38, 0.3);
    color: white;
}

/* EMPTY STATE */
.empty-state {
    padding: 3rem 1rem;
}

/* STATS CARD HOVER */
.card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(10, 38, 71, 0.1) !important;
}

/* ICON BOX */
.icon-box {
    transition: all 0.2s ease;
}

tr:hover .icon-box {
    transform: scale(1.1);
    background: #EEF2F6 !important;
    border-color: #DC2626 !important;
}

tr:hover .icon-box i {
    color: #0A2647 !important;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .custom-table td,
    .custom-table th {
        padding: 1rem;
        font-size: 0.85rem;
    }

    .btn-view {
        padding: 0.4rem 1rem;
        font-size: 0.8rem;
    }

    .icon-box {
        width: 32px !important;
        height: 32px !important;
    }
}

/* ANIMASI */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.custom-table tbody tr {
    animation: fadeIn 0.3s ease forwards;
}

/* BADGE STYLE */
.badge {
    font-weight: 500;
}

/* HOVER EFFECT FOR ROWS */
.custom-table tbody tr {
    position: relative;
    overflow: hidden;
}

.custom-table tbody tr::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(220, 38, 38, 0.05), transparent);
    transition: left 0.5s ease;
}

.custom-table tbody tr:hover::after {
    left: 100%;
}

/* BORDER CUSTOM */
.border-custom {
    border-color: var(--border-color) !important;
}

/* LINK STYLE */
a:not(.btn-view) {
    color: #0A2647;
    text-decoration: none;
    transition: color 0.2s ease;
}

a:not(.btn-view):hover {
    color: #DC2626;
}

/* SELECTION COLOR */
::selection {
    background: #0A2647;
    color: white;
}

/* SCROLLBAR STYLE (OPTIONAL) */
::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}

::-webkit-scrollbar-track {
    background: #F1F5F9;
}

::-webkit-scrollbar-thumb {
    background: #0A2647;
    border-radius: 8px;
}

::-webkit-scrollbar-thumb:hover {
    background: #DC2626;
}
</style>

@endsection
