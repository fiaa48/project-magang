<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ✅ INI YANG KURANG

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('home')->insert([
            'hero_title' => 'PT Mitra Nusa Konsulindo',
            'hero_description' => 'PT. MITRA NUSA KONSULINDO merupakan perusahaan konsultan mandiri yang berdiri pada tahun 2020, berkembang dengan dukungan tenaga ahli terkemuka dan berkualitas yang telah melaksanakan berbagai proyek terintegrasi lintas disiplin, siap memberikan bantuan dan pelayanan profesional bagi instansi pemerintah maupun swasta di bidang jasa Konsultansi Teknik dan Manajemen.',
            'hero_specialist' => 'Perencanaan Umum • Studi Kelayakan • Perencanaan Teknik • Dokumen Lingkungan • Pengawasan Teknik • Penelitian & Pengembangan',

            // ABOUT
            'about_desc_1' => 'PT. MITRA NUSA KONSULINDO adalah perusahaan konsultan yang menekuni bidang jasa Konsultansi Teknik dan Manajemen sebagai profesi, disiapkan untuk memberikan bantuan dan pelayanan dalam berbagai kegiatan yang berkaitan dengan Perencanaan Umum, Studi Kelayakan, Perencanaan Teknik, Dokumen Lingkungan, Pengawasan Teknik, Penelitian serta pengembangan berbagai bidang lainnya.',
            'about_desc_2' => 'Dalam menyelesaikan setiap penugasan, perusahaan menerapkan sistem penyelesaian teknik dan administrasi secara profesional, didukung tenaga ahli berpengalaman dan tenaga muda berbakat sehingga pekerjaan berdaya guna dan berhasil guna secara maksimal.',

            // BACKGROUND
            'background_desc_1' => 'Menghadapi proses perubahan yang sangat cepat dan kompleks, perusahaan menyadari perlunya visi dan misi yang akurat dengan landasan pengalaman, kebijakan, kreativitas, kecepatan bertindak, dan dukungan teknologi tinggi agar setiap perubahan serta permasalahan dapat diselesaikan secara tepat.',
            'background_desc_2' => 'PT. MITRA NUSA KONSULINDO tumbuh dan berkembang atas kepercayaan rekanan dan mitra kerja yang terjalin dalam suatu jaringan kerja sama saling menguntungkan. Perusahaan selalu siap menerima tawaran kerja sama dari instansi pemerintah maupun swasta dalam bidang profesinya.',

            'background_list' => json_encode([
                'Berpandangan ke depan dengan visi dan misi yang tajam.',
                'Didukung tenaga ahli berpengalaman dan tenaga muda potensial.',
                'Penanganan proyek secara profesional, efektif, dan efisien.',
                'Terbuka untuk kerja sama jangka panjang yang saling menguntungkan.'
            ]),

            // STATS
            'experience_years' => 5,
            'projects_done' => 50,
            'certifications' => 15,
            'experts' => 10,

            // CTA
            'cta_title' => 'Siap Mengikutsertakan Kami Dalam Proyek Anda?',
            'cta_description' => 'Adalah suatu kehormatan besar bagi kami apabila Relasi dan Klien berkenan memberikan kepercayaan untuk bekerja sama, sehingga kami dapat membuktikan kinerja yang profesional dan saling menguntungkan.',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
