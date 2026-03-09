@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 fw-bold">Sertifikat SBU NON KONTRUKSI</h2>

    <div class="row">
        @forelse($certificates as $cert)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">

                <!-- GAMBAR SERTIFIKAT -->
                <img src="{{ $cert['url'] }}"
                     class="card-img-top"
                     style="height:220px; object-fit:cover; cursor:pointer"
                     onclick="openModal(
                        @js($cert['url']),
                        @js(route('certifications.download', [$cert['folder'], $cert['name']]))
                     )">

                <div class="card-body text-center">
                    <p class="small text-muted mb-2">
                        {{ $cert['name'] }}
                    </p>

                    <!-- TOMBOL VIEW -->
                    <button class="btn btn-primary btn-sm"
                        onclick="openModal(
                        @js($cert['url']),
                        @js(route('certifications.download', [$cert['folder'], $cert['name']]))
                        )">
                        View
                    </button>

                    <!-- TOMBOL DOWNLOAD -->
                    <a href="{{ route('certifications.download', [$cert['folder'], $cert['name']]) }}"
                       class="btn btn-success btn-sm">
                       Download PDF
                    </a>
                </div>

            </div>
        </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    Belum ada sertifikat SBU.
                </div>
            </div>
        @endforelse
    </div>
</div>

<!-- MODAL PREVIEW -->
<div class="modal fade" id="certModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
          <h5 class="modal-title">Preview Sertifikat</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
          <img id="modalImage"
               src=""
               style="width:100%; max-height:80vh; object-fit:contain; border-radius:10px;">
      </div>

      <div class="modal-footer d-flex justify-content-between">
          <div>
              <a id="downloadBtn" href="#" class="btn btn-success">
                  Download PDF
              </a>
          </div>

          <div>
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
</div>

<!-- SCRIPT MODAL -->
<script>
function openModal(imageUrl, downloadUrl) {
    // set gambar preview
    document.getElementById('modalImage').src = imageUrl;

    // set tombol download
    document.getElementById('downloadBtn').href = downloadUrl;

    // share whatsapp
    document.getElementById('waBtn').href =
        "https://wa.me/?text=" + encodeURIComponent("Lihat Sertifikat: " + imageUrl);

    // share email
    document.getElementById('emailBtn').href =
        "mailto:?subject=Sertifikat Perusahaan&body=" +
        encodeURIComponent("Lihat Sertifikat di sini: " + imageUrl);

    // buka modal bootstrap
    const modalElement = document.getElementById('certModal');
    const modal = new bootstrap.Modal(modalElement);
    modal.show();
}
</script>
@endsection
