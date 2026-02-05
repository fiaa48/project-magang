<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="d-flex align-items-center">
                <div class="logo-wrapper">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="PT Mitra Nusa Konsulindo" height="35">
                </div>
            </div>
        </a>
        
        <!-- Mobile Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-1">
                    <a class="nav-link nav-link-custom {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>
                
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link nav-link-custom dropdown-toggle {{ request()->is('about*') ? 'active' : '' }}" 
                       href="#" 
                       role="button" 
                       data-bs-toggle="dropdown">
                        Tentang
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('about') }}">Profil</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.history') }}">Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.vision-mission') }}">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('about.organization') }}">Organisasi</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link nav-link-custom dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}" 
                       href="#" 
                       role="button" 
                       data-bs-toggle="dropdown">
                        Layanan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('services') }}">Semua</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('services.construction') }}">Konstruksi</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.non-construction') }}">Non-Konstruksi</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.architectural') }}">Arsitektural</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.engineering') }}">Teknik</a></li>
                    </ul>
                </li>
                
                <li class="nav-item mx-1">
                    <a class="nav-link nav-link-custom {{ request()->is('portfolio*') ? 'active' : '' }}" href="{{ route('portfolio') }}">
                        Project
                    </a>
                </li>
                
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link nav-link-custom dropdown-toggle {{ request()->is('certifications*') ? 'active' : '' }}" 
                       href="#" 
                       role="button" 
                       data-bs-toggle="dropdown">
                        Sertifikasi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('certifications') }}">Semua</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('certifications.sbu') }}">SBU</a></li>
                        <li><a class="dropdown-item" href="{{ route('certifications.iso') }}">ISO</a></li>
                        <li><a class="dropdown-item" href="{{ route('certifications.legal') }}">Legal</a></li>
                    </ul>
                </li>
                
                <li class="nav-item mx-1">
                    <a class="nav-link nav-link-custom {{ request()->is('management') ? 'active' : '' }}" href="{{ route('management') }}">
                        Manajemen
                    </a>
                </li>
                
                <li class="nav-item mx-1">
                    <a class="nav-link nav-link-custom {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        Kontak
                    </a>
                </li>
            </ul>
            
            <!-- CTA Button -->
            <div class="ms-lg-3">
                <a href="https://wa.me/6281220202020" class="btn btn-primary btn-cta rounded-pill px-3" target="_blank">
                    <i class="fab fa-whatsapp me-1"></i>
                    <span>Konsultasi</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<div style="height: 60px;"></div> <!-- Reduced spacer -->

<style>
    /* Navbar Styles - SUPER COMPACT */
    .navbar {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.06);
        padding: 0.6rem 0;
        transition: all 0.2s ease;
        box-shadow: 0 1px 10px rgba(0, 0, 0, 0.03);
        min-height: 60px;
    }
    
    .navbar.scrolled {
        padding: 0.4rem 0;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
    }
    
    /* Logo */
    .logo-wrapper img {
        height: 35px !important;
        transition: all 0.2s ease;
    }
    
    .navbar.scrolled .logo-wrapper img {
        height: 30px !important;
    }
    
    /* Navigation Links - Compact */
    .nav-link-custom {
        color: #374151 !important;
        font-weight: 500;
        padding: 0.4rem 0.75rem !important;
        margin: 0 0.15rem;
        position: relative;
        transition: all 0.2s ease;
        font-size: 0.9rem;
    }
    
    .nav-link-custom:hover {
        color: #1d4ed8 !important;
    }
    
    .nav-link-custom.active {
        color: #1d4ed8 !important;
        font-weight: 600;
    }
    
    .nav-link-custom.active:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0.75rem;
        right: 0.75rem;
        height: 2px;
        background: linear-gradient(90deg, #3b82f6, #1d4ed8);
        border-radius: 2px;
        animation: slideIn 0.2s ease;
    }
    
    @keyframes slideIn {
        from {
            transform: scaleX(0);
        }
        to {
            transform: scaleX(1);
        }
    }
    
    /* Dropdown Menu - Compact */
    .dropdown-menu {
        border: none;
        border-radius: 10px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        padding: 0.4rem;
        margin-top: 0.4rem;
        border: 1px solid rgba(0, 0, 0, 0.04);
        min-width: 180px;
    }
    
    .dropdown-item {
        padding: 0.5rem 1rem;
        border-radius: 6px;
        color: #374151;
        font-weight: 500;
        transition: all 0.15s ease;
        margin: 0.1rem 0;
        font-size: 0.88rem;
    }
    
    .dropdown-item:hover {
        background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
        color: #1d4ed8;
        transform: translateX(3px);
    }
    
    .dropdown-divider {
        margin: 0.3rem 0;
        opacity: 0.1;
    }
    
    /* CTA Button - Compact */
    .btn-cta {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        border: none;
        color: white;
        font-weight: 600;
        padding: 0.5rem 1.25rem;
        transition: all 0.2s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(59, 130, 246, 0.25);
        font-size: 0.88rem;
    }
    
    .btn-cta:hover {
        transform: translateY(-1px);
        box-shadow: 0 5px 15px rgba(59, 130, 246, 0.35);
        color: white;
    }
    
    /* Mobile Menu - Compact */
    @media (max-width: 991px) {
        .navbar {
            padding: 0.5rem 0;
        }
        
        .navbar-collapse {
            background: white;
            padding: 0.75rem;
            border-radius: 0 0 15px 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            margin-top: 0.4rem;
        }
        
        .nav-link-custom {
            padding: 0.5rem 0.75rem !important;
            margin: 0.15rem 0;
            border-radius: 6px;
            font-size: 0.88rem;
        }
        
        .nav-link-custom:hover,
        .nav-link-custom.active {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
        }
        
        .nav-link-custom.active:after {
            display: none;
        }
        
        .dropdown-menu {
            box-shadow: none;
            border: 1px solid rgba(0, 0, 0, 0.04);
            margin: 0.4rem 0 0.4rem 0.75rem;
            min-width: 160px;
        }
        
        .btn-cta {
            width: 100%;
            margin-top: 0.75rem;
            padding: 0.6rem 1.5rem;
        }
    }
    
    /* Navbar Toggler */
    .navbar-toggler {
        padding: 0.35rem;
        font-size: 0.9rem;
        border: none;
    }
    
    .navbar-toggler-icon {
        width: 1.2em;
        height: 1.2em;
    }
    
    /* Extra Small Screens */
    @media (max-width: 576px) {
        .navbar {
            min-height: 55px;
        }
        
        .logo-wrapper img {
            height: 30px !important;
        }
        
        .nav-link-custom {
            font-size: 0.85rem;
            padding: 0.4rem 0.5rem !important;
        }
        
        .btn-cta {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
        }
        
        .dropdown-menu {
            min-width: 140px;
        }
        
        .dropdown-item {
            padding: 0.4rem 0.75rem;
            font-size: 0.85rem;
        }
    }
    
    /* Make it even more compact */
    @media (max-width: 1200px) {
        .nav-link-custom {
            padding: 0.4rem 0.6rem !important;
            font-size: 0.85rem;
        }
        
        .btn-cta {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
        }
    }
</style>

<script>
    // Navbar scroll effect
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');
        
        // Add scrolled class initially if needed
        if (window.scrollY > 10) {
            navbar.classList.add('scrolled');
        }
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Mobile menu close on click
        const navLinks = document.querySelectorAll('.nav-link');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
        
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (navbarCollapse.classList.contains('show')) {
                    bsCollapse.hide();
                }
            });
        });
        
        // Auto close dropdowns on mobile when clicking elsewhere
        document.addEventListener('click', function(event) {
            if (window.innerWidth < 992) {
                const isClickInside = navbar.contains(event.target);
                if (!isClickInside && navbarCollapse.classList.contains('show')) {
                    bsCollapse.hide();
                }
            }
        });
    });
</script>