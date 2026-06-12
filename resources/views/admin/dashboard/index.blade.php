@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')

@push('styles')
<style>
    .dashboard-container {
        padding: 1.5rem;
    }

    /* Welcome Section */
    .welcome-section {
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        border-radius: 1.5rem;
        padding: 1.5rem 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 10px 30px -10px rgba(0,0,0,0.1);
        border: 1px solid rgba(36,27,100,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .welcome-section:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 35px -12px rgba(0,0,0,0.15);
    }
    .welcome-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #241b64;
        margin-bottom: 0.25rem;
    }
    .welcome-subtitle {
        font-size: 0.95rem;
        color: #4b5563;
        margin-bottom: 0;
        font-weight: 500;
    }

    /* Stat Cards Grid - 2 kolom rapi */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    /* Premium Stat Card */
    .stat-card {
        position: relative;
        border-radius: 1.5rem;
        padding: 1.5rem;
        background: #ffffff;
        box-shadow: 0 10px 20px -5px rgba(0,0,0,0.05), 0 0 0 1px rgba(0,0,0,0.02);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        z-index: 1;
    }
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #ef332d, #eef2ff);
        z-index: 2;
    }
    .stat-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 35px -12px rgba(0,0,0,0.2), 0 0 0 1px rgba(239,51,45,0.18);
    }
    /* Warna border left berbeda tiap card */
    .stat-card.users { border-left: 5px solid #6a85f1; }
    .stat-card.projects { border-left: 5px solid #ef332d; }
    .stat-card.certificates { border-left: 5px solid #241b64; }
    .stat-card.services { border-left: 5px solid #ef332d; }

    .stat-icon-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 0.8rem;
    }
    .stat-icon {
        width: 55px;
        height: 55px;
        border-radius: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        background: rgba(36,27,100,0.06);
        color: #241b64;
        transition: all 0.3s ease;
    }
    .stat-card:hover .stat-icon {
        transform: scale(1.05);
        background: rgba(239,51,45,0.15);
        color: #ef332d;
    }
    .stat-trend {
        font-size: 0.8rem;
        font-weight: 600;
        padding: 0.3rem 0.7rem;
        border-radius: 2rem;
        background: linear-gradient(135deg, #241b64, #302574);
        color: #ffffff;
    }
    .stat-number {
        font-size: 2.2rem;
        font-weight: 800;
        color: #111827;
        line-height: 1;
        margin-bottom: 0.25rem;
    }
    .stat-label {
        font-size: 0.85rem;
        font-weight: 600;
        color: #4b5563;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Visit Frontend Button */
    .visit-frontend-card {
        background: linear-gradient(135deg, #241b64, #302574);
        border-radius: 1.5rem;
        padding: 1rem 1.8rem;
        margin-bottom: 2rem;
        transition: all 0.3s ease;
        box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
    }
    .visit-frontend-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 35px -10px rgba(0,0,0,0.2);
    }
    .visit-frontend-card a {
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .visit-frontend-card .text {
        font-weight: 600;
        font-size: 1rem;
    }
    .visit-frontend-card .btn-visit {
        background: white;
        color: #241b64;
        border-radius: 2rem;
        padding: 0.4rem 1.2rem;
        font-weight: 600;
        transition: 0.2s;
    }
    .visit-frontend-card .btn-visit:hover {
        background: #f8fafc;
        transform: scale(1.02);
    }

    /* Additional Stats */
    .additional-stats {
        background: #fefcf9;
        border-radius: 1.5rem;
        padding: 1.5rem;
        margin-top: 1.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        border: 1px solid rgba(36,27,100,0.06);
    }

    /* Responsive: di HP jadi 1 kolom */
    @media (max-width: 768px) {
        .dashboard-container { padding: 1rem; }
        .welcome-section { padding: 1.2rem 1.5rem; }
        .welcome-title { font-size: 1.4rem; }
        .stats-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        .stat-card { padding: 1rem; }
        .stat-number { font-size: 1.8rem; }
        .stat-icon { width: 45px; height: 45px; font-size: 1.4rem; }
    }

    /* Animasi */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .stat-card, .welcome-section, .visit-frontend-card {
        animation: fadeInUp 0.5s ease-out forwards;
    }
    .stat-card:nth-child(1) { animation-delay: 0.1s; }
    .stat-card:nth-child(2) { animation-delay: 0.2s; }
    .stat-card:nth-child(3) { animation-delay: 0.3s; }
    .stat-card:nth-child(4) { animation-delay: 0.4s; }
</style>
@endpush

@section('content')
<div class="dashboard-container">
    <!-- Welcome Section -->
    <div class="welcome-section">
        <h1 class="welcome-title">Selamat Datang, {{ Auth::user()->name ?? 'Admin' }}!</h1>
        <p class="welcome-subtitle">Berikut adalah ringkasan performa dan data terkini dari sistem Anda.</p>
    </div>

    <!-- Akses Cepat ke Halaman Depan -->
    <div class="visit-frontend-card">
        <a href="{{ route('home') }}" target="_blank">
            <div class="text">
                <i class="fas fa-external-link-alt me-2"></i>
                Kunjungi Halaman Depan Website
            </div>
            <span class="btn-visit">
                Lihat Beranda <i class="fas fa-arrow-right ms-1"></i>
            </span>
        </a>
    </div>

    <!-- Stat Cards Grid - 2 kolom (total 4 card) -->
    <div class="stats-grid">
        <!-- Total Pengguna -->
        <div class="stat-card users">
            <div class="stat-icon-wrapper">
                <div class="stat-icon"><i class="fas fa-users"></i></div>
                <div class="stat-trend"><i class="fas fa-arrow-up"></i> +12%</div>
            </div>
            <div class="stat-content">
                <div class="stat-number">{{ $totalUsers }}</div>
                <div class="stat-label">Total Pengguna</div>
            </div>
        </div>

        <!-- Total Project -->
        <div class="stat-card projects">
            <div class="stat-icon-wrapper">
                <div class="stat-icon"><i class="fas fa-briefcase"></i></div>
                <div class="stat-trend"><i class="fas fa-arrow-up"></i> +8%</div>
            </div>
            <div class="stat-content">
                <div class="stat-number">{{ $totalProjects }}</div>
                <div class="stat-label">Total Project</div>
            </div>
        </div>

        <!-- Total Sertifikat -->
        <div class="stat-card certificates">
            <div class="stat-icon-wrapper">
                <div class="stat-icon"><i class="fas fa-certificate"></i></div>
                <div class="stat-trend"><i class="fas fa-arrow-up"></i> +5%</div>
            </div>
            <div class="stat-content">
                <div class="stat-number">{{ $totalCertificates }}</div>
                <div class="stat-label">Total Sertifikat</div>
            </div>
        </div>

        <!-- Total Layanan (atau bisa diganti dengan total lainnya) -->
        <div class="stat-card services">
            <div class="stat-icon-wrapper">
                <div class="stat-icon"><i class="fas fa-cogs"></i></div>
                <div class="stat-trend"><i class="fas fa-arrow-up"></i> +2%</div>
            </div>
            <div class="stat-content">
                <div class="stat-number">{{ $totalServices }}</div>
                <div class="stat-label">Total Layanan</div>
            </div>
        </div>
    </div>

    <!-- Additional Info -->
    <div class="additional-stats">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-cream-light rounded-circle p-3">
                        <i class="fas fa-chart-line text-brown-dark fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-brown-dark mb-1">Aktivitas Terbaru</h6>
                        <p class="text-brown-medium small mb-0">Project terakhir ditambahkan pada {{ now()->format('d M Y') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-cream-light rounded-circle p-3">
                        <i class="fas fa-calendar-alt text-brown-dark fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-brown-dark mb-1">Waktu Saat Ini</h6>
                        <p class="text-brown-medium small mb-0" id="currentDateTime">{{ now()->format('d M Y H:i') }} WIB</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function updateDateTime() {
        const now = new Date();
        const options = { day: 'numeric', month: 'short', year: 'numeric', hour: '2-digit', minute: '2-digit' };
        const formatted = now.toLocaleDateString('id-ID', options) + ' WIB';
        const el = document.getElementById('currentDateTime');
        if (el) el.textContent = formatted;
    }
    setInterval(updateDateTime, 1000);
    updateDateTime();
</script>
@endpush


