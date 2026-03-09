<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Sertifikat — Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>

body{
font-family: 'Inter', sans-serif;
background:#faf6f2;
color:#3e3a37;
}

.container{
max-width:700px;
}

.page-header{
background:#8b6b4d;
padding:20px;
margin-bottom:30px;
color:white;
}

.form-card{
background:white;
padding:30px;
border-radius:15px;
border:1px solid #eee;
}

.form-group{
margin-bottom:20px;
}

.form-label{
font-weight:500;
margin-bottom:5px;
}

.btn-primary{
background:#8b6b4d;
border:none;
}

.btn-primary:hover{
background:#6b4f3a;
}

</style>

</head>

<body>

<div class="page-header">
<div class="container">
<h3>Tambah Sertifikat</h3>
<p>Input data sertifikat baru</p>
</div>
</div>

<div class="container">

<div class="form-card">

<form action="{{ route('admin.certificates.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<!-- NAMA -->
<div class="form-group">
<label class="form-label">Nama Sertifikat</label>
<input type="text" name="name" class="form-control" required>
</div>

<!-- JENIS -->
<div class="form-group">
<label class="form-label">Jenis Sertifikat</label>
<select name="type" class="form-control" required>

<option value="">Pilih Jenis</option>

<option value="ISO">ISO</option>

<option value="NIB">NIB</option>

<option value="NPWP">NPWP</option>

<option value="SPT">SPT</option>

<option value="SERTIFIKAT STANDAR">SERTIFIKAT STANDAR</option>

<option value="SBU NON KONSTRUKSI">SBU NON KONSTRUKSI</option>

<option value="SBU KONSTRUKSI">SBU KONSTRUKSI</option>


</select>
</div>

<!-- TAHUN -->
<div class="form-group">
<label class="form-label">Tahun</label>
<input type="number" name="year" class="form-control" required>
</div>

<!-- KETERANGAN -->
<div class="form-group">
<label class="form-label">Keterangan</label>
<input type="text" name="description" class="form-control">
</div>

<!-- FILE -->
<div class="form-group">
<label class="form-label">Upload Sertifikat</label>
<input type="file" name="file" class="form-control" required>
</div>

<br>

<a href="{{ route('admin.certificates') }}" class="btn btn-secondary">

Kembali

</a>

<button type="submit" class="btn btn-primary">

Simpan Sertifikat

</button>

</form>

</div>

</div>

</body>
</html>
