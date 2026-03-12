@extends('admin.layouts.app')

@section('title', 'Data Project - Admin')

@push('styles')
<style>
    /* Animasi dan efek premium */
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    .shadow-3d {
        box-shadow: 0 10px 30px -10px rgba(0,0,0,0.2), 0 0 0 1px rgba(0,0,0,0.05), inset 0 1px 0 rgba(255,255,255,0.8);
    }

    .modal-premium {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
    }

    .premium-card {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .premium-card:hover {
        transform: translateY(-2px) scale(1.01);
        box-shadow: 0 20px 40px -15px rgba(121, 85, 72, 0.5);
    }

    .gradient-gold {
        background: linear-gradient(135deg, #c9a227 0%, #f5e7a3 100%);
    }

    /* Kontras tinggi untuk keterbacaan */
    .text-brown-dark { color: #3e2c23; }
    .text-brown-medium { color: #7b5f4b; }
    .bg-brown-dark { background: #3e2c23; }
    .bg-brown-medium { background: #7b5f4b; }
    .bg-cream-light { background: #fcf8f3; }
    .border-brown-dark\/10 { border-color: rgba(62, 44, 35, 0.1); }

    /* Scroll horizontal halus */
    .table-scroll {
        scrollbar-width: thin;
        scrollbar-color: #7b5f4b #f0e9e0;
    }
    .table-scroll::-webkit-scrollbar {
        height: 8px;
    }
    .table-scroll::-webkit-scrollbar-track {
        background: #f0e9e0;
        border-radius: 10px;
    }
    .table-scroll::-webkit-scrollbar-thumb {
        background: #7b5f4b;
        border-radius: 10px;
    }
</style>
@endpush

@section('content')
<div class="space-y-6 p-4 md:p-6">
    <!-- Page Header -->
    <div class="bg-white rounded-2xl p-6 shadow-3d border border-brown-dark/10 flex flex-wrap justify-between items-center gap-4 premium-card">
        <div class="flex items-center gap-4">
            <div class="w-16 h-16 bg-gradient-to-br from-brown-dark to-brown-medium rounded-xl flex items-center justify-center text-white text-2xl shadow-lg">
                <i class="fas fa-folder-tree"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-brown-dark">Data Project</h1>
                <p class="text-brown-medium text-sm flex items-center gap-1 mt-1">
                    <i class="fas fa-home"></i>
                    <span>Dashboard / Project / Data Project</span>
                </p>
            </div>
        </div>
        <div class="flex gap-3">
            <div class="bg-cream-light px-4 py-2 rounded-full text-brown-dark text-sm flex items-center gap-2 border border-brown-dark/10">
                <i class="fas fa-database text-brown-dark"></i>
                <span>{{ $projects->count() }} Total Project</span>
            </div>
            <div class="bg-cream-light px-4 py-2 rounded-full text-brown-dark text-sm flex items-center gap-2 border border-brown-dark/10">
                <i class="fas fa-calendar text-brown-dark"></i>
                <span>{{ date('d M Y') }}</span>
            </div>
        </div>
    </div>

    <!-- Stat Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-2xl p-6 shadow-3d border border-brown-dark/10 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 premium-card">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 bg-cream-light rounded-xl flex items-center justify-center text-2xl text-brown-dark">
                    <i class="fas fa-folder"></i>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brown-dark">{{ $projects->count() }}</div>
                    <div class="text-brown-medium text-sm uppercase tracking-wider">Total Project</div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-3d border border-brown-dark/10 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 premium-card">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 bg-cream-light rounded-xl flex items-center justify-center text-2xl text-brown-dark">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brown-dark">{{ $projects->where('status', 'completed')->count() }}</div>
                    <div class="text-brown-medium text-sm uppercase tracking-wider">Selesai</div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-3d border border-brown-dark/10 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 premium-card">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 bg-cream-light rounded-xl flex items-center justify-center text-2xl text-brown-dark">
                    <i class="fas fa-spinner"></i>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brown-dark">{{ $projects->where('status', 'ongoing')->count() }}</div>
                    <div class="text-brown-medium text-sm uppercase tracking-wider">Berjalan</div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-3d border border-brown-dark/10 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 premium-card">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 bg-cream-light rounded-xl flex items-center justify-center text-2xl text-brown-dark">
                    <i class="fas fa-clock"></i>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brown-dark">{{ $projects->where('status', 'pending')->count() }}</div>
                    <div class="text-brown-medium text-sm uppercase tracking-wider">Ditunda</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert -->
    @if(session('success'))
    <div class="bg-white border-l-4 border-brown-dark rounded-lg p-4 flex items-center justify-between shadow-md animate-pulse">
        <div class="flex items-center gap-3">
            <i class="fas fa-check-circle text-brown-dark text-xl"></i>
            <span class="text-brown-dark font-medium">{{ session('success') }}</span>
        </div>
        <button type="button" class="text-brown-medium hover:text-brown-dark" onclick="this.parentElement.remove()">
            <i class="fas fa-times"></i>
        </button>
    </div>
    @endif

    <!-- Section Header -->
    <div class="flex flex-wrap justify-between items-center gap-4">
        <div class="flex items-center gap-3">
            <div class="w-12 h-12 bg-cream-light rounded-xl flex items-center justify-center text-brown-dark">
                <i class="fas fa-list-ul"></i>
            </div>
            <div>
                <h2 class="text-xl font-bold text-brown-dark">Daftar Project</h2>
                <p class="text-brown-medium text-sm">Kelola dan pantau seluruh project</p>
            </div>
        </div>
        <a href="{{ route('admin.projects.create') }}"
        class="bg-white text-brown-dark border-2 border-brown-dark px-6 py-3 rounded-full font-bold flex items-center gap-2 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 hover:bg-brown-dark hover:text-white hover:border-transparent">
        <i class="fas fa-plus-circle"></i>
        Tambah Project Baru
    </a>
    </div>

    <!-- Table Container -->
    <div class="bg-white rounded-2xl shadow-3d border border-brown-dark/10 overflow-hidden premium-card">
        @if($projects->count() > 0)
        <div class="overflow-x-auto table-scroll">
            <table class="w-full min-w-max">
                <thead class="bg-cream-light border-b border-brown-dark/10">
                    <tr>
                        <th class="px-4 py-4 text-left text-xs font-semibold text-brown-dark uppercase tracking-wider">ID</th>
                        <th class="px-4 py-4 text-left text-xs font-semibold text-brown-dark uppercase tracking-wider">Judul</th>
                        <th class="px-4 py-4 text-left text-xs font-semibold text-brown-dark uppercase tracking-wider">Kategori</th>
                        <th class="px-4 py-4 text-left text-xs font-semibold text-brown-dark uppercase tracking-wider">Tahun</th>
                        <th class="px-4 py-4 text-left text-xs font-semibold text-brown-dark uppercase tracking-wider">Klien</th>
                        <th class="px-4 py-4 text-left text-xs font-semibold text-brown-dark uppercase tracking-wider">Lokasi</th>
                        <th class="px-4 py-4 text-left text-xs font-semibold text-brown-dark uppercase tracking-wider">Status</th>
                        <th class="px-4 py-4 text-center text-xs font-semibold text-brown-dark uppercase tracking-wider">Gambar</th>
                        <th class="px-4 py-4 text-right text-xs font-semibold text-brown-dark uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brown-dark/5">
                    @foreach($projects as $project)
                    <tr class="hover:bg-cream-light/30 transition-colors">
                        <td class="px-4 py-4 text-sm font-mono text-brown-dark">#{{ $project->id }}</td>
                        <td class="px-4 py-4 font-medium text-brown-dark">
                            <div class="truncate max-w-[200px]" title="{{ $project->title }}">
                                {{ $project->title }}
                            </div>
                        </td>
                        <td class="px-4 py-4 text-brown-medium">
                            {{ $project->category->name ?? '-' }}
                        </td>
                        <td class="px-4 py-4 text-brown-medium">{{ $project->year ?? '-' }}</td>
                        <td class="px-4 py-4 text-brown-medium">
                            {{ $project->client->name ?? $project->client ?? '-' }}
                        </td>
                        <td class="px-4 py-4 text-brown-medium">
                            <i class="fas fa-location-dot text-brown-light mr-1"></i>
                            {{ $project->location ?? '-' }}
                        </td>
                        <td class="px-4 py-4">
                            @php
                                $statusClasses = [
                                    'completed' => 'bg-green-100 text-green-800 border-green-200',
                                    'ongoing' => 'bg-yellow-100 text-yellow-800 border-yellow-200',
                                    'pending' => 'bg-red-100 text-red-800 border-red-200'
                                ];
                                $statusIcons = [
                                    'completed' => 'fa-check-circle',
                                    'ongoing' => 'fa-rotate',
                                    'pending' => 'fa-hourglass-half'
                                ];
                                $statusText = [
                                    'completed' => 'Selesai',
                                    'ongoing' => 'Berjalan',
                                    'pending' => 'Ditunda'
                                ];
                                $class = $statusClasses[$project->status] ?? 'bg-gray-100 text-gray-800 border-gray-200';
                                $icon = $statusIcons[$project->status] ?? 'fa-clock';
                                $text = $statusText[$project->status] ?? ucfirst($project->status);
                            @endphp
                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium border {{ $class }}">
                                <i class="fas {{ $icon }}"></i>
                                {{ $text }}
                            </span>
                        </td>
<td class="px-4 py-4 text-center">
    <div class="w-12 h-10 mx-auto rounded-lg border border-brown-dark/10 bg-cream-light flex items-center justify-center overflow-hidden">
        @if($project->image)
            @if(file_exists(public_path('storage/'.$project->image)))
                <img src="{{ asset('storage/'.$project->image) }}" class="w-full h-full object-cover">
            @else
                <img src="{{ asset('images/'.$project->image) }}" class="w-full h-full object-cover">
            @endif
        @else
            <i class="fas fa-image text-brown-light"></i>
        @endif
    </div>
</td>
                        <td class="px-4 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <!-- Tombol Detail dengan modal -->
                                <button type="button"
                                        onclick='showProjectDetail({{ $project->toJson() }})'
                                        class="w-9 h-9 rounded-lg border border-brown-dark/20 flex items-center justify-center text-brown-medium hover:bg-brown-dark hover:text-white transition-colors"
                                        title="Detail">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a href="{{ route('admin.projects.edit', $project->id) }}"
                                   class="w-9 h-9 rounded-lg border border-brown-dark/20 flex items-center justify-center text-brown-medium hover:bg-brown-dark hover:text-white transition-colors"
                                   title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus project ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="w-9 h-9 rounded-lg border border-brown-dark/20 flex items-center justify-center text-brown-medium hover:bg-red-600 hover:text-white transition-colors"
                                            title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Table Footer -->
        <div class="px-6 py-4 bg-cream-light/50 border-t border-brown-dark/10 flex flex-wrap justify-between items-center gap-4">
            <div class="flex items-center gap-2 text-brown-medium">
                <i class="fas fa-file-alt text-brown-dark"></i>
                <span class="font-medium">Menampilkan {{ $projects->count() }} project</span>
            </div>
            <div class="flex gap-4">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-green-600 shadow-sm"></span>
                    <span class="text-sm text-brown-medium">Selesai <strong>{{ $projects->where('status', 'completed')->count() }}</strong></span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-yellow-600 shadow-sm"></span>
                    <span class="text-sm text-brown-medium">Berjalan <strong>{{ $projects->where('status', 'ongoing')->count() }}</strong></span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-red-600 shadow-sm"></span>
                    <span class="text-sm text-brown-medium">Ditunda <strong>{{ $projects->where('status', 'pending')->count() }}</strong></span>
                </div>
            </div>
        </div>

        @else
        <!-- Empty State -->
        <div class="py-16 px-6 text-center">
            <div class="w-24 h-24 mx-auto bg-cream-light rounded-full flex items-center justify-center text-4xl text-brown-dark animate-float">
                <i class="fas fa-folder-open"></i>
            </div>
            <h3 class="mt-4 text-xl font-bold text-brown-dark">Belum Ada Project</h3>
            <p class="mt-2 text-brown-medium">Mulai dengan menambahkan project pertama Anda</p>
            <a href="{{ route('admin.projects.create') }}" class="mt-6 inline-flex items-center gap-2 bg-gradient-to-r from-brown-dark to-brown-medium text-white px-6 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <i class="fas fa-plus-circle"></i>
                Tambah Project Baru
            </a>
        </div>
        @endif
    </div>

    <!-- Footer Note -->
    @if($projects->count() > 0)
    <div class="text-right text-brown-medium text-sm flex items-center justify-end gap-2">
        <i class="fas fa-chevron-left"></i>
        <span>Terakhir diperbarui {{ date('d F Y H:i') }} WIB</span>
    </div>
    @endif
</div>

<!-- Modal Detail Premium -->
<div id="projectDetailModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen p-4">
        <!-- Background overlay -->
        <div class="fixed inset-0 bg-black/40 backdrop-blur-sm transition-opacity" onclick="hideProjectDetail()"></div>

        <!-- Modal panel -->
        <div class="relative bg-white rounded-3xl shadow-3d w-full max-w-5xl mx-auto transform transition-all modal-premium scale-95 opacity-0" id="modalPanel">
            <!-- Header -->
            <div class="flex items-center justify-between p-6 border-b border-brown-dark/10">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-brown-dark to-brown-medium rounded-xl flex items-center justify-center text-white text-xl shadow-lg">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-brown-dark" id="modalTitle">Detail Project</h3>
                        <p class="text-sm text-brown-medium">Informasi lengkap project</p>
                    </div>
                </div>
                <button onclick="hideProjectDetail()" class="text-brown-medium hover:text-brown-dark transition-colors">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>

            <!-- Body -->
            <div class="p-6 max-h-[70vh] overflow-y-auto table-scroll">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Kolom Kiri: Gambar dan info singkat -->
                    <div class="md:col-span-1 space-y-4">
                        <div class="rounded-2xl overflow-hidden border border-brown-dark/10 shadow-lg">
                            <img id="modalImage" src="" alt="Project Image" class="w-full h-48 object-cover">
                        </div>
                        <div class="bg-cream-light rounded-xl p-4 space-y-2">
                            <div class="flex items-center gap-2 text-brown-dark">
                                <i class="fas fa-tag w-5"></i>
                                <span class="font-semibold">ID:</span>
                                <span id="modalId" class="font-mono"></span>
                            </div>
                            <div class="flex items-center gap-2 text-brown-dark">
                                <i class="fas fa-link w-5"></i>
                                <span class="font-semibold">Slug:</span>
                                <span id="modalSlug" class="truncate"></span>
                            </div>
                            <div class="flex items-center gap-2 text-brown-dark">
                                <i class="fas fa-folder w-5"></i>
                                <span class="font-semibold">Kategori:</span>
                                <span id="modalCategory"></span>
                            </div>
                            <div class="flex items-center gap-2 text-brown-dark">
                                <i class="fas fa-calendar w-5"></i>
                                <span class="font-semibold">Tahun:</span>
                                <span id="modalYear"></span>
                            </div>
                            <div class="flex items-center gap-2 text-brown-dark">
                                <i class="fas fa-building w-5"></i>
                                <span class="font-semibold">Klien:</span>
                                <span id="modalClient"></span>
                            </div>
                            <div class="flex items-center gap-2 text-brown-dark">
                                <i class="fas fa-map-pin w-5"></i>
                                <span class="font-semibold">Lokasi:</span>
                                <span id="modalLocation"></span>
                            </div>
                            <div class="flex items-center gap-2 text-brown-dark">
                                <i class="fas fa-clock w-5"></i>
                                <span class="font-semibold">Status:</span>
                                <span id="modalStatus" class="px-2 py-0.5 rounded-full text-xs font-medium"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom Kanan: Detail lengkap -->
                    <div class="md:col-span-2 space-y-6">
                        <!-- Ringkasan -->
                        <div class="bg-cream-light/50 rounded-xl p-4">
                            <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                <i class="fas fa-align-left"></i> Ringkasan
                            </h4>
                            <p id="modalShortDescription" class="text-brown-medium text-sm leading-relaxed"></p>
                        </div>

                        <!-- Deskripsi -->
                        <div class="bg-cream-light/50 rounded-xl p-4">
                            <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                <i class="fas fa-file-alt"></i> Deskripsi Lengkap
                            </h4>
                            <div id="modalDescription" class="text-brown-medium text-sm leading-relaxed prose max-w-none"></div>
                        </div>

                        <!-- Informasi Proyek (Grid 2 kolom) -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-cream-light/50 rounded-xl p-4">
                                <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                    <i class="fas fa-hourglass-half"></i> Durasi
                                </h4>
                                <p id="modalDuration" class="text-brown-medium text-sm"></p>
                            </div>
                            <div class="bg-cream-light/50 rounded-xl p-4">
                                <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                    <i class="fas fa-expand"></i> Scope
                                </h4>
                                <p id="modalScope" class="text-brown-medium text-sm"></p>
                            </div>
                            <div class="bg-cream-light/50 rounded-xl p-4">
                                <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                    <i class="fas fa-users"></i> Team Size
                                </h4>
                                <p id="modalTeamSize" class="text-brown-medium text-sm"></p>
                            </div>
                            <div class="bg-cream-light/50 rounded-xl p-4">
                                <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                    <i class="fas fa-calendar-alt"></i> Start Date
                                </h4>
                                <p id="modalStartDate" class="text-brown-medium text-sm"></p>
                            </div>
                            <div class="bg-cream-light/50 rounded-xl p-4">
                                <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                    <i class="fas fa-calendar-check"></i> End Date
                                </h4>
                                <p id="modalEndDate" class="text-brown-medium text-sm"></p>
                            </div>
                            <div class="bg-cream-light/50 rounded-xl p-4">
                                <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                    <i class="fas fa-clock"></i> Created At
                                </h4>
                                <p id="modalCreatedAt" class="text-brown-medium text-sm"></p>
                            </div>
                            <div class="bg-cream-light/50 rounded-xl p-4">
                                <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                    <i class="fas fa-edit"></i> Updated At
                                </h4>
                                <p id="modalUpdatedAt" class="text-brown-medium text-sm"></p>
                            </div>
                        </div>

                        <!-- Sub Services, Certifications, Tags, Testimonial -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-cream-light/50 rounded-xl p-4">
                                <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                    <i class="fas fa-cubes"></i> Sub Services
                                </h4>
                                <div id="modalSubServices" class="flex flex-wrap gap-1"></div>
                            </div>
                            <div class="bg-cream-light/50 rounded-xl p-4">
                                <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                    <i class="fas fa-certificate"></i> Certifications
                                </h4>
                                <div id="modalCertifications" class="flex flex-wrap gap-1"></div>
                            </div>
                            <div class="bg-cream-light/50 rounded-xl p-4">
                                <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                    <i class="fas fa-tags"></i> Tags
                                </h4>
                                <div id="modalTags" class="flex flex-wrap gap-1"></div>
                            </div>
                            <div class="bg-cream-light/50 rounded-xl p-4">
                                <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                    <i class="fas fa-comment-dots"></i> Testimonial
                                </h4>
                                <div id="modalTestimonial" class="text-brown-medium text-sm"></div>
                            </div>
                        </div>

                        <!-- Details tambahan -->
                        <div class="bg-cream-light/50 rounded-xl p-4">
                            <h4 class="font-semibold text-brown-dark mb-2 flex items-center gap-2">
                                <i class="fas fa-info-circle"></i> Details
                            </h4>
                            <div id="modalDetails" class="text-brown-medium text-sm prose max-w-none"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex justify-end gap-3 p-6 border-t border-brown-dark/10">
                <button onclick="hideProjectDetail()" class="px-6 py-2 border border-brown-dark/20 rounded-full text-brown-medium hover:bg-cream-light transition-colors">
                    Tutup
                </button>
                <a href="#" id="modalEditButton" class="px-6 py-2 bg-brown-dark text-white rounded-full hover:bg-brown-medium transition-colors flex items-center gap-2">
                    <i class="fas fa-pencil-alt"></i> Edit
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Auto close alert after 5 seconds
    setTimeout(() => {
        const alert = document.querySelector('.bg-white.border-l-4');
        if (alert) alert.remove();
    }, 5000);

    // Modal functionality
    function showProjectDetail(project) {
        // Isi data ke modal
        document.getElementById('modalId').innerText = '#' + project.id;
        document.getElementById('modalTitle').innerText = project.title;
        document.getElementById('modalSlug').innerText = project.slug || '-';
        document.getElementById('modalCategory').innerText = project.category?.name || project.category || '-';
        document.getElementById('modalYear').innerText = project.year || '-';
        document.getElementById('modalClient').innerText = project.client?.name || project.client || '-';
        document.getElementById('modalLocation').innerText = project.location || '-';

        // Status
        const statusSpan = document.getElementById('modalStatus');
        const statusText = {
            'completed': 'Selesai',
            'ongoing': 'Berjalan',
            'pending': 'Ditunda'
        }[project.status] || project.status;
        const statusClass = {
            'completed': 'bg-green-100 text-green-800',
            'ongoing': 'bg-yellow-100 text-yellow-800',
            'pending': 'bg-red-100 text-red-800'
        }[project.status] || 'bg-gray-100 text-gray-800';
        statusSpan.innerText = statusText;
        statusSpan.className = `px-2 py-0.5 rounded-full text-xs font-medium ${statusClass}`;

        // Gambar
const img = document.getElementById('modalImage');

if (project.image) {
    if (project.image.includes('projects')) {
        img.src = '{{ asset('storage') }}/' + project.image;
    } else {
        img.src = '{{ asset('images') }}/' + project.image;
    }
    img.alt = project.title;
} else {
    img.src = 'https://via.placeholder.com/400x200?text=No+Image';
}

        // Deskripsi singkat & panjang
        document.getElementById('modalShortDescription').innerText = project.short_description || '-';
        document.getElementById('modalDescription').innerHTML = project.description || '-';

        // Field lainnya
        document.getElementById('modalDuration').innerText = project.duration || '-';
        document.getElementById('modalScope').innerText = project.scope || '-';
        document.getElementById('modalTeamSize').innerText = project.team_size || '-';
        document.getElementById('modalStartDate').innerText = project.start_date ? new Date(project.start_date).toLocaleDateString('id-ID') : '-';
        document.getElementById('modalEndDate').innerText = project.end_date ? new Date(project.end_date).toLocaleDateString('id-ID') : '-';
        document.getElementById('modalCreatedAt').innerText = project.created_at ? new Date(project.created_at).toLocaleString('id-ID') : '-';
        document.getElementById('modalUpdatedAt').innerText = project.updated_at ? new Date(project.updated_at).toLocaleString('id-ID') : '-';
        document.getElementById('modalDetails').innerHTML = project.details || '-';

        // Relasi many-to-many atau array
        // Sub Services
        const subServicesContainer = document.getElementById('modalSubServices');
        subServicesContainer.innerHTML = '';
        if (project.sub_services && Array.isArray(project.sub_services)) {
            project.sub_services.forEach(s => {
                const badge = document.createElement('span');
                badge.className = 'px-2 py-1 bg-brown-dark/10 text-brown-dark rounded-full text-xs';
                badge.innerText = s.name || s;
                subServicesContainer.appendChild(badge);
            });
        } else if (project.sub_services) {
            subServicesContainer.innerText = project.sub_services;
        } else {
            subServicesContainer.innerText = '-';
        }

        // Certifications
        const certContainer = document.getElementById('modalCertifications');
        certContainer.innerHTML = '';
        if (project.certifications && Array.isArray(project.certifications)) {
            project.certifications.forEach(c => {
                const badge = document.createElement('span');
                badge.className = 'px-2 py-1 bg-brown-dark/10 text-brown-dark rounded-full text-xs';
                badge.innerText = c.name || c;
                certContainer.appendChild(badge);
            });
        } else if (project.certifications) {
            certContainer.innerText = project.certifications;
        } else {
            certContainer.innerText = '-';
        }

        // Tags
        const tagsContainer = document.getElementById('modalTags');
        tagsContainer.innerHTML = '';
        if (project.tags && Array.isArray(project.tags)) {
            project.tags.forEach(t => {
                const badge = document.createElement('span');
                badge.className = 'px-2 py-1 bg-brown-dark/10 text-brown-dark rounded-full text-xs';
                badge.innerText = t.name || t;
                tagsContainer.appendChild(badge);
            });
        } else if (project.tags) {
            tagsContainer.innerText = project.tags;
        } else {
            tagsContainer.innerText = '-';
        }

        // Testimonial (mungkin objek atau array)
        const testimonialContainer = document.getElementById('modalTestimonial');
        if (project.testimonial) {
            if (typeof project.testimonial === 'object') {
                testimonialContainer.innerHTML = `<div class="italic">"${project.testimonial.content || project.testimonial.text || JSON.stringify(project.testimonial)}"</div>`;
                if (project.testimonial.client_name) {
                    testimonialContainer.innerHTML += `<div class="mt-1 text-xs text-brown-medium">- ${project.testimonial.client_name}</div>`;
                }
            } else {
                testimonialContainer.innerText = project.testimonial;
            }
        } else {
            testimonialContainer.innerText = '-';
        }

        // Link edit
        document.getElementById('modalEditButton').href = `/admin/projects/${project.id}/edit`;

        // Tampilkan modal dengan animasi
        const modal = document.getElementById('projectDetailModal');
        const panel = document.getElementById('modalPanel');
        modal.classList.remove('hidden');
        setTimeout(() => {
            panel.classList.remove('scale-95', 'opacity-0');
            panel.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function hideProjectDetail() {
        const modal = document.getElementById('projectDetailModal');
        const panel = document.getElementById('modalPanel');
        panel.classList.remove('scale-100', 'opacity-100');
        panel.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }

    // Klik di luar modal untuk menutup (overlay sudah handle)
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            hideProjectDetail();
        }
    });
</script>
@endpush
