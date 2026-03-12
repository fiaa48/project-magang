<nav class="fixed top-0 left-0 w-full z-30 py-3 px-4 md:px-6 flex items-center justify-between" style="background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(93, 64, 55, 0.15); box-shadow: 0 10px 30px -10px rgba(93, 64, 55, 0.2);">
    <!-- Left: logo & toggle -->
    <div class="flex items-center gap-3">
        <button id="menu-toggle" onclick="toggleSidebar()" class="w-10 h-10 rounded-full flex items-center justify-center bg-brown-subtle text-brown-dark hover:bg-brown-dark hover:text-white transition-all duration-300 md:hidden border border-brown-dark/10">
            <i class="fas fa-bars"></i>
        </button>
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 bg-gradient-to-br from-brown-dark to-brown-medium rounded-xl flex items-center justify-center shadow-lg" style="box-shadow: 0 10px 20px rgba(93,64,55,0.3);">
                <i class="fas fa-building text-cream-gold text-xl"></i>
            </div>
            <span class="font-bold text-xl text-brown-dark hidden sm:block">Mitra Nusa Admin</span>
        </div>
    </div>

    <!-- Right: search, notif, profile -->
    <div class="flex items-center gap-2 md:gap-4">
        <!-- Search -->
        <div class="relative hidden md:block">
            <input type="text" placeholder="Cari..." class="pl-10 pr-4 py-2 rounded-full border border-brown-dark/20 bg-white/60 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-cream-gold/50 text-brown-dark placeholder-brown-medium/60 w-64 transition-all">
            <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-brown-medium"></i>
        </div>
        <!-- Notifikasi -->
        <button class="w-10 h-10 rounded-full flex items-center justify-center bg-brown-subtle text-brown-dark hover:bg-brown-dark hover:text-white transition-all duration-300 relative border border-brown-dark/10">
            <i class="fas fa-bell"></i>
            <span class="absolute -top-1 -right-1 bg-red-600 text-white text-xs font-bold min-w-[18px] h-[18px] rounded-full flex items-center justify-center px-1 border-2 border-white">3</span>
        </button>
        <!-- Profile dropdown -->
        <div class="relative group">
            <button class="flex items-center gap-2 bg-white/70 backdrop-blur-sm pl-2 pr-4 py-1.5 rounded-full border border-brown-dark/20 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="w-9 h-9 rounded-full bg-gradient-to-br from-brown-dark to-brown-medium flex items-center justify-center text-white font-bold shadow-inner">
                    A
                </div>
                <span class="text-brown-dark font-medium hidden md:block">Admin</span>
                <i class="fas fa-chevron-down text-brown-medium text-xs transition-transform group-hover:rotate-180"></i>
            </button>
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-3d border border-brown-dark/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-right scale-95 group-hover:scale-100 z-50">
                <a href="#" class="block px-4 py-3 text-brown-dark hover:bg-brown-subtle rounded-t-xl transition"><i class="fas fa-user mr-2"></i>Profil</a>
                <a href="#" class="block px-4 py-3 text-brown-dark hover:bg-brown-subtle transition"><i class="fas fa-cog mr-2"></i>Pengaturan</a>
                <a href="#" class="block px-4 py-3 text-brown-dark hover:bg-brown-subtle rounded-b-xl transition"><i class="fas fa-sign-out-alt mr-2"></i>Keluar</a>
            </div>
        </div>
    </div>
</nav>
