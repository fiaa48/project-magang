@extends('admin.layouts.app')

@section('title', 'Data Project - Admin')

@push('styles')
<style>
    :root {
        --brown-dark: #171247;
        --brown-medium: #241b64;
        --brown-light: #4b3dad;
        --cream: #ffffff;
        --white: #FFFFFF;
        --gold: #D4AF37;
        --gold-light: #F3E5AB;
        --shadow-sm: 0 10px 20px rgba(0,0,0,0.02), 0 6px 6px rgba(0,0,0,0.03);
        --shadow-md: 0 20px 30px -12px rgba(0,0,0,0.1), 0 8px 12px rgba(0,0,0,0.05);
        --shadow-lg: 0 30px 40px -15px rgba(0,0,0,0.2);
    }
    body { background: linear-gradient(145deg, #F9F5EF 0%, #FDF9F4 100%); }
    .page-header-premium { margin-bottom: 2.5rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; }
    .page-title-premium { font-size: 2rem; font-weight: 800; background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium)); -webkit-background-clip: text; background-clip: text; color: transparent; display: flex; align-items: center; gap: .75rem; }
    .page-title-premium i { background: linear-gradient(135deg, var(--gold), #B8860B); -webkit-background-clip: text; background-clip: text; color: transparent; font-size: 2.2rem; }
    .stat-badge-premium { background: rgba(255,255,240,.8); padding: .6rem 1.2rem; border-radius: 40px; font-weight: 600; color: var(--brown-dark); border: 1px solid rgba(212,175,55,.3); box-shadow: var(--shadow-sm); font-size: .9rem; }
    .btn-premium-ultra { background: linear-gradient(105deg, var(--brown-dark), #241b64); border: none; border-radius: 60px; padding: .85rem 1.4rem; font-weight: 700; color: white; display: inline-flex; align-items: center; gap: .55rem; text-decoration: none; box-shadow: 0 8px 18px rgba(36,27,100,.18); }
    .btn-premium-ultra:hover { color: var(--gold-light); transform: translateY(-2px); }
    .card-ultra { background: var(--white); border-radius: 2rem; border: none; box-shadow: var(--shadow-md); overflow: hidden; position: relative; }
    .card-ultra::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 6px; background: linear-gradient(90deg, var(--gold), var(--brown-light), var(--gold)); z-index: 2; }
    .toolbar-premium { padding: 1.4rem 1.5rem 1rem; display: flex; justify-content: space-between; gap: 1rem; flex-wrap: wrap; align-items: center; }
    .search-premium { position: relative; width: min(100%, 360px); }
    .search-premium i { position: absolute; left: 1rem; top: 50%; transform: translateY(-50%); color: var(--gold); }
    .search-premium input { width: 100%; border: 1px solid rgba(36,27,100,.14); border-radius: 999px; padding: .8rem 2.6rem .8rem 2.6rem; color: var(--brown-dark); background: white; }
    .search-premium input:focus { border-color: var(--gold); outline: none; box-shadow: 0 0 0 3px rgba(212,175,55,.2); }
    .search-premium a { position: absolute; right: 1rem; top: 50%; transform: translateY(-50%); color: #9ca3af; }
    .table-responsive-custom { overflow-x: auto; -webkit-overflow-scrolling: touch; }
    .table-ultra { margin-bottom: 0; width: 100%; border-collapse: separate; border-spacing: 0; }
    .table-ultra thead th {
        background: linear-gradient(to bottom, #FEFAF5, #FDF7F0);
        border-bottom: 2px solid rgba(212,175,55,.3);
        padding: 1.2rem 1rem;
        font-weight: 700;
        text-transform: uppercase;
        font-size: .75rem;
        letter-spacing: .08em;
    }
    .table-ultra tbody td { padding: 1.1rem 1rem; vertical-align: middle; border-bottom: 1px solid rgba(141,110,99,.1); color: #2C1A12; font-weight: 500; background-color: var(--white); }
    .table-ultra tbody tr:hover td { background-color: #FFFBF5; }
    .btn-action-ultra { display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; border-radius: 14px; background: rgba(36,27,100,.06); border: 1px solid rgba(36,27,100,.12); color: var(--brown-medium); transition: all .25s; text-decoration: none; }
    .btn-action-ultra:hover { background: var(--brown-dark); color: var(--gold-light); border-color: var(--gold); transform: translateY(-2px); }
    .btn-action-ultra.danger:hover { background: #B33A3A; color: #fff; border-color: #FFA2A2; }
    .badge-section {
        background: var(--brown-light);
        padding: .3rem .8rem;
        border-radius: 40px;
        font-size: .75rem;
        display: inline-block;
    }
    .footer-premium { padding: 1rem 1.5rem; background: #FFFBF5; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; color: var(--brown-medium); }
    .action-group {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        align-items: flex-start;
    }

    /* ========== STYLE PAGINATION KONSISTEN DENGAN HALAMAN SERTIFIKAT & KONTAK ========== */
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
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2 py-3">
    <div class="page-header-premium">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="page-title-premium">
                <i class="fas fa-clipboard-list"></i>
                <span>Data Project</span>
            </div>
            <div class="action-group">
                <div class="stat-badge-premium"><i class="fas fa-database me-1"></i>{{ $projects->total() }} Project</div>
                <a href="{{ route('admin.projects.create') }}" class="btn-premium-ultra">
                    <i class="fas fa-plus-circle"></i> Tambah Project
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
            <form method="GET" action="{{ route('admin.projects.index') }}" class="search-premium">
                <i class="fas fa-search"></i>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari project, kategori, lokasi, tahun...">
                @if(request('search'))
                    <a href="{{ route('admin.projects.index') }}"><i class="fas fa-times-circle"></i></a>
                @endif
            </form>
            {{-- Tidak perlu menampilkan stat badge lagi di sini karena sudah di header --}}
        </div>

        <div class="table-responsive-custom">
            <table class="table-ultra">
                <thead>
                    <tr>
                        <th style="color: #000000 !important;">ID</th>
                        <th style="color: #000000 !important;">Judul</th>
                        <th style="color: #000000 !important;">Slug</th>
                        <th style="color: #000000 !important;">Kategori</th>
                        <th style="color: #000000 !important;">Lokasi</th>
                        <th style="color: #000000 !important;">Tahun</th>
                        <th style="color: #000000 !important;">Dibuat</th>
                        <th style="color: #000000 !important;" class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects as $project)
                    <tr>
                        <td class="fw-mono">{{ $project->id }}</td>
                        <td class="fw-semibold">{{ data_get($project, 'title', '-') }}</td>
                        <td>{{ data_get($project, 'slug', '-') }}</td>
                        <td>
                            <span class="badge-section" style="color: #ffffff !important;">
                                {{ data_get($project, 'category', '-') }}
                            </span>
                        </td>
                        <td>{{ data_get($project, 'location', '-') }}</td>
                        <td>{{ data_get($project, 'year', '-') }}</td>
                        <td>{{ optional(data_get($project, 'created_at'))->format('d/m/Y') ?? '-' }}</td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn-action-ultra" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action-ultra danger" title="Hapus"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center py-5">
                            <i class="fas fa-folder-open fa-2x text-brown-light mb-3 d-block"></i>
                            <p class="text-brown-medium mb-0">Belum ada project.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="footer-premium">
            <span><i class="fas fa-file-alt me-1"></i>Menampilkan {{ $projects->firstItem() ?? 0 }} - {{ $projects->lastItem() ?? 0 }} dari {{ $projects->total() }} project</span>
            @if($projects instanceof \Illuminate\Contracts\Pagination\Paginator || $projects instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
                <div>
                    {{ $projects->appends(request()->query())->links('pagination::bootstrap-4') }}
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
