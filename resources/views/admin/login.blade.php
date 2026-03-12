<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Admin | PT Mitra Nusa Konsultan</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Inter',sans-serif;
background:#f7f4ef;
height:100vh;
}

/* LAYOUT */

.login-container{
display:flex;
height:100vh;
}

/* LEFT */

.login-left{
width:45%;
background:#ffffff;
display:flex;
align-items:center;
justify-content:center;
padding:50px;
}

.login-card{
width:100%;
max-width:380px;
}

/* LOGO */

.logo-wrapper{
display:flex;
align-items:center;
gap:15px;
margin-bottom:30px;
}

.logo-img{
width:60px;
height:60px;
object-fit:contain;
border-radius:12px;
background:white;
padding:6px;
box-shadow:0 6px 18px rgba(0,0,0,0.08);
}

.logo-text h1{
font-size:20px;
font-weight:600;
color:#5e3f2f;
line-height:1.2;
}

/* TITLE */

.login-title{
font-size:26px;
font-weight:600;
color:#5e3f2f;
margin-bottom:6px;
}

.login-subtitle{
font-size:14px;
color:#9c8a78;
margin-bottom:28px;
}

/* FORM */

.form-group{
margin-bottom:22px;
}

.input-label{
font-size:13px;
font-weight:500;
color:#5e3f2f;
margin-bottom:6px;
display:block;
}

.input-wrapper{
position:relative;
}

.input-icon{
position:absolute;
left:15px;
top:50%;
transform:translateY(-50%);
color:#b28b6f;
font-size:15px;
}

.form-control{
width:100%;
padding:13px 14px 13px 42px;
border:1.5px solid #e5dbd1;
border-radius:12px;
font-size:14px;
background:#faf8f5;
transition:0.25s;
}

.form-control:focus{
outline:none;
border-color:#8b6f50;
background:#ffffff;
}

/* OPTIONS */

.form-options{
display:flex;
justify-content:space-between;
align-items:center;
margin:8px 0 22px;
}

.remember-me{
display:flex;
align-items:center;
gap:8px;
font-size:14px;
color:#5e3f2f;
}

.remember-me input{
accent-color:#8b6f50;
}

.forgot-link{
font-size:14px;
color:#8b6f50;
text-decoration:none;
}

.forgot-link:hover{
text-decoration:underline;
}

/* BUTTON */

.btn-login{
width:100%;
padding:14px;
background:#8b6f50;
border:none;
border-radius:12px;
color:white;
font-size:15px;
font-weight:600;
cursor:pointer;
transition:0.25s;
display:flex;
align-items:center;
justify-content:center;
gap:8px;
}

.btn-login:hover{
background:#6f5741;
}

/* HELP */

.help-text{
text-align:center;
margin-top:20px;
font-size:13px;
color:#9c8a78;
}

.help-text a{
color:#8b6f50;
text-decoration:none;
font-weight:600;
}

/* RIGHT SIDE */

.login-right{
flex:1;
background-image:url('https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1600&auto=format&fit=crop');
background-size:cover;
background-position:center;
position:relative;
}

.login-right::before{
content:"";
position:absolute;
top:0;
left:0;
right:0;
bottom:0;
background:linear-gradient(rgba(94,63,47,0.55),rgba(139,111,80,0.35));
}

/* TEXT RIGHT */

.right-content{
position:relative;
z-index:2;
height:100%;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
padding:60px;
color:white;
text-align:center;
}

.right-content h2{
font-size:34px;
font-weight:600;
margin-bottom:16px;
max-width:450px;
}

.right-content p{
font-size:16px;
opacity:0.95;
max-width:420px;
line-height:1.6;
}

/* RESPONSIVE */

@media(max-width:900px){

.login-container{
flex-direction:column;
}

.login-left{
width:100%;
}

.login-right{
height:350px;
}

}

</style>
</head>

<body>

<div class="login-container">

<!-- LEFT -->

<div class="login-left">

<div class="login-card">

<div class="logo-wrapper">

<img src="{{ asset('images/logopt1.png') }}" class="logo-img">

<div class="logo-text">
<h1>PT Mitra<br>Nusa Konsultan</h1>
</div>

</div>

<h2 class="login-title">Selamat Datang</h2>
<p class="login-subtitle">Masuk untuk mengakses dashboard admin</p>

<form method="POST" action="{{ route('admin.login') }}">
@csrf

<div class="form-group">

<label class="input-label">Email</label>

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

<label class="input-label">Password</label>

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

<label class="remember-me">
<input type="checkbox" name="remember">
Ingat saya
</label>

<a href="#" class="forgot-link">Lupa password?</a>

</div>

<button type="submit" class="btn-login">
<i class="fas fa-sign-in-alt"></i>
Masuk
</button>

<div class="help-text">
Butuh bantuan? <a href="#">Hubungi admin</a>
</div>

</form>

</div>

</div>

<!-- RIGHT -->

<div class="login-right">

<div class="right-content">

<h2>Solusi Konsultasi Bisnis Profesional</h2>

<p>Kami membantu organisasi dan perusahaan dalam merancang strategi bisnis yang efektif untuk mencapai pertumbuhan berkelanjutan.</p>

</div>

</div>

</div>

</body>
</html>
