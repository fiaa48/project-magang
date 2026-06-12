<nav class="fixed top-0 left-0 w-full z-30 py-3 px-4 md:px-6 flex items-center justify-between" style="background: rgba(255, 255, 255, 0.92); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(36, 27, 100, 0.15); box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.16);">

    <!-- Left -->
    <div class="flex items-center gap-3">
        <button id="menu-toggle" onclick="toggleSidebar()"
            class="w-10 h-10 rounded-full flex items-center justify-center bg-brown-subtle text-brown-dark hover:bg-brown-dark hover:text-white transition-all duration-300 md:hidden border border-brown-dark/10">
            <i class="fas fa-bars"></i>
        </button>

        <div class="flex items-center gap-2">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center shadow-lg bg-white border border-brown-dark/10 overflow-hidden">
                <img src="{{ asset('images/logopt.png') }}" alt="Logo PT Mitra Nusa Konsulindo" class="w-full h-full object-contain p-1">
            </div>
            <span class="font-bold text-xl text-brown-dark hidden sm:block">
                Mitra Nusa Admin
            </span>
        </div>
    </div>

    <!-- Right -->
    <div class="flex items-center gap-2 md:gap-4">

        <!-- Notifikasi -->
        @php
            $contactNotificationCount = \App\Models\Contact::count();
            $contactNotifications = \App\Models\Contact::latest()->take(10)->get();
        @endphp
        <div class="relative" id="admin-notification-menu">
            <button type="button" id="admin-notification-toggle" class="w-10 h-10 rounded-full flex items-center justify-center bg-brown-subtle text-brown-dark hover:bg-brown-dark hover:text-white transition-all duration-300 relative border border-brown-dark/10" title="Notifikasi Konsultasi" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell"></i>
                @if($contactNotificationCount > 0)
                    <span class="absolute -top-1 -right-1 bg-red-600 text-white text-xs font-bold min-w-[18px] h-[18px] rounded-full flex items-center justify-center px-1 border-2 border-white">
                        {{ $contactNotificationCount > 99 ? '99+' : $contactNotificationCount }}
                    </span>
                @endif
            </button>

            <div id="admin-notification-dropdown" class="absolute right-0 mt-3 w-[min(22rem,calc(100vw-2rem))] bg-white rounded-2xl shadow-2xl border border-brown-dark/10 opacity-0 invisible translate-y-2 transition-all duration-200 z-50 overflow-hidden">
                <div class="px-4 py-3 bg-brown-dark text-white flex items-center justify-between gap-3">
                    <div class="font-bold flex items-center gap-2">
                        <i class="fas fa-bell"></i>
                        <span>Notifikasi Konsultasi</span>
                    </div>
                    <span class="bg-red-600 text-white text-xs font-bold rounded-full px-2 py-1">{{ $contactNotificationCount }}</span>
                </div>

                <div class="max-h-96 overflow-y-auto divide-y divide-slate-100">
                    @forelse($contactNotifications as $notification)
                        <div class="px-4 py-3 hover:bg-slate-50 transition">
                            <div class="flex items-start justify-between gap-3">
                                <div class="min-w-0">
                                    <p class="font-bold text-slate-900 text-sm mb-1 truncate">{{ $notification->subject }}</p>
                                    <p class="text-slate-700 text-xs mb-1 truncate">
                                        <i class="fas fa-user mr-1"></i>{{ $notification->name }}
                                        <span class="mx-1">|</span>
                                        <i class="fas fa-envelope mr-1"></i>{{ $notification->email }}
                                    </p>
                                    <p class="text-slate-600 text-xs line-clamp-2">{{ $notification->message }}</p>
                                </div>
                                <span class="text-slate-500 text-[11px] whitespace-nowrap">{{ $notification->created_at ? $notification->created_at->format('d/m H:i') : '-' }}</span>
                            </div>
                        </div>
                    @empty
                        <div class="px-4 py-8 text-center">
                            <i class="fas fa-bell-slash text-brown-light text-2xl mb-2"></i>
                            <p class="text-slate-600 text-sm mb-0">Belum ada notifikasi konsultasi.</p>
                        </div>
                    @endforelse
                </div>

                @if($contactNotificationCount > 10)
                    <div class="px-4 py-3 bg-slate-50 text-center text-xs font-semibold text-brown-dark">
                        Menampilkan 10 dari {{ $contactNotificationCount }} notifikasi terbaru
                    </div>
                @endif
            </div>
        </div>

        <!-- Profile -->
        <div class="relative group">
            <button class="flex items-center gap-2 bg-white/70 backdrop-blur-sm pl-2 pr-4 py-1.5 rounded-full border border-brown-dark/20 shadow-sm hover:shadow-md transition-all duration-300">

                <div class="w-9 h-9 rounded-full flex items-center justify-center text-white font-bold overflow-hidden" style="background: linear-gradient(135deg, #241B64, #302574);">
                    @if(Auth::check() && Auth::user()->photo)
                        <img src="{{ asset('storage/profile/'.Auth::user()->photo) }}" class="w-full h-full object-cover" alt="Profile">
                    @else
                        <span class="text-sm">
                            {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                        </span>
                    @endif
                </div>

                <span class="text-brown-dark font-medium hidden md:block">
                    {{ Auth::user()->name ?? 'Admin' }}
                </span>

                <i class="fas fa-chevron-down text-brown-medium text-xs transition-transform group-hover:rotate-180"></i>
            </button>

            <!-- Dropdown -->
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-brown-dark/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-right scale-95 group-hover:scale-100 z-50">

                <a href="{{ route('admin.profile.index') }}"
                   class="block px-4 py-3 text-brown-dark hover:bg-brown-subtle rounded-t-xl transition">
                    <i class="fas fa-user mr-2"></i> Profil
                </a>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="block w-full text-left px-4 py-3 text-brown-dark hover:bg-brown-subtle rounded-b-xl transition">
                        <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                    </button>
                </form>

            </div>
        </div>
    </div>
</nav>

<script>
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    if (sidebar) {
        sidebar.classList.toggle('-translate-x-full');
    }
}

(function() {
    const menu = document.getElementById('admin-notification-menu');
    const toggle = document.getElementById('admin-notification-toggle');
    const dropdown = document.getElementById('admin-notification-dropdown');

    if (!menu || !toggle || !dropdown) {
        return;
    }

    function closeDropdown() {
        dropdown.classList.add('opacity-0', 'invisible', 'translate-y-2');
        dropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
        toggle.setAttribute('aria-expanded', 'false');
    }

    function openDropdown() {
        dropdown.classList.remove('opacity-0', 'invisible', 'translate-y-2');
        dropdown.classList.add('opacity-100', 'visible', 'translate-y-0');
        toggle.setAttribute('aria-expanded', 'true');
    }

    toggle.addEventListener('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        if (dropdown.classList.contains('invisible')) {
            openDropdown();
        } else {
            closeDropdown();
        }
    });

    document.addEventListener('click', function(event) {
        if (!menu.contains(event.target)) {
            closeDropdown();
        }
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeDropdown();
        }
    });
})();
</script>


