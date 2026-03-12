@extends('layoutss.admin')

@section('content')

<style>

.dashboard-title{
font-size:26px;
font-weight:600;
color:#5e3f2f;
margin-bottom:30px;
}

.stat-card{
border:none;
border-radius:16px;
padding:25px;
color:white;
transition:0.25s;
}

.stat-card:hover{
transform:translateY(-5px);
box-shadow:0 15px 35px rgba(0,0,0,0.1);
}

.stat-icon{
font-size:26px;
opacity:0.9;
}

.stat-number{
font-size:32px;
font-weight:700;
margin-top:10px;
}

.stat-label{
font-size:14px;
opacity:0.9;
}

.bg-users{
background:linear-gradient(135deg,#6a85f1,#4b64d6);
}

.bg-projects{
background:linear-gradient(135deg,#f6a64b,#e6852a);
}

.bg-certificates{
background:linear-gradient(135deg,#45b97c,#2d9c65);
}

</style>


<h3 class="dashboard-title">Dashboard</h3>

<div class="row g-4">

<div class="col-md-4">

<div class="stat-card bg-users">

<i class="fas fa-users stat-icon"></i>

<div class="stat-number">
{{ $totalUsers }}
</div>

<div class="stat-label">
Total Users
</div>

</div>

</div>


<div class="col-md-4">

<div class="stat-card bg-projects">

<i class="fas fa-briefcase stat-icon"></i>

<div class="stat-number">
{{ $totalProjects }}
</div>

<div class="stat-label">
Total Projects
</div>

</div>

</div>


<div class="col-md-4">

<div class="stat-card bg-certificates">

<i class="fas fa-certificate stat-icon"></i>

<div class="stat-number">
{{ $totalCertificates }}
</div>

<div class="stat-label">
Total Sertifikat
</div>

</div>

</div>

</div>

@endsection
