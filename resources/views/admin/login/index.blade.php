<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Login Admin | PT Mitra Nusa Konsultan</title>

    <!-- Google Fonts & Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f0e8;
            height: 100vh;
            overflow: hidden;
        }

        /* Container utama */
        .login-container {
            display: flex;
            min-height: 100vh;
            width: 100%;
        }

        /* Sisi Kiri - Form Login */
        .login-left {
            flex: 1;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            z-index: 2;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 1rem;
        }

        /* Logo + Nama Perusahaan */
        .brand {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .brand-logo {
            width: 60px;
            height: 60px;
            background: #f9f5ef;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 20px -8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .brand-logo img {
            width: 48px;
            height: 48px;
            object-fit: contain;
        }

        .brand-text h1 {
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.2;
            color: #241b64;
        }

        /* Judul & Subjudul */
        .login-title {
            font-size: 2rem;
            font-weight: 700;
            color: #2c1a12;
            margin-bottom: 0.5rem;
        }

        .login-subtitle {
            font-size: 0.9rem;
            color: #302574;
            margin-bottom: 2rem;
            border-left: 3px solid #ef332d;
            padding-left: 0.75rem;
        }

        /* Form */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .input-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #241b64;
            margin-bottom: 0.5rem;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #b28b6f;
            font-size: 1rem;
            pointer-events: none;
        }

        .form-control {
            width: 100%;
            padding: 0.9rem 1rem 0.9rem 2.8rem;
            border: 1.5px solid #e5dbd1;
            border-radius: 1rem;
            font-size: 0.95rem;
            background: #fefcf9;
            transition: all 0.25s ease;
            font-family: 'Inter', sans-serif;
        }

        .form-control:focus {
            outline: none;
            border-color: #ef332d;
            box-shadow: 0 0 0 4px rgba(239,51,45,0.18);
            background: white;
        }

        /* Opsi */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 1rem 0 1.8rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.85rem;
            color: #241b64;
            cursor: pointer;
        }

        .remember-me input {
            width: 1rem;
            height: 1rem;
            accent-color: #ef332d;
        }

        .forgot-link {
            font-size: 0.85rem;
            color: #302574;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .forgot-link:hover {
            color: #241b64;
            text-decoration: underline;
        }

        /* Tombol Login */
        .btn-login {
            width: 100%;
            padding: 0.9rem;
            background: linear-gradient(135deg, #302574 0%, #6f5741 100%);
            border: none;
            border-radius: 1rem;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(111,87,65,0.3);
            background: linear-gradient(135deg, #7b5e42, #241b64);
        }

        .help-text {
            text-align: center;
            margin-top: 1.8rem;
            font-size: 0.8rem;
            color: #9c8a78;
        }

        .help-text a {
            color: #302574;
            text-decoration: none;
            font-weight: 600;
        }

        .help-text a:hover {
            text-decoration: underline;
        }

        /* Sisi Kanan - Hero Image */
        .login-right {
            flex: 1;
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1600&auto=format');
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        /* Overlay gelap untuk kontras teks */
        .login-right::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(94,63,47,0.7), rgba(36,27,100,0.35));
            z-index: 1;
        }

        .right-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 2rem;
        }

        .right-content h2 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            max-width: 500px;
            text-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .right-content p {
            font-size: 1rem;
            line-height: 1.5;
            max-width: 450px;
            opacity: 0.95;
            font-weight: 400;
        }

        /* Responsif */
        @media (max-width: 900px) {
            .login-container {
                flex-direction: column;
            }

            .login-left {
                padding: 2rem 1.5rem;
            }

            .login-right {
                min-height: 300px;
            }

            .right-content h2 {
                font-size: 1.6rem;
            }

            .right-content p {
                font-size: 0.9rem;
            }

            .login-title {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 480px) {
            .brand-text h1 {
                font-size: 1.2rem;
            }

            .login-title {
                font-size: 1.5rem;
            }

            .login-card {
                padding: 0;
            }

            .form-control {
                padding: 0.8rem 1rem 0.8rem 2.5rem;
            }
        }

        /* Animasi fade-in */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-card, .right-content {
            animation: fadeInUp 0.6s ease-out;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Sisi Kiri: Form Login -->
        <div class="login-left">
            <div class="login-card">
                <!-- Logo dan Nama Perusahaan -->
                <div class="brand">
                    <div class="brand-logo">
                        <img src="{{ asset('images/logopt.png') }}" alt="Logo PT Mitra Nusa Konsultan">
                    </div>
                    <div class="brand-text">
                        <h1>PT Mitra<br>Nusa Konsultan</h1>
                    </div>
                </div>

                <h2 class="login-title">Selamat Datang</h2>
                <p class="login-subtitle">Masuk ke dashboard admin</p>

                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="input-label">Email</label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" name="email" class="form-control" placeholder="admin@perusahaan.com" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="input-label">Password</label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox" name="remember"> Ingat saya
                        </label>
                        <a href="#" class="forgot-link">Lupa password?</a>
                    </div>

                    <button type="submit" class="btn-login">
                        <i class="fas fa-sign-in-alt"></i> Masuk
                    </button>

                    <div class="help-text">
                        Butuh bantuan? <a href="#">Hubungi admin</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Sisi Kanan: Gambar dan Pesan -->
        <div class="login-right">
            <div class="right-content">
                <h2>Solusi Konsultasi Bisnis Profesional</h2>
                <p>Kami membantu organisasi dan perusahaan dalam merancang strategi bisnis yang efektif untuk mencapai pertumbuhan berkelanjutan.</p>
            </div>
        </div>
    </div>
</body>
</html>


