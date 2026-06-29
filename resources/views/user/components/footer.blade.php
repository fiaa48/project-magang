<footer class="footer-section">
    <div class="container">
        @php
            // Ambil data profil perusahaan (asumsi hanya 1 baris)
            $profile = App\Models\CompanyProfile::first();

            // Ambil data admin untuk WhatsApp (prioritas: user dengan id = 1, lalu user pertama yang punya whatsapp)
            $admin = App\Models\User::find(1); // coba id 1 dulu
            if (!$admin || !$admin->whatsapp) {
                $admin = App\Models\User::whereNotNull('whatsapp')->first();
            }
            $whatsappNumber = $admin->whatsapp ?? null;
        @endphp

        <div class="row">
            <!-- Company Info -->
            <div class="col-lg-3 mb-3">
                <div class="footer-brand mb-2">
                    <h3 class="text-cream mb-1" style="font-size: 1.4rem;">
                        {{ $profile->name ?? 'PT Mitra Nusa Konsultan' }}
                    </h3>
                    <div class="accent-line"></div>
                </div>
                <p class="text-light-cream mb-2" style="font-size: 0.85rem; line-height: 1.4;">
                    Perusahaan konsultan profesional di bidang konstruksi dan non-konstruksi
                    dengan berbagai sertifikasi dan pengalaman sejak tahun 2020.
                </p>
            </div>

            <!-- Contact Info (Dua alamat dinamis dari database, tanpa website) -->
            <div class="col-lg-3 col-md-6 mb-3">
                <h5 class="footer-heading mb-2">Kontak Kami</h5>
                <ul class="footer-contact">
                    <!-- Alamat Utama (address_main) -->
                    <li class="mb-2">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-text">
                            <strong>Kantor Utama</strong><br>
                            {!! nl2br(e($profile->address_main ?? 'Jl. Tulip VII No.8, Rancabolang, Gedebage, Bandung 40295')) !!}
                        </div>
                    </li>
                    <!-- Alamat Cabang (address_branch) -->
                    <li class="mb-2">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-text">
                            <strong>Kantor Cabang</strong><br>
                            {!! nl2br(e($profile->address_branch ?? 'Jl. Terusan Jakarta No.175A, Antapani Kulon, Bandung 40291')) !!}
                        </div>
                    </li>
                    <!-- Telepon PT (dinamis) -->
                    <li class="mb-2">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div class="contact-text">
                            <a href="tel:{{ $profile->telepon_pt ?? '02220502071' }}">
                                {{ $profile->telepon_pt ?? '022-20502071' }}
                            </a>
                        </div>
                    </li>
                    <!-- Email PT (dinamis) -->
                    <li class="mb-2">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-text">
                            <a href="mailto:{{ $profile->email_pt ?? 'mitranusa.kons@gmail.com' }}">
                                {{ $profile->email_pt ?? 'mitranusa.kons@gmail.com' }}
                            </a>
                        </div>
                    </li>
                    <!-- WhatsApp (diambil dari tabel USERS, kolom whatsapp) -->
                    <li class="mb-2">
                        <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
                        <div class="contact-text">
                            @if($whatsappNumber)
                                @php
                                    // Format nomor: hapus semua karakter non-digit
                                    $cleanNumber = preg_replace('/[^0-9]/', '', $whatsappNumber);
                                    // Jika dimulai dengan 0, ganti dengan 62 (kode Indonesia)
                                    if (preg_match('/^0/', $cleanNumber)) {
                                        $cleanNumber = '62' . substr($cleanNumber, 1);
                                    }
                                    // Jika belum ada kode negara, tambahkan 62 (default Indonesia)
                                    if (!preg_match('/^62/', $cleanNumber)) {
                                        $cleanNumber = '62' . $cleanNumber;
                                    }
                                @endphp
                                <a href="https://wa.me/{{ $cleanNumber }}" target="_blank" rel="noopener noreferrer">
                                    {{ $whatsappNumber }}
                                </a>
                            @else
                                <span>Nomor WhatsApp belum tersedia</span>
                            @endif
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Map Section (tetap statis, alamat dinamis untuk map) -->
            <div class="col-lg-3 col-md-6 mb-3">
                <h5 class="footer-heading mb-2">Lokasi Kami</h5>
                <div class="footer-map-container">
                    <div class="footer-map-grid">
                        <div class="footer-map-card">
                            <div class="footer-map-label">
                                <span>Antapani</span>
                                <a href="https://www.google.com/maps/dir/?api=1&destination={{ urlencode($profile->address_main ?? 'Jl. Tulip VII No.8, Rancabolang, Gedebage, Bandung 40295') }}" target="_blank" rel="noopener noreferrer"><i class="fas fa-location-arrow"></i></a>
                            </div>
                            <iframe src="https://www.google.com/maps?q={{ urlencode($profile->address_main ?? 'Jl. Tulip VII No.8, Rancabolang, Gedebage, Bandung 40295') }}&output=embed" title="Peta Kantor Utama" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                        </div>
                        <div class="footer-map-card">
                            <div class="footer-map-label">
                                <span>Gedebage</span>
                                <a href="https://www.google.com/maps/dir/?api=1&destination={{ urlencode($profile->address_branch ?? 'Jl. Terusan Jakarta No.175A, Antapani Kulon, Bandung 40291') }}" target="_blank" rel="noopener noreferrer"><i class="fas fa-location-arrow"></i></a>
                            </div>
                            <iframe src="https://www.google.com/maps?q={{ urlencode($profile->address_branch ?? 'Jl. Terusan Jakarta No.175A, Antapani Kulon, Bandung 40291') }}&output=embed" title="Peta Kantor Cabang" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($profile->name ?? 'PT Mitra Nusa Konsultan') }} Bandung" target="_blank" rel="noopener noreferrer" class="map-link">
                            <i class="fas fa-external-link-alt"></i> <span>Buka semua lokasi</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Business Hours (tetap statis) -->
            <div class="col-lg-3 mb-3">
                <h5 class="footer-heading mb-2">Jam Operasional</h5>
                <div class="business-hours">
                    <div class="hours-item"><span class="day">Senin - Jumat</span><span class="time">08:00 - 17:00</span></div>
                    <div class="hours-item"><span class="day">Sabtu</span><span class="time">08:00 - 14:00</span></div>
                    <div class="hours-item"><span class="day">Minggu & Libur</span><span class="time closed">Tutup</span></div>
                </div>
                <div class="footer-cta mt-3">
                    <a href="{{ route('contact') }}" class="cta-button"><i class="fas fa-paper-plane me-1"></i><span>Konsultasi Gratis</span></a>
                </div>
            </div>
        </div>

        <div class="footer-divider"></div>

        <div class="row align-items-center py-2">
            <div class="col-md-6 mb-1 mb-md-0">
                <p class="copyright-text mb-0">&copy; {{ date('Y') }} {{ $profile->name ?? 'PT Mitra Nusa Konsultan' }}. Semua Hak Dilindungi.</p>
            </div>
            <div class="col-md-6">
                <div class="footer-certifications">
                    <!-- NPWP dan NIB diambil dari company_profiles -->
                    <span class="cert-badge"><i class="fas fa-id-card"></i> NPWP: {{ $profile->npwp ?? '96.431.796.0-429.000' }}</span>
                    <span class="cert-badge"><i class="fas fa-building"></i> NIB: {{ $profile->nib ?? '0257011100093' }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="back-to-top">
        <a href="#top" class="back-top-btn"><i class="fas fa-chevron-up"></i></a>
    </div>
</footer>

<style>
    /* === FOOTER PREMIUM (sama persis, tidak ada perubahan) === */
    :root {
        --coffee-dark: #171247;
        --coffee-medium: #241b64;
        --coffee-light: #302574;
        --coffee-cream: #e7e4ff;
        --cream-white: #ffffff;
        --cream-gold: #ef332d;
    }

    .footer-section {
        background: linear-gradient(135deg, #171247 0%, #241b64 58%, #302574 100%);
        color: var(--cream-white);
        padding: 30px 0 15px;
        position: relative;
        overflow: hidden;
    }
    .footer-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--cream-gold), transparent);
    }
    .text-cream { color: var(--cream-white) !important; }
    .text-light-cream { color: var(--coffee-cream) !important; }
    .accent-line { width: 40px; height: 2px; background: var(--cream-gold); margin-top: 6px; border-radius: 1px; }

    .footer-heading {
        color: #fff;
        font-weight: 600;
        letter-spacing: 0.2px;
        position: relative;
        padding-bottom: 8px;
        margin-bottom: 12px;
    }
    .footer-heading::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 25px;
        height: 2px;
        background: var(--cream-gold);
    }

    .footer-contact { list-style: none; padding: 0; margin: 0; }
    .footer-contact li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 8px;
        gap: 8px;
    }
    .contact-icon {
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        color: var(--cream-gold);
    }
    .contact-text, .contact-text a {
        color: #fff !important;
        text-decoration: none;
        font-size: 0.83rem;
        line-height: 1.4;
    }
    .contact-text a:hover { text-decoration: underline; }
    .contact-text strong {
        font-weight: 600;
        font-size: 0.85rem;
    }

    .footer-map-container { height: 100%; display: flex; flex-direction: column; }
    .footer-map-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
    .footer-map-card { position: relative; height: 132px; overflow: hidden; border-radius: 8px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.15); }
    .footer-map-card iframe { width: 100%; height: 100%; border: 0; display: block; filter: saturate(0.95); }
    .footer-map-label {
        position: absolute; top: 8px; left: 8px; right: 8px; z-index: 2;
        display: flex; justify-content: space-between; gap: 6px; pointer-events: none;
    }
    .footer-map-label span, .footer-map-label a {
        display: inline-flex; align-items: center; justify-content: center;
        min-height: 24px; border-radius: 999px;
        background: rgba(0,0,0,0.7);
        color: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.3);
    }
    .footer-map-label span { padding: 3px 8px; font-size: 0.68rem; font-weight: 800; }
    .footer-map-label a { width: 24px; text-decoration: none; pointer-events: auto; font-size: 0.68rem; }
    .footer-map-label a:hover { background: var(--cream-gold); color: #fff; }
    .map-link {
        color: var(--cream-gold) !important;
        font-size: 0.75rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }
    .map-link:hover { color: #fff !important; text-decoration: underline; }

    .business-hours {
        background: rgba(0,0,0,0.35);
        border-radius: 8px;
        padding: 12px;
        border: 1px solid rgba(255,255,255,0.15);
    }
    .hours-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 6px 0;
        border-bottom: 1px solid rgba(255,255,255,0.1);
        color: #fff;
    }
    .hours-item:last-child { border-bottom: none; padding-bottom: 0; }
    .hours-item .day, .hours-item .time { color: #fff; font-weight: 500; }
    .hours-item .closed { color: #ffaaaa; }

    .footer-cta { text-align: center; }
    .cta-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: transparent;
        color: #ffffff !important;
        text-decoration: none;
        border-radius: 60px;
        font-weight: 700;
        padding: 10px 20px;
        font-size: 0.9rem;
        transition: all 0.2s ease;
        border: 1px solid rgba(255,255,255,0.5);
        width: 100%;
        max-width: 220px;
        gap: 8px;
        backdrop-filter: blur(4px);
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    .cta-button i, .cta-button span {
        color: #ffffff;
    }
    .cta-button i {
        font-size: 1rem;
    }
    .cta-button:hover {
        background: rgba(239, 51, 45, 0.2);
        border-color: var(--cream-gold);
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }
    .cta-button:hover i, .cta-button:hover span {
        color: var(--cream-gold);
    }

    .back-to-top {
        position: fixed;
        right: 20px;
        bottom: 20px;
        z-index: 99;
    }
    .back-top-btn {
        width: 44px;
        height: 44px;
        background: transparent;
        color: #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.2s;
        font-size: 1.3rem;
        border: 1px solid rgba(255,255,255,0.5);
        backdrop-filter: blur(4px);
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    .back-top-btn i {
        color: #ffffff;
    }
    .back-top-btn:hover {
        background: rgba(239, 51, 45, 0.2);
        border-color: var(--cream-gold);
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }
    .back-top-btn:hover i {
        color: var(--cream-gold);
    }

    .footer-divider {
        margin: 20px 0 15px;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent);
    }

    .copyright-text { color: #ccc; font-size: 0.8rem; margin: 0; }

    .footer-certifications {
        display: flex;
        gap: 8px;
        justify-content: flex-end;
        flex-wrap: wrap;
    }
    .cert-badge {
        background: rgba(0,0,0,0.6);
        color: #ffffff;
        border-radius: 30px;
        padding: 4px 12px;
        font-size: 0.7rem;
        font-weight: 600;
        border: 1px solid rgba(255,255,255,0.3);
        letter-spacing: 0.3px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        backdrop-filter: blur(2px);
    }
    .cert-badge i {
        color: var(--cream-gold);
    }

    @media (max-width: 768px) {
        .footer-certifications { justify-content: flex-start; }
        .hours-item { flex-direction: column; align-items: flex-start; gap: 2px; }
        .back-to-top { position: static; margin-top: 20px; text-align: center; }
        .back-top-btn { margin: 0 auto; }
    }
    @media (max-width: 576px) {
        .footer-map-grid { grid-template-columns: 1fr; gap: 12px; }
        .footer-map-card { height: 150px; }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const backBtn = document.querySelector('.back-top-btn');
        if (backBtn) {
            backBtn.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
        window.addEventListener('scroll', function() {
            const btn = document.querySelector('.back-to-top');
            if (btn && window.innerWidth > 768) {
                btn.style.opacity = window.pageYOffset > 300 ? '1' : '0.7';
            }
        });
    });
</script>
