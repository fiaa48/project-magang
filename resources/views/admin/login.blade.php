<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | PT Mitra Nusa Konsultan</title>

    <!-- FONT INTER -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600&display=swap" rel="stylesheet">

    <!-- FONT AWESOME (untuk icon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #faf7f2;
            height: 100vh;
        }

        .login-container {
            display: flex;
            height: 100vh;
        }

        /* LEFT SIDE - FORM PUTIH ELEGAN */
        .login-left {
            width: 45%;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            box-shadow: 8px 0 30px rgba(94, 67, 47, 0.05);
            position: relative;
            overflow: hidden;
        }

        /* BACKGROUND DOT HALUS */
        .login-left::before {
            content: "";
            position: absolute;
            top: -20px;
            right: -20px;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(178, 139, 111, 0.03) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .login-left::after {
            content: "";
            position: absolute;
            bottom: -20px;
            left: -20px;
            width: 250px;
            height: 250px;
            background: radial-gradient(circle, rgba(178, 139, 111, 0.03) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .login-card {
            width: 100%;
            max-width: 380px;
            position: relative;
            z-index: 1;
        }

        /* LOGO DENGAN NAMA PERUSAHAAN */
        .logo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }

        .logo-wrapper {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 10px;
        }

        .logo-img {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            object-fit: contain;
            background: white;
            padding: 8px;
            box-shadow: 0 10px 25px rgba(94, 63, 47, 0.1);
            border: 1px solid #efe3d7;
        }

        .logo-text {
            text-align: left;
        }

        .logo-text h1 {
            font-size: 22px;
            font-weight: 600;
            color: #5e3f2f;
            line-height: 1.2;
            letter-spacing: -0.3px;
        }

        .logo-text p {
            font-size: 13px;
            color: #9c8a78;
            font-weight: 400;
            margin-top: 2px;
        }

        .tagline {
            font-size: 13px;
            color: #b28b6f;
            background: #faf3ec;
            padding: 6px 16px;
            border-radius: 30px;
            display: inline-block;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        /* TITLE */
        .login-title {
            font-size: 26px;
            font-weight: 600;
            color: #5e3f2f;
            margin-bottom: 8px;
            text-align: center;
        }

        .login-subtitle {
            font-size: 14px;
            color: #9c8a78;
            text-align: center;
            margin-bottom: 30px;
        }

        /* FORM */
        .form-group {
            margin-bottom: 20px;
        }

        .input-label {
            font-size: 13px;
            font-weight: 500;
            color: #5e3f2f;
            margin-bottom: 6px;
            display: block;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            color: #b28b6f;
            font-size: 16px;
            opacity: 0.7;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px 14px 48px;
            border: 1.5px solid #e8ddd2;
            border-radius: 16px;
            font-size: 15px;
            background: #fefcf9;
            transition: all 0.3s ease;
            color: #2d2d2d;
        }

        .form-control:focus {
            outline: none;
            border-color: #b28b6f;
            background: #ffffff;
            box-shadow: 0 8px 18px rgba(178, 139, 111, 0.12);
        }

        .form-control::placeholder {
            color: #c9b9a8;
            font-weight: 400;
            font-size: 14px;
        }

        /* REMEMBER ME & FORGOT */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0 25px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #8b6f50;
            cursor: pointer;
        }

        .remember-me label {
            font-size: 14px;
            color: #5e3f2f;
            cursor: pointer;
        }

        .forgot-link {
            font-size: 14px;
            color: #8b6f50;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .forgot-link:hover {
            color: #5e3f2f;
            text-decoration: underline;
        }

        /* BUTTON */
        .btn-login {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #8b6f50 0%, #725a42 100%);
            border: none;
            border-radius: 16px;
            color: white;
            font-weight: 600;
            font-size: 16px;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: 0.3s ease;
            box-shadow: 0 10px 22px rgba(139, 111, 80, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(139, 111, 80, 0.35);
            background: linear-gradient(135deg, #7d6247 0%, #634d39 100%);
        }

        .btn-login i {
            font-size: 18px;
        }

        /* DIVIDER */
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 25px 0 15px;
            color: #c9b9a8;
            font-size: 13px;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e8ddd2;
        }

        .divider::before {
            margin-right: 15px;
        }

        .divider::after {
            margin-left: 15px;
        }

        /* HELP TEXT */
        .help-text {
            text-align: center;
            font-size: 13px;
            color: #9c8a78;
            margin-top: 20px;
        }

        .help-text a {
            color: #8b6f50;
            text-decoration: none;
            font-weight: 600;
        }

        .help-text a:hover {
            text-decoration: underline;
        }

        /* RIGHT SIDE - GAMBAR KONSULTAN */
        .login-right {
            flex: 1;
            position: relative;
            overflow: hidden;
        }

        /* GAMBAR BACKGROUND KONSULTAN */
        .login-right {
            background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1600&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* OVERLAY COKLAT GRADIENT */
        .login-right::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(94, 63, 47, 0.7) 0%, rgba(139, 111, 80, 0.5) 100%);
            z-index: 1;
        }

        /* KONTEN DI ATAS GAMBAR */
        .right-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px;
            color: white;
            text-align: center;
        }

        .right-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            padding: 8px 20px;
            border-radius: 40px;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .right-content h2 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
            max-width: 500px;
        }

        .right-content p {
            font-size: 18px;
            opacity: 0.95;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
            max-width: 450px;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        .right-features {
            display: flex;
            gap: 40px;
            margin-top: 20px;
        }

        .feature-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .feature-item i {
            font-size: 28px;
            background: rgba(255, 255, 255, 0.15);
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .feature-item span {
            font-size: 14px;
            font-weight: 500;
            opacity: 0.9;
        }

        /* DECORATIVE LINE */
        .decorative-line {
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ffffff, rgba(255, 255, 255, 0.3));
            margin: 20px 0;
            border-radius: 10px;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .login-container {
                flex-direction: column;
            }

            .login-left,
            .login-right {
                width: 100%;
            }

            .login-right {
                height: 400px;
                min-height: 400px;
            }

            .right-content h2 {
                font-size: 32px;
            }

            .right-features {
                gap: 20px;
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<div class="login-container">

    <!-- LEFT SIDE: FORM LOGIN -->
    <div class="login-left">
        <div class="login-card">

            <!-- LOGO DENGAN NAMA PERUSAHAAN -->
            <div class="logo-container">
                <div class="logo-wrapper">
                    <img src="{{ asset('images/logopt1.png') }}" alt="Logo PT Konsultan" class="logo-img">
                    <div class="logo-text">
                        <h1>PT Mitra<br>Nusa Konsultan</h1>
                    </div>
                </div>
            </div>

            <h2 class="login-title">Selamat Datang Kembali</h2>
            <p class="login-subtitle">Masuk untuk mengakses dashboard Anda</p>

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <div class="form-group">
                    <label class="input-label">Alamat Email</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email"
                               name="email"
                               class="form-control"
                               placeholder="admin@perusahaan.com"
                               required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="input-label">Kata Sandi</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="••••••••"
                               required>
                    </div>
                </div>

                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Ingat saya</label>
                    </div>
                    <a href="#" class="forgot-link">Lupa kata sandi?</a>
                </div>

                <button type="submit" class="btn-login">
                    <i class="fas fa-sign-in-alt"></i>
                    MASUK
                </button>

                <div class="divider">atau</div>

                <div class="help-text">
                    Butuh bantuan? <a href="#">Hubungi Dukungan</a>
                </div>
            </form>

        </div>
    </div>

    <!-- RIGHT SIDE: GAMBAR KONSULTAN -->
    <div class="login-right">
        <div class="right-content">
            <div class="right-badge">
                <i class="fas fa-star" style="margin-right: 6px;"></i> MITRA TERPERCAYA
            </div>

            <h2>Transformasi<br>Strategi Bisnis Anda</h2>

            <div class="decorative-line"></div>

            <p>Kami membantu organisasi menghadapi tantangan kompleks dan mencapai pertumbuhan berkelanjutan melalui konsultasi ahli.</p>

            <div class="right-features">
                <div class="feature-item">
                    <i class="fas fa-chart-line"></i>
                    <span>Perencanaan Strategis</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-users"></i>
                    <span>Tim Ahli</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-handshake"></i>
                    <span>Kemitraan</span>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
