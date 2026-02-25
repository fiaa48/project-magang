<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Edit Project</h2>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" required>{{ $project->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="location" class="form-control" value="{{ $project->location }}">
        </div>

        <div class="mb-3">
            <label>Tahun</label>
            <input type="number" name="year" class="form-control" value="{{ $project->year }}">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="ongoing" {{ $project->status == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="image" class="form-control">

            @if($project->image)
                <img src="{{ asset('storage/'.$project->image) }}" width="100" class="mt-2">
            @endif
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.projects') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
