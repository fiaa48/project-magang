<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts - Playfair Display & Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #faf7f2;
            color: #3e2c23;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        /* Color Theme - Elegant Brown */
        :root {
            --brown-dark: #2c1810;
            --brown-deep: #4a3426;
            --brown-medium: #6b4f3a;
            --brown-soft: #9c7c6b;
            --brown-light: #d6c0b3;
            --brown-pale: #efe6dd;
            --brown-cream: #faf1e6;
            --brown-latte: #e5d5c6;
            --brown-mocha: #8b7356;
            --brown-taupe: #b8a99a;
            --gold: #c9a77d;
            --gold-light: #e5d5b0;
            --cream: #fff9f0;
        }

        /* Custom Backgrounds */
        .bg-brown-dark { background: linear-gradient(145deg, #2c1810, #3e2c23); }
        .bg-brown-deep { background: linear-gradient(145deg, #4a3426, #5c4032); }
        .bg-brown-medium { background: linear-gradient(145deg, #6b4f3a, #7d5f4a); }
        .bg-brown-soft { background: linear-gradient(145deg, #9c7c6b, #ad8b7a); }
        .bg-brown-cream { background: linear-gradient(145deg, #faf1e6, #fff5eb); }
        .bg-brown-latte { background: linear-gradient(145deg, #e5d5c6, #f0e2d6); }
        .bg-gold { background: linear-gradient(145deg, #c9a77d, #dab894); }
        .bg-gold-gradient { background: linear-gradient(135deg, #c9a77d, #b38b5b); }

        /* Sidebar */
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, #2c1810 0%, #3e2c23 50%, #2c1810 100%);
            color: #fff9f0;
            position: relative;
            overflow-y: auto;
            box-shadow: 5px 0 30px rgba(44, 24, 16, 0.3);
        }

        .sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><rect width="100" height="100" fill="none"/><path d="M20 20 L80 20 L80 80 L20 80 Z" stroke="rgba(201,167,125,0.1)" stroke-width="0.5" fill="none"/><circle cx="50" cy="50" r="30" stroke="rgba(201,167,125,0.1)" stroke-width="0.5" fill="none"/></svg>');
            background-size: 100px 100px;
            opacity: 0.1;
            pointer-events: none;
        }

        .sidebar-content {
            position: relative;
            z-index: 2;
        }

        .sidebar .nav-link {
            color: rgba(255, 249, 240, 0.8);
            padding: 1rem 1.5rem;
            border-radius: 15px;
            margin: 0.3rem 1rem;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
        }

        .sidebar .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(201, 167, 125, 0.2), transparent);
            transition: left 0.6s;
        }

        .sidebar .nav-link:hover::before {
            left: 100%;
        }

        .sidebar .nav-link:hover {
            background: rgba(201, 167, 125, 0.15);
            color: #fff9f0;
            transform: translateX(8px);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(201, 167, 125, 0.3);
        }

        .sidebar .nav-link.active {
            background: linear-gradient(135deg, rgba(201, 167, 125, 0.25), rgba(201, 167, 125, 0.15));
            color: #fff9f0;
            font-weight: 600;
            border-left: 4px solid #c9a77d;
            backdrop-filter: blur(10px);
        }

        .sidebar .nav-link i {
            width: 24px;
            color: #c9a77d;
        }

        /* Navbar */
        .navbar-custom {
            background: rgba(255, 249, 240, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(201, 167, 125, 0.2);
            padding: 1rem 2rem;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 30px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            background: #fff9f0;
            box-shadow: 0 10px 30px -5px rgba(44, 24, 16, 0.05);
            overflow: hidden;
            position: relative;
        }

        .card::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(201,167,125,0.05) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.6s;
        }

        .card:hover::after {
            opacity: 1;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -8px rgba(44, 24, 16, 0.15);
        }

        .stat-card {
            background: linear-gradient(145deg, #fff9f0, #fff5eb);
            border: 1px solid rgba(201, 167, 125, 0.2);
        }

        .stat-card .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(145deg, #fff9f0, #efe6dd);
            color: #6b4f3a;
            box-shadow: 0 5px 15px rgba(44, 24, 16, 0.1);
        }

        /* Welcome Card */
        .welcome-card {
            background: linear-gradient(135deg, #6b4f3a 0%, #4a3426 50%, #2c1810 100%);
            position: relative;
            overflow: hidden;
        }

        .welcome-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(201,167,125,0.2) 0%, transparent 60%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .welcome-card .badge {
            background: rgba(201, 167, 125, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 249, 240, 0.3);
            color: #fff9f0;
        }

        /* Avatar */
        .avatar-circle {
            width: 45px;
            height: 45px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(145deg, #c9a77d, #b38b5b);
            color: #fff9f0;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(201, 167, 125, 0.3);
        }

        .avatar-large {
            width: 70px;
            height: 70px;
            border-radius: 20px;
        }

        /* Progress Bar */
        .progress {
            background-color: rgba(201, 167, 125, 0.1);
            border-radius: 20px;
            height: 10px;
            overflow: hidden;
        }

        .progress-bar {
            background: linear-gradient(90deg, #c9a77d, #b38b5b);
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }

        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,249,240,0.3), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            100% { left: 100%; }
        }

        /* Buttons */
        .btn-brown {
            background: linear-gradient(145deg, #6b4f3a, #4a3426);
            color: #fff9f0;
            border: none;
            border-radius: 15px;
            padding: 0.8rem 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-brown:hover {
            background: linear-gradient(145deg, #7d5f4a, #5c4032);
            color: #fff9f0;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(74, 52, 38, 0.3);
        }

        .btn-outline-brown {
            background: transparent;
            color: #6b4f3a;
            border: 2px solid #6b4f3a;
            border-radius: 15px;
            padding: 0.6rem 1.8rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-brown:hover {
            background: #6b4f3a;
            color: #fff9f0;
            transform: translateY(-2px);
        }

        /* Badge */
        .badge-brown {
            background: rgba(201, 167, 125, 0.15);
            color: #6b4f3a;
            border-radius: 50px;
            padding: 0.6rem 1.2rem;
            font-weight: 500;
            border: 1px solid rgba(201, 167, 125, 0.3);
        }

        /* List Group */
        .list-group-item {
            background: transparent;
            border-color: rgba(201, 167, 125, 0.1);
            padding: 1.2rem 1.5rem;
        }

        /* Footer */
        .footer {
            background: linear-gradient(145deg, #fff9f0, #faf1e6);
            border-top: 1px solid rgba(201, 167, 125, 0.2);
            padding: 2rem 0;
            margin-top: 3rem;
            border-radius: 30px 30px 0 0;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #faf1e6;
        }

        ::-webkit-scrollbar-thumb {
            background: #c9a77d;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #b38b5b;
        }

        /* Animations */
        .hover-lift {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
        }

        .hover-scale {
            transition: transform 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        .glass-card {
            background: rgba(255, 249, 240, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(201, 167, 125, 0.2);
        }

        /* Pattern */
        .pattern-dots {
            background-image: radial-gradient(rgba(201, 167, 125, 0.1) 2px, transparent 2px);
            background-size: 30px 30px;
        }
    </style>
</head>
<body class="pattern-dots">

    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col-lg-2 col-md-3 sidebar d-none d-md-block">
                <div class="sidebar-content p-4">
                    <!-- Logo / Brand Name - Premium version removed -->
                    <div class="mb-5 mt-3" data-aos="fade-right">
                    </div>

                    <!-- Navigation -->
                    <div class="nav flex-column mt-4">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            <i class="fas fa-tachometer-alt me-3"></i>
                            Dashboard
                        </a>
                        <a href="{{ route('admin.projects') }}" class="nav-link {{ request()->routeIs('admin.projects') ? 'active' : '' }}">
                            <i class="fas fa-folder me-3"></i>
                            Projects
                        </a>
                        <a href="{{ route('admin.certificates') }}" class="nav-link {{ request()->routeIs('admin.certificates') ? 'active' : '' }}">
                            <i class="fas fa-certificate me-3"></i>
                            Sertifikat
                        </a>
                        <a href="{{ route('admin.messages') }}" class="nav-link {{ request()->routeIs('admin.messages') ? 'active' : '' }}">
                            <i class="fas fa-envelope me-3"></i>
                            Pesan
                            <span class="badge bg-gold ms-auto" style="background: #c9a77d !important;">3</span>
                        </a>
                        <a href="{{ route('admin.users') }}" class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                            <i class="fas fa-users me-3"></i>
                            Pengguna
                        </a>
                        <a href="{{ route('admin.reports') }}" class="nav-link {{ request()->routeIs('admin.reports') ? 'active' : '' }}">
                            <i class="fas fa-chart-bar me-3"></i>
                            Laporan
                        </a>
                        <a href="{{ route('admin.settings') }}" class="nav-link {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                            <i class="fas fa-cog me-3"></i>
                            Pengaturan
                        </a>
                    </div>

                    <!-- Divider -->
                    <hr style="border-color: rgba(201,167,125,0.2); margin: 2rem 0;">

                    <!-- User Profile -->
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" data-aos="fade-up">
                        <div class="d-flex align-items-center bg-brown-deep bg-opacity-50 rounded-4 p-3" style="backdrop-filter: blur(10px);">
                            <div class="avatar-circle me-3">
                                <span class="fw-bold">{{ substr(auth()->user()->name ?? 'AD', 0, 2) }}</span>
                            </div>
                            <div>
                                <h6 class="mb-0 text-white fw-semibold">{{ auth()->user()->name ?? 'Admin User' }}</h6>
                                <small style="color: #c9a77d;">
                                    <i class="fas fa-circle fa-xs me-1" style="color: #7ed321;"></i> Online
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-10 col-md-9 col-12 main-content" style="background: #faf7f2;">
                <!-- Navbar -->
                <nav class="navbar navbar-custom px-4 py-3">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-link d-md-none text-brown-deep me-3" type="button">
                                <i class="fas fa-bars fs-4"></i>
                            </button>
                            <div data-aos="fade-right">
                                <h4 class="mb-0 fw-bold" style="color: #2c1810; font-family: 'Playfair Display';">
                                    Dashboard
                                </h4>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <!-- Search -->
                            <div class="position-relative me-3 d-none d-lg-block" data-aos="fade-left">
                                <i class="fas fa-search position-absolute" style="left: 20px; top: 14px; color: #9c7c6b;"></i>
                                <input type="text" class="form-control rounded-pill border-0"
                                    placeholder="Cari sesuatu..."
                                    style="padding-left: 50px; width: 350px; background: rgba(255,249,240,0.8); border: 1px solid rgba(201,167,125,0.2) !important; color: #3e2c23;">
                            </div>

                            <!-- Notifications -->
                            <div class="dropdown me-3" data-aos="fade-left" data-aos-delay="50">
                                <button class="btn btn-light rounded-circle position-relative"
                                        style="background: rgba(255,249,240,0.8); border: 1px solid rgba(201,167,125,0.2); color: #6b4f3a;">
                                    <i class="fas fa-bell"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-gold-gradient">
                                        3
                                    </span>
                                </button>
                            </div>

                            <!-- Profile -->
                            <div class="dropdown" data-aos="fade-left" data-aos-delay="100">
                                <button class="btn d-flex align-items-center" type="button" data-bs-toggle="dropdown"
                                        style="background: rgba(201,167,125,0.1); border-radius: 50px; border: 1px solid rgba(201,167,125,0.3); padding: 0.5rem 1.5rem;">
                                    <div class="avatar-circle me-2" style="width: 35px; height: 35px;">
                                        <span class="fw-bold">{{ substr(auth()->user()->name ?? 'AD', 0, 2) }}</span>
                                    </div>
                                    <span class="d-none d-lg-block fw-medium" style="color: #3e2c23;">{{ auth()->user()->name ?? 'Admin' }}</span>
                                    <i class="fas fa-chevron-down ms-2 small" style="color: #6b4f3a;"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0" style="border-radius: 20px; padding: 0.8rem;">
                                    <li><a class="dropdown-item rounded-3" href="#"><i class="fas fa-user me-2" style="color: #c9a77d;"></i> Profile</a></li>
                                    <li><a class="dropdown-item rounded-3" href="#"><i class="fas fa-cog me-2" style="color: #c9a77d;"></i> Settings</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form method="POST" action="{{ route('admin.logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger rounded-3">
                                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Page Content -->
                <div class="p-4">
                    <!-- Welcome Section -->
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="card welcome-card text-white border-0 shadow-lg" data-aos="fade-up">
                                <div class="card-body p-5">
                                    <div class="row align-items-center">
                                        <div class="col-lg-8">
                                            <div class="d-flex align-items-center mb-4">
                                                <div class="avatar-circle bg-gold-gradient me-4" style="width: 80px; height: 80px;">
                                                    <i class="fas fa-hand-wave fa-3x text-white"></i>
                                                </div>
                                                <div>
                                                    <h1 class="display-5 fw-bold mb-2" style="font-family: 'Playfair Display';">
                                                        Selamat Datang, {{ auth()->user()->name ?? 'Admin' }}!
                                                    </h1>
                                                    <p class="mb-0 opacity-90 fs-5" style="color: #e5d5c6;">
                                                        <i class="fas fa-calendar-alt me-2"></i>
                                                        {{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="badge badge-brown me-3">
                                                    <i class="fas fa-shield-alt me-2"></i>Administrator
                                                </span>
                                                <span class="badge badge-brown">
                                                    <i class="fas fa-key me-2"></i>Akses Penuh
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                                            <div class="d-inline-block bg-white bg-opacity-10 rounded-4 p-4" style="backdrop-filter: blur(10px);">
                                                <i class="fas fa-chart-pie fa-4x" style="color: #c9a77d;"></i>
                                                <p class="mb-0 mt-2 fw-semibold" style="color: #e5d5c6;">Analytics Dashboard</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Statistics Cards -->
                    <div class="row g-4 mb-5">
                        <!-- Total Projects Card -->
                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card stat-card hover-lift">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-circle me-4">
                                            <i class="fas fa-folder-open fs-3"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-brown-medium mb-2 fw-semibold">Total Project</h6>
                                            <div class="d-flex align-items-baseline">
                                                <h2 class="fw-bold mb-0 me-3" style="color: #2c1810;">24</h2>
                                                <span class="badge bg-success bg-opacity-10 text-success fw-medium px-3 py-2">
                                                    <i class="fas fa-arrow-up me-1"></i>+12.5%
                                                </span>
                                            </div>
                                            <small class="text-brown-soft">12 Aktif, 12 Selesai</small>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <a href="#" class="text-decoration-none fw-semibold" style="color: #6b4f3a;">
                                            Lihat Detail <i class="fas fa-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Certificates Card -->
                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                            <div class="card stat-card hover-lift">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-circle me-4">
                                            <i class="fas fa-certificate fs-3"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-brown-medium mb-2 fw-semibold">Total Sertifikat</h6>
                                            <div class="d-flex align-items-baseline">
                                                <h2 class="fw-bold mb-0 me-3" style="color: #2c1810;">156</h2>
                                                <span class="badge bg-success bg-opacity-10 text-success fw-medium px-3 py-2">
                                                    <i class="fas fa-arrow-up me-1"></i>+8
                                                </span>
                                            </div>
                                            <small class="text-brown-soft">18 terbit bulan ini</small>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <a href="#" class="text-decoration-none fw-semibold" style="color: #6b4f3a;">
                                            Kelola Sertifikat <i class="fas fa-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Messages Card -->
                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card stat-card hover-lift">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-circle me-4">
                                            <i class="fas fa-envelope fs-3"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-brown-medium mb-2 fw-semibold">Pesan Masuk</h6>
                                            <div class="d-flex align-items-baseline">
                                                <h2 class="fw-bold mb-0 me-3" style="color: #2c1810;">12</h2>
                                                <span class="badge bg-warning bg-opacity-10 text-warning fw-medium px-3 py-2">
                                                    <i class="fas fa-clock me-1"></i>3 belum dibaca
                                                </span>
                                            </div>
                                            <small class="text-brown-soft">Butuh respon segera</small>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <a href="#" class="text-decoration-none fw-semibold" style="color: #6b4f3a;">
                                            Baca Pesan <i class="fas fa-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Users Card -->
                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                            <div class="card stat-card hover-lift">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-circle me-4">
                                            <i class="fas fa-users fs-3"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-brown-medium mb-2 fw-semibold">Total Pengguna</h6>
                                            <div class="d-flex align-items-baseline">
                                                <h2 class="fw-bold mb-0 me-3" style="color: #2c1810;">89</h2>
                                                <span class="badge bg-info bg-opacity-10 text-info fw-medium px-3 py-2">
                                                    <i class="fas fa-user-plus me-1"></i>+5
                                                </span>
                                            </div>
                                            <small class="text-brown-soft">7 hari terakhir</small>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <a href="#" class="text-decoration-none fw-semibold" style="color: #6b4f3a;">
                                            Manajemen User <i class="fas fa-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Charts & Recent Activity -->
                    <div class="row g-4 mb-5">
                        <!-- Activity Chart -->
                        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100">
                                <div class="card-header bg-transparent border-0 pt-4 px-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="fw-bold mb-1" style="color: #2c1810; font-family: 'Playfair Display';">
                                                <i class="fas fa-chart-line me-2" style="color: #c9a77d;"></i>Aktivitas Bulan Ini
                                            </h4>
                                            <p class="text-brown-soft mb-0">Overview performa project & sertifikat</p>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-outline-brown rounded-pill px-4" type="button" data-bs-toggle="dropdown">
                                                Mingguan <i class="fas fa-chevron-down ms-2"></i>
                                            </button>
                                            <ul class="dropdown-menu border-0 shadow-lg" style="border-radius: 15px;">
                                                <li><a class="dropdown-item" href="#">Harian</a></li>
                                                <li><a class="dropdown-item" href="#">Mingguan</a></li>
                                                <li><a class="dropdown-item" href="#">Bulanan</a></li>
                                                <li><a class="dropdown-item" href="#">Tahunan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center py-4">
                                        <div class="bg-brown-cream rounded-4 p-5 d-inline-block">
                                            <i class="fas fa-chart-bar fa-5x" style="color: #c9a77d;"></i>
                                            <h5 class="fw-bold mt-4 mb-2" style="color: #2c1810;">Visualisasi Data</h5>
                                            <p class="text-brown-medium mb-0">Grafik aktivitas akan muncul di sini</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Activity -->
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="350">
                            <div class="card h-100">
                                <div class="card-header bg-transparent border-0 pt-4 px-4">
                                    <h4 class="fw-bold mb-1" style="color: #2c1810; font-family: 'Playfair Display';">
                                        <i class="fas fa-history me-2" style="color: #c9a77d;"></i>Aktivitas Terkini
                                    </h4>
                                    <p class="text-brown-soft mb-0">Riwayat aktivitas terbaru</p>
                                </div>
                                <div class="card-body p-0">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item border-0 py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-3 p-3 me-3" style="background: rgba(201,167,125,0.1);">
                                                    <i class="fas fa-check-circle" style="color: #6b4f3a;"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-1 fw-semibold" style="color: #2c1810;">Login System</p>
                                                    <small class="text-brown-medium">
                                                        <i class="fas fa-clock me-1"></i>2 menit yang lalu
                                                    </small>
                                                </div>
                                                <small class="text-brown-soft ms-auto">Baru saja</small>
                                            </div>
                                        </div>
                                        <div class="list-group-item border-0 py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-3 p-3 me-3" style="background: rgba(201,167,125,0.1);">
                                                    <i class="fas fa-plus-circle" style="color: #6b4f3a;"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-1 fw-semibold" style="color: #2c1810;">Project Baru Ditambahkan</p>
                                                    <small class="text-brown-medium">Website Company Profile</small>
                                                </div>
                                                <small class="text-brown-soft ms-auto">1 jam</small>
                                            </div>
                                        </div>
                                        <div class="list-group-item border-0 py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-3 p-3 me-3" style="background: rgba(201,167,125,0.1);">
                                                    <i class="fas fa-certificate" style="color: #6b4f3a;"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-1 fw-semibold" style="color: #2c1810;">Sertifikat Diterbitkan</p>
                                                    <small class="text-brown-medium">5 sertifikat baru</small>
                                                </div>
                                                <small class="text-brown-soft ms-auto">3 jam</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-0 py-4">
                                    <a href="#" class="btn btn-outline-brown w-100">
                                        Lihat Semua Aktivitas <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 50
        });

        // Mobile sidebar toggle
        document.querySelector('.btn-link.d-md-none')?.addEventListener('click', function() {
            document.querySelector('.sidebar')?.classList.toggle('d-none');
        });

        // Chart initialization (example)
        document.addEventListener('DOMContentLoaded', function() {
            // You can add chart initialization here
        });
    </script>
</body>
</html>