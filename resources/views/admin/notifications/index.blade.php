@extends('admin.layouts.app')

@section('title', 'Notifikasi Konsultasi - Admin')

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
        --shadow-lg: 0 30px 40px -15px rgba(0,0,0,0.2);
    }

    body {
        background: linear-gradient(145deg, #F9F5EF 0%, #FDF9F4 100%);
    }

    /* Header premium */
    .page-header-premium {
        margin-bottom: 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .page-title-premium {
        font-size: 1.8rem;
        font-weight: 800;
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .page-title-premium i {
        background: linear-gradient(135deg, var(--gold), #B8860B);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size: 2rem;
    }
    .stat-badge-premium {
        background: rgba(255,255,240,0.8);
        backdrop-filter: blur(4px);
        padding: 0.5rem 1rem;
        border-radius: 40px;
        font-weight: 600;
        color: var(--brown-dark);
        border: 1px solid rgba(212,175,55,0.3);
        box-shadow: var(--shadow-sm);
        font-size: 0.85rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
    }

    /* Card utama */
    .card-ultra {
        background: var(--white);
        border-radius: 2rem;
        border: none;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
    }
    .card-ultra:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
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

    /* Toolbar */
    .toolbar-premium {
        padding: 1.2rem 1.5rem;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
        align-items: center;
        background: #fff;
        border-bottom: 1px solid rgba(212,175,55,0.2);
    }
    .search-premium {
        position: relative;
        width: min(100%, 320px);
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
        border: 1px solid rgba(36,27,100,0.14);
        border-radius: 999px;
        padding: 0.7rem 2rem 0.7rem 2.5rem;
        font-size: 0.85rem;
        background: white;
        transition: all 0.2s;
    }
    .search-premium input:focus {
        border-color: var(--gold);
        outline: none;
        box-shadow: 0 0 0 3px rgba(212,175,55,0.2);
    }
    .search-premium a {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #9ca3af;
    }

    /* Grid notifikasi - 3 kolom */
    .notification-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 1.5rem;
        padding: 1.5rem;
    }

    /* Kartu notifikasi */
    .notification-card {
        background: white;
        border-radius: 1.5rem;
        border: 1px solid rgba(212,175,55,0.2);
        box-shadow: var(--shadow-sm);
        transition: all 0.25s ease;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }
    .notification-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow-md);
        border-color: var(--gold);
    }
    .notification-header {
        padding: 1rem 1.2rem 0.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 0.5rem;
        border-bottom: 1px solid rgba(212,175,55,0.2);
    }
    .notification-subject {
        font-weight: 800;
        color: white;
        background: var(--brown-light);
        padding: 0.25rem 1rem;
        border-radius: 30px;
        font-size: 0.75rem;
        display: inline-block;
        word-break: break-word;
    }
    .notification-date {
        font-size: 0.7rem;
        color: #6c757d;
        display: flex;
        align-items: center;
        gap: 0.3rem;
        white-space: nowrap;
    }
    .notification-body {
        padding: 1rem 1.2rem;
        flex: 1;
    }
    .notification-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 0.6rem;
        margin-bottom: 1rem;
    }
    .notification-meta span {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        background: #f8fafc;
        padding: 0.3rem 0.8rem;
        border-radius: 40px;
        font-size: 0.75rem;
        color: var(--brown-dark);
        word-break: break-word;
    }
    .notification-message {
        background: #FEFAF5;
        padding: 0.8rem;
        border-radius: 1rem;
        border-left: 3px solid var(--gold);
        font-size: 0.85rem;
        line-height: 1.5;
        color: #2C1A12;
        word-break: break-word;
        white-space: pre-wrap;
        margin: 0;
    }
    .notification-footer {
        padding: 0.8rem 1.2rem 1rem;
        display: flex;
        justify-content: flex-end;
        border-top: 1px solid rgba(212,175,55,0.2);
        background: #fff;
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
        cursor: pointer;
    }
    .btn-action-ultra:hover {
        background: var(--brown-dark);
        color: var(--gold-light);
        border-color: var(--gold);
        transform: translateY(-2px);
    }
    .btn-action-ultra.danger:hover {
        background: #B33A3A;
        color: white;
        border-color: #FFA2A2;
    }

    /* Pagination premium (sama dengan halaman lain) */
    .footer-premium {
        padding: 1rem 1.5rem;
        background: #FFFBF5;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        color: var(--brown-medium);
        border-top: 1px solid rgba(212,175,55,0.2);
    }
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
        font-size: 0.8rem;
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

    /* Alert premium sukses */
    .alert-premium-success {
        background: #E8F5E9;
        border-left: 5px solid #2E7D32;
        border-radius: 1rem;
        padding: 0.8rem 1.2rem;
        color: #1B5E20;
        margin-bottom: 1.5rem;
        font-size: 0.85rem;
    }

    /* Empty state */
    .empty-state {
        text-align: center;
        padding: 3rem 1rem;
    }
    .empty-state i {
        font-size: 3rem;
        color: var(--brown-light);
        opacity: 0.5;
    }
    .empty-state h5 {
        margin-top: 1rem;
        font-weight: 700;
        color: var(--brown-dark);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-title-premium { font-size: 1.4rem; }
        .notification-grid { gap: 1rem; padding: 1rem; grid-template-columns: 1fr; }
        .toolbar-premium { flex-direction: column; align-items: stretch; }
        .search-premium { width: 100%; }
        .footer-premium { flex-direction: column; text-align: center; }
        .notification-date { white-space: normal; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2 py-3">
    <div class="page-header-premium">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="page-title-premium">
                <i class="fas fa-bell"></i>
                <span>Notifikasi Konsultasi</span>
            </div>
            <div class="stat-badge-premium">
                <i class="fas fa-inbox me-1"></i>{{ $notifications->total() }} Pesan
            </div>
        </div>
        <div class="stat-badge-premium">
            <i class="fas fa-calendar-alt me-1"></i>{{ now()->format('d M Y') }}
        </div>
    </div>

    @if(session('success'))
        <div class="alert-premium-success">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
        </div>
    @endif

    <div class="card-ultra">
        <div class="toolbar-premium">
            <form method="GET" action="{{ route('admin.notifications.index') }}" class="search-premium">
                <i class="fas fa-search"></i>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama, email, subjek, pesan...">
                @if(request('search'))
                    <a href="{{ route('admin.notifications.index') }}"><i class="fas fa-times-circle"></i></a>
                @endif
            </form>
            <a href="{{ route('admin.contacts.index') }}" class="stat-badge-premium text-decoration-none">
                <i class="fas fa-address-book me-1"></i> Buka Kontak
            </a>
        </div>

        @if($notifications->count() > 0)
            <div class="notification-grid">
                @foreach($notifications as $item)
                <div class="notification-card">
                    <div class="notification-header">
                        <span class="notification-subject">{{ $item->subject }}</span>
                        <span class="notification-date">
                            <i class="fas fa-clock"></i> {{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}
                        </span>
                    </div>
                    <div class="notification-body">
                        <div class="notification-meta">
                            <span><i class="fas fa-user"></i> {{ $item->name }}</span>
                            <span><i class="fas fa-envelope"></i> {{ $item->email }}</span>
                            <span><i class="fas fa-phone"></i> {{ $item->phone ?? '-' }}</span>
                        </div>
                        <div class="notification-message">
                            {{ $item->message }}
                        </div>
                    </div>
                    <div class="notification-footer">
                        <form action="{{ route('admin.contacts.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus notifikasi ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action-ultra danger" title="Hapus">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="footer-premium">
                <span>
                    <i class="fas fa-eye me-1"></i>
                    Menampilkan {{ $notifications->firstItem() }} - {{ $notifications->lastItem() }} dari {{ $notifications->total() }} pesan
                </span>
                @if($notifications->hasPages())
                    <div>
                        {{ $notifications->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </div>
                @endif
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-bell-slash"></i>
                <h5>Belum Ada Notifikasi</h5>
                <p class="text-muted">Belum ada pesan konsultasi masuk.</p>
            </div>
        @endif
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
