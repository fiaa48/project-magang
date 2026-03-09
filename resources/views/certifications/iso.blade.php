@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 fw-bold">Sertifikat ISO</h2>

    <div class="row">
        @forelse($certificates as $cert)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">

                <!-- GAMBAR -->
                <img src="{{ asset('storage/'.$cert->file) }}"
                     class="card-img-top"
                     style="height:220px; object-fit:cover; cursor:pointer"
                     onclick="openModal(
                        '{{ asset('storage/'.$cert->file) }}',
                        '{{ route('certifications.download', $cert->id) }}'
                     )">

                <div class="card-body text-center">

                    <p class="small text-muted mb-2">
                        {{ $cert->name }}
                    </p>

                    <button class="btn btn-primary btn-sm"
                        onclick="openModal(
                        '{{ asset('storage/'.$cert->file) }}',
                        '{{ route('certifications.download', $cert->id) }}'
                        )">
                        View
                    </button>

                    <a href="{{ route('certifications.download', $cert->id) }}"
                       class="btn btn-success btn-sm">
                       Download PDF
                    </a>

                </div>

            </div>
        </div>
        @empty
            <p>Belum ada sertifikat ISO.</p>
        @endforelse
    </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="certModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-body text-center">
          <img id="modalImage" src="" style="width:100%; border-radius:10px;">
      </div>

      <div class="modal-footer">
          <a id="downloadBtn" href="#" class="btn btn-success">
              Download PDF
          </a>

          <a id="waBtn" href="#" target="_blank" class="btn btn-primary">
              Share WhatsApp
          </a>

          <a id="emailBtn" href="#" class="btn btn-warning">
              Email
          </a>

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Close
          </button>
      </div>

    </div>
  </div>
</div>

<script>
function openModal(imageUrl, downloadUrl) {

    document.getElementById('modalImage').src = imageUrl;
    document.getElementById('downloadBtn').href = downloadUrl;

    document.getElementById('waBtn').href =
        "https://wa.me/?text=" + encodeURIComponent("Lihat Sertifikat: " + imageUrl);

    document.getElementById('emailBtn').href =
        "mailto:?subject=Sertifikat Perusahaan&body=Lihat Sertifikat: " + imageUrl;

    var modal = new bootstrap.Modal(document.getElementById('certModal'));
    modal.show();
}
</script>

@endsection
