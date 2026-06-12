<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - PT Mitra Nusa Konsulindo')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        /* ===== BLUE, WHITE & SMALL RED ACCENT PALETTE ===== */
        :root {
            --brown-dark: #241B64;
            --brown-medium: #302574;
            --brown-light: #4B3DAD;
            --cream-gold: #EF332D;
            --cream-dark: #eef2ff;
            --cream-medium: #f8fafc;
            --cream-light: #ffffff;
            --white: #ffffff;
            --shadow-3d: 0 20px 40px rgba(15,23,42,0.08), 0 10px 20px rgba(37,99,235,0.06);
        }

        /* ===== TEXT COLORS ===== */
        .text-brown-dark { color: var(--brown-dark) !important; }
        .text-brown-medium { color: var(--brown-medium) !important; }
        .text-cream-gold { color: var(--cream-gold) !important; }

        /* ===== BACKGROUND ===== */
        .bg-brown-dark { background-color: var(--brown-dark) !important; }
        .bg-brown-medium { background-color: var(--brown-medium) !important; }
        .bg-brown-light { background-color: var(--brown-light) !important; }
        .bg-cream-gold { background-color: var(--cream-gold) !important; }
        .bg-cream-light { background-color: var(--cream-light) !important; }
        .bg-cream-medium { background-color: var(--cream-medium) !important; }
        .bg-brown-subtle { background-color: rgba(36, 27, 100, 0.08) !important; }
        .bg-cream-gold-subtle { background-color: rgba(239, 51, 45, 0.12) !important; }

        body {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 42%, #f5f3ff 100%);
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            overflow-x: hidden;
        }

        /* content card effect */
        .content-card {
            background: white;
            border-radius: 28px;
            padding: 2rem;
            box-shadow: var(--shadow-3d);
            border: 1px solid rgba(36, 27, 100, 0.12);
            transition: all 0.4s;
            transform-style: preserve-3d;
            transform: rotateX(0.5deg);
        }

        .content-card:hover {
            transform: rotateX(0.5deg) translateY(-6px);
            box-shadow: 0 30px 60px rgba(15, 23, 42, 0.12);
            border-color: var(--cream-gold);
        }

        /* scrollbar premium */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--cream-medium);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--brown-light);
            border-radius: 999px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--brown-medium);
        }

        .fade-in {
            animation: fadeIn 0.6s ease forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    @stack('styles')
    <style>
        :root {
            --brown-dark: #241B64 !important;
            --brown-medium: #302574 !important;
            --brown-light: #4B3DAD !important;
            --cream-gold: #EF332D !important;
            --cream-dark: #E7E4FF !important;
            --cream-medium: #F5F3FF !important;
            --cream-light: #F8FAFC !important;
            --shadow-3d: 0 20px 40px rgba(15,23,42,0.08), 0 10px 20px rgba(37,99,235,0.06) !important;
        }

        .bg-brown-dark,
        .btn-premium,
        .btn-primary-custom,
        .page-link.active,
        .pagination-links .active {
            background: linear-gradient(135deg, #241B64, #302574) !important;
            color: #ffffff !important;
            border-color: #302574 !important;
        }

        .text-brown-dark,
        .page-title,
        h1, h2, h3, h4, h5, h6,
        .fw-bold,
        .font-bold,
        .font-semibold {
            color: #111827 !important;
        }

        .text-brown-medium,
        .page-subtitle,
        p,
        .small {
            color: #4B5563 !important;
        }

        .text-cream-gold {
            color: #EF332D !important;
        }

        .card-custom,
        .card-premium,
        .content-card,
        .table-custom,
        .welcome-section,
        .stat-card {
            border-color: rgba(36,27,100,0.12) !important;
            box-shadow: 0 18px 42px rgba(15,23,42,0.08) !important;
        }

        .bg-brown-dark,
        .bg-brown-dark *,
        .bg-brown-medium,
        .bg-brown-medium *,
        .bg-brown-light,
        .bg-brown-light *,
        .bg-cream-gold,
        .bg-cream-gold *,
        .bg-primary,
        .bg-primary *,
        .bg-danger,
        .bg-danger *,
        .bg-red-600,
        .bg-red-600 *,
        .bg-blue-600,
        .bg-blue-600 *,
        .bg-blue-700,
        .bg-blue-700 *,
        .menu-item.active,
        .menu-item.active *,
        .btn-premium,
        .btn-premium *,
        .btn-primary-custom,
        .btn-primary-custom *,
        .btn,
        .btn *,
        .btn-action-ultra,
        .btn-action-ultra *,
        .modal-header,
        .modal-header * {
            color: #ffffff !important;
        }

        body.admin-shell {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 42%, #eef2ff 100%) !important;
            color: #111827 !important;
        }

        .admin-shell .card-ultra,
        .admin-shell .card-premium,
        .admin-shell .content-card,
        .admin-shell .table-custom,
        .admin-shell .welcome-section,
        .admin-shell .stat-card {
            background: #ffffff !important;
            border-color: rgba(36, 27, 100, 0.12) !important;
            box-shadow: 0 18px 42px rgba(15, 23, 42, 0.08) !important;
        }

        .admin-shell .info-card,
        .admin-shell .stat-number,
        .admin-shell .form-control,
        .admin-shell .form-control-premium,
        .admin-shell .table-premium thead th {
            background: #f8fafc !important;
            border-color: rgba(36, 27, 100, 0.14) !important;
            color: #111827 !important;
        }

        .admin-shell .table-premium tbody td,
        .admin-shell .table-custom tbody td {
            color: #1f2937 !important;
            border-color: #e5e7eb !important;
        }

        .admin-shell .table-premium tbody tr:hover,
        .admin-shell .table-custom tbody tr:hover {
            background: #f8fafc !important;
        }

        .admin-shell .btn-premium-ultra,
        .admin-shell .btn-premium,
        .admin-shell .btn-primary-custom {
            background: linear-gradient(135deg, #241B64, #302574) !important;
            box-shadow: 0 10px 22px rgba(36, 27, 100, 0.22) !important;
            color: #ffffff !important;
        }

        .admin-shell .btn-premium-ultra:hover,
        .admin-shell .btn-premium:hover,
        .admin-shell .btn-primary-custom:hover {
            background: linear-gradient(135deg, #171247, #241B64) !important;
            color: #ffffff !important;
        }

        .admin-shell .section-title,
        .admin-shell .info-label,
        .admin-shell .page-title-premium i,
        .admin-shell .section-title i {
            border-color: #EF332D !important;
            color: #EF332D !important;
        }

        @media (max-width: 768px) {
            main#main-content {
                padding: 1rem !important;
            }

            .content-card {
                padding: 1rem !important;
                border-radius: 18px !important;
            }

            .table-responsive-custom,
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="antialiased admin-shell">

    @include('admin.layouts.navbar')

    <div class="flex pt-[72px] min-h-screen">
        @include('admin.layouts.sidebar')

        <main class="flex-1 ml-0 md:ml-64 p-6 transition-all duration-300 admin-main" id="main-content">
            <div class="content-card fade-in">
                @yield('content')
            </div>
        </main>
    </div>

    <script>
        // Toggle sidebar untuk mobile (didefinisikan global)
        window.toggleSidebar = function() {
            const sidebar = document.getElementById('sidebar');
            if (sidebar) {
                sidebar.classList.toggle('-translate-x-full');
            }
        };

        // Tutup sidebar jika klik di luar (mobile)
        document.addEventListener('click', function(event) {
            if (window.innerWidth < 768) {
                const sidebar = document.getElementById('sidebar');
                const menuToggle = document.getElementById('menu-toggle');
                if (sidebar && menuToggle) {
                    const isClickInside = sidebar.contains(event.target) || menuToggle.contains(event.target);
                    if (!isClickInside) {
                        sidebar.classList.add('-translate-x-full');
                    }
                }
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
