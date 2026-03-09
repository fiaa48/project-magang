@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 fw-bold text-center">DOKUMEN SERTIFIKAT STANDAR</h2>

    <div class="row">
        @forelse($certificates as $cert)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm h-100 border-0 rounded-4">

                <!-- GAMBAR DOKUMEN -->
                <div class="overflow-hidden rounded-top-4">
                    <img src="{{ $cert['url'] }}"
                         class="card-img-top"
                         style="height:230px; object-fit:cover; cursor:pointer; transition:0.3s;"
                         onmouseover="this.style.transform='scale(1.05)'"
                         onmouseout="this.style.transform='scale(1)'"
                         onclick="openModal(
                            '{{ $cert['url'] }}',
                            '{{ route('certifications.download', [$cert['folder'], $cert['name']]) }}'
                         )">
                </div>

                <div class="card-body text-center">
                    <p class="small text-muted mb-3 text-truncate">
                        {{ $cert['name'] }}
                    </p>

                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                        <button class="btn btn-primary btn-sm rounded-pill px-3"
                            onclick="openModal(
                            '{{ $cert['url'] }}',
                            '{{ route('certifications.download', [$cert['folder'], $cert['name']]) }}'
                            )">
                            <i class="fas fa-eye me-1"></i> View
                        </button>

                        <a href="{{ route('certifications.download', [$cert['folder'], $cert['name']]) }}"
                           class="btn btn-success btn-sm rounded-pill px-3">
                           <i class="fas fa-download me-1"></i> Download PDF
                        </a>
                    </div>
                </div>

            </div>
        </div>
        @empty
            <div class="text-center py-5">
                <h5 class="text-muted">Belum ada dokumen Sertifikat Standar.</h5>
                <p class="text-muted small">
                    Upload file ke folder: <b>public/certificates/sertifikat-standar</b>
                </p>
            </div>
        @endforelse
    </div>
</div>

<!-- MODAL PREVIEW -->
<div class="modal fade" id="certModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 shadow">

      <div class="modal-header border-0">
          <h5 class="modal-title fw-semibold">Preview Sertifikat Standar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
          <img id="modalImage" src=""
               style="width:100%; border-radius:12px; max-height:80vh; object-fit:contain;">
      </div>

      <div class="modal-footer border-0 justify-content-center gap-2">
          <a id="downloadBtn" href="#" class="btn btn-success rounded-pill px-4">
              <i class="fas fa-file-pdf me-1"></i> Download PDF
          </a>

          <a id="waBtn" href="#" target="_blank" class="btn btn-primary rounded-pill px-4">
              <i class="fab fa-whatsapp me-1"></i> Share WhatsApp
          </a>

          <a id="emailBtn" href="#" class="btn btn-warning rounded-pill px-4">
              <i class="fas fa-envelope me-1"></i> Email
          </a>

          <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">
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
        "https://wa.me/?text=" + encodeURIComponent("Lihat Sertifikat Standar: " + imageUrl);
    document.getElementById('emailBtn').href =
        "mailto:?subject=Sertifikat Standar&body=Lihat Sertifikat Standar: " + imageUrl;

    var modal = new bootstrap.Modal(document.getElementById('certModal'));
    modal.show();
}
</script>
@endsection
