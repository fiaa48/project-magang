<aside id="sidebar" class="fixed left-0 top-[72px] w-64 h-[calc(100vh-72px)] z-20 transform -translate-x-full md:translate-x-0 transition-transform duration-300" style="background: linear-gradient(180deg, #ffffff 0%, var(--cream-light) 100%); border-right: 1px solid rgba(36, 27, 100, 0.15); box-shadow: 10px 0 30px -10px rgba(15, 23, 42, 0.12); overflow-y: auto; overflow-x: hidden;">
    <div class="py-4">
        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}" class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="fas fa-tachometer-alt"></i>
            <span class="ml-3">Dashboard</span>
        </a>

        <!-- Pengguna (Users) -->
        <a href="{{ route('admin.users.index') }}" class="menu-item {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
            <i class="fas fa-users"></i>
            <span class="ml-3">Pengguna</span>
        </a>

        <!-- Beranda (User Frontend) -->
        <a href="{{ route('admin.home.index') }}" class="menu-item {{ request()->routeIs('admin.home.index') ? 'active' : '' }}">
            <i class="fas fa-home"></i>
            <span class="ml-3">Beranda</span>
        </a>

        <!-- TENTANG with submenu -->
        <div class="menu-item has-submenu {{ request()->routeIs('admin.about.*') ? 'active' : '' }}" data-target="tentang-sub">
            <i class="fas fa-info-circle"></i>
            <span class="ml-3 flex-1">Tentang</span>
            <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
        </div>

        <div id="tentang-sub" class="submenu {{ request()->routeIs('admin.about.*') ? 'open' : '' }}">
            <a href="{{ route('admin.about.profile.index') }}" class="submenu-item {{ request()->routeIs('admin.about.profile.*') ? 'active' : '' }}">
                <i class="fas fa-circle"></i>Profil
            </a>
            <a href="{{ route('admin.about.history.index') }}" class="submenu-item {{ request()->routeIs('admin.about.history.*') ? 'active' : '' }}">
                <i class="fas fa-circle"></i>Sejarah
            </a>
            <a href="{{ route('admin.about.vision.index') }}" class="submenu-item {{ request()->routeIs('admin.about.vision.*') ? 'active' : '' }}">
                <i class="fas fa-circle"></i>Visi & Misi
            </a>
            <a href="{{ route('admin.about.organization.index') }}" class="submenu-item {{ request()->routeIs('admin.about.organization.*') ? 'active' : '' }}">
                <i class="fas fa-circle"></i>Organisasi
            </a>
        </div>

        <!-- LAYANAN -->
        <a href="{{ route('admin.services.index') }}" class="menu-item {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
            <i class="fas fa-cogs"></i>
            <span class="ml-3 flex-1">Layanan</span>
        </a>

        <!-- PROJECT -->
        <a href="{{ route('admin.projects.index') }}" class="menu-item {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
            <i class="fas fa-clipboard-list"></i>
            <span class="ml-3">Project</span>
        </a>

        <!-- SERTIFIKAT with submenu -->
        <a href="{{ route('admin.certificates.index') }}" class="menu-item {{ request()->routeIs('admin.certificates.*') ? 'active' : '' }}">
            <i class="fas fa-certificate"></i>
            <span class="ml-3 flex-1">Sertifikat</span>
        </a>

        <!-- KONTAK -->
        <a href="{{ route('admin.contacts.index') }}" class="menu-item {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
            <i class="fas fa-address-book"></i>
            <span class="ml-3">Kontak</span>
        </a>
    </div>
</aside>

<style>
    /* menu-item style (sama seperti sebelumnya) */
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
        background: linear-gradient(135deg, rgba(36, 27, 100, 0.12), rgba(239, 51, 45, 0.04));
        transform: translateX(6px) scale(1.02);
        box-shadow: 0 8px 18px rgba(15, 23, 42, 0.08);
    }
    .menu-item:hover i {
        color: var(--cream-gold);
        transform: scale(1.1);
    }
    .menu-item.active {
        background: linear-gradient(135deg, var(--brown-dark), #302574);
        color: white;
        box-shadow: 0 12px 24px -8px rgba(36, 27, 100, 0.45);
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
    .submenu-item.active {
        background: rgba(36, 27, 100, 0.08);
        border-left-color: var(--cream-gold);
        color: var(--brown-dark);
        font-weight: 600;
    }
    .submenu-item:hover {
        background: rgba(36, 27, 100, 0.06);
        border-left-color: var(--cream-gold);
        transform: translateX(6px);
        color: var(--brown-dark);
    }
    .submenu-item i {
        font-size: 0.8rem;
        margin-right: 10px;
        color: var(--brown-light);
    }
    .submenu-item.active i {
        color: var(--cream-gold);
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
        // Ini sudah ditangani oleh class blade conditional, tetapi untuk memastikan parent tetap aktif jika child aktif
        const currentPath = window.location.pathname;
        // Cari parent yang memiliki submenu dan salah satu child-nya aktif
        document.querySelectorAll('.has-submenu').forEach(parent => {
            const targetId = parent.dataset.target;
            const submenu = document.getElementById(targetId);
            if (submenu) {
                const activeChild = submenu.querySelector('.submenu-item.active');
                if (activeChild) {
                    parent.classList.add('active');
                    // Buka submenu agar terlihat
                    submenu.classList.add('open');
                    const icon = parent.querySelector('.fa-chevron-down');
                    if (icon) icon.style.transform = 'rotate(180deg)';
                }
            }
        });
    })();
</script>


