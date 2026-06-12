@extends('admin.layouts.app')

@section('title', 'Manajemen Organisasi - Admin Panel')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
<style>
    /* ========== VARIABEL KONTRAST TINGGI ========== */
    :root {
        --brown-dark: #2c1a12;
        --brown-medium: #5a3d31;
        --brown-light: #a18472;
        --cream: #fff9f0;
        --white: #ffffff;
        --gold: #d4af37;
        --gold-light: #f5e7b2;
        --shadow-sm: 0 10px 25px -5px rgba(0,0,0,0.05), 0 8px 10px -6px rgba(0,0,0,0.02);
        --shadow-md: 0 20px 30px -12px rgba(0,0,0,0.1);
        --shadow-lg: 0 30px 45px -15px rgba(0,0,0,0.2);
        --shadow-3d: 0 15px 35px -10px rgba(0,0,0,0.3), 0 0 0 1px rgba(212,175,55,0.1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: radial-gradient(circle at 10% 20%, #fcf8f2, #f5efe7);
        font-family: 'Inter', sans-serif;
        color: var(--brown-dark);
        line-height: 1.5;
    }

    @keyframes fadeSlideUp {
        0% { opacity: 0; transform: translateY(35px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInScale {
        0% { opacity: 0; transform: scale(0.96); }
        100% { opacity: 1; transform: scale(1); }
    }

    /* ========== HEADER ========== */
    .page-header-premium {
        margin-bottom: 2.5rem;
        animation: fadeSlideUp 0.6s ease forwards;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .page-title-premium {
        font-size: 2rem;
        font-weight: 800;
        background: linear-gradient(135deg, var(--brown-dark), #6b4c3b);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .page-title-premium i {
        background: linear-gradient(135deg, var(--gold), #b8860b);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size: 2.2rem;
    }
    .stat-badge-premium {
        background: rgba(255,248,235,0.9);
        backdrop-filter: blur(8px);
        padding: 0.6rem 1.3rem;
        border-radius: 60px;
        font-weight: 600;
        color: var(--brown-dark);
        border: 1px solid rgba(212,175,55,0.4);
        font-size: 0.9rem;
    }
    .btn-premium-ultra {
        background: linear-gradient(105deg, var(--brown-dark) 0%, #4a2e26 100%);
        border: none;
        border-radius: 60px;
        padding: 0.7rem 1.8rem;
        font-weight: 700;
        color: white;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        text-decoration: none;
    }
    .btn-premium-ultra:hover {
        transform: translateY(-3px);
        background: linear-gradient(105deg, #4a2e26, var(--brown-dark));
        color: var(--gold-light);
    }

    /* ========== CARD 3D ========== */
    .card-ultra {
        background: var(--white);
        border-radius: 2rem;
        border: none;
        box-shadow: var(--shadow-3d);
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        overflow: hidden;
        animation: fadeInScale 0.5s ease forwards;
        margin-bottom: 2rem;
    }
    .card-ultra:hover {
        transform: translateY(-6px);
        box-shadow: 0 30px 45px -12px rgba(0,0,0,0.25), 0 0 0 1px rgba(212,175,55,0.3);
    }
    .card-ultra::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--gold), var(--brown-light), var(--gold));
        z-index: 2;
    }

    /* ========== KATEGORI SECTION ========== */
    .category-section {
        padding: 1.5rem 2rem;
        border-bottom: 1px solid rgba(141,110,99,0.1);
    }
    .category-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: var(--brown-dark);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
        border-left: 5px solid var(--gold);
        padding-left: 1rem;
    }
    .category-title i {
        color: var(--gold);
        font-size: 1.4rem;
    }
    .organization-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 1.5rem;
    }
    .org-card {
        background: var(--cream);
        border-radius: 1.2rem;
        padding: 1.2rem 1.5rem;
        transition: all 0.3s;
        border: 1px solid transparent;
        box-shadow: var(--shadow-sm);
    }
    .org-card:hover {
        transform: translateY(-5px);
        background: var(--white);
        border-color: var(--gold);
        box-shadow: var(--shadow-md);
    }
    .org-name {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--brown-dark);
        margin-bottom: 0.5rem;
    }
    .org-position, .org-shares, .org-value {
        font-size: 0.9rem;
        color: var(--brown-medium);
        margin-top: 0.25rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .org-position i, .org-shares i, .org-value i {
        color: var(--gold);
        width: 20px;
        font-size: 0.8rem;
    }
    .btn-action-group {
        display: flex;
        gap: 0.5rem;
        margin-top: 1rem;
        justify-content: flex-end;
    }
    .btn-action-ultra {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        background: transparent;
        border: 1px solid rgba(90,61,49,0.25);
        border-radius: 60px;
        padding: 0.3rem 1rem;
        color: var(--brown-dark);
        font-weight: 600;
        transition: all 0.25s;
        text-decoration: none;
        font-size: 0.8rem;
    }
    .btn-action-ultra:hover {
        background: var(--brown-dark);
        color: var(--white);
        border-color: var(--gold);
    }
    .btn-action-ultra.danger:hover {
        background: #b22234;
    }
    .empty-state {
        text-align: center;
        padding: 3rem;
        color: var(--brown-light);
    }
    @media (max-width: 768px) {
        .page-header-premium { flex-direction: column; align-items: stretch; }
        .organization-grid { grid-template-columns: 1fr; }
        .category-section { padding: 1rem; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-3 px-lg-4 py-3">
    <div class="page-header-premium">
        <div class="d-flex flex-column align-items-start">
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <div class="page-title-premium">
                    <i class="fas fa-building"></i>
                    <span>Struktur Organisasi</span>
                </div>
                <div class="stat-badge-premium">
                    <i class="fas fa-users me-2"></i>
                    {{ $data->count() }} Total Personil
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('admin.about.organization.create') }}" class="btn-premium-ultra">
                    <i class="fas fa-plus-circle"></i> Tambah Anggota
                </a>
            </div>
        </div>
        <div class="stat-badge-premium">
            <i class="fas fa-calendar-alt me-2"></i>
            {{ now()->translatedFormat('d F Y') }}
        </div>
    </div>

    @php
        // Urutan kategori yang diinginkan
        $categories = [
            'direksi' => ['label' => 'Direksi', 'icon' => 'fa-user-tie'],
            'komisaris' => ['label' => 'Komisaris', 'icon' => 'fa-gavel'],
            'pemegang_saham' => ['label' => 'Pemegang Saham', 'icon' => 'fa-chart-line'],
            'divisi' => ['label' => 'Divisi', 'icon' => 'fa-layer-group']
        ];
    @endphp

    @foreach($categories as $key => $cat)
        @php
            // Filter data berdasarkan category
            $filtered = $data->where('category', $key);
        @endphp
        @if($filtered->count() > 0)
            <div class="card-ultra">
                <div class="category-section">
                    <div class="category-title">
                        <i class="fas {{ $cat['icon'] }}"></i>
                        <span>{{ $cat['label'] }}</span>
                        <span class="stat-badge-premium" style="margin-left: auto; font-size: 0.7rem;">{{ $filtered->count() }} orang</span>
                    </div>
                    <div class="organization-grid">
                        @foreach($filtered as $org)
                            <div class="org-card">
                                <div class="org-name">{{ $org->name }}</div>
                                @if($org->position)
                                    <div class="org-position"><i class="fas fa-briefcase"></i> {{ $org->position }}</div>
                                @endif
                                @if($org->shares)
                                    <div class="org-shares"><i class="fas fa-percent"></i> Saham: {{ $org->shares }}%</div>
                                @endif
                                @if($org->value)
                                    <div class="org-value"><i class="fas fa-coins"></i> Nilai: {{ $org->value }}</div>
                                @endif
                                <div class="btn-action-group">
                                    <a href="{{ route('admin.about.organization.edit', $org->id) }}" class="btn-action-ultra"><i class="fas fa-edit"></i> Edit</a>
                                    <form action="{{ route('admin.about.organization.delete', $org->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn-action-ultra danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    @if($data->count() == 0)
        <div class="card-ultra">
            <div class="empty-state">
                <i class="fas fa-users-slash fa-3x mb-3 opacity-50"></i>
                <h5 class="fw-bold">Belum ada data organisasi</h5>
                <p>Klik tombol "Tambah Anggota" untuk mulai mengisi struktur organisasi.</p>
            </div>
        </div>
    @endif
</div>
@endsection


