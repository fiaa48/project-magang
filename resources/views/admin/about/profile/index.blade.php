@extends('admin.layouts.app')

@section('title', 'Profil Perusahaan - Admin Panel')

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
        --shadow-3d: 0 20px 35px -10px rgba(0,0,0,0.2), 0 0 0 1px rgba(255,255,255,0.1) inset;
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

    /* ========== PAGE HEADER PREMIUM ========== */
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

    /* ========== CARD ULTRA PREMIUM 3D ========== */
    .card-ultra {
        background: var(--white);
        border-radius: 2rem;
        border: none;
        box-shadow: var(--shadow-md);
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        overflow: hidden;
        position: relative;
        backdrop-filter: blur(0px);
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

    /* ========== TABEL PREMIUM ========== */
    .table-ultra {
        margin-bottom: 0;
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }
    .table-ultra thead th,
    .table-ultra thead th * {
        background: linear-gradient(to bottom, #FEFAF5, #FDF7F0);
        border-bottom: 2px solid rgba(212,175,55,0.3);
        padding: 1.2rem 1rem;
        font-weight: 700;
        color: #000000 !important;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.08em;
        font-family: monospace;
    }
    .table-ultra tbody td {
        padding: 1.1rem 1rem;
        vertical-align: middle;
        border-bottom: 1px solid rgba(141,110,99,0.1);
        color: #2C1A12;
        font-weight: 500;
        background-color: var(--white);
        transition: all 0.2s ease;
    }
    .table-ultra tbody tr:hover td {
        background-color: #FFFBF5;
        transform: scale(1.002);
        box-shadow: inset 0 1px 0 rgba(212,175,55,0.2);
    }

    .btn-action-ultra {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 14px;
        background: rgba(36,27,100,0.06);
        border: 1px solid rgba(36,27,100,0.12);
        color: var(--brown-medium);
        transition: all 0.25s;
        margin: 0 2px;
    }
    .btn-action-ultra:hover {
        background: var(--brown-dark);
        color: var(--gold-light);
        border-color: var(--gold);
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    }
    .btn-action-ultra.danger:hover {
        background: #B33A3A;
        border-color: #FFA2A2;
        color: white;
    }

    /* ========== BADGE STATUS PKP ========== */
    .badge-pkp-active {
        background-color: #D4AF37 !important;
        color: #171247 !important;
        font-weight: 700;
        padding: 0.4rem 0.8rem;
        border-radius: 30px;
        font-size: 0.75rem;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .badge-pkp-inactive {
        background-color: #6c757d !important;
        color: white !important;
        font-weight: 500;
        padding: 0.4rem 0.8rem;
        border-radius: 30px;
        font-size: 0.75rem;
    }
    .badge-pkp-text {
        background-color: #e9ecef;
        color: #2C1A12;
        padding: 0.4rem 0.8rem;
        border-radius: 30px;
        font-size: 0.75rem;
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 992px) {
        .table-ultra thead th, .table-ultra tbody td {
            padding: 0.9rem 0.8rem;
            font-size: 0.85rem;
        }
        .page-title-premium { font-size: 1.7rem; }
    }

    @media (max-width: 768px) {
        .table-ultra, .table-ultra thead, .table-ultra tbody, .table-ultra th, .table-ultra td, .table-ultra tr {
            display: block;
        }
        .table-ultra thead {
            display: none;
        }
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
            align-items: center;
            padding: 0.9rem 1rem;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            text-align: right;
            font-weight: 500;
        }
        .table-ultra tbody td::before {
            content: attr(data-label);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.7rem;
            color: var(--gold);
            letter-spacing: 1px;
            background: rgba(212,175,55,0.1);
            padding: 0.2rem 0.6rem;
            border-radius: 40px;
            margin-right: 1rem;
        }
        .table-ultra tbody td:last-child {
            border-bottom: none;
        }
        .btn-action-ultra {
            width: 40px;
            height: 40px;
        }
        .page-header-premium {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    .pagination-ultra {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .pagination-ultra .page-item .page-link {
        background: transparent;
        border: 1px solid rgba(36,27,100,0.14);
        border-radius: 50px;
        color: var(--brown-dark);
        font-weight: 600;
        padding: 0.5rem 1rem;
        transition: all 0.2s;
    }
    .pagination-ultra .page-item.active .page-link {
        background: var(--brown-dark);
        border-color: var(--gold);
        color: white;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .pagination-ultra .page-item .page-link:hover {
        background: var(--brown-light);
        color: white;
        transform: translateY(-2px);
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2">
    <!-- Header -->
    <div class="page-header-premium">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="page-title-premium">
                <i class="fas fa-building"></i>
                <span>Profil Perusahaan</span>
            </div>
            <div class="stat-badge-premium">
                <i class="fas fa-database me-2"></i>
                {{ $data->count() }} Data Profil
            </div>
        </div>
        <div class="stat-badge-premium">
            <i class="fas fa-calendar-alt me-2"></i>
            {{ now()->translatedFormat('d F Y') }}
        </div>
    </div>

    <!-- Tombol Tambah dihapus -->

    <!-- CARD UTAMA -->
    <div class="card-ultra">
        <div class="card-body p-0">
            @if($data->count() > 0)
                <div class="table-responsive" style="overflow-x: auto;">
                    <table class="table-ultra">
                        <thead>
                            <tr>
                                <th style="color: #000000 !important;">ID</th>
                                <th style="color: #000000 !important;">Nama Perusahaan</th>
                                <th style="color: #000000 !important;">Tipe Perusahaan</th>
                                <th style="color: #000000 !important;">Alamat Utama</th>
                                <th style="color: #000000 !important;">Alamat Cabang</th>
                                <th style="color: #000000 !important;">Tahun Berdiri</th>
                                <th style="color: #000000 !important;">NPWP</th>
                                <th style="color: #000000 !important;">NIB</th>
                                <th style="color: #000000 !important;">Asosiasi</th>
                                <!-- 5 KOLOM BARU -->
                                <th style="color: #000000 !important;">Telepon PT</th>
                                <th style="color: #000000 !important;">Email PT</th>
                                <th style="color: #000000 !important;">Website PT</th>
                                <th style="color: #000000 !important;">Inkindo</th>
                                <th style="color: #000000 !important;">Kadin</th>
                                <th style="color: #000000 !important;">Status PKP</th>
                                <th style="color: #000000 !important;" class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $index => $item)
                            <tr style="animation: fadeInScale 0.3s ease forwards; animation-delay: {{ $index * 0.02 }}s;">
                                <td data-label="ID">{{ $loop->iteration }}</td>
                                <td data-label="Nama Perusahaan">
                                    <strong class="text-dark">{{ $item->name ?? '-' }}</strong>
                                </td>
                                <td data-label="Tipe Perusahaan">{{ $item->type ?? '-' }}</td>
                                <td data-label="Alamat Utama">{{ Str::limit($item->address_main ?? '-', 50) }}</td>
                                <td data-label="Alamat Cabang">{{ Str::limit($item->address_branch ?? '-', 45) }}</td>
                                <td data-label="Tahun Berdiri">{{ $item->established_year ?? '-' }}</td>
                                <td data-label="NPWP">{{ $item->npwp ?? '-' }}</td>
                                <td data-label="NIB">{{ $item->nib ?? '-' }}</td>
                                <td data-label="Asosiasi">{{ $item->association ?? '-' }}</td>
                                <!-- 5 KOLOM BARU (data) -->
                                <td data-label="Telepon PT">{{ $item->telepon_pt ?? '-' }}</td>
                                <td data-label="Email PT">{{ $item->email_pt ?? '-' }}</td>
                                <td data-label="Website PT">
                                    @if($item->website_pt)
                                        <a href="https://{{ $item->website_pt }}" target="_blank" rel="noopener" style="color: var(--brown-dark); text-decoration: underline;">{{ $item->website_pt }}</a>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td data-label="Inkindo">{{ $item->inkindo ?? '-' }}</td>
                                <td data-label="Kadin">{{ $item->kadin ?? '-' }}</td>
                                <td data-label="Status PKP">
                                    @php
                                        $statusText = $item->pkp_status_text;
                                    @endphp
                                    @if($item->is_pkp_active)
                                        <span class="badge-pkp-active">
                                            <i class="fas fa-check-circle"></i> {{ $statusText }}
                                        </span>
                                    @else
                                        <span class="badge-pkp-inactive">
                                            <i class="fas fa-times-circle"></i> {{ $statusText }}
                                        </span>
                                    @endif
                                </td>
                                <td data-label="Aksi" class="text-end">
                                    <div class="d-flex gap-2 justify-content-end">
                                        <a href="{{ route('admin.about.profile.edit', $item->id) }}" class="btn-action-ultra" title="Edit Profil">
                                            <i class="fas fa-pen-fancy"></i>
                                        </a>
                                        <form action="{{ route('admin.about.profile.delete', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini secara permanen?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-action-ultra danger" title="Hapus">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Footer informasi & pagination -->
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 p-4 border-top border-gold-light">
                    <div class="small text-brown-medium">
                        <i class="fas fa-check-circle text-gold me-1"></i>
                        @if(method_exists($data, 'total'))
                            Menampilkan {{ $data->firstItem() }} - {{ $data->lastItem() }} dari {{ $data->total() }} profil
                        @else
                            Total {{ $data->count() }} profil
                        @endif
                    </div>
                    @if(method_exists($data, 'links') && $data->hasPages())
                        <div class="pagination-ultra">
                            {{ $data->links('pagination::bootstrap-4') }}
                        </div>
                    @endif
                </div>
            @else
                <!-- Empty state elegan TANPA tombol tambah -->
                <div class="text-center py-5 my-4">
                    <div class="mb-4">
                        <i class="fas fa-building fa-3x" style="color: var(--brown-light); opacity: 0.5;"></i>
                    </div>
                    <h5 class="text-brown-dark fw-bold">Belum Ada Data Profil</h5>
                    <p class="text-brown-medium">Silakan tambahkan profil perusahaan melalui menu lain atau hubungi administrator.</p>
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
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl, {
                animation: true,
                delay: { show: 100, hide: 50 }
            });
        });
    });
</script>
@endpush
