<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color:#f8f9fa;
        }

        .sidebar{
            height:100vh;
            background:#2c1810;
            color:white;
        }

        .sidebar a{
            color:white;
            text-decoration:none;
            display:block;
            padding:10px 15px;
        }

        .sidebar a:hover{
            background:#6b4f3a;
        }
    </style>
</head>
<body>

<div class="container-fluid">
<div class="row">

    <!-- SIDEBAR -->
    <div class="col-md-2 sidebar p-3">

        <h5 class="mb-4">Admin Panel</h5>

        <a href="{{ route('admin.dashboard') }}">Dashboard</a>

        <a href="{{ route('admin.certificates') }}">Sertifikat</a>

        <a href="{{ route('admin.projects') }}">Project</a>

        <a href="{{ route('admin.users') }}">Users</a>

        <hr>

        <!-- LOGOUT -->
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-light w-100">
                Logout
            </button>
        </form>

    </div>


    <!-- CONTENT -->
    <div class="col-md-10 p-4">

        @yield('content')

    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
