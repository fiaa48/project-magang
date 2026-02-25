<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Project — Admin</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #faf6f2;
            color: #2c2a27;
            line-height: 1.5;
            overflow-x: hidden;
        }

        /* ===== PREMIUM SIDEBAR ===== */
        .premium-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 280px;
            background: linear-gradient(165deg, #2c1e12 0%, #3e2c1b 100%);
            color: white;
            padding: 2rem 1.5rem;
            box-shadow: 20px 0 30px -10px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            overflow-y: auto;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .premium-sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .premium-sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }

        .premium-sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 2.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .brand-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(145deg, #8b6b4d, #6b4f3a);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            color: white;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .brand-text h2 {
            font-size: 1.3rem;
            font-weight: 700;
            margin: 0;
            color: white;
            letter-spacing: -0.02em;
        }

        .brand-text p {
            margin: 2px 0 0;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-item {
            margin-bottom: 0.5rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 0.85rem 1.2rem;
            border-radius: 14px;
            color: rgba(255, 255, 255, 0.7);
            transition: all 0.3s ease;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .nav-link:hover::before {
            left: 100%;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.08);
            color: white;
            transform: translateX(5px);
        }

        .nav-link.active {
            background: linear-gradient(145deg, #8b6b4d, #6b4f3a);
            color: white;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .nav-link i {
            width: 24px;
            text-align: center;
            font-size: 1.1rem;
        }

        .nav-divider {
            height: 1px;
            background: rgba(255, 255, 255, 0.1);
            margin: 1.5rem 0;
        }

        .sidebar-footer {
            position: absolute;
            bottom: 2rem;
            left: 1.5rem;
            right: 1.5rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 1rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: #a5856b;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .user-details h5 {
            margin: 0;
            color: white;
            font-size: 0.95rem;
            font-weight: 600;
        }

        .user-details span {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.7rem;
        }

        /* ===== PREMIUM NAVBAR ===== */
        .premium-navbar {
            position: fixed;
            top: 0;
            left: 280px;
            right: 0;
            height: 80px;
            background: white;
            border-bottom: 1px solid #eae1d9;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 999;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
        }

        .navbar-search {
            display: flex;
            align-items: center;
            background: #f8f4f0;
            border-radius: 40px;
            padding: 0.5rem 1.2rem;
            width: 300px;
            border: 1px solid #eae1d9;
            transition: all 0.3s ease;
        }

        .navbar-search:focus-within {
            background: white;
            border-color: #8b6b4d;
            box-shadow: 0 0 0 4px rgba(139, 107, 77, 0.08);
        }

        .navbar-search i {
            color: #9c8e85;
            margin-right: 10px;
            font-size: 0.9rem;
        }

        .navbar-search input {
            background: transparent;
            border: none;
            outline: none;
            width: 100%;
            font-size: 0.9rem;
            color: #2c2a27;
        }

        .navbar-search input::placeholder {
            color: #bbb0a8;
        }

        .navbar-menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navbar-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f4f0;
            color: #6a5c53;
            border: 1px solid #eae1d9;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
        }

        .navbar-icon:hover {
            background: #8b6b4d;
            color: white;
            border-color: #8b6b4d;
            transform: translateY(-2px);
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            width: 18px;
            height: 18px;
            background: #b34a4a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.6rem;
            font-weight: 600;
            border: 2px solid white;
        }

        .navbar-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0.5rem 1rem;
            border-radius: 40px;
            background: #f8f4f0;
            border: 1px solid #eae1d9;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .navbar-profile:hover {
            background: #f5efea;
            border-color: #b08968;
        }

        .profile-avatar {
            width: 36px;
            height: 36px;
            background: #8b6b4d;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
        }

        .profile-info {
            line-height: 1.3;
        }

        .profile-info strong {
            font-size: 0.9rem;
            color: #2c2a27;
        }

        .profile-info span {
            font-size: 0.7rem;
            color: #9c8e85;
            display: block;
        }

        /* ===== MAIN CONTENT ===== */
        .main-content {
            margin-left: 280px;
            margin-top: 80px;
            padding: 2rem;
            min-height: calc(100vh - 80px);
            background: #faf6f2;
        }

        .content-wrapper {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* ===== PAGE HEADER ===== */
        .page-header {
            background: white;
            padding: 1.5rem 2rem;
            border-radius: 24px;
            margin-bottom: 2rem;
            border: 1px solid #eae1d9;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.02);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .page-header-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(145deg, #8b6b4d, #6b4f3a);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            box-shadow: 0 8px 16px rgba(139, 107, 77, 0.2);
        }

        .page-header-title h1 {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
            color: #2c2a27;
            letter-spacing: -0.02em;
        }

        .page-header-title p {
            margin: 4px 0 0;
            color: #9c8e85;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .page-header-stats {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .stat-badge {
            background: #f8f4f0;
            padding: 0.6rem 1.2rem;
            border-radius: 40px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #5e4e44;
            font-size: 0.9rem;
            font-weight: 500;
            border: 1px solid #eae1d9;
        }

        .stat-badge i {
            color: #8b6b4d;
        }

        /* ===== STATS GRID PREMIUM ===== */
        .stats-grid-premium {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            margin-bottom: 32px;
        }

        .stat-card-premium {
            background: white;
            border-radius: 20px;
            padding: 1.5rem;
            border: 1px solid #eae1d9;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
        }

        .stat-card-premium::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #8b6b4d, #a5856b, #d6bcac);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .stat-card-premium:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 30px -10px rgba(139, 107, 77, 0.15);
            border-color: #b08968;
        }

        .stat-card-premium:hover::after {
            opacity: 1;
        }

        .stat-icon-premium {
            width: 60px;
            height: 60px;
            background: #f8f4f0;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8b6b4d;
            font-size: 1.6rem;
            transition: all 0.3s ease;
        }

        .stat-card-premium:hover .stat-icon-premium {
            background: #8b6b4d;
            color: white;
        }

        .stat-content-premium {
            flex: 1;
        }

        .stat-number-premium {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 4px;
            color: #2c2a27;
        }

        .stat-label-premium {
            font-size: 0.8rem;
            color: #9c8e85;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ===== ALERT PREMIUM ===== */
        .alert-premium {
            background: white;
            border-radius: 16px;
            padding: 1.2rem 1.8rem;
            color: #2c2a27;
            display: flex;
            align-items: center;
            margin-bottom: 32px;
            border: 1px solid #eae1d9;
            border-left: 4px solid #8b6b4d;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
        }

        /* ===== SECTION HEADER ===== */
        .section-header-premium {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .section-title-premium {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-title-icon {
            width: 44px;
            height: 44px;
            background: #f8f4f0;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8b6b4d;
            font-size: 1.2rem;
        }

        .section-title-text h2 {
            font-size: 1.3rem;
            font-weight: 700;
            margin: 0;
            color: #2c2a27;
        }

        .section-title-text span {
            font-size: 0.8rem;
            color: #9c8e85;
            display: block;
            margin-top: 2px;
        }

        /* ===== BUTTON CREATE PREMIUM ===== */
        .btn-create-premium {
            background: linear-gradient(145deg, #8b6b4d, #6b4f3a);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 40px;
            font-weight: 600;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            box-shadow: 0 8px 16px rgba(107, 79, 58, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            letter-spacing: 0.5px;
        }

        .btn-create-premium:hover {
            background: linear-gradient(145deg, #6b4f3a, #5a4030);
            transform: translateY(-3px);
            box-shadow: 0 12px 24px rgba(107, 79, 58, 0.3);
            color: white;
        }

        .btn-create-premium i {
            font-size: 0.9rem;
            transition: transform 0.3s ease;
        }

        .btn-create-premium:hover i {
            transform: rotate(90deg);
        }

        /* ===== TABLE PREMIUM ===== */
        .table-wrapper-premium {
            background: white;
            border-radius: 24px;
            border: 1px solid #eae1d9;
            overflow: hidden;
            margin-bottom: 24px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.02);
        }

        .table-premium {
            margin-bottom: 0;
            background: white;
        }

        .table-premium thead th {
            background: #f8f4f0;
            color: #5e534b;
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid #e0d6ce;
            border-top: none;
        }

        .table-premium td {
            padding: 1.2rem 1.5rem;
            vertical-align: middle;
            color: #2c2a27;
            font-size: 0.95rem;
            border-bottom: 1px solid #f0eae4;
            background: white;
        }

        .table-premium tbody tr {
            transition: all 0.3s ease;
        }

        .table-premium tbody tr:hover td {
            background: #fdfaf8;
        }

        .table-premium tbody tr:hover {
            transform: scale(1.01);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
        }

        /* ===== BADGE PREMIUM ===== */
        .badge-premium {
            padding: 0.45rem 1.2rem;
            font-weight: 500;
            font-size: 0.8rem;
            border-radius: 100px;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            border: 1px solid transparent;
            letter-spacing: 0.2px;
        }

        .badge-completed-premium {
            background: #e3f1ec;
            color: #1a4c3e;
            border-color: #c8ddd6;
        }

        .badge-ongoing-premium {
            background: #fff2e0;
            color: #7a5326;
            border-color: #ffe1c2;
        }

        .badge-pending-premium {
            background: #ffe9e9;
            color: #853a3a;
            border-color: #ffd6d6;
        }

        /* ===== THUMBNAIL PREMIUM ===== */
        .thumbnail-wrapper-premium {
            width: 70px;
            height: 48px;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #e0d6ce;
            background: #f8f4f0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .thumbnail-wrapper-premium:hover {
            border-color: #8b6b4d;
            transform: scale(1.05);
        }

        .project-thumbnail-premium {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .no-image-premium {
            color: #a58b7a;
            font-size: 1.1rem;
        }

        /* ===== ACTION BUTTONS PREMIUM ===== */
        .action-group-premium {
            display: flex;
            gap: 8px;
            justify-content: flex-end;
        }

        .btn-action-premium {
            width: 38px;
            height: 38px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #e0d6ce;
            background: white;
            color: #6a5c53;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-action-premium:hover {
            background: #8b6b4d;
            border-color: #8b6b4d;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(139, 107, 77, 0.2);
        }

        .btn-delete-premium:hover {
            background: #b34a4a;
            border-color: #b34a4a;
            color: white;
        }

        /* ===== TABLE FOOTER PREMIUM ===== */
        .table-footer-premium {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 1.5rem;
            background: white;
            border-top: 1px solid #eae1d9;
            font-size: 0.85rem;
            color: #6a5c53;
        }

        .status-mini-group-premium {
            display: flex;
            gap: 20px;
        }

        .status-mini-premium {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .status-dot-premium {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .dot-completed-premium { background: #1e6b54; box-shadow: 0 0 0 2px rgba(30, 107, 84, 0.2); }
        .dot-ongoing-premium { background: #b87c2c; box-shadow: 0 0 0 2px rgba(184, 124, 44, 0.2); }
        .dot-pending-premium { background: #b34a4a; box-shadow: 0 0 0 2px rgba(179, 74, 74, 0.2); }

        /* ===== EMPTY STATE PREMIUM ===== */
        .empty-state-premium {
            padding: 4rem 2rem;
            text-align: center;
            background: white;
        }

        .empty-icon-premium {
            width: 90px;
            height: 90px;
            background: #f8f4f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: #8b6b4d;
            font-size: 2.2rem;
            animation: float 6s ease-in-out infinite;
        }

        .empty-state-premium h4 {
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #2c2a27;
            font-size: 1.5rem;
        }

        .empty-state-premium p {
            color: #9c8e85;
            margin-bottom: 2rem;
            font-size: 0.95rem;
        }

        /* ===== ANIMATIONS ===== */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .animate-in {
            animation: fadeIn 0.6s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        /* ===== FOOTER NOTE ===== */
        .footer-note-premium {
            color: #9c8e85;
            font-size: 0.8rem;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 8px;
            margin-top: 1rem;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1200px) {
            .stats-grid-premium {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 992px) {
            .premium-sidebar {
                transform: translateX(-100%);
                position: fixed;
                z-index: 1050;
            }

            .premium-navbar {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .navbar-search {
                width: 200px;
            }
        }

        @media (max-width: 768px) {
            .main-content {
                padding: 1.5rem;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
                padding: 1.5rem;
            }

            .page-header-stats {
                width: 100%;
                flex-direction: column;
                align-items: flex-start;
            }

            .stat-badge {
                width: 100%;
            }

            .stats-grid-premium {
                grid-template-columns: 1fr;
            }

            .section-header-premium {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }

            .btn-create-premium {
                width: 100%;
                justify-content: center;
            }

            .table-footer-premium {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }

            .status-mini-group-premium {
                flex-direction: column;
                gap: 8px;
            }

            .navbar-profile .profile-info {
                display: none;
            }

            .navbar-search {
                display: none;
            }
        }
    </style>
</head>
<body>

    <!-- ===== PREMIUM SIDEBAR ===== -->
    <aside class="premium-sidebar">
        <div class="sidebar-brand">
            <div class="brand-icon">
                <i class="fas fa-crown"></i>
            </div>
            <div class="brand-text">
                <h2>Admin Panel</h2>
                <p>v2.0.0</p>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="fas fa-chart-pie"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.projects') }}" class="nav-link active">
                    <i class="fas fa-folder-tree"></i>
                    <span>Data Project</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.certificates') }}" class="nav-link">
                    <i class="fas fa-certificate"></i>
                    <span>Sertifikat</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.reports') }}" class="nav-link">
                    <i class="fas fa-file-alt"></i>
                    <span>Laporan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.settings') }}" class="nav-link">
                    <i class="fas fa-cog"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
        </ul>

        <div class="nav-divider"></div>

        {{--  <ul class="sidebar-nav">
            <li class="nav-item">
                <a href="{{ route('admin.help') }}" class="nav-link">
                    <i class="fas fa-question-circle"></i>
                    <span>Bantuan</span>
                </a>
            </li>
        </ul>  --}}

        <div class="sidebar-footer">
            <div class="user-info">
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="user-details">
                    <h5>Admin User</h5>
                    <span>admin@example.com</span>
                </div>
            </div>
            <a href="{{ route('admin.logout') }}" class="nav-link" style="padding: 0.85rem 1.2rem; margin-bottom: 0;">
                <i class="fas fa-sign-out-alt"></i>
                <span>Keluar</span>
            </a>
        </div>
    </aside>

    <!-- ===== PREMIUM NAVBAR ===== -->
    <nav class="premium-navbar">
        <div class="navbar-search">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Cari project, sertifikat...">
        </div>

        <div class="navbar-menu">
            <div class="navbar-icon">
                <i class="fas fa-bell"></i>
                <span class="notification-badge">3</span>
            </div>
            <div class="navbar-icon">
                <i class="fas fa-envelope"></i>
                <span class="notification-badge">5</span>
            </div>
            <div class="navbar-profile">
                <div class="profile-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="profile-info">
                    <strong>Admin User</strong>
                    <span>Super Admin</span>
                </div>
                <i class="fas fa-chevron-down" style="color: #9c8e85; font-size: 0.8rem;"></i>
            </div>
        </div>
    </nav>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="main-content">
        <div class="content-wrapper animate-in">

            <!-- PAGE HEADER -->
            <div class="page-header">
                <div class="page-header-left">
                    <div class="page-header-icon">
                        <i class="fas fa-folder-tree"></i>
                    </div>
                    <div class="page-header-title">
                        <h1>Data Project</h1>
                        <p>
                            <i class="fas fa-home"></i>
                            Dashboard / Project / Data Project
                        </p>
                    </div>
                </div>
                <div class="page-header-stats">
                    <div class="stat-badge">
                        <i class="fas fa-database"></i>
                        <span>{{ $projects->count() }} Total Project</span>
                    </div>
                    <div class="stat-badge">
                        <i class="fas fa-calendar"></i>
                        <span>{{ date('d M Y') }}</span>
                    </div>
                </div>
            </div>

            <!-- STATISTIK PREMIUM -->
            <div class="stats-grid-premium">
                <div class="stat-card-premium">
                    <div class="stat-icon-premium">
                        <i class="fas fa-folder"></i>
                    </div>
                    <div class="stat-content-premium">
                        <div class="stat-number-premium">{{ $projects->count() }}</div>
                        <div class="stat-label-premium">Total Project</div>
                    </div>
                </div>
                <div class="stat-card-premium">
                    <div class="stat-icon-premium">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-content-premium">
                        <div class="stat-number-premium">{{ $projects->where('status', 'completed')->count() }}</div>
                        <div class="stat-label-premium">Selesai</div>
                    </div>
                </div>
                <div class="stat-card-premium">
                    <div class="stat-icon-premium">
                        <i class="fas fa-spinner"></i>
                    </div>
                    <div class="stat-content-premium">
                        <div class="stat-number-premium">{{ $projects->where('status', 'ongoing')->count() }}</div>
                        <div class="stat-label-premium">Berjalan</div>
                    </div>
                </div>
                <div class="stat-card-premium">
                    <div class="stat-icon-premium">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-content-premium">
                        <div class="stat-number-premium">{{ $projects->where('status', 'pending')->count() }}</div>
                        <div class="stat-label-premium">Ditunda</div>
                    </div>
                </div>
            </div>

            <!-- ALERT -->
            @if(session('success'))
            <div class="alert-premium d-flex align-items-center" role="alert">
                <i class="fas fa-check-circle me-3" style="color: #8b6b4d; font-size: 1.3rem;"></i>
                <div style="flex:1; font-weight: 500;">{{ session('success') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <!-- SECTION HEADER -->
            <div class="section-header-premium">
                <div class="section-title-premium">
                    <div class="section-title-icon">
                        <i class="fas fa-list-ul"></i>
                    </div>
                    <div class="section-title-text">
                        <h2>Daftar Project</h2>
                        <span>Kelola dan pantau seluruh project</span>
                    </div>
                </div>
                <a href="{{ route('admin.projects.create') }}" class="btn-create-premium">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Project Baru
                </a>
            </div>

            <!-- TABLE PREMIUM -->
            <div class="table-wrapper-premium">
                <div class="table-responsive">
                    @if($projects->count() > 0)
                    <table class="table-premium table align-middle">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                                <th>Tahun</th>
                                <th>Gambar</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td class="fw-semibold" style="color: #2c2a27;">{{ $project->title }}</td>
                                <td>
                                    <i class="fas fa-location-dot me-1" style="color: #8b6b4d; font-size: 0.8rem;"></i>
                                    {{ $project->location ?? '-' }}
                                </td>
                                <td>
                                    @php
                                        $statusClasses = [
                                            'completed' => 'badge-completed-premium',
                                            'ongoing' => 'badge-ongoing-premium',
                                            'pending' => 'badge-pending-premium'
                                        ];
                                        $statusIcons = [
                                            'completed' => 'fa-check-circle',
                                            'ongoing' => 'fa-rotate',
                                            'pending' => 'fa-hourglass-half'
                                        ];
                                        $class = $statusClasses[$project->status] ?? 'badge-pending-premium';
                                        $icon = $statusIcons[$project->status] ?? 'fa-clock';
                                        $statusText = [
                                            'completed' => 'Selesai',
                                            'ongoing' => 'Berjalan',
                                            'pending' => 'Ditunda'
                                        ];
                                        $text = $statusText[$project->status] ?? ucfirst($project->status);
                                    @endphp
                                    <span class="badge-premium {{ $class }}">
                                        <i class="fas {{ $icon }}"></i>
                                        {{ $text }}
                                    </span>
                                </td>
                                <td>
                                    <span style="color: #5e4e44; font-weight: 500;">{{ $project->year ?? '-' }}</span>
                                </td>
                                <td>
                                    <div class="thumbnail-wrapper-premium">
                                        @if($project->image)
                                            <img src="{{ asset('storage/'.$project->image) }}"
                                                class="project-thumbnail-premium"
                                                alt="{{ $project->title }}">
                                        @else
                                            <i class="fas fa-image no-image-premium"></i>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="action-group-premium">
                                        <a href="{{ route('admin.projects.edit', $project->id) }}"
                                           class="btn-action-premium" title="Edit Project">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                              method="POST"
                                              style="display:inline;"
                                              onsubmit="return confirm('Yakin ingin menghapus project ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-action-premium btn-delete-premium" title="Hapus Project">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- TABLE FOOTER -->
                    <div class="table-footer-premium">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fas fa-file-alt" style="color: #b08968;"></i>
                            <span class="fw-medium">Menampilkan {{ $projects->count() }} project</span>
                        </div>
                        <div class="status-mini-group-premium">
                            <div class="status-mini-premium">
                                <span class="status-dot-premium dot-completed-premium"></span>
                                <span>Selesai <strong>{{ $projects->where('status', 'completed')->count() }}</strong></span>
                            </div>
                            <div class="status-mini-premium">
                                <span class="status-dot-premium dot-ongoing-premium"></span>
                                <span>Berjalan <strong>{{ $projects->where('status', 'ongoing')->count() }}</strong></span>
                            </div>
                            <div class="status-mini-premium">
                                <span class="status-dot-premium dot-pending-premium"></span>
                                <span>Ditunda <strong>{{ $projects->where('status', 'pending')->count() }}</strong></span>
                            </div>
                        </div>
                    </div>

                    @else
                    <!-- EMPTY STATE PREMIUM -->
                    <div class="empty-state-premium">
                        <div class="empty-icon-premium float-animation">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <h4>Belum Ada Project</h4>
                        <p class="text-muted">Mulai dengan menambahkan project pertama Anda</p>
                        <a href="{{ route('admin.projects.create') }}" class="btn-create-premium" style="display:inline-flex;">
                            <i class="fas fa-plus-circle"></i>
                            Tambah Project Baru
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <!-- FOOTER NOTE -->
            @if($projects->count() > 0)
            <div class="footer-note-premium">
                <i class="fas fa-chevron-left"></i>
                <span>Terakhir diperbarui {{ date('d F Y H:i') }} WIB</span>
            </div>
            @endif

        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Auto close alert
            setTimeout(function() {
                var alert = document.querySelector('.alert-premium');
                if (alert) {
                    var bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }
            }, 5000);

            // Sidebar toggle for mobile
            function toggleSidebar() {
                const sidebar = document.querySelector('.premium-sidebar');
                sidebar.style.transform = sidebar.style.transform === 'translateX(0px)' ? 'translateX(-100%)' : 'translateX(0px)';
            }

            // Add hover effect untuk row
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.cursor = 'pointer';
                });
            });
        });
    </script>

</body>
</html>
