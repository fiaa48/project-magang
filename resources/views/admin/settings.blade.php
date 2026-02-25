<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Pengaturan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-4">
    <h2 class="mb-4">Pengaturan Website</h2>

    <div class="card">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama Perusahaan</label>
                    <input type="text" class="form-control" placeholder="PT Mitra Nusa Konsulindo">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Perusahaan</label>
                    <input type="email" class="form-control" placeholder="email@perusahaan.com">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Pengaturan
                </button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
