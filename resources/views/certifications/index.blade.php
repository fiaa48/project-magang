@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="row">
        @forelse($certificates as $cert)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">

                <img src="{{ asset($cert->file) }}"
                     class="card-img-top"
                     style="height:200px; object-fit:cover; cursor:pointer"
                     onclick="showPreview(
                        '{{ asset($cert->file) }}',
                        '{{ route('certifications.download', $cert->id) }}'
                     )">

                <div class="card-body text-center">
                    <small>{{ $cert->name }}</small>
                </div>

            </div>
        </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    Tidak ada sertifikat di kategori ini.
                </div>
            </div>
        @endforelse
    </div>

</div>

<!-- MODAL PREVIEW -->
<div class="modal fade" id="previewModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-body text-center">
          <img id="previewImage" src="" style="width:100%; height:auto;">
      </div>

      <div class="modal-footer">
          <a id="downloadBtn" href="#" class="btn btn-success">Download PDF</a>
          <a id="waBtn" href="#" target="_blank" class="btn btn-primary">Share WhatsApp</a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script>
function showPreview(imageUrl, downloadUrl)
{
    document.getElementById('previewImage').src = imageUrl;
    document.getElementById('downloadBtn').href = downloadUrl;
    document.getElementById('waBtn').href =
        "https://wa.me/?text=" + encodeURIComponent("Lihat Sertifikat: " + imageUrl);

    var myModal = new bootstrap.Modal(document.getElementById('previewModal'));
    myModal.show();
}
</script>

@endsection
