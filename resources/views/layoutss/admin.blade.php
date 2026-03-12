<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

body{
background:#f5f6fa;
font-family:'Segoe UI',sans-serif;
}

/* SIDEBAR */

.sidebar{
height:100vh;
background:#2c1810;
color:white;
padding:25px 15px;
position:fixed;
width:230px;
}

.sidebar-title{
font-size:20px;
font-weight:600;
margin-bottom:30px;
}

.sidebar a{
display:flex;
align-items:center;
gap:10px;
padding:12px 15px;
color:#ddd;
text-decoration:none;
border-radius:8px;
margin-bottom:5px;
transition:0.2s;
}

.sidebar a:hover{
background:#6b4f3a;
color:white;
}

.sidebar i{
width:18px;
}

/* CONTENT */

.main-content{
margin-left:230px;
padding:30px;
}

/* TOPBAR */

.topbar{
background:white;
padding:15px 25px;
border-radius:10px;
box-shadow:0 4px 10px rgba(0,0,0,0.05);
margin-bottom:25px;
display:flex;
justify-content:space-between;
align-items:center;
}

.topbar-title{
font-size:18px;
font-weight:600;
}

/* PROFILE */

.profile-box{
display:flex;
align-items:center;
gap:10px;
cursor:pointer;
}

.profile-img{
width:36px;
height:36px;
border-radius:50%;
object-fit:cover;
border:2px solid #eee;
}

.logout-btn{
background:none;
border:none;
width:100%;
text-align:left;
}

</style>
</head>
<body>


<!-- SIDEBAR -->

<div class="sidebar">

<div class="sidebar-title">
Admin Panel
</div>

<a href="{{ route('admin.dashboard') }}">
<i class="fas fa-chart-line"></i> Dashboard
</a>

<a href="{{ route('admin.certificates') }}">
<i class="fas fa-certificate"></i> Sertifikat
</a>

<a href="{{ route('admin.projects') }}">
<i class="fas fa-briefcase"></i> Project
</a>

<a href="{{ route('admin.users') }}">
<i class="fas fa-users"></i> Users
</a>

<a href="{{ route('admin.contacts') }}">
<i class="fas fa-envelope"></i> Pesan Kontak
</a>
</div>


<!-- MAIN CONTENT -->

<div class="main-content">

<div class="topbar">

<div class="topbar-title">
Admin Dashboard
</div>


<!-- PROFILE DROPDOWN -->

<div class="dropdown">

<div class="profile-box dropdown-toggle" data-bs-toggle="dropdown">

@if(Auth::user()->photo)

<img src="{{ asset('profile/'.Auth::user()->photo) }}" class="profile-img">

@else

<img src="https://i.pravatar.cc/40" class="profile-img">

@endif

<span>{{ Auth::user()->name ?? 'Admin' }}</span>

</div>

<ul class="dropdown-menu dropdown-menu-end">

<li>
<a class="dropdown-item" href="{{ route('admin.profile') }}">
<i class="fas fa-user"></i> Profile
</a>
</li>

<li>
<hr class="dropdown-divider">
</li>

<li>

<form action="{{ route('admin.logout') }}" method="POST">
@csrf
<button class="dropdown-item logout-btn">
<i class="fas fa-sign-out-alt"></i> Logout
</button>
</form>

</li>

</ul>

</div>

</div>

@yield('content')

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
