<footer class="footer-section">
    <div class="container">
        <!-- Main Footer Content -->
        <div class="row">
            <!-- Company Info -->
            <div class="col-lg-4 mb-3">
                <div class="footer-brand mb-2">
                    <h3 class="text-cream mb-1" style="font-size: 1.4rem;">PT Mitra Nusa Konsultan</h3>
                    <div class="accent-line"></div>
                </div>
                <p class="text-light-cream mb-2" style="font-size: 0.85rem; line-height: 1.4;">
                    Perusahaan konsultan profesional di bidang konstruksi dan non-konstruksi
                    dengan berbagai sertifikasi dan pengalaman sejak tahun 2020.
                </p>
                <div class="social-links mt-2">
                    <a href="#" class="social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6 mb-3">
                <h5 class="footer-heading mb-2" style="font-size: 0.95rem;">Kontak Kami</h5>
                <ul class="footer-contact">
                    <li class="mb-1">
                        <div class="contact-icon" style="width: 28px; height: 28px; font-size: 0.8rem;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text" style="font-size: 0.83rem;">
                            Gedung Graha Mulia Sejahtera, Jl. Terusan Jakarta No. 175A,
                            Antapani-Bandung 40291
                        </div>
                    </li>
                    <li class="mb-1">
                        <div class="contact-icon" style="width: 28px; height: 28px; font-size: 0.8rem;">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text" style="font-size: 0.83rem;">
                            <a href="tel:+622220502071">022-20502071</a>
                        </div>
                    </li>
                    <li class="mb-1">
                        <div class="contact-icon" style="width: 28px; height: 28px; font-size: 0.8rem;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text" style="font-size: 0.83rem;">
                            <a href="mailto:mitranusa.kons@gmail.com">mitranusa.kons@gmail.com</a>
                        </div>
                    </li>
                    <li class="mb-1">
                        <div class="contact-icon" style="width: 28px; height: 28px; font-size: 0.8rem;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="contact-text" style="font-size: 0.83rem;">
                            <a href="https://wa.me/6283148140002" target="_blank">0812-2020-2020</a>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Map Section -->
            <div class="col-lg-2 col-md-6 mb-3">
                <h5 class="footer-heading mb-2" style="font-size: 0.95rem;">Lokasi Kami</h5>
                <div class="footer-map-container">
                    <div class="map-placeholder" id="map-placeholder" style="height: 160px; border-radius: 6px; overflow: hidden; background-color: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08);">
                        <!-- Google Maps akan dimuat di sini -->
                        <div id="footer-map" style="width: 100%; height: 100%;"></div>
                        <div class="map-loading" style="display: flex; align-items: center; justify-content: center; height: 100%; color: var(--coffee-cream); font-size: 0.8rem;">
                            <div class="text-center">
                                <i class="fas fa-map-marker-alt mb-1" style="font-size: 1.2rem;"></i>
                                <div>Memuat peta...</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 text-center">
                        <a href="https://www.google.com/maps/place/Gedung+Graha+Mulia+Sejahtera,+Jl.+Terusan+Jakarta+No.175A,+Antapani,+Kec.+Antapani,+Kota+Bandung,+Jawa+Barat+40291/@-6.917,107.666,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68e7b9f8e6e6e7:0x1c3e3e3e3e3e3e3e!8m2!3d-6.917!4d107.666!16s%2Fg%2F11b8z8z8z8?entry=ttu"
                           target="_blank"
                           class="map-link"
                           style="font-size: 0.75rem; color: var(--cream-gold); text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                            <i class="fas fa-external-link-alt"></i>
                            <span>Buka di Google Maps</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Business Hours -->
            <div class="col-lg-3 mb-3">
                <h5 class="footer-heading mb-2" style="font-size: 0.95rem;">Jam Operasional</h5>
                <div class="business-hours">
                    <div class="hours-item">
                        <span class="day" style="font-size: 0.83rem;">Senin - Jumat</span>
                        <span class="time" style="font-size: 0.83rem;">08:00 - 17:00</span>
                    </div>
                    <div class="hours-item">
                        <span class="day" style="font-size: 0.83rem;">Sabtu</span>
                        <span class="time" style="font-size: 0.83rem;">08:00 - 14:00</span>
                    </div>
                    <div class="hours-item">
                        <span class="day" style="font-size: 0.83rem;">Minggu & Libur</span>
                        <span class="time closed" style="font-size: 0.83rem;">Tutup</span>
                    </div>
                </div>

                <div class="footer-cta mt-3">
                    <a href="{{ route('contact') }}" class="cta-button" style="padding: 10px 20px; font-size: 0.85rem;">
                        <i class="fas fa-paper-plane me-1"></i>
                        <span>Konsultasi Gratis</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Divider -->
        <div class="footer-divider" style="margin: 20px 0 15px;"></div>

        <!-- Bottom Footer -->
        <div class="row align-items-center py-2">
            <div class="col-md-6 mb-1 mb-md-0">
                <p class="copyright-text mb-0" style="font-size: 0.8rem;">
                    &copy; {{ date('Y') }} PT Mitra Nusa Konsultan. Semua Hak Dilindungi.
                </p>
            </div>
            <div class="col-md-6">
                <div class="footer-certifications">
                    <span class="cert-badge" style="font-size: 0.7rem; padding: 3px 8px;">NPWP: 96.431.796.0-429.000</span>
                    <span class="cert-badge" style="font-size: 0.7rem; padding: 3px 8px;">NIB: 0257011100093</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <div class="back-to-top" style="right: 15px; bottom: 15px;">
        <a href="#top" class="back-top-btn" style="width: 36px; height: 36px; font-size: 0.8rem;">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
</footer>

<style>
    /* Coffee Brown & Cream Color Palette */
    :root {
        --coffee-dark: #3D2B1F;
        --coffee-medium: #5D4037;
        --coffee-light: #8B6B61;
        --coffee-cream: #D7CCC8;
        --cream-white: #EFEBE9;
        --cream-light: #F5F0ED;
        --cream-gold: #D4AF37;
        --accent-gold: #B79330;
        --text-light: #8A7E72;
        --text-dark: #4A4035;
        --border-color: #C5B9B0;
    }

    /* Footer Styles - EXTRA COMPACT VERSION */
    .footer-section {
        background: linear-gradient(135deg, var(--coffee-dark) 0%, var(--coffee-medium) 100%);
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
        background: linear-gradient(90deg, var(--cream-gold), var(--accent-gold));
    }

    /* Text Colors */
    .text-cream {
        color: var(--cream-white) !important;
    }

    .text-light-cream {
        color: var(--coffee-cream) !important;
    }

    /* Brand Section */
    .accent-line {
        width: 40px;
        height: 2px;
        background: var(--cream-gold);
        margin-top: 6px;
        border-radius: 1px;
    }

    /* Social Links */
    .social-links {
        display: flex;
        gap: 8px;
        margin-top: 12px;
    }

    .social-link {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-white);
        text-decoration: none;
        transition: all 0.2s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
        font-size: 0.8rem;
    }

    .social-link:hover {
        background: var(--cream-gold);
        color: var(--coffee-dark);
        transform: translateY(-2px);
    }

    /* Footer Headings */
    .footer-heading {
        color: var(--cream-white);
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

    /* Footer Links */
    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 6px;
    }

    .footer-links a {
        color: var(--coffee-cream);
        text-decoration: none;
        transition: all 0.2s ease;
        position: relative;
        padding-left: 12px;
        display: inline-block;
    }

    .footer-links a::before {
        content: '›';
        position: absolute;
        left: 0;
        color: var(--cream-gold);
        transition: transform 0.2s ease;
        font-size: 0.9rem;
    }

    .footer-links a:hover {
        color: var(--cream-white);
        padding-left: 15px;
    }

    .footer-links a:hover::before {
        transform: translateX(2px);
    }

    /* Contact Info */
    .footer-contact {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-contact li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 8px;
        color: var(--coffee-cream);
    }

    .contact-text a {
        color: var(--coffee-cream);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .contact-text a:hover {
        color: var(--cream-white);
        text-decoration: underline;
    }

    /* Map Styles */
    .footer-map-container {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .map-link {
        transition: color 0.2s ease;
    }

    .map-link:hover {
        color: var(--cream-white) !important;
        text-decoration: underline !important;
    }

    /* Business Hours */
    .business-hours {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 6px;
        padding: 12px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .hours-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 6px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .hours-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .hours-item:first-child {
        padding-top: 0;
    }

    /* CTA Button */
    .footer-cta {
        text-align: center;
    }

    .cta-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: var(--cream-gold);
        color: var(--coffee-dark);
        text-decoration: none;
        border-radius: 50px;
        font-weight: 600;
        letter-spacing: 0.2px;
        transition: all 0.2s ease;
        border: 1px solid var(--cream-gold);
        width: 100%;
        max-width: 200px;
    }

    .cta-button:hover {
        background: transparent;
        color: var(--cream-gold);
        transform: translateY(-2px);
    }

    /* Footer Divider */
    .footer-divider {
        height: 1px;
        background: linear-gradient(90deg,
            transparent 0%,
            rgba(255, 255, 255, 0.1) 50%,
            transparent 100%);
    }

    /* Copyright */
    .copyright-text {
        color: var(--coffee-cream);
    }

    /* Certifications */
    .footer-certifications {
        display: flex;
        gap: 8px;
        justify-content: flex-end;
        flex-wrap: wrap;
    }

    .cert-badge {
        background: rgba(255, 255, 255, 0.08);
        color: var(--coffee-cream);
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    /* Back to Top */
    .back-top-btn {
        border-radius: 50%;
        background: var(--cream-gold);
        color: var(--coffee-dark);
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.2s ease;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .back-top-btn:hover {
        background: var(--accent-gold);
        transform: translateY(-2px);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .footer-section {
            padding: 25px 0 12px;
        }

        .mb-3 {
            margin-bottom: 20px !important;
        }

        .footer-map-container {
            height: 180px;
        }

        .back-to-top {
            position: static;
            margin-top: 15px;
            text-align: center;
        }

        .back-top-btn {
            margin: 0 auto;
        }
    }

    @media (max-width: 768px) {
        .footer-section {
            padding: 20px 0 10px;
        }

        .footer-heading::after {
            width: 20px;
        }

        .footer-map-container {
            height: 200px;
        }

        .business-hours {
            padding: 10px;
        }

        .hours-item {
            padding: 4px 0;
        }

        .footer-certifications {
            justify-content: flex-start;
            margin-top: 8px;
        }

        .cta-button {
            max-width: 100%;
            padding: 8px 16px;
        }
    }

    @media (max-width: 576px) {
        .footer-section {
            padding: 18px 0 10px;
        }

        .footer-map-container {
            height: 180px;
        }

        .hours-item {
            flex-direction: column;
            align-items: flex-start;
            gap: 2px;
            padding: 4px 0;
        }

        .footer-certifications {
            flex-direction: column;
            gap: 6px;
        }

        .cert-badge {
            text-align: center;
        }

        .social-link {
            width: 28px;
            height: 28px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const backToTopBtn = document.querySelector('.back-top-btn');

        backToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.style.opacity = '1';
                backToTopBtn.style.visibility = 'visible';
            } else {
                backToTopBtn.style.opacity = '0';
                backToTopBtn.style.visibility = 'hidden';
            }
        });

        window.dispatchEvent(new Event('scroll'));

        // Load Google Maps
        loadGoogleMap();
    });

    function loadGoogleMap() {
        // Koordinat untuk Gedung Graha Mulia Sejahtera, Bandung
        const address = "Gedung Graha Mulia Sejahtera, Jl. Terusan Jakarta No. 175A, Antapani-Bandung 40291";
        const latitude = -6.917;
        const longitude = 107.666;

        // Membuat peta sederhana menggunakan Google Maps Embed API
        const mapElement = document.getElementById('footer-map');
        const loadingElement = document.querySelector('.map-loading');

        if (mapElement) {
            // Gunakan Google Maps Embed API (tidak memerlukan API key untuk penggunaan dasar)
            const mapUrl = `https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=${encodeURIComponent(address)}&center=${latitude},${longitude}&zoom=15&maptype=roadmap`;

            // Buak iframe untuk peta
            const iframe = document.createElement('iframe');
            iframe.setAttribute('src', mapUrl);
            iframe.setAttribute('width', '100%');
            iframe.setAttribute('height', '100%');
            iframe.setAttribute('style', 'border:0;');
            iframe.setAttribute('allowfullscreen', '');
            iframe.setAttribute('loading', 'lazy');
            iframe.setAttribute('referrerpolicy', 'no-referrer-when-downgrade');
            iframe.setAttribute('title', 'Lokasi PT Mitra Nusa Konsultan');

            // Sembunyikan loading dan tampilkan peta
            iframe.onload = function() {
                if (loadingElement) {
                    loadingElement.style.display = 'none';
                }
            };

            // Tambahkan iframe ke dalam container peta
            mapElement.innerHTML = '';
            mapElement.appendChild(iframe);
        }
    }
</script>
