<aside id="sidebar" class="fixed left-0 top-[72px] w-64 h-[calc(100vh-72px)] z-20 transform -translate-x-full md:translate-x-0 transition-transform duration-300" style="background: linear-gradient(180deg, #ffffff 0%, var(--cream-light) 100%); border-right: 1px solid rgba(93, 64, 55, 0.15); box-shadow: 10px 0 30px -10px rgba(93, 64, 55, 0.15); overflow-y: auto; overflow-x: hidden;">
    <div class="py-4">
        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}" class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="fas fa-tachometer-alt"></i>
            <span class="ml-3">Dashboard</span>
        </a>

        <!-- PROFIL with submenu -->
        <div class="menu-item has-submenu" data-target="profil-sub">
            <i class="fas fa-building"></i>
            <span class="ml-3 flex-1">Profil</span>
            <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
        </div>
        <div id="profil-sub" class="submenu">
            <a href="{{ route('admin.profil.sejarah') }}" class="submenu-item"><i class="fas fa-circle"></i>Sejarah</a>
            <a href="{{ route('admin.profil.visi-misi') }}" class="submenu-item"><i class="fas fa-circle"></i>Visi & Misi</a>
            <a href="{{ route('admin.profil.organisasi') }}" class="submenu-item"><i class="fas fa-circle"></i>Organisasi</a>
        </div>

        <!-- LAYANAN with submenu -->
        <div class="menu-item has-submenu" data-target="layanan-sub">
            <i class="fas fa-cogs"></i>
            <span class="ml-3 flex-1">Layanan</span>
            <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
        </div>
        <div id="layanan-sub" class="submenu">
            <a href="{{ route('admin.layanan.index') }}" class="submenu-item"><i class="fas fa-circle"></i>Semua Layanan</a>
            <a href="{{ route('admin.layanan.konstruksi') }}" class="submenu-item"><i class="fas fa-circle"></i>Konstruksi</a>
            <a href="{{ route('admin.layanan.non-konstruksi') }}" class="submenu-item"><i class="fas fa-circle"></i>Non Konstruksi</a>
            <a href="{{ route('admin.layanan.arsitektural') }}" class="submenu-item"><i class="fas fa-circle"></i>Arsitektural</a>
            <a href="{{ route('admin.layanan.teknik') }}" class="submenu-item"><i class="fas fa-circle"></i>Teknik</a>
        </div>

        <!-- PROJECT -->
        <a href="{{ route('admin.projects.index') }}" class="menu-item {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">

            <i class="fas fa-clipboard-list"></i>

            <span class="ml-3">Project</span>
        </a>

        <!-- SERTIFIKAT with submenu -->
        <div class="menu-item has-submenu" data-target="sertifikat-sub">
            <i class="fas fa-certificate"></i>
            <span class="ml-3 flex-1">Sertifikat</span>
            <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
        </div>
        <div id="sertifikat-sub" class="submenu">
            <a href="{{ route('admin.sertifikat.index') }}" class="submenu-item"><i class="fas fa-circle"></i>Semua</a>
            <a href="{{ route('admin.sertifikat.sbu') }}" class="submenu-item"><i class="fas fa-circle"></i>SBU</a>
            <a href="{{ route('admin.sertifikat.iso') }}" class="submenu-item"><i class="fas fa-circle"></i>ISO</a>
            <a href="{{ route('admin.sertifikat.legal') }}" class="submenu-item"><i class="fas fa-circle"></i>Legal</a>
            <a href="{{ route('admin.sertifikat.pdf') }}" class="submenu-item"><i class="fas fa-circle"></i>PDF</a>
        </div>

        {{-- <!-- MANAJEMEN -->
        <a href="{{ route('admin.management.index') }}" class="menu-item">
            <i class="fas fa-users-cog"></i>
            <span class="ml-3">Manajemen</span>
        </a> --}}

        <!-- KONTAK -->
        <a href="{{ route('admin.kontak.index') }}" class="menu-item">
            <i class="fas fa-address-book"></i>
            <span class="ml-3">Kontak</span>
        </a>
    </div>
</aside>

<style>
    /* menu-item style */
    .menu-item {
        display: flex;
        align-items: center;
        padding: 0.85rem 1.5rem;
        margin: 0.25rem 1rem;
        border-radius: 14px;
        color: var(--brown-dark);
        font-weight: 500;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }
    .menu-item i {
        width: 28px;
        font-size: 1.2rem;
        color: var(--brown-medium);
        transition: all 0.3s;
    }
    .menu-item:hover {
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.12), rgba(93, 64, 55, 0.08));
        transform: translateX(6px) scale(1.02);
        box-shadow: 0 8px 18px rgba(93, 64, 55, 0.1);
    }
    .menu-item:hover i {
        color: var(--cream-gold);
        transform: scale(1.1);
    }
    .menu-item.active {
        background: linear-gradient(135deg, var(--brown-dark), #4A342E);
        color: white;
        box-shadow: 0 12px 24px -8px rgba(93, 64, 55, 0.5);
    }
    .menu-item.active i {
        color: var(--cream-gold);
    }

    /* submenu */
    .submenu {
        margin-left: 2.8rem;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease;
    }
    .submenu.open {
        max-height: 500px;
    }
    .submenu-item {
        display: flex;
        align-items: center;
        padding: 0.6rem 1rem 0.6rem 2.2rem;
        margin: 0.2rem 1rem 0.2rem 0;
        border-radius: 12px;
        color: var(--brown-medium);
        font-size: 0.9rem;
        transition: all 0.3s;
        position: relative;
        border-left: 2px solid transparent;
    }
    .submenu-item:hover {
        background: rgba(93, 64, 55, 0.05);
        border-left-color: var(--cream-gold);
        transform: translateX(6px);
        color: var(--brown-dark);
    }
    .submenu-item i {
        font-size: 0.8rem;
        margin-right: 10px;
        color: var(--brown-light);
    }
</style>

<script>
    // Inisialisasi submenu accordion setelah DOM siap
    (function() {
        const submenuToggles = document.querySelectorAll('.has-submenu');
        submenuToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.dataset.target;
                const submenu = document.getElementById(targetId);
                const icon = this.querySelector('.fa-chevron-down');
                if (submenu) {
                    submenu.classList.toggle('open');
                    if (icon) {
                        icon.style.transform = submenu.classList.contains('open') ? 'rotate(180deg)' : '';
                    }
                }
            });
        });

        // Set active state pada menu berdasarkan URL (untuk submenu, parent juga aktif)
        const currentPath = window.location.pathname;
        document.querySelectorAll('.menu-item, .submenu-item').forEach(item => {
            if (item.getAttribute('href') === currentPath) {
                item.classList.add('active');
                // Jika item adalah submenu, aktifkan parent
                if (item.classList.contains('submenu-item')) {
                    const parentSub = item.closest('.submenu');
                    if (parentSub) {
                        const parentToggle = document.querySelector(`.has-submenu[data-target="${parentSub.id}"]`);
                        if (parentToggle) parentToggle.classList.add('active');
                    }
                }
            }
        });
    })();
</script>
