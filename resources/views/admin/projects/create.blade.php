@extends('admin.layouts.app')

@section('title', 'Tambah Project - Admin')

@push('styles')
<style>
    /* Animasi dan efek premium - konsisten dengan halaman index dan edit */
    .shadow-3d {
        box-shadow: 0 10px 30px -10px rgba(0,0,0,0.2), 0 0 0 1px rgba(0,0,0,0.05), inset 0 1px 0 rgba(255,255,255,0.8);
    }
    .premium-card {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .premium-card:hover {
        transform: translateY(-2px) scale(1.01);
        box-shadow: 0 20px 40px -15px rgba(121, 85, 72, 0.5);
    }
    .text-brown-dark { color: #3e2c23; }
    .text-brown-medium { color: #7b5f4b; }
    .bg-brown-dark { background: #3e2c23; }
    .bg-brown-medium { background: #7b5f4b; }
    .bg-cream-light { background: #fcf8f3; }
    .border-brown-dark\/10 { border-color: rgba(62, 44, 35, 0.1); }
    .border-brown-dark\/20 { border-color: rgba(62, 44, 35, 0.2); }

    /* Upload area */
    .upload-area {
        transition: all 0.3s ease;
    }
    .upload-area:hover {
        border-color: #3e2c23;
        background-color: #fcf8f3;
    }
</style>
@endpush

@section('content')
<div class="space-y-6 p-4 md:p-6">
    <!-- Page Header -->
    <div class="bg-white rounded-2xl p-6 shadow-3d border border-brown-dark/10 flex flex-wrap justify-between items-center gap-4 premium-card">
        <div class="flex items-center gap-4">
            <div class="w-16 h-16 bg-gradient-to-br from-brown-dark to-brown-medium rounded-xl flex items-center justify-center text-white text-2xl shadow-lg">
                <i class="fas fa-plus-circle"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-brown-dark">Tambah Project</h1>
                <p class="text-brown-medium text-sm flex items-center gap-1 mt-1">
                    <i class="fas fa-home"></i>
                    <span>Dashboard / Project / Tambah Project</span>
                </p>
            </div>
        </div>
        <div class="bg-cream-light px-4 py-2 rounded-full text-brown-dark text-sm flex items-center gap-2 border border-brown-dark/10">
            <i class="fas fa-calendar text-brown-dark"></i>
            <span>{{ date('d M Y') }}</span>
        </div>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-2xl shadow-3d border border-brown-dark/10 overflow-hidden premium-card">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" id="projectForm" class="p-8 space-y-8">
            @csrf

            <!-- Informasi Dasar -->
            <div class="space-y-6">
                <div class="flex items-center gap-3 border-b border-brown-dark/10 pb-4">
                    <div class="w-10 h-10 bg-cream-light rounded-lg flex items-center justify-center text-brown-dark">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-brown-dark">Informasi Dasar</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-heading text-brown-light"></i>
                            Judul Project <span class="text-red-600">*</span>
                        </label>
                        <input type="text" name="title" value="{{ old('title') }}"
                               class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition @error('title') border-red-500 @enderror"
                               placeholder="Contoh: Renovasi Gedung Utama" required>
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-link text-brown-light"></i>
                            Slug (otomatis, opsional)
                        </label>
                        <input type="text" name="slug" value="{{ old('slug') }}"
                               class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition"
                               placeholder="contoh: renovasi-gedung-utama">
                        <p class="text-xs text-brown-medium mt-1">Kosongkan untuk generate otomatis dari judul.</p>
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-tag text-brown-light"></i>
                            Kategori <span class="text-red-600">*</span>
                        </label>
                        <select name="category_id" class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition @error('category_id') border-red-500 @enderror" required>
                            <option value="">Pilih Kategori</option>
                            @foreach($categories ?? [] as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-building text-brown-light"></i>
                            Klien
                        </label>
                        <select name="client_id" class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition">
                            <option value="">Pilih Klien (opsional)</option>
                            @foreach($clients ?? [] as $client)
                                <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>
                                    {{ $client->name }}
                                </option>
                            @endforeach
                        </select>
                        <p class="text-xs text-brown-medium mt-1">Atau isi manual di bawah jika belum terdaftar.</p>
                        <input type="text" name="client_name" value="{{ old('client_name') }}"
                               class="w-full mt-2 px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition"
                               placeholder="Nama klien (jika tidak pilih dari daftar)">
                    </div>
                </div>

                <div>
                    <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                        <i class="fas fa-align-left text-brown-light"></i>
                        Deskripsi Singkat
                    </label>
                    <textarea name="short_description" rows="3"
                              class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition">{{ old('short_description') }}</textarea>
                    <p class="text-xs text-brown-medium mt-1">Ringkasan singkat untuk tampilan grid/daftar.</p>
                </div>

                <div>
                    <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                        <i class="fas fa-file-alt text-brown-light"></i>
                        Deskripsi Lengkap <span class="text-red-600">*</span>
                    </label>
                    <textarea name="description" rows="6"
                              class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition @error('description') border-red-500 @enderror"
                              placeholder="Jelaskan detail project secara lengkap..." required>{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Lokasi & Waktu -->
            <div class="space-y-6">
                <div class="flex items-center gap-3 border-b border-brown-dark/10 pb-4">
                    <div class="w-10 h-10 bg-cream-light rounded-lg flex items-center justify-center text-brown-dark">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-brown-dark">Lokasi & Waktu</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-location-dot text-brown-light"></i>
                            Lokasi
                        </label>
                        <input type="text" name="location" value="{{ old('location') }}"
                               class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition"
                               placeholder="Jakarta Selatan">
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-calendar text-brown-light"></i>
                            Tahun
                        </label>
                        <input type="number" name="year" value="{{ old('year', date('Y')) }}"
                               class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition"
                               placeholder="{{ date('Y') }}" min="2000" max="{{ date('Y') + 5 }}">
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-calendar-plus text-brown-light"></i>
                            Tanggal Mulai
                        </label>
                        <input type="date" name="start_date" value="{{ old('start_date') }}"
                               class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition">
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-calendar-check text-brown-light"></i>
                            Tanggal Selesai
                        </label>
                        <input type="date" name="end_date" value="{{ old('end_date') }}"
                               class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition">
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-hourglass-half text-brown-light"></i>
                            Durasi (misal: 3 bulan)
                        </label>
                        <input type="text" name="duration" value="{{ old('duration') }}"
                               class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition"
                               placeholder="Contoh: 6 bulan">
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-users text-brown-light"></i>
                            Ukuran Tim
                        </label>
                        <input type="number" name="team_size" value="{{ old('team_size') }}"
                               class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition"
                               placeholder="Contoh: 5" min="1">
                    </div>
                </div>
            </div>

            <!-- Detail Tambahan -->
            <div class="space-y-6">
                <div class="flex items-center gap-3 border-b border-brown-dark/10 pb-4">
                    <div class="w-10 h-10 bg-cream-light rounded-lg flex items-center justify-center text-brown-dark">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-brown-dark">Detail Tambahan</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-expand text-brown-light"></i>
                            Scope
                        </label>
                        <textarea name="scope" rows="3"
                                  class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition">{{ old('scope') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-cog text-brown-light"></i>
                            Sub Services (pisahkan dengan koma)
                        </label>
                        <input type="text" name="sub_services" value="{{ old('sub_services') }}"
                               class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition"
                               placeholder="Contoh: Desain, Konstruksi, Finishing">
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-certificate text-brown-light"></i>
                            Certifications (pisahkan dengan koma)
                        </label>
                        <input type="text" name="certifications" value="{{ old('certifications') }}"
                               class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition"
                               placeholder="Contoh: ISO 9001, SNI">
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-tags text-brown-light"></i>
                            Tags (pisahkan dengan koma)
                        </label>
                        <input type="text" name="tags" value="{{ old('tags') }}"
                               class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition"
                               placeholder="Contoh: unggulan, terbaru, populer">
                    </div>
                </div>

                <div>
                    <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                        <i class="fas fa-star text-brown-light"></i>
                        Testimonial
                    </label>
                    <textarea name="testimonial" rows="4"
                              class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition">{{ old('testimonial') }}</textarea>
                    <p class="text-xs text-brown-medium mt-1">Testimonial klien dalam format teks atau JSON.</p>
                </div>

                <div>
                    <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                        <i class="fas fa-info-circle text-brown-light"></i>
                        Details (informasi tambahan)
                    </label>
                    <textarea name="details" rows="4"
                              class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition">{{ old('details') }}</textarea>
                </div>
            </div>

            <!-- Status & Media -->
            <div class="space-y-6">
                <div class="flex items-center gap-3 border-b border-brown-dark/10 pb-4">
                    <div class="w-10 h-10 bg-cream-light rounded-lg flex items-center justify-center text-brown-dark">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-brown-dark">Status & Media</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-tag text-brown-light"></i>
                            Status
                        </label>
                        <select name="status" class="w-full px-5 py-3 border border-brown-dark/20 rounded-xl focus:ring-2 focus:ring-brown-dark/20 focus:border-brown-dark transition">
                            <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Ongoing - Berjalan</option>
                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed - Selesai</option>
                            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending - Ditunda</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-brown-dark font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-image text-brown-light"></i>
                            Gambar
                        </label>

                        <div class="upload-area border-2 border-dashed border-brown-dark/20 rounded-xl p-6 text-center hover:border-brown-dark transition cursor-pointer" onclick="document.getElementById('imageInput').click()">
                            <i class="fas fa-cloud-upload-alt text-3xl text-brown-light mb-2"></i>
                            <p class="text-brown-dark font-medium" id="uploadText">Klik untuk upload</p>
                            <p class="text-brown-medium text-sm">JPG, PNG, WebP (Max 2MB)</p>
                        </div>
                        <input type="file" id="imageInput" name="image" accept="image/jpeg,image/png,image/webp" class="hidden" onchange="previewImage(this)">

                        <!-- Preview Gambar Baru -->
                        <div id="imagePreviewContainer" class="mt-4 hidden">
                            <div class="relative rounded-xl overflow-hidden border border-brown-dark/10 shadow-lg">
                                <img id="imagePreview" src="#" alt="Preview" class="w-full h-48 object-cover">
                                <button type="button" onclick="removeImage()" class="absolute top-2 right-2 bg-white rounded-lg w-8 h-8 flex items-center justify-center shadow-md hover:bg-red-50 transition">
                                    <i class="fas fa-times text-red-600"></i>
                                </button>
                            </div>
                        </div>

                        <!-- File Info -->
                        <div id="fileInfo" class="mt-3 hidden bg-cream-light rounded-lg px-4 py-3 flex items-center justify-between">
                            <div class="flex items-center gap-2 text-brown-dark">
                                <i class="fas fa-check-circle text-brown-dark"></i>
                                <span id="fileName" class="text-sm font-medium"></span>
                            </div>
                            <button type="button" onclick="removeImage()" class="text-red-600 hover:text-red-700">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        @error('image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex flex-wrap justify-end gap-4 pt-6 border-t border-brown-dark/10">
                <a href="{{ route('admin.projects.index') }}" class="px-8 py-3 border-2 border-brown-dark text-brown-dark font-semibold rounded-full hover:bg-brown-dark hover:text-white transition flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
                <button type="submit" class="px-8 py-3 bg-gradient-to-r from-brown-dark to-brown-medium text-white font-semibold rounded-full shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 flex items-center gap-2">
                    <i class="fas fa-save"></i>
                    Simpan Project
                </button>
            </div>
        </form>
    </div>

    <!-- Footer Note -->
    <div class="text-right text-brown-medium text-sm flex items-center justify-end gap-2">
        <i class="fas fa-shield-alt text-brown-light"></i>
        <span>Data akan tersimpan dengan aman</span>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function previewImage(input) {
        const file = input.files[0];
        if (file) {
            if (file.size > 2 * 1024 * 1024) {
                alert('Ukuran file maksimal 2MB');
                input.value = '';
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').src = e.target.result;
                document.getElementById('imagePreviewContainer').classList.remove('hidden');
                document.getElementById('fileInfo').classList.remove('hidden');
                document.getElementById('fileName').textContent = file.name;
                document.getElementById('uploadText').textContent = 'Ganti gambar';
            }
            reader.readAsDataURL(file);
        }
    }

    function removeImage() {
        document.getElementById('imageInput').value = '';
        document.getElementById('imagePreviewContainer').classList.add('hidden');
        document.getElementById('fileInfo').classList.add('hidden');
        document.getElementById('uploadText').textContent = 'Klik untuk upload';
    }

    // Validasi sederhana
    document.getElementById('projectForm')?.addEventListener('submit', function(e) {
        const title = document.querySelector('input[name="title"]');
        const desc = document.querySelector('textarea[name="description"]');
        let valid = true;

        if (!title.value.trim()) {
            title.classList.add('border-red-500');
            valid = false;
        } else {
            title.classList.remove('border-red-500');
        }

        if (!desc.value.trim()) {
            desc.classList.add('border-red-500');
            valid = false;
        } else {
            desc.classList.remove('border-red-500');
        }

        if (!valid) {
            e.preventDefault();
            alert('Harap isi judul dan deskripsi.');
        }
    });

    // Hilangkan error border saat mengetik
    document.querySelector('input[name="title"]')?.addEventListener('input', function() {
        this.classList.remove('border-red-500');
    });
    document.querySelector('textarea[name="description"]')?.addEventListener('input', function() {
        this.classList.remove('border-red-500');
    });

    // Batasan tahun
    document.querySelector('input[name="year"]')?.addEventListener('input', function() {
        let year = parseInt(this.value);
        let currentYear = new Date().getFullYear();
        if (year < 2000) this.value = 2000;
        if (year > currentYear + 5) this.value = currentYear + 5;
    });

    // Auto-generate slug dari title (opsional)
    document.querySelector('input[name="title"]')?.addEventListener('input', function() {
        const slugField = document.querySelector('input[name="slug"]');
        // Hanya generate jika slug masih kosong atau user belum mengubahnya
        if (slugField && !slugField.value.trim()) {
            slugField.value = this.value.toLowerCase()
                .replace(/[^\w\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/--+/g, '-')
                .trim();
        }
    });
</script>
@endpush
