@extends('admin.layouts.app')

@section('title', 'Detail Layanan - Admin Panel')

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

    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInScale {
        from { opacity: 0; transform: scale(0.96); }
        to { opacity: 1; transform: scale(1); }
    }

    body {
        background: linear-gradient(145deg, #F9F5EF 0%, #FDF9F4 100%);
        font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, sans-serif;
    }

    .page-header-premium {
        margin-bottom: 2rem;
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
        display: inline-flex;
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
    }

    .card-ultra {
        background: var(--white);
        border-radius: 2rem;
        border: none;
        box-shadow: var(--shadow-md);
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        overflow: hidden;
        position: relative;
        animation: fadeInScale 0.5s ease forwards;
        margin-bottom: 2rem;
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

    .info-section {
        padding: 1.5rem 2rem;
        border-bottom: 1px solid rgba(141,110,99,0.1);
    }
    .info-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
        color: var(--gold);
        margin-bottom: 0.3rem;
    }
    .info-value {
        font-size: 1rem;
        font-weight: 500;
        color: var(--brown-dark);
        background: var(--cream);
        padding: 0.75rem 1rem;
        border-radius: 1rem;
        word-break: break-word;
    }

    .item-service-card {
        background: var(--cream);
        border-radius: 1.5rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        transition: all 0.3s;
        border: 1px solid transparent;
    }
    .item-service-card:hover {
        background: var(--white);
        border-color: var(--gold-light);
        box-shadow: var(--shadow-sm);
        transform: translateY(-3px);
    }
    .item-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--brown-dark);
        margin-bottom: 1rem;
        border-left: 4px solid var(--gold);
        padding-left: 1rem;
    }
    .badge-code {
        background: rgba(212,175,55,0.15);
        color: var(--brown-dark);
        padding: 0.2rem 0.8rem;
        border-radius: 40px;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-block;
    }
    .list-premium {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .list-premium li {
        padding: 0.4rem 0;
        display: flex;
        align-items: center;
        gap: 0.6rem;
        border-bottom: 1px solid rgba(141,110,99,0.08);
    }
    .list-premium li i {
        color: var(--gold);
        font-size: 0.8rem;
    }
    .phase-group {
        margin-top: 1rem;
        margin-left: 1rem;
        padding-left: 0.5rem;
        border-left: 2px solid var(--gold-light);
    }
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
        text-decoration: none;
    }
    .btn-premium-ultra:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 25px -8px rgba(62,39,35,0.4);
        background: linear-gradient(105deg, #171247, var(--brown-dark));
        color: var(--gold-light);
    }

    @media (max-width: 768px) {
        .page-header-premium { flex-direction: column; align-items: flex-start; }
        .page-title-premium { font-size: 1.6rem; }
        .info-section { padding: 1rem; }
        .item-service-card { padding: 1rem; }
        .item-title { font-size: 1.1rem; }
        .btn-premium-ultra { width: 100%; justify-content: center; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2 py-3">
    <div class="page-header-premium">
        <div class="page-title-premium">
            <i class="fas fa-info-circle"></i>
            <span>Detail Layanan</span>
        </div>
        <div class="stat-badge-premium">
            <i class="fas fa-calendar-alt me-2"></i>
            {{ now()->translatedFormat('d F Y') }}
        </div>
    </div>

    <div class="card-ultra">
        <div class="card-body p-0">
            <!-- Informasi Umum -->
            <div class="info-section">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="info-label"><i class="fas fa-layer-group"></i> Bagian Utama</div>
                        <div class="info-value">{{ $service->section }}</div>
                    </div>
                </div>
            </div>

            <!-- Data JSON (tanpa icon dan route) -->
            @if(is_array($service->data) && !empty($service->data))
                <div class="info-section">
                    <div class="info-label"><i class="fas fa-database"></i> Data Layanan (JSON)</div>
                    @foreach($service->data as $item)
                        <div class="item-service-card">
                            <!-- Judul -->
                            @if(isset($item['title']))
                                <div class="item-title">{{ $item['title'] }}</div>
                            @endif

                            <!-- Code (jika ada) -->
                            @if(isset($item['code']))
                                <div class="mb-2">
                                    <span class="badge-code"><i class="fas fa-code"></i> {{ $item['code'] }}</span>
                                </div>
                            @endif

                            <!-- Deskripsi -->
                            @if(isset($item['description']) && !empty($item['description']))
                                <p class="text-brown-dark mb-3">{{ $item['description'] }}</p>
                            @endif

                            <!-- Kategori (khusus non_construction_consultancy) -->
                            @if(isset($item['category']))
                                <div class="mb-2">
                                    <span class="badge-code"><i class="fas fa-folder"></i> Kategori: {{ $item['category'] }}</span>
                                </div>
                            @endif

                            <!-- Sub Services -->
                            @if(isset($item['sub_services']) && is_array($item['sub_services']))
                                <div class="mt-3">
                                    <strong class="d-block mb-2 text-brown-dark"><i class="fas fa-list-ul"></i> Sub Layanan</strong>
                                    <ul class="list-premium">
                                        @foreach($item['sub_services'] as $sub)
                                            <li><i class="fas fa-check-circle"></i> {{ $sub }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Services (untuk non_construction_consultancy) -->
                            @if(isset($item['services']) && is_array($item['services']))
                                <div class="mt-3">
                                    <strong class="d-block mb-2 text-brown-dark"><i class="fas fa-bars"></i> Daftar Layanan</strong>
                                    <ul class="list-premium">
                                        @foreach($item['services'] as $serviceItem)
                                            <li><i class="fas fa-check-circle"></i> {{ $serviceItem }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Scope -->
                            @if(isset($item['scope']) && is_array($item['scope']))
                                <div class="mt-3">
                                    <strong class="d-block mb-2 text-brown-dark"><i class="fas fa-chalkboard"></i> Ruang Lingkup</strong>
                                    <ul class="list-premium">
                                        @foreach($item['scope'] as $scope)
                                            <li><i class="fas fa-check-circle"></i> {{ $scope }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Process -->
                            @if(isset($item['process']) && is_array($item['process']))
                                <div class="mt-3">
                                    <strong class="d-block mb-2 text-brown-dark"><i class="fas fa-cogs"></i> Proses</strong>
                                    <ul class="list-premium">
                                        @foreach($item['process'] as $process)
                                            <li><i class="fas fa-check-circle"></i> {{ $process }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Projects -->
                            @if(isset($item['projects']) && is_array($item['projects']))
                                <div class="mt-3">
                                    <strong class="d-block mb-2 text-brown-dark"><i class="fas fa-project-diagram"></i> Proyek</strong>
                                    <ul class="list-premium">
                                        @foreach($item['projects'] as $project)
                                            <li><i class="fas fa-check-circle"></i> {{ $project }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Phases (bisa array asosiatif atau array biasa) -->
                            @if(isset($item['phases']) && !empty($item['phases']))
                                <div class="mt-3">
                                    <strong class="d-block mb-2 text-brown-dark"><i class="fas fa-layer-group"></i> Tahapan</strong>
                                    @if(is_array($item['phases']))
                                        @foreach($item['phases'] as $phaseName => $phaseDetails)
                                            <div class="phase-group">
                                                <strong class="text-brown-dark">{{ $phaseName }}</strong>
                                                <ul class="list-premium">
                                                    @if(is_array($phaseDetails))
                                                        @foreach($phaseDetails as $detail)
                                                            <li><i class="fas fa-check-circle"></i> {{ $detail }}</li>
                                                        @endforeach
                                                    @else
                                                        <li><i class="fas fa-check-circle"></i> {{ $phaseDetails }}</li>
                                                    @endif
                                                </ul>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="info-value mt-1">{{ $item['phases'] }}</div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <div class="info-section text-center py-4">
                    <i class="fas fa-database fa-3x text-brown-light mb-3 opacity-50"></i>
                    <p class="text-brown-medium">Tidak ada data JSON yang tersedia.</p>
                </div>
            @endif

            <!-- Tombol Kembali -->
            <div class="p-4 text-end">
                <a href="{{ route('admin.services.index') }}" class="btn-premium-ultra">
                    <i class="fas fa-arrow-left"></i> Kembali ke Daftar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
        tooltipTriggerList.map(function (el) {
            return new bootstrap.Tooltip(el);
        });
    });
</script>
@endpush


