<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f5f6f8;
            height: 100vh;
        }

        /* CONTAINER */
        .login-container {
            display: flex;
            height: 100vh;
        }

        /* LEFT SIDE */
        .login-left {
            width: 45%;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px;
        }

        .login-card {
            width: 100%;
            max-width: 350px;
        }

        /* LOGO (SUDAH DIGANTI JADI GAMBAR) */
        /* LOGO TENGAH & BULAT (PROFESIONAL) */
.logo {
    display: flex;
    justify-content: center;  /* bikin logo ke tengah */
    align-items: center;
    margin-bottom: 30px;
}

.logo img {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    object-fit: contain;
    background: #ffffff;
    padding: 10px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.06);
    border: 2px solid #f1f3f6;
}

        /* TITLE */
        .login-title {
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 25px;
    color: #333;
    text-align: center; /* TAMBAHAN ini */
}

        /* INPUT STYLE */
        .form-group {
            margin-bottom: 18px;
        }

        .form-control {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #e2e5ea;
            border-radius: 6px;
            font-size: 14px;
            background: #f9fafb;
            transition: 0.2s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #5aa7bd;
            background: #fff;
        }

        /* BUTTON */
        .btn-login {
            width: 100%;
            padding: 12px;
            background: #5aa7bd;
            border: none;
            border-radius: 6px;
            color: white;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #4b96ab;
        }

        /* LINKS */
        .forgot {
            display: block;
            margin-top: 10px;
            font-size: 13px;
            color: #8a8f98;
            text-decoration: none;
        }

        .register {
            margin-top: 25px;
            font-size: 13px;
            color: #8a8f98;
        }

        .register a {
            color: #5aa7bd;
            text-decoration: none;
            font-weight: 500;
        }

        /* RIGHT SIDE IMAGE (FIX LARAVEL PATH) */
        .login-right {
            flex: 1;
            background: url("{{ asset('images/login-bg2.png') }}") no-repeat center center;
            background-size: cover;
            min-height: 100vh;
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
                height: 300px;
                min-height: 300px;
            }
        }
    </style>
</head>
<body>

<div class="login-container">

    <!-- LEFT FORM -->
    <div class="login-left">
        <div class="login-card">

            <!-- LOGO GAMBAR (GANTI DI SINI) -->
            <div class="logo">
                <img src="{{ asset('images/logopt1.png') }}" alt="Logo PT">
            </div>

            <div class="login-title">Log in</div>

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <div class="form-group">
                    <input type="email"
                        name="email"
                        class="form-control"
                        placeholder="Email address"
                        required>
                </div>

                <div class="form-group">
                    <input type="password"
                        name="password"
                        class="form-control"
                        placeholder="Password"
                        required>
                </div>

                <button type="submit" class="btn-login">
                    LOGIN
                </button>

                <a href="#" class="forgot">Forgot password?</a>

            </form>
        </div>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="login-right"></div>

</div>

</body>
</html>
