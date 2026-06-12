{{-- resources/views/admin/home/index.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Data Home - Admin Panel')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
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

    /* ========== SECTION GRID ========== */
    .info-section {
        padding: 1.5rem 2rem;
        border-bottom: 1px solid rgba(141,110,99,0.1);
    }
    .section-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--brown-dark);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
        border-left: 5px solid var(--gold);
        padding-left: 1rem;
    }
    .section-title i {
        color: var(--gold);
    }
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 1.25rem;
    }
    .info-card {
        background: var(--cream);
        border-radius: 1.2rem;
        padding: 1.2rem 1.5rem;
        transition: all 0.3s;
        border: 1px solid transparent;
        box-shadow: var(--shadow-sm);
    }
    .info-card:hover {
        transform: translateY(-4px);
        background: var(--white);
        border-color: var(--gold);
        box-shadow: var(--shadow-md);
    }
    .info-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
        color: var(--gold);
        margin-bottom: 0.5rem;
    }
    .info-value {
        font-size: 1rem;
        font-weight: 500;
        color: var(--brown-dark);
        word-break: break-word;
    }
    .list-value {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .list-value li {
        padding: 0.25rem 0;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .list-value li i {
        color: var(--gold);
        font-size: 0.8rem;
    }
    .stats-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }
    .stat-number {
        text-align: center;
        background: var(--cream);
        border-radius: 1rem;
        padding: 1rem;
        transition: all 0.3s;
    }
    .stat-number:hover {
        transform: translateY(-3px);
        background: var(--white);
        border: 1px solid var(--gold);
    }
    .stat-number .number {
        font-size: 2rem;
        font-weight: 800;
        color: var(--gold);
        line-height: 1;
    }
    .stat-number .label {
        font-size: 0.8rem;
        color: var(--brown-medium);
        margin-top: 0.3rem;
    }

    /* ========== BUTTONS ========== */
    .action-buttons {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
        flex-wrap: wrap;
        padding: 0 2rem 2rem 0;
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
    .btn-outline-premium {
        background: transparent;
        border: 1px solid var(--brown-dark);
        border-radius: 60px;
        padding: 0.75rem 1.8rem;
        font-weight: 600;
        color: var(--brown-dark);
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
        cursor: pointer;
    }
    .btn-outline-premium:hover {
        background: var(--brown-dark);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(0,0,0,0.1);
    }

    .alert-premium {
        background: rgba(212,175,55,0.1);
        border-left: 4px solid var(--gold);
        border-radius: 1rem;
        color: #171247;
        padding: 0.9rem 1.2rem;
        margin-bottom: 1.8rem;
        font-weight: 500;
    }
    .empty-state {
        text-align: center;
        padding: 3rem;
        color: var(--brown-light);
    }

    @media (max-width: 768px) {
        .page-header-premium { flex-direction: column; align-items: stretch; }
        .info-section { padding: 1rem; }
        .info-grid { grid-template-columns: 1fr; }
        .action-buttons { justify-content: center; padding: 0 1rem 1rem 0; }
        .btn-premium-ultra, .btn-outline-premium { width: 100%; justify-content: center; }
        .stats-row { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 480px) {
        .stats-row { grid-template-columns: 1fr; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-3 px-lg-4 py-3">
    <div class="page-header-premium">
        <div class="d-flex flex-column align-items-start">
            <div class="page-title-premium">
                <i class="fas fa-home"></i>
                <span>Data Beranda</span>
            </div>
            <div class="stat-badge-premium mt-2">
                <i class="fas fa-database me-2"></i>
                @if($home) 1 Data @else 0 Data @endif
            </div>
        </div>
        <div class="stat-badge-premium">
            <i class="fas fa-calendar-alt me-2"></i>
            {{ now()->translatedFormat('d F Y') }}
        </div>
    </div>

    @if(session('success'))
        <div class="alert-premium">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
        </div>
    @endif

    @if($home)
        <div class="card-ultra">
            <!-- Bagian Utama -->
            <div class="info-section">
                <div class="section-title">
                    <i class="fas fa-star"></i>
                    <span>Bagian Utama</span>
                </div>
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-label"><i class="fas fa-heading"></i> Judul</div>
                        <div class="info-value">{{ $home->hero_title ?? '-' }}</div>
                    </div>
                    <div class="info-card">
                        <div class="info-label"><i class="fas fa-paragraph"></i> Deskripsi</div>
                        <div class="info-value">{{ $home->hero_description ?? '-' }}</div>
                    </div>
                    <div class="info-card">
                        <div class="info-label"><i class="fas fa-user-tie"></i> Ahli</div>
                        <div class="info-value">{{ $home->hero_specialist ?? '-' }}</div>
                    </div>
                </div>
            </div>

            <!-- Tentang Kami -->
            <div class="info-section">
                <div class="section-title">
                    <i class="fas fa-info-circle"></i>
                    <span>Tentang Kami</span>
                </div>
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-label"><i class="fas fa-quote-left"></i> Deskripsi 1</div>
                        <div class="info-value">{{ $home->about_desc_1 ?? '-' }}</div>
                    </div>
                    <div class="info-card">
                        <div class="info-label"><i class="fas fa-quote-right"></i> Deskripsi 2</div>
                        <div class="info-value">{{ $home->about_desc_2 ?? '-' }}</div>
                    </div>
                </div>
            </div>

            <!-- Latar Belakang Perusahaan -->
            <div class="info-section">
                <div class="section-title">
                    <i class="fas fa-building"></i>
                    <span>Latar Belakang Perusahaan</span>
                </div>
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-label"><i class="fas fa-paragraph"></i> Latar Belakang 1</div>
                        <div class="info-value">{{ $home->background_desc_1 ?? '-' }}</div>
                    </div>
                    <div class="info-card">
                        <div class="info-label"><i class="fas fa-paragraph"></i> Latar Belakang 2</div>
                        <div class="info-value">{{ $home->background_desc_2 ?? '-' }}</div>
                    </div>
                    <div class="info-card">
                        <div class="info-label"><i class="fas fa-list-ul"></i> Daftar Latar Belakang</div>
                        <div class="info-value">
                            @php
                                $bgList = $home->background_list;
                                $displayList = [];
                                if (!empty($bgList)) {
                                    if (is_string($bgList)) {
                                        // Coba decode JSON
                                        $decoded = json_decode($bgList, true);
                                        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                                            $displayList = $decoded;
                                        } else {
                                            // Mungkin berupa teks dengan baris baru
                                            $lines = array_filter(array_map('trim', explode("\n", $bgList)));
                                            if (!empty($lines)) {
                                                $displayList = $lines;
                                            } else {
                                                $displayList = [$bgList];
                                            }
                                        }
                                    } elseif (is_array($bgList)) {
                                        $displayList = $bgList;
                                    }
                                }
                            @endphp
                            @if(!empty($displayList))
                                <ul class="list-value">
                                    @foreach($displayList as $item)
                                        <li><i class="fas fa-check-circle"></i> {{ $item }}</li>
                                    @endforeach
                                </ul>
                            @else
                                -
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistik -->
            <div class="info-section">
                <div class="section-title">
                    <i class="fas fa-chart-line"></i>
                    <span>Statistik Perusahaan</span>
                </div>
                <div class="stats-row">
                    <div class="stat-number">
                        <div class="number">{{ $home->experience_years ?? 0 }}</div>
                        <div class="label">Tahun Pengalaman</div>
                    </div>
                    <div class="stat-number">
                        <div class="number">{{ $home->projects_done ?? 0 }}</div>
                        <div class="label">Project Selesai</div>
                    </div>
                    <div class="stat-number">
                        <div class="number">{{ $home->certifications ?? 0 }}</div>
                        <div class="label">Sertifikasi</div>
                    </div>
                    <div class="stat-number">
                        <div class="number">{{ $home->experts ?? 0 }}</div>
                        <div class="label">Ahli di Bidangnya</div>
                    </div>
                </div>
            </div>

            <!-- Ajakan Bertindak -->
            <div class="info-section">
                <div class="section-title">
                    <i class="fas fa-bullhorn"></i>
                    <span>Ajakan Bertindak</span>
                </div>
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-label"><i class="fas fa-heading"></i> Judul Ajakan</div>
                        <div class="info-value">{{ $home->cta_title ?? '-' }}</div>
                    </div>
                    <div class="info-card">
                        <div class="info-label"><i class="fas fa-paragraph"></i> Deskripsi Ajakan</div>
                        <div class="info-value">{{ $home->cta_description ?? '-' }}</div>
                    </div>
                </div>
            </div>

            <div class="action-buttons">
                <a href="{{ route('admin.home.edit') }}" class="btn-premium-ultra">
                    <i class="fas fa-edit"></i> Edit Data
                </a>
                <form action="{{ route('admin.home.delete') }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus seluruh data homepage?')" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-outline-premium" style="border-color: #b22234; color: #b22234;">
                        <i class="fas fa-trash-alt"></i> Hapus Data
                    </button>
                </form>
            </div>
        </div>
    @else
        <div class="card-ultra">
            <div class="empty-state">
                <i class="fas fa-home fa-3x mb-3 opacity-50"></i>
                <h5 class="fw-bold">Belum Ada Data Beranda</h5>
                <p>Silakan tambah data beranda melalui tombol di bawah.</p>
                <a href="{{ route('admin.home.edit') }}" class="btn-premium-ultra mt-3">
                    <i class="fas fa-plus-circle"></i> Tambah Data
                </a>
            </div>
        </div>
    @endif
</div>
@endsection


