@extends('admin.layouts.app')

@section('title', 'Daftar Layanan')

@push('styles')
<style>
    :root {
        --brown-dark: #171247;
        --brown-medium: #241b64;
        --brown-light: #4b3dad;
        --white: #FFFFFF;
        --gold: #D4AF37;
        --gold-light: #F3E5AB;
        --shadow-sm: 0 10px 20px rgba(0,0,0,0.02), 0 6px 6px rgba(0,0,0,0.03);
        --shadow-md: 0 20px 30px -12px rgba(0,0,0,0.1), 0 8px 12px rgba(0,0,0,0.05);
    }
    body {
        background: linear-gradient(145deg, #F9F5EF 0%, #FDF9F4 100%);
    }
    .page-header-premium {
        margin-bottom: 2.5rem;
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
        display: flex;
        align-items: center;
        gap: .75rem;
    }
    .page-title-premium i {
        background: linear-gradient(135deg, var(--gold), #B8860B);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size: 2.2rem;
    }
    .stat-badge-premium {
        background: rgba(255,255,240,.8);
        padding: .6rem 1.2rem;
        border-radius: 40px;
        font-weight: 600;
        color: var(--brown-dark);
        border: 1px solid rgba(212,175,55,.3);
        box-shadow: var(--shadow-sm);
        font-size: .9rem;
    }
    .btn-premium-ultra {
        background: linear-gradient(105deg, var(--brown-dark), #241b64);
        border: none;
        border-radius: 60px;
        padding: .85rem 1.4rem;
        font-weight: 700;
        color: white;
        display: inline-flex;
        align-items: center;
        gap: .55rem;
        text-decoration: none;
        box-shadow: 0 8px 18px rgba(36,27,100,.18);
    }
    .btn-premium-ultra:hover {
        color: var(--gold-light);
        transform: translateY(-2px);
    }
    .card-ultra {
        background: var(--white);
        border-radius: 2rem;
        border: none;
        box-shadow: var(--shadow-md);
        overflow: hidden;
        position: relative;
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
    .toolbar-premium {
        padding: 1.4rem 1.5rem 1rem;
        display: flex;
        justify-content: space-between;
        gap: 1rem;
        flex-wrap: wrap;
        align-items: center;
    }
    .search-premium {
        position: relative;
        width: min(100%, 380px);
    }
    .search-premium i {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--gold);
    }
    .search-premium input {
        width: 100%;
        border: 1px solid rgba(36,27,100,.14);
        border-radius: 999px;
        padding: .8rem 2.6rem .8rem 2.6rem;
        color: var(--brown-dark);
        background: white;
    }
    .search-premium input:focus {
        border-color: var(--gold);
        outline: none;
        box-shadow: 0 0 0 3px rgba(212,175,55,.2);
    }
    .search-premium a {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #9ca3af;
    }
    .table-responsive-custom {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .table-ultra {
        margin-bottom: 0;
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }
    .table-ultra thead th {
        background: linear-gradient(to bottom, #FEFAF5, #FDF7F0);
        border-bottom: 2px solid rgba(212,175,55,.3);
        padding: 1.2rem 1rem;
        font-weight: 700;
        text-transform: uppercase;
        font-size: .75rem;
        letter-spacing: .08em;
        color: #000000 !important;
    }
    .table-ultra tbody td {
        padding: 1.1rem 1rem;
        vertical-align: top;
        border-bottom: 1px solid rgba(141,110,99,.1);
        color: #2C1A12;
        font-weight: 500;
        background: var(--white);
    }
    .table-ultra tbody tr:hover td {
        background: #FFFBF5;
    }
    .btn-action-ultra {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 14px;
        background: rgba(36,27,100,.06);
        border: 1px solid rgba(36,27,100,.12);
        color: var(--brown-medium);
        transition: all .25s;
        text-decoration: none;
    }
    .btn-action-ultra:hover {
        background: var(--brown-dark);
        color: var(--gold-light);
        border-color: var(--gold);
        transform: translateY(-2px);
    }
    .btn-action-ultra.danger:hover {
        background: #B33A3A;
        color: #fff;
        border-color: #FFA2A2;
    }
    .footer-premium {
        padding: 1rem 1.5rem;
        background: #FFFBF5;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        color: var(--brown-medium);
    }
    /* Pagination premium - bulat konsisten */
    .footer-premium .pagination {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        gap: .35rem;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .footer-premium .page-item {
        display: inline-flex;
        margin: 0;
    }
    .footer-premium .page-link {
        background: #ffffff;
        border: 1px solid #ced4da;
        border-radius: 999px;
        color: #000000 !important;
        padding: .4rem .75rem;
        line-height: 1;
        transition: all 0.2s;
        text-decoration: none;
    }
    .footer-premium .page-item.active .page-link {
        background: #241b64;
        border-color: #241b64;
        color: #ffffff !important;
    }
    .footer-premium .page-item.disabled .page-link {
        background: #e9ecef;
        border-color: #dee2e6;
        color: #6c757d !important;
        cursor: not-allowed;
    }
    .footer-premium .page-link:hover:not(.disabled) {
        background: #241b64;
        color: #ffffff !important;
        border-color: #241b64;
        transform: translateY(-2px);
    }
    .alert-premium-success {
        background: #E8F5E9;
        border-left: 5px solid #2E7D32;
        border-radius: 1rem;
        padding: 1rem 1.2rem;
        color: #1B5E20;
        margin-bottom: 1.5rem;
    }
    @media (max-width: 768px) {
        .table-ultra, .table-ultra thead, .table-ultra tbody, .table-ultra th, .table-ultra td, .table-ultra tr {
            display: block;
        }
        .table-ultra thead { display: none; }
        .table-ultra tbody tr {
            margin-bottom: 1.5rem;
            border-radius: 1.5rem;
            background: var(--white);
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(212,175,55,0.2);
            padding: 0.5rem;
        }
        .table-ultra tbody td {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 0.9rem 1rem;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            text-align: right;
        }
        .table-ultra tbody td::before {
            content: attr(data-label);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.7rem;
            color: var(--gold);
            background: rgba(212,175,55,0.1);
            padding: 0.2rem 0.6rem;
            border-radius: 40px;
            margin-right: 1rem;
            flex-shrink: 0;
        }
        .btn-action-ultra {
            width: 40px;
            height: 40px;
        }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2 py-3">
    <div class="page-header-premium">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="page-title-premium">
                <i class="fas fa-cogs"></i>
                <span>Daftar Layanan</span>
            </div>
            <div class="stat-badge-premium">
                <i class="fas fa-database me-2"></i>
                {{ method_exists($services, 'total') ? $services->total() : $services->count() }} Layanan
            </div>
        </div>
        <div class="stat-badge-premium">
            <i class="fas fa-calendar-alt me-2"></i>
            {{ now()->format('d M Y') }}
        </div>
    </div>

    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <a href="{{ route('admin.services.create') }}" class="btn-premium-ultra">
            <i class="fas fa-plus-circle fa-fw"></i> Tambah Layanan
        </a>
    </div>

    @if(session('success'))
        <div class="alert-premium-success">{{ session('success') }}</div>
    @endif

    <div class="card-ultra">
        <div class="toolbar-premium">
            <form method="GET" action="{{ route('admin.services.index') }}" class="search-premium">
                <i class="fas fa-search"></i>
                <input type="text" name="search" value="{{ request('search') }}"
                       placeholder="Cari judul, kategori, deskripsi, atau layanan...">
                @if(request('search'))
                    <a href="{{ route('admin.services.index') }}"><i class="fas fa-times-circle"></i></a>
                @endif
            </form>
        </div>

        <div class="table-responsive-custom">
            <table class="table-ultra">
                <thead>
                    <tr>
                        <th style="color: #000000 !important;">No</th>
                        <th style="color: #000000 !important;">Bagian Utama</th>
                        <th style="color: #000000 !important;">Judul Data</th>
                        <th style="color: #000000 !important;">Kategori Data</th>
                        <th style="color: #000000 !important;">Deskripsi Data</th>
                        <th style="color: #000000 !important;">Layanan Data</th>
                        <th style="color: #000000 !important;" class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $index => $service)
                    @php
                        $data = $service->data;
                        $judulList = [];
                        $kategoriList = [];
                        $deskripsiList = [];
                        $layananList = [];

                        if (is_array($data) && !empty($data)) {
                            if (isset($data['title']) && !isset($data[0])) {
                                $judulList[] = $data['title'] ?? '-';
                                $kategoriList[] = $data['category'] ?? '-';
                                $deskripsiList[] = $data['description'] ?? '-';

                                $layananVal = '-';
                                if (!empty($data['sub_services']) && is_array($data['sub_services'])) {
                                    $temp = $data['sub_services'];
                                    $layananVal = implode(', ', array_slice($temp, 0, 3)) . (count($temp) > 3 ? '...' : '');
                                } elseif (!empty($data['services']) && is_array($data['services'])) {
                                    $temp = $data['services'];
                                    $layananVal = implode(', ', array_slice($temp, 0, 3)) . (count($temp) > 3 ? '...' : '');
                                } elseif (!empty($data['scope']) && is_array($data['scope'])) {
                                    $temp = $data['scope'];
                                    $layananVal = implode(', ', array_slice($temp, 0, 3)) . (count($temp) > 3 ? '...' : '');
                                } elseif (!empty($data['process']) && is_array($data['process'])) {
                                    $temp = $data['process'];
                                    $layananVal = implode(', ', array_slice($temp, 0, 3)) . (count($temp) > 3 ? '...' : '');
                                }
                                $layananList[] = $layananVal;
                            } else {
                                foreach ($data as $item) {
                                    if (!is_array($item)) continue;
                                    $judulList[] = $item['title'] ?? ($item['code'] ?? '-');
                                    $kategoriList[] = $item['category'] ?? '-';
                                    $deskripsiList[] = $item['description'] ?? '-';

                                    $layananVal = '-';
                                    if (!empty($item['sub_services']) && is_array($item['sub_services'])) {
                                        $temp = $item['sub_services'];
                                        $layananVal = implode(', ', array_slice($temp, 0, 3)) . (count($temp) > 3 ? '...' : '');
                                    } elseif (!empty($item['services']) && is_array($item['services'])) {
                                        $temp = $item['services'];
                                        $layananVal = implode(', ', array_slice($temp, 0, 3)) . (count($temp) > 3 ? '...' : '');
                                    } elseif (!empty($item['scope']) && is_array($item['scope'])) {
                                        $temp = $item['scope'];
                                        $layananVal = implode(', ', array_slice($temp, 0, 3)) . (count($temp) > 3 ? '...' : '');
                                    } elseif (!empty($item['process']) && is_array($item['process'])) {
                                        $temp = $item['process'];
                                        $layananVal = implode(', ', array_slice($temp, 0, 3)) . (count($temp) > 3 ? '...' : '');
                                    }
                                    $layananList[] = $layananVal;
                                }
                            }
                        } else {
                            $judulList[] = '-';
                            $kategoriList[] = '-';
                            $deskripsiList[] = '-';
                            $layananList[] = '-';
                        }

                        $judulHtml = '<ul class="mb-0 ps-3">';
                        foreach ($judulList as $j) $judulHtml .= '<li>' . e($j) . '</li>';
                        $judulHtml .= '</ul>';

                        $kategoriHtml = '<ul class="mb-0 ps-3">';
                        foreach ($kategoriList as $k) $kategoriHtml .= '<li>' . e($k) . '</li>';
                        $kategoriHtml .= '</ul>';

                        $deskripsiHtml = '<ul class="mb-0 ps-3">';
                        foreach ($deskripsiList as $d) $deskripsiHtml .= '<li>' . nl2br(e($d)) . '</li>';
                        $deskripsiHtml .= '</ul>';

                        $layananHtml = '<ul class="mb-0 ps-3">';
                        foreach ($layananList as $l) $layananHtml .= '<li>' . nl2br(e($l)) . '</li>';
                        $layananHtml .= '</ul>';
                    @endphp
                    <tr>
                        <td data-label="No">
                            {{ method_exists($services, 'firstItem') ? $services->firstItem() + $index : $loop->iteration }}
                        </td>
                        <td data-label="Bagian Utama">
                            <span style="color: #ffffff !important; background-color: #4b3dad !important; display: inline-block; padding: .3rem .8rem; border-radius: 40px; font-size: .75rem; font-weight: 600;">
                                @switch($service->section)
                                    @case('construction') 🏗️ Construction @break
                                    @case('non_construction') 📋 Non-Construction @break
                                    @case('construction_consultancy') 🏗️ Construction Consultancy @break
                                    @case('non_construction_consultancy') 📊 Non-Construction Consultancy @break
                                    @case('architectural') 🏛️ Architectural @break
                                    @case('engineering') ⚙️ Engineering @break
                                    @default {{ $service->section }}
                                @endswitch
                            </span>
                        </td>
                        <td data-label="Judul Data">{!! $judulHtml !!}</td>
                        <td data-label="Kategori Data">{!! $kategoriHtml !!}</td>
                        <td data-label="Deskripsi Data">{!! $deskripsiHtml !!}</td>
                        <td data-label="Layanan Data">{!! $layananHtml !!}</td>
                        <td data-label="Aksi" class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('admin.services.show', $service->id) }}" class="btn-action-ultra" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn-action-ultra" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.services.delete', $service->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus layanan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action-ultra danger" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-5">
                            <i class="fas fa-concierge-bell fa-2x text-brown-light mb-3 d-block"></i>
                            <p class="text-brown-medium mb-0">Belum ada data layanan.</p>
                            <a href="{{ route('admin.services.create') }}" class="btn btn-sm btn-outline-brown-3d mt-3 rounded-pill">Tambah Sekarang</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="footer-premium">
            <span><i class="fas fa-eye me-1"></i>
                @if(method_exists($services, 'total'))
                    Menampilkan {{ $services->firstItem() }} - {{ $services->lastItem() }} dari {{ $services->total() }} layanan
                @else
                    Total {{ $services->count() }} layanan
                @endif
            </span>
            @if(method_exists($services, 'hasPages') && $services->hasPages())
                <div>
                    {{ $services->appends(request()->query())->links('pagination::bootstrap-4') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alert = document.querySelector('.alert-premium-success');
        if (alert) {
            setTimeout(() => {
                alert.style.transition = 'opacity 0.5s';
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 500);
            }, 5000);
        }
    });
</script>
@endpush
