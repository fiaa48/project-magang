@extends('admin.layouts.app')

@section('title', 'Sejarah Perusahaan - Admin Panel')

@push('styles')
<style>
    /* ========== VARIABEL WARNA PREMIUM ========== */
    :root {
        --brown-dark: #171247;
        --brown-medium: #241b64;
        --brown-light: #4b3dad;
        --cream: #ffffff;
        --cream-dark: #f8fafc;
        --white: #FFFFFF;
        --gold: #D4AF37;
        --gold-light: #F3E5AB;
        --shadow-sm: 0 10px 20px rgba(0,0,0,0.02), 0 6px 6px rgba(0,0,0,0.03);
        --shadow-md: 0 20px 30px -12px rgba(0,0,0,0.1), 0 8px 12px rgba(0,0,0,0.05);
        --shadow-lg: 0 30px 40px -15px rgba(0,0,0,0.2);
    }

    /* ========== ANIMASI ========== */
    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInScale {
        from { opacity: 0; transform: scale(0.96); }
        to { opacity: 1; transform: scale(1); }
    }
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-5px); }
        100% { transform: translateY(0px); }
    }

    body {
        background: linear-gradient(145deg, #F9F5EF 0%, #FDF9F4 100%);
        font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, sans-serif;
    }

    /* ========== PAGE HEADER ========== */
    .page-header-premium {
        margin-bottom: 2.5rem;
        animation: fadeSlideUp 0.6s cubic-bezier(0.2, 0.9, 0.4, 1.1) forwards;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .page-title-premium {
        font-size: 2rem;
        font-weight: 800;
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        letter-spacing: -0.02em;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .page-title-premium i {
        background: linear-gradient(135deg, var(--gold), #B8860B);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size: 2.2rem;
        filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
    }
    .stat-badge-premium {
        background: rgba(255,255,240,0.8);
        backdrop-filter: blur(4px);
        padding: 0.6rem 1.2rem;
        border-radius: 40px;
        font-weight: 600;
        color: var(--brown-dark);
        border: 1px solid rgba(212,175,55,0.3);
        box-shadow: var(--shadow-sm);
        font-size: 0.9rem;
    }

    /* ========== CARD ULTRA PREMIUM ========== */
    .card-ultra {
        background: var(--white);
        border-radius: 2rem;
        border: none;
        box-shadow: var(--shadow-md);
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        overflow: hidden;
        position: relative;
        animation: fadeInScale 0.5s ease forwards;
    }
    .card-ultra:hover {
        transform: translateY(-6px) scale(1.01);
        box-shadow: var(--shadow-lg), 0 0 0 1px rgba(212,175,55,0.2);
    }
    .card-ultra::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 6px;
        background: linear-gradient(90deg, var(--gold), var(--brown-light), var(--gold));
        z-index: 2;
    }

    /* ========== TIMELINE STYLE PREMIUM ========== */
    .timeline-premium {
        position: relative;
        padding-left: 2rem;
    }
    .timeline-premium::before {
        content: '';
        position: absolute;
        left: 0.75rem;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(to bottom, var(--gold), var(--brown-light), var(--gold));
        border-radius: 2px;
    }
    .timeline-item {
        position: relative;
        margin-bottom: 2rem;
        padding-left: 2rem;
        animation: fadeSlideUp 0.5s ease forwards;
        opacity: 0;
        animation-fill-mode: forwards;
    }
    .timeline-item:nth-child(1) { animation-delay: 0.05s; }
    .timeline-item:nth-child(2) { animation-delay: 0.1s; }
    .timeline-item:nth-child(3) { animation-delay: 0.15s; }
    .timeline-item:nth-child(4) { animation-delay: 0.2s; }
    .timeline-item:nth-child(5) { animation-delay: 0.25s; }
    .timeline-marker {
        position: absolute;
        left: -1.45rem;
        top: 0.2rem;
        width: 1.2rem;
        height: 1.2rem;
        background: var(--gold);
        border: 3px solid var(--white);
        border-radius: 50%;
        box-shadow: 0 0 0 3px rgba(212,175,55,0.3);
        z-index: 1;
        transition: all 0.3s;
    }
    .timeline-item:hover .timeline-marker {
        transform: scale(1.3);
        background: var(--brown-dark);
        box-shadow: 0 0 0 5px rgba(212,175,55,0.5);
    }
    .timeline-content {
        background: var(--cream);
        border-radius: 1.5rem;
        padding: 1.5rem;
        transition: all 0.3s;
        border: 1px solid rgba(141,110,99,0.1);
        box-shadow: var(--shadow-sm);
    }
    .timeline-item:hover .timeline-content {
        background: var(--white);
        transform: translateX(5px);
        box-shadow: var(--shadow-md);
        border-color: rgba(212,175,55,0.3);
    }
    .timeline-year {
        font-size: 1.4rem;
        font-weight: 800;
        color: var(--gold);
        margin-bottom: 0.25rem;
        display: inline-block;
        background: rgba(212,175,55,0.15);
        padding: 0.2rem 1rem;
        border-radius: 40px;
        letter-spacing: 0.5px;
    }
    .timeline-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--brown-dark);
        margin: 0.5rem 0 0.75rem 0;
    }
    .timeline-description {
        color: var(--brown-medium);
        line-height: 1.6;
        margin-bottom: 1rem;
    }
    .timeline-details {
        background: rgba(212,175,55,0.08);
        border-radius: 1rem;
        padding: 0.75rem 1rem;
        margin-top: 0.75rem;
    }
    .timeline-details ul {
        margin: 0;
        padding-left: 1.2rem;
    }
    .timeline-details li {
        color: var(--brown-dark);
        margin-bottom: 0.3rem;
    }
    .btn-action-timeline {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: transparent;
        border: 1px solid rgba(36,27,100,0.14);
        border-radius: 40px;
        padding: 0.4rem 1rem;
        color: var(--brown-medium);
        font-size: 0.8rem;
        font-weight: 600;
        transition: all 0.25s;
        margin-top: 0.75rem;
        margin-right: 0.5rem;
        text-decoration: none;
        cursor: pointer;
    }
    .btn-action-timeline:hover {
        background: var(--brown-dark);
        color: white;
        border-color: var(--gold);
        transform: translateY(-2px);
    }
    .btn-action-timeline:hover i {
        color: white;
    }
    .btn-action-timeline.danger:hover {
        background: #B33A3A;
        border-color: #FFA2A2;
    }
    /* Tombol utama */
    .btn-premium-ultra {
        background: linear-gradient(105deg, var(--brown-dark) 0%, #171247 100%);
        border: none;
        border-radius: 60px;
        padding: 0.75rem 1.8rem;
        font-weight: 700;
        color: white;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        box-shadow: 0 8px 18px rgba(62,39,35,0.2);
        letter-spacing: 0.3px;
    }
    .btn-premium-ultra:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 25px -8px rgba(62,39,35,0.4);
        background: linear-gradient(105deg, #171247, var(--brown-dark));
        color: var(--gold-light);
    }
    .empty-state-premium {
        text-align: center;
        padding: 3rem;
    }
    @media (max-width: 768px) {
        .page-title-premium { font-size: 1.6rem; }
        .timeline-premium { padding-left: 1rem; }
        .timeline-premium::before { left: 0.25rem; }
        .timeline-item { padding-left: 1.5rem; }
        .timeline-marker { left: -1rem; width: 1rem; height: 1rem; }
        .timeline-year { font-size: 1.1rem; }
        .timeline-title { font-size: 1.1rem; }
        .btn-premium-ultra { padding: 0.6rem 1.2rem; font-size: 0.9rem; }
    }
    @media (max-width: 576px) {
        .container-fluid { padding-left: 0.75rem; padding-right: 0.75rem; }
        .timeline-content { padding: 1rem; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2">
    <!-- Header -->
    <div class="page-header-premium">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="page-title-premium">
                <i class="fas fa-timeline"></i>
                <span>Sejarah Perusahaan</span>
            </div>
            <div class="stat-badge-premium">
                <i class="fas fa-database me-2"></i>
                {{ $data->count() }} Momen Bersejarah
            </div>
        </div>
        <div class="stat-badge-premium">
            <i class="fas fa-calendar-alt me-2"></i>
            {{ now()->translatedFormat('d F Y') }}
        </div>
    </div>

    <!-- Tombol Tambah -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-5">
        <a href="{{ route('admin.about.history.create') }}" class="btn-premium-ultra">
            <i class="fas fa-plus-circle fa-fw"></i> Tambah Momen Sejarah
        </a>
    </div>

    <!-- Timeline Card -->
    <div class="card-ultra">
        <div class="card-body p-4 p-lg-5">
            @if($data->count() > 0)
                <div class="timeline-premium">
                    @foreach($data as $item)
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <div class="timeline-year">{{ $item->year }}</div>
                                <h3 class="timeline-title">{{ $item->title }}</h3>
                                <div class="timeline-description">
                                    {{ Str::limit($item->description, 200) }}
                                </div>
                                @php
                                    $details = null;
                                    if (!is_null($item->details)) {
                                        if (is_string($item->details)) {
                                            $details = json_decode($item->details, true);
                                        } elseif (is_array($item->details)) {
                                            $details = $item->details;
                                        }
                                    }
                                @endphp
                                @if($details && is_array($details) && count($details) > 0)
                                    <div class="timeline-details">
                                        <i class="fas fa-list-ul me-2" style="color: var(--gold);"></i> <strong>Detail:</strong>
                                        <ul>
                                            @foreach($details as $detail)
                                                <li>{{ $detail }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div>
                                    <a href="{{ route('admin.about.history.edit', $item->id) }}" class="btn-action-timeline">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <!-- Tombol Hapus dengan tampilan sama seperti Edit (link) -->
                                    <a href="#" class="btn-action-timeline danger" onclick="event.preventDefault(); if(confirm('Yakin ingin menghapus momen sejarah ini?')) document.getElementById('delete-form-{{ $item->id }}').submit();">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </a>
                                    <form id="delete-form-{{ $item->id }}" action="{{ route('admin.about.history.delete', $item->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if(method_exists($data, 'links') && $data->hasPages())
                    <div class="d-flex justify-content-center mt-4">
                        {{ $data->links('pagination::bootstrap-4') }}
                    </div>
                @endif
            @else
                <div class="empty-state-premium">
                    <i class="fas fa-hourglass-half fa-3x" style="color: var(--brown-light); opacity: 0.5; margin-bottom: 1rem;"></i>
                    <h5 class="text-brown-dark fw-bold">Belum Ada Catatan Sejarah</h5>
                    <p class="text-brown-medium">Mulai dengan menambahkan momen bersejarah perusahaan Anda.</p>
                    <a href="{{ route('admin.about.history.create') }}" class="btn-premium-ultra mt-2">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Sekarang
                    </a>
                </div>
            @endif
        </div>
    </div>

    @if($data->count() > 0)
    <div class="text-end mt-4 opacity-75 small">
        <i class="fas fa-sync-alt me-1"></i> Terakhir disinkronkan: {{ now()->format('H:i:s') }} WIB
    </div>
    @endif
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
        tooltipTriggerList.map(function (el) { return new bootstrap.Tooltip(el); });
    });
</script>
@endpush
