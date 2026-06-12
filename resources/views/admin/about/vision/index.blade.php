@extends('admin.layouts.app')

@section('title', 'Visi & Misi - Admin Panel')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
<style>
    /* ========== VARIABEL KONTRAST TINGGI ========== */
    :root {
        --brown-dark: #2c1a12;
        --brown-medium: #5a3d31;
        --brown-light: #a18472;
        --cream: #fff9f0;
        --cream-dark: #f2e8da;
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

    /* ========== ANIMASI ========== */
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

    /* ========== CARD 3D ========== */
    .card-ultra {
        background: var(--white);
        border-radius: 2rem;
        border: none;
        box-shadow: var(--shadow-3d);
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        overflow: hidden;
        animation: fadeInScale 0.5s ease forwards;
    }
    .card-ultra:hover {
        transform: translateY(-8px) scale(1.01);
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

    /* ========== VISION SECTION ========== */
    .vision-section {
        padding: 2rem 2rem 1.5rem;
        border-bottom: 1px solid rgba(141,110,99,0.15);
    }
    .vision-text {
        background: linear-gradient(115deg, var(--cream) 0%, var(--white) 100%);
        border-radius: 1.5rem;
        padding: 1.8rem;
        margin-bottom: 2rem;
        border-left: 7px solid var(--gold);
    }
    .vision-text h3 {
        font-size: 1.6rem;
        font-weight: 700;
        color: var(--brown-dark);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }
    .vision-text h3 i {
        color: var(--gold);
        font-size: 1.8rem;
    }
    .vision-text p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #3a2a22;
        font-weight: 500;
    }
    .section-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--brown-dark);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        border-bottom: 2px solid rgba(212,175,55,0.3);
        padding-bottom: 0.6rem;
        margin-bottom: 1.2rem;
    }
    .section-title i {
        color: var(--gold);
    }
    .mission-list {
        list-style: none;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .mission-list li {
        background: var(--cream);
        border-radius: 1rem;
        padding: 0.9rem 1.2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        transition: all 0.25s;
    }
    .mission-list li:hover {
        transform: translateX(6px);
        background: var(--white);
        border: 1px solid var(--gold);
    }
    .mission-list li i {
        color: var(--gold);
        font-size: 1.2rem;
    }
    .values-section {
        margin-top: 2rem;  /* JARAK ANTARA MISI DAN NILAI */
    }
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 1rem;
    }
    .value-card {
        background: var(--cream);
        border-radius: 1.2rem;
        padding: 1rem 1.2rem;
        transition: all 0.25s;
        border: 1px solid transparent;
    }
    .value-card:hover {
        transform: translateY(-4px);
        background: var(--white);
        border-color: var(--gold);
    }
    .value-key {
        font-weight: 800;
        color: var(--gold);
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 1px;
        margin-bottom: 0.3rem;
    }
    .value-value {
        color: var(--brown-dark);
        font-weight: 500;
    }

    /* ========== BUTTONS ========== */
    .btn-action-group {
        display: flex;
        gap: 0.75rem;
        margin-top: 1.8rem;
        justify-content: flex-end;
        flex-wrap: wrap;
    }
    .btn-action-ultra {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: transparent;
        border: 1px solid rgba(90,61,49,0.25);
        border-radius: 60px;
        padding: 0.5rem 1.3rem;
        color: var(--brown-dark);
        font-weight: 600;
        transition: all 0.25s;
        text-decoration: none;
        font-size: 0.9rem;
    }
    .btn-action-ultra:hover {
        background: var(--brown-dark);
        color: var(--white);
        border-color: var(--gold);
        transform: translateY(-2px);
    }
    .btn-action-ultra.danger:hover {
        background: #b22234;
        border-color: #b22234;
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
    .btn-outline-premium {
        background: transparent;
        border: 1.5px solid var(--brown-dark);
        border-radius: 60px;
        padding: 0.5rem 1.3rem;
        font-weight: 600;
        color: var(--brown-dark);
        transition: all 0.25s;
        text-decoration: none;
    }
    .btn-outline-premium:hover {
        background: var(--brown-dark);
        color: white;
    }

    /* ========== EMPTY STATE ========== */
    .empty-state-premium {
        padding: 3rem 1rem;
        text-align: center;
        background: rgba(255,249,240,0.6);
        border-radius: 1.5rem;
        margin: 1rem;
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 992px) {
        .page-title-premium { font-size: 1.8rem; }
        .vision-text h3 { font-size: 1.4rem; }
        .values-grid { grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); }
    }
    @media (max-width: 768px) {
        .page-header-premium { flex-direction: column; align-items: stretch; }
        .btn-premium-ultra { justify-content: center; }
        .vision-section { padding: 1.5rem; }
        .btn-action-group { justify-content: center; }
    }
    @media (max-width: 480px) {
        .page-title-premium { font-size: 1.5rem; }
        .vision-text p { font-size: 1rem; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-3 px-lg-4 py-3">
    <div class="page-header-premium">
        <!-- BAGIAN KIRI: judul, badge total data, dan tombol di bawah dengan jarak -->
        <div class="d-flex flex-column align-items-start">
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <div class="page-title-premium">
                    <i class="fas fa-eye"></i>
                    <span>Visi & Misi Perusahaan</span>
                </div>
                <div class="stat-badge-premium">
                    <i class="fas fa-database me-2"></i>
                    {{ $data->count() }} Data
                </div>
            </div>
            <!-- Tombol Tambah Visi & Misi mengarah ke halaman create -->
            <div class="mt-4">
                <a href="{{ route('admin.about.vision.create') }}" class="btn-premium-ultra">
                    <i class="fas fa-plus-circle"></i> Tambah Visi & Misi
                </a>
            </div>
        </div>

        <!-- BAGIAN KANAN: tanggal -->
        <div class="d-flex gap-3 align-items-center flex-wrap">
            <div class="stat-badge-premium">
                <i class="fas fa-calendar-alt me-2"></i>
                {{ now()->translatedFormat('d F Y') }}
            </div>
        </div>
    </div>

    <div class="card-ultra">
        <div class="card-body p-0">
            @if($data->count() > 0)
                @foreach($data as $item)
                <div class="vision-section">
                    <div class="vision-text">
                        <h3><i class="fas fa-quote-left"></i> Visi Perusahaan</h3>
                        <p>{{ $item->vision ?? '-' }}</p>
                    </div>
                    <div class="missions-section">
                        <div class="section-title"><i class="fas fa-bullseye"></i> Misi Perusahaan</div>
                        @php
                            $missions = $item->missions;
                            if (is_string($missions)) $missions = json_decode($missions, true);
                        @endphp
                        @if(!empty($missions) && is_array($missions))
                            <ul class="mission-list">
                                @foreach($missions as $mission)
                                    <li><i class="fas fa-check-circle"></i><span>{{ $mission }}</span></li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-brown-light"><i class="fas fa-info-circle me-1"></i> Belum ada misi yang ditambahkan.</p>
                        @endif
                    </div>
                    <div class="values-section">
                        <div class="section-title"><i class="fas fa-gem"></i> Nilai-Nilai Perusahaan</div>
                        @php
                            $values = $item->values;
                            if (is_string($values)) $values = json_decode($values, true);
                        @endphp
                        @if(!empty($values) && is_array($values))
                            <div class="values-grid">
                                @foreach($values as $key => $value)
                                    <div class="value-card"><div class="value-key">{{ $key }}</div><div class="value-value">{{ $value }}</div></div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-brown-light"><i class="fas fa-info-circle me-1"></i> Belum ada nilai yang ditambahkan.</p>
                        @endif
                    </div>
                    <div class="btn-action-group">
                        <a href="{{ route('admin.about.vision.edit', $item->id) }}" class="btn-action-ultra"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('admin.about.vision.delete', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-action-ultra danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                        </form>
                    </div>
                </div>
                @endforeach
            @else
                <div class="empty-state-premium">
                    <i class="fas fa-eye-slash fa-3x text-brown-light opacity-50 mb-3"></i>
                    <h5 class="text-brown-dark fw-bold">Belum Ada Data Visi & Misi</h5>
                    <p class="text-brown-medium">Klik tombol "Tambah Visi & Misi" untuk membuat data baru.</p>
                </div>
            @endif
        </div>
    </div>

    @if($data->count() > 0)
    <div class="text-end mt-4 opacity-75 small">
        <i class="fas fa-sync-alt me-1"></i> Terakhir diperbarui: {{ now()->format('H:i:s') }} WIB
    </div>
    @endif
</div>
@endsection
