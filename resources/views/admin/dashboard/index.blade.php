@extends('admin.layouts.app')

@section('title', 'Dashboard - PT Mitra Nusa Konsulindo')

@section('content')
    <h2 class="text-3xl font-bold text-brown-dark mb-2">Selamat Datang, Admin!</h2>
    <p class="text-brown-medium mb-6">Kelola konten company profile PT Mitra Nusa Konsulindo dengan mudah melalui panel ini.</p>

    <!-- Grid statistik premium -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-gradient-to-br from-brown-dark to-brown-medium text-white p-6 rounded-2xl shadow-3d hover:scale-105 transition-transform">
            <i class="fas fa-file-alt text-4xl mb-3 text-cream-gold"></i>
            <h3 class="text-lg font-semibold opacity-90">Total Halaman</h3>
            <p class="text-3xl font-bold">24</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-3d hover:scale-105 transition-transform border border-brown-dark/10">
            <i class="fas fa-images text-4xl mb-3 text-cream-gold"></i>
            <h3 class="text-lg font-semibold text-brown-dark">Project</h3>
            <p class="text-3xl font-bold text-brown-dark">18</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-3d hover:scale-105 transition-transform border border-brown-dark/10">
            <i class="fas fa-certificate text-4xl mb-3 text-cream-gold"></i>
            <h3 class="text-lg font-semibold text-brown-dark">Sertifikat</h3>
            <p class="text-3xl font-bold text-brown-dark">12</p>
        </div>
    </div>

    <!-- Aktivitas dan Jadwal -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-cream-light p-5 rounded-xl border border-brown-dark/10">
            <h4 class="font-semibold text-brown-dark flex items-center"><i class="fas fa-clock mr-2 text-cream-gold"></i> Aktivitas Terkini</h4>
            <ul class="mt-3 space-y-2 text-brown-medium">
                <li class="flex items-center"><span class="w-2 h-2 bg-cream-gold rounded-full mr-2"></span> Admin mengupdate Profil</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-cream-gold rounded-full mr-2"></span> Project baru ditambahkan</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-cream-gold rounded-full mr-2"></span> Sertifikat ISO diperbarui</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-cream-gold rounded-full mr-2"></span> 3 pesan kontak baru</li>
            </ul>
        </div>
        <div class="bg-cream-light p-5 rounded-xl border border-brown-dark/10">
            <h4 class="font-semibold text-brown-dark flex items-center"><i class="fas fa-calendar-alt mr-2 text-cream-gold"></i> Jadwal & Pengingat</h4>
            <ul class="mt-3 space-y-2 text-brown-medium">
                <li class="flex items-center"><span class="w-2 h-2 bg-cream-gold rounded-full mr-2"></span> Rapat koordinasi konten: Senin, 10 Maret 2025</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-cream-gold rounded-full mr-2"></span> Deadline update sertifikat: 15 Maret 2025</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-cream-gold rounded-full mr-2"></span> Upload laporan project: 20 Maret 2025</li>
            </ul>
        </div>
    </div>

    <!-- Tombol aksi cepat -->
    <div class="mt-8 flex flex-wrap gap-3">
        <a href="#" class="btn-outline-brown-3d px-5 py-2.5 rounded-full text-brown-dark font-semibold border-2 border-brown-dark hover:bg-brown-dark hover:text-white transition"><i class="fas fa-plus-circle mr-2"></i>Tambah Project</a>
        <a href="#" class="btn-outline-brown-3d px-5 py-2.5 rounded-full text-brown-dark font-semibold border-2 border-brown-dark hover:bg-brown-dark hover:text-white transition"><i class="fas fa-upload mr-2"></i>Unggah Sertifikat</a>
        <a href="#" class="btn-outline-brown-3d px-5 py-2.5 rounded-full text-brown-dark font-semibold border-2 border-brown-dark hover:bg-brown-dark hover:text-white transition"><i class="fas fa-edit mr-2"></i>Edit Profil</a>
    </div>
@endsection

@push('styles')
<style>
    /* Custom style untuk tombol outline */
    .btn-outline-brown-3d {
        background: transparent;
        transition: all 0.3s;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        position: relative;
        overflow: hidden;
    }
    .btn-outline-brown-3d:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(93,64,55,0.2);
    }
</style>
@endpush
