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
        /* ===== BROWN & CREAM COLOR PALETTE ===== */
        :root {
            --brown-dark: #5D4037;
            --brown-medium: #8B6B61;
            --brown-light: #A1887F;
            --cream-gold: #D4AF37;
            --cream-dark: #D7CCC8;
            --cream-medium: #EFEBE9;
            --cream-light: #F5F0ED;
            --white: #ffffff;
            --shadow-3d: 0 20px 40px rgba(93,64,55,0.2), 0 10px 20px rgba(0,0,0,0.1);
        }

        /* ===== TEXT COLORS ===== */
        .text-brown-dark { color: var(--brown-dark) !important; }
        .text-brown-medium { color: var(--brown-medium) !important; }
        .text-cream-gold { color: var(--cream-gold) !important; }

        /* ===== BACKGROUND ===== */
        .bg-brown-dark { background-color: var(--brown-dark) !important; }
        .bg-brown-medium { background-color: var(--brown-medium) !important; }
        .bg-cream-gold { background-color: var(--cream-gold) !important; }
        .bg-cream-light { background-color: var(--cream-light) !important; }
        .bg-cream-medium { background-color: var(--cream-medium) !important; }
        .bg-brown-subtle { background-color: rgba(93, 64, 55, 0.08) !important; }
        .bg-cream-gold-subtle { background-color: rgba(212, 175, 55, 0.12) !important; }

        body {
            background: var(--cream-light);
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            overflow-x: hidden;
        }

        /* content card effect */
        .content-card {
            background: white;
            border-radius: 28px;
            padding: 2rem;
            box-shadow: var(--shadow-3d);
            border: 1px solid rgba(93, 64, 55, 0.1);
            transition: all 0.4s;
            transform-style: preserve-3d;
            transform: rotateX(0.5deg);
        }

        .content-card:hover {
            transform: rotateX(0.5deg) translateY(-6px);
            box-shadow: 0 30px 60px rgba(93, 64, 55, 0.2);
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
</head>
<body class="antialiased">

    @include('admin.layouts.navbar')

    <div class="flex pt-[72px] min-h-screen">
        @include('admin.layouts.sidebar')

        <main class="flex-1 ml-0 md:ml-64 p-6 transition-all duration-300" id="main-content">
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
