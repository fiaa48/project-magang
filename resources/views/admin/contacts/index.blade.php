@extends('admin.layouts.app')

@section('title', 'Pesan Kontak - Admin')

@push('styles')
<style>
    :root { --brown-dark:#171247; --brown-medium:#241b64; --brown-light:#4b3dad; --white:#fff; --gold:#D4AF37; --gold-light:#F3E5AB; --shadow-sm:0 10px 20px rgba(0,0,0,.02),0 6px 6px rgba(0,0,0,.03); --shadow-md:0 20px 30px -12px rgba(0,0,0,.1),0 8px 12px rgba(0,0,0,.05); }
    body { background:linear-gradient(145deg,#F9F5EF 0%,#FDF9F4 100%); }
    .page-header-premium { margin-bottom:2.5rem; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; }
    .page-title-premium { font-size:2rem; font-weight:800; background:linear-gradient(135deg,var(--brown-dark),var(--brown-medium)); -webkit-background-clip:text; background-clip:text; color:transparent; display:flex; align-items:center; gap:.75rem; }
    .page-title-premium i { background:linear-gradient(135deg,var(--gold),#B8860B); -webkit-background-clip:text; background-clip:text; color:transparent; font-size:2.2rem; }
    .stat-badge-premium { background:rgba(255,255,240,.8); padding:.6rem 1.2rem; border-radius:40px; font-weight:600; color:var(--brown-dark); border:1px solid rgba(212,175,55,.3); box-shadow:var(--shadow-sm); font-size:.9rem; }
    .card-ultra { background:var(--white); border-radius:2rem; border:none; box-shadow:var(--shadow-md); overflow:hidden; position:relative; }
    .card-ultra::before { content:''; position:absolute; top:0; left:0; right:0; height:6px; background:linear-gradient(90deg,var(--gold),var(--brown-light),var(--gold)); z-index:2; }
    .toolbar-premium { padding:1.4rem 1.5rem 1rem; display:flex; justify-content:space-between; gap:1rem; flex-wrap:wrap; align-items:center; }
    .search-premium { position:relative; width:min(100%,380px); }
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
    }
    .table-ultra tbody td { padding:1.1rem 1rem; vertical-align:middle; border-bottom:1px solid rgba(141,110,99,.1); color:#2C1A12; font-weight:500; background:var(--white); }
    .table-ultra tbody tr:hover td { background:#FFFBF5; }
    .message-preview { max-width:260px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
    .btn-action-ultra { display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; border-radius:14px; background:rgba(36,27,100,.06); border:1px solid rgba(36,27,100,.12); color:var(--brown-medium); transition:all .25s; text-decoration:none; }
    .btn-action-ultra:hover { background:var(--brown-dark); color:var(--gold-light); border-color:var(--gold); transform:translateY(-2px); }
    .btn-action-ultra.danger:hover { background:#B33A3A; color:#fff; border-color:#FFA2A2; }
    .footer-premium { padding:1rem 1.5rem; background:#FFFBF5; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; color:var(--brown-medium); }

    /* ========== STYLE PAGINATION KONSISTEN DENGAN HALAMAN SERTIFIKAT ========== */
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
            <div class="page-title-premium"><i class="fas fa-envelope-open-text"></i><span>Pesan Kontak</span></div>
            <div class="stat-badge-premium"><i class="fas fa-inbox me-1"></i>{{ $messages->total() }} Pesan</div>
        </div>
        <div class="stat-badge-premium"><i class="fas fa-calendar-alt me-1"></i>{{ now()->format('d M Y') }}</div>
    </div>

    @if(session('success'))
        <div class="alert-premium-success">{{ session('success') }}</div>
    @endif

    <div class="card-ultra">
        <div class="toolbar-premium">
            <form method="GET" action="{{ route('admin.contacts.index') }}" class="search-premium">
                <i class="fas fa-search"></i>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama, email, subjek, pesan...">
                @if(request('search'))
                    <a href="{{ route('admin.contacts.index') }}"><i class="fas fa-times-circle"></i></a>
                @endif
            </form>
        </div>

        <div class="table-responsive-custom">
            <table class="table-ultra">
                <thead>
                    <tr>
                        <th style="color: #000000 !important;">Nama</th>
                        <th style="color: #000000 !important;">Email</th>
                        <th style="color: #000000 !important;">Telepon</th>
                        <th style="color: #000000 !important;">Subjek</th>
                        <th style="color: #000000 !important;">Pesan</th>
                        <th style="color: #000000 !important;">Tanggal</th>
                        <th style="color: #000000 !important;" class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($messages as $msg)
                    <tr>
                        <td class="fw-semibold">{{ $msg->name }}</td>
                        <td><a href="mailto:{{ $msg->email }}" class="text-brown-dark text-decoration-none">{{ $msg->email }}</a></td>
                        <td>{{ $msg->phone ?? '-' }}</td>
                        <td>{{ $msg->subject }}</td>
                        <td><div class="message-preview" title="{{ $msg->message }}">{{ Str::limit($msg->message, 60) }}</div></td>
                        <td class="text-nowrap"><small>{{ $msg->created_at ? $msg->created_at->format('d/m/Y H:i') : '-' }}</small></td>
                        <td class="text-end">
                            <form action="{{ route('admin.contacts.destroy', $msg) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan kontak ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action-ultra danger" title="Hapus"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-5">
                            <i class="fas fa-inbox fa-2x text-brown-light mb-3 d-block"></i>
                            <p class="text-brown-medium mb-0">Belum ada pesan kontak masuk.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="footer-premium">
            <span><i class="fas fa-eye me-1"></i>Menampilkan {{ $messages->firstItem() ?? 0 }} - {{ $messages->lastItem() ?? 0 }} dari {{ $messages->total() }} pesan</span>
            @if($messages->hasPages())
                <div>
                    {{ $messages->appends(request()->query())->links('pagination::bootstrap-4') }}
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
