<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT Mitra Nusa Konsulindo')</title>
    <meta name="description" content="@yield('description', 'Perusahaan Konsultan Konstruksi dan Non-Konstruksi Profesional')">

    <!-- Favicon -->
    {{-- <link rel="icon" href="{{ asset('images/logo/favicon.ico') }}" type="image/x-icon"> --}}

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        :root {
            --cream-dark: #eef2ff !important;
            --cream-medium: #f8fafc !important;
            --cream-light: #ffffff !important;
            --cream-gold: #ef332d !important;
            --brown-dark: #241b64 !important;
            --brown-medium: #302574 !important;
            --brown-light: #4b3dad !important;
        }
    </style>
</head>
<body class="user-shell">
    <!-- Navbar -->
    @include('user.components.navbar')

    <!-- Main Content -->
    <main class="user-main">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('user.components.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}

    @stack('scripts')
</body>
</html>


