@extends('admin.layouts.app')

@section('title', 'Manajemen Sertifikasi - Admin')

@push('styles')
<style>
    :root { --brown-dark:#171247; --brown-medium:#241b64; --brown-light:#4b3dad; --white:#fff; --gold:#D4AF37; --gold-light:#F3E5AB; --shadow-sm:0 10px 20px rgba(0,0,0,.02),0 6px 6px rgba(0,0,0,.03); --shadow-md:0 20px 30px -12px rgba(0,0,0,.1),0 8px 12px rgba(0,0,0,.05); }
    body { background:linear-gradient(145deg,#F9F5EF 0%,#FDF9F4 100%); }
    .page-header-premium { margin-bottom:2.5rem; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; }
    .page-title-premium { font-size:2rem; font-weight:800; background:linear-gradient(135deg,var(--brown-dark),var(--brown-medium)); -webkit-background-clip:text; background-clip:text; color:transparent; display:flex; align-items:center; gap:.75rem; }
    .page-title-premium i { background:linear-gradient(135deg,var(--gold),#B8860B); -webkit-background-clip:text; background-clip:text; color:transparent; font-size:2.2rem; }
    .stat-badge-premium { background:rgba(255,255,240,.8); padding:.6rem 1.2rem; border-radius:40px; font-weight:600; color:var(--brown-dark); border:1px solid rgba(212,175,55,.3); box-shadow:var(--shadow-sm); font-size:.9rem; }
    .btn-premium-ultra { background:linear-gradient(105deg,var(--brown-dark),#241b64); border:none; border-radius:60px; padding:.85rem 1.4rem; font-weight:700; color:white; display:inline-flex; align-items:center; gap:.55rem; text-decoration:none; box-shadow:0 8px 18px rgba(36,27,100,.18); }
    .btn-premium-ultra:hover { color:var(--gold-light); transform:translateY(-2px); }
    .card-ultra { background:var(--white); border-radius:2rem; border:none; box-shadow:var(--shadow-md); overflow:hidden; position:relative; }
    .card-ultra::before { content:''; position:absolute; top:0; left:0; right:0; height:6px; background:linear-gradient(90deg,var(--gold),var(--brown-light),var(--gold)); z-index:2; }
    .toolbar-premium { padding:1.4rem 1.5rem 1rem; display:flex; justify-content:space-between; gap:1rem; flex-wrap:wrap; align-items:center; }
    .search-premium { position:relative; width:min(100%,360px); }
    .search-premium i { position:absolute; left:1rem; top:50%; transform:translateY(-50%); color:var(--gold); }
    .search-premium input { width:100%; border:1px solid rgba(36,27,100,.14); border-radius:999px; padding:.8rem 2.6rem .8rem 2.6rem; color:var(--brown-dark); background:white; }
    .search-premium input:focus { border-color:var(--gold); outline:none; box-shadow:0 0 0 3px rgba(212,175,55,.2); }
    .search-premium a { position:absolute; right:1rem; top:50%; transform:translateY(-50%); color:#9ca3af; }
    .table-responsive-custom { overflow-x:auto; -webkit-overflow-scrolling:touch; }
    .table-ultra { margin-bottom:0; width:100%; border-collapse:separate; border-spacing:0; }
    .table-ultra thead th {
        background:linear-gradient(to bottom,#FEFAF5,#FDF7F0);
        border-bottom:2px solid rgba(212,175,55,.3);
        padding:1.2rem 1rem;
        font-weight:700;
        text-transform:uppercase;
        font-size:.75rem;
        letter-spacing:.08em;
        color:#000 !important;
        white-space:nowrap;
    }
    .table-ultra tbody td { padding:1.1rem 1rem; vertical-align:middle; border-bottom:1px solid rgba(141,110,99,.1); color:#2C1A12; font-weight:500; background:var(--white); }
    .table-ultra tbody tr:hover td { background:#FFFBF5; }
    .badge-section { background:var(--brown-light); color:white; padding:.3rem .8rem; border-radius:40px; font-size:.75rem; display:inline-block; }
    .sbu-preview { background:#f1efec; padding:.2rem .7rem; border-radius:20px; font-size:.75rem; font-family:monospace; max-width:200px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; display:inline-block; }
    .btn-action-ultra { display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; border-radius:14px; background:rgba(36,27,100,.06); border:1px solid rgba(36,27,100,.12); color:var(--brown-medium); transition:all .25s; text-decoration:none; }
    .btn-action-ultra:hover { background:var(--brown-dark); color:var(--gold-light); border-color:var(--gold); transform:translateY(-2px); }
    .btn-action-ultra.danger:hover { background:#B33A3A; color:#fff; border-color:#FFA2A2; }
    .footer-premium { padding:1rem 1.5rem; background:#FFFBF5; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; color:var(--brown-medium); }
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
        border: 1px solid rgba(36,27,100,.12);
        border-radius: 999px;
        color: var(--brown-medium);
        padding: .4rem .75rem;
        line-height: 1;
        box-shadow: none;
        background: white;
    }
    .footer-premium .page-item.active .page-link {
        background: var(--brown-dark);
        border-color: var(--brown-dark);
        color: #fff;
    }
    .footer-premium .page-item.disabled .page-link {
        color: #9ca3af;
        background: #f8fafc;
    }
    .alert-premium-success {
        background: #E8F5E9;
        border-left: 5px solid #2E7D32;
        border-radius: 1rem;
        padding: 1rem 1.2rem;
        color: #1B5E20;
        margin-bottom: 1.5rem;
    }
    .action-group {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        align-items: flex-start;
    }
    /* tambahan untuk tampilan field yang panjang */
    .text-ellipsis {
        max-width: 150px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
        vertical-align: middle;
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2 py-3">
    <div class="page-header-premium">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="page-title-premium"><i class="fas fa-certificate"></i><span>Sertifikasi</span></div>
            <div class="action-group">
                <div class="stat-badge-premium"><i class="fas fa-database me-1"></i>{{ $certificates->total() }} Data Sertifikasi</div>
                <a href="{{ route('admin.certificates.create') }}" class="btn-premium-ultra">
                    <i class="fas fa-plus-circle"></i> Tambah Sertifikasi
                </a>
            </div>
        </div>
        <div class="stat-badge-premium"><i class="fas fa-calendar-alt me-1"></i>{{ now()->format('d M Y') }}</div>
    </div>

    @if(session('success'))
        <div class="alert-premium-success">{{ session('success') }}</div>
    @endif

    <div class="card-ultra">
        <div class="toolbar-premium">
            <form method="GET" action="{{ route('admin.certificates.index') }}" class="search-premium">
                <i class="fas fa-search"></i>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari PKP, SKT, SBU, ISO, Akta...">
                @if(request('search'))
                    <a href="{{ route('admin.certificates.index') }}"><i class="fas fa-times-circle"></i></a>
                @endif
            </form>
        </div>

        <div class="table-responsive-custom">
            <table class="table-ultra">
                <thead>
                    <tr>
                        <th style="color: #000000 !important;">No</th>
                        <th style="color: #000000 !important;">PKP</th>
                        <th style="color: #000000 !important;">SKT Pajak</th>
                        <th style="color: #000000 !important;">SBU Konstruksi</th>
                        <th style="color: #000000 !important;">SBU Non-Konstruksi</th>
                        <th style="color: #000000 !important;">ISO</th>
                        <th style="color: #000000 !important;">Sertifikasi Baru</th>
                        <th style="color: #000000 !important;">Akta Pendirian</th>
                        <th style="color: #000000 !important;">Akta Perubahan</th>
                        <th style="color: #000000 !important;">Pengesahan AHU</th>
                        <th style="color: #000000 !important;" class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($certificates as $index => $certificate)
                    <tr>
                        <td>{{ $certificates->firstItem() + $index }}</td>
                        <td>{{ $certificate->pkp ?? '-' }}</td>
                        <td>{{ $certificate->skt_pajak ?? '-' }}</td>
                        <td>
                            @if($certificate->sbu_konstruksi)
                                <span class="sbu-preview" title="{{ $certificate->sbu_konstruksi }}">{{ Str::limit($certificate->sbu_konstruksi, 35) }}</span>
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            @if($certificate->sbu_non_konstruksi)
                                <span class="sbu-preview" title="{{ $certificate->sbu_non_konstruksi }}">{{ Str::limit($certificate->sbu_non_konstruksi, 35) }}</span>
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            @if($certificate->iso)
                                <span class="sbu-preview">{{ Str::limit($certificate->iso, 30) }}</span>
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $certificate->sertifikasi_baru ?? '-' }}</td>
                        <td>{{ $certificate->akta_pendirian ?? '-' }}</td>
                        <td>{{ $certificate->akta_perubahan ?? '-' }}</td>
                        <td>{{ $certificate->pengesahan_ahu ?? '-' }}</td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('admin.certificates.edit', $certificate->id) }}" class="btn-action-ultra" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <form action="{{ route('admin.certificates.destroy', $certificate->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data sertifikasi ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action-ultra danger" title="Hapus"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="11" class="text-center py-5">
                            <i class="fas fa-certificate fa-2x text-brown-light mb-3 d-block"></i>
                            <p class="text-brown-medium mb-0">Belum ada data sertifikasi.</p>
                            <a href="{{ route('admin.certificates.create') }}" class="btn btn-sm btn-outline-brown-3d mt-3 rounded-pill">Tambah Sekarang</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="footer-premium">
            <span><i class="fas fa-eye me-1"></i>Menampilkan {{ $certificates->firstItem() ?? 0 }} - {{ $certificates->lastItem() ?? 0 }} dari {{ $certificates->total() }} data</span>
            @if($certificates->hasPages())
                <div>{{ $certificates->links('pagination::bootstrap-4') }}</div>
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

{{-- @extends('admin.layouts.app')

@section('title', 'Manajemen Sertifikat - Admin')

@push('styles')
<style>
    :root { --brown-dark:#171247; --brown-medium:#241b64; --brown-light:#4b3dad; --white:#fff; --gold:#D4AF37; --gold-light:#F3E5AB; --shadow-sm:0 10px 20px rgba(0,0,0,.02),0 6px 6px rgba(0,0,0,.03); --shadow-md:0 20px 30px -12px rgba(0,0,0,.1),0 8px 12px rgba(0,0,0,.05); }
    body { background:linear-gradient(145deg,#F9F5EF 0%,#FDF9F4 100%); }
    .page-header-premium { margin-bottom:2.5rem; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; }
    .page-title-premium { font-size:2rem; font-weight:800; background:linear-gradient(135deg,var(--brown-dark),var(--brown-medium)); -webkit-background-clip:text; background-clip:text; color:transparent; display:flex; align-items:center; gap:.75rem; }
    .page-title-premium i { background:linear-gradient(135deg,var(--gold),#B8860B); -webkit-background-clip:text; background-clip:text; color:transparent; font-size:2.2rem; }
    .stat-badge-premium { background:rgba(255,255,240,.8); padding:.6rem 1.2rem; border-radius:40px; font-weight:600; color:var(--brown-dark); border:1px solid rgba(212,175,55,.3); box-shadow:var(--shadow-sm); font-size:.9rem; }
    .btn-premium-ultra { background:linear-gradient(105deg,var(--brown-dark),#241b64); border:none; border-radius:60px; padding:.85rem 1.4rem; font-weight:700; color:white; display:inline-flex; align-items:center; gap:.55rem; text-decoration:none; box-shadow:0 8px 18px rgba(36,27,100,.18); }
    .btn-premium-ultra:hover { color:var(--gold-light); transform:translateY(-2px); }
    .card-ultra { background:var(--white); border-radius:2rem; border:none; box-shadow:var(--shadow-md); overflow:hidden; position:relative; }
    .card-ultra::before { content:''; position:absolute; top:0; left:0; right:0; height:6px; background:linear-gradient(90deg,var(--gold),var(--brown-light),var(--gold)); z-index:2; }
    .toolbar-premium { padding:1.4rem 1.5rem 1rem; display:flex; justify-content:space-between; gap:1rem; flex-wrap:wrap; align-items:center; }
    .search-premium { position:relative; width:min(100%,360px); }
    .search-premium i { position:absolute; left:1rem; top:50%; transform:translateY(-50%); color:var(--gold); }
    .search-premium input { width:100%; border:1px solid rgba(36,27,100,.14); border-radius:999px; padding:.8rem 2.6rem .8rem 2.6rem; color:var(--brown-dark); background:white; }
    .search-premium input:focus { border-color:var(--gold); outline:none; box-shadow:0 0 0 3px rgba(212,175,55,.2); }
    .search-premium a { position:absolute; right:1rem; top:50%; transform:translateY(-50%); color:#9ca3af; }
    .table-responsive-custom { overflow-x:auto; -webkit-overflow-scrolling:touch; }
    .table-ultra { margin-bottom:0; width:100%; border-collapse:separate; border-spacing:0; }
    .table-ultra thead th {
        background:linear-gradient(to bottom,#FEFAF5,#FDF7F0);
        border-bottom:2px solid rgba(212,175,55,.3);
        padding:1.2rem 1rem;
        font-weight:700;
        text-transform:uppercase;
        font-size:.75rem;
        letter-spacing:.08em;
        color:#000000 !important;
    }
    .table-ultra tbody td { padding:1.1rem 1rem; vertical-align:middle; border-bottom:1px solid rgba(141,110,99,.1); color:#2C1A12; font-weight:500; background:var(--white); }
    .table-ultra tbody tr:hover td { background:#FFFBF5; }

    /* Badge default - tidak digunakan karena sudah inline, namun tetap disediakan */
    .badge-section {
        background-color: #4b3dad !important;
        padding: .3rem .8rem;
        border-radius: 40px;
        font-size: .75rem;
        font-weight: 600;
        display: inline-block;
        text-decoration: none;
        border: none;
    }

    .sertifikat-preview { background:#f1efec; padding:.2rem .7rem; border-radius:20px; font-size:.75rem; font-family:monospace; max-width:250px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; display:inline-block; }
    .btn-action-ultra { display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; border-radius:14px; background:rgba(36,27,100,.06); border:1px solid rgba(36,27,100,.12); color:var(--brown-medium); transition:all .25s; text-decoration:none; }
    .btn-action-ultra:hover { background:var(--brown-dark); color:var(--gold-light); border-color:var(--gold); transform:translateY(-2px); }
    .btn-action-ultra.danger:hover { background:#B33A3A; color:#fff; border-color:#FFA2A2; }
    .footer-premium { padding:1rem 1.5rem; background:#FFFBF5; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; color:var(--brown-medium); }
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
        box-shadow: none;
        transition: all 0.2s;
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
    }
    .footer-premium .page-link:hover {
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
    .action-group {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        align-items: flex-start;
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2 py-3">
    <div class="page-header-premium">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="page-title-premium"><i class="fas fa-certificate"></i><span>Sertifikat & Legalitas</span></div>
            <div class="action-group">
                <div class="stat-badge-premium"><i class="fas fa-database me-1"></i>{{ $certificates->total() }} Data Sertifikat</div>
                <a href="{{ route('admin.certificates.create') }}" class="btn-premium-ultra">
                    <i class="fas fa-plus-circle"></i> Tambah Sertifikat
                </a>
            </div>
        </div>
        <div class="stat-badge-premium"><i class="fas fa-calendar-alt me-1"></i>{{ now()->format('d M Y') }}</div>
    </div>

    @if(session('success'))
        <div class="alert-premium-success">{{ session('success') }}</div>
    @endif

    <div class="card-ultra">
        <div class="toolbar-premium">
            <form method="GET" action="{{ route('admin.certificates.index') }}" class="search-premium">
                <i class="fas fa-search"></i>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari Nomor Sertifikat / Nama / Jenis...">
                @if(request('search'))
                    <a href="{{ route('admin.certificates.index') }}"><i class="fas fa-times-circle"></i></a>
                @endif
            </form>
        </div>

        <div class="table-responsive-custom">
            <table class="table-ultra">
                <thead>
                    <tr>
                        <th style="color: #000000 !important;">No</th>
                        <th style="color: #000000 !important;">Jenis</th>
                        <th style="color: #000000 !important;">Nomor Sertifikat</th>
                        <th style="color: #000000 !important;">Nama</th>
                        <th style="color: #000000 !important;">Penerbit</th>
                        <th style="color: #000000 !important;">Tanggal Terbit</th>
                        <th style="color: #000000 !important;">Berlaku s.d.</th>
                        <th style="color: #000000 !important;">Kualifikasi</th>
                        <th style="color: #000000 !important;" class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($certificates as $index => $certificate)
                    <tr>
                        <td>{{ $certificates->firstItem() + $index }}</td>
                        <!-- INLINE STYLE DENGAN !important UNTUK WARNA PUTIH -->
                        <td style="padding: 1.1rem 1rem; vertical-align: middle;">
                            <span class="badge-section" style="color: #ffffff !important; background-color: #4b3dad !important; display: inline-block; padding: .3rem .8rem; border-radius: 40px; font-size: .75rem; font-weight: 600;">
                                {{ $certificate->jenis_sertifikat }}
                            </span>
                        </td>
                        <td>
                            <span class="sertifikat-preview" title="{{ $certificate->nomor_sertifikat }}">
                                {{ $certificate->nomor_sertifikat }}
                            </span>
                        </td>
                        <td>{{ $certificate->nama_sertifikat ?? '-' }}</td>
                        <td>{{ $certificate->penerbit ?? '-' }}</td>
                        <td>{{ $certificate->tanggal_terbit ? date('d/m/Y', strtotime($certificate->tanggal_terbit)) : '-' }}</td>
                        <td>{{ $certificate->tanggal_berlaku_sampai ? date('d/m/Y', strtotime($certificate->tanggal_berlaku_sampai)) : 'Tidak terbatas' }}</td>
                        <td>{{ $certificate->kualifikasi ?? '-' }}</td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('admin.certificates.edit', $certificate->id) }}" class="btn-action-ultra" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <form action="{{ route('admin.certificates.destroy', $certificate->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data sertifikat ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action-ultra danger" title="Hapus"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center py-5">
                            <i class="fas fa-certificate fa-2x text-brown-light mb-3 d-block"></i>
                            <p class="text-brown-medium mb-0">Belum ada data sertifikat.</p>
                            <a href="{{ route('admin.certificates.create') }}" class="btn btn-sm btn-outline-brown-3d mt-3 rounded-pill">Tambah Sekarang</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="footer-premium">
            <span><i class="fas fa-eye me-1"></i>Menampilkan {{ $certificates->firstItem() ?? 0 }} - {{ $certificates->lastItem() ?? 0 }} dari {{ $certificates->total() }} data</span>
            @if($certificates->hasPages())
                <div>{{ $certificates->links('pagination::bootstrap-4') }}</div>
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
@endpush --}}
