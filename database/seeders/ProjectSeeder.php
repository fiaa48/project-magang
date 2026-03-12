<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run()
    {

        $projects = [

            [
                'title' => 'Perencanaan Gedung Perkantoran 15 Lantai',
                'category' => 'Arsitektur',
                'year' => '2024',
                'short_description' => 'Desain arsitektur premium dengan konsep green building.',
                'description' => 'Perencanaan lengkap gedung perkantoran di kawasan CBD Jakarta.',
                'image' => 'gedung-perkantoran.jpg',
                'client' => 'PT. Properti Nusantara',
                'location' => 'Jakarta Selatan',
                'duration' => '8 Bulan',
                'scope' => 'Konsultansi Arsitektur, Struktur, MEP',
                'team_size' => '6 Ahli',
                'status' => 'completed'
            ],

            [
                'title' => 'Pengawasan Jalan Tol Cileunyi – Sumedang',
                'category' => 'Teknik Sipil',
                'year' => '2023',
                'short_description' => 'Pengawasan konstruksi jalan tol sepanjang 30 km.',
                'description' => 'Jasa pengawasan teknik untuk ruas jalan tol.',
                'image' => 'jalan-tol.jpg',
                'client' => 'PT. Jasamarga',
                'location' => 'Sumedang',
                'duration' => '12 Bulan',
                'scope' => 'Pengawasan, Quality Assurance',
                'team_size' => '4 Ahli',
                'status' => 'completed'
            ],

            [
                'title' => 'Studi Kelayakan Bendungan Cipanas',
                'category' => 'Sumber Daya Air',
                'year' => '2023',
                'short_description' => 'Studi kelayakan bendungan multi guna.',
                'description' => 'Kajian teknis dan ekonomi pembangunan bendungan.',
                'image' => 'bendungan.jpg',
                'client' => 'BBWS Cimanuk-Cisanggarung',
                'location' => 'Sumedang',
                'duration' => '6 Bulan',
                'scope' => 'Studi Kelayakan',
                'team_size' => '5 Ahli',
                'status' => 'completed'
            ],

            [
                'title' => 'RDTR Kawasan Industri Terpadu',
                'category' => 'Tata Ruang',
                'year' => '2024',
                'short_description' => 'Rencana detail tata ruang kawasan industri 500 ha.',
                'description' => 'Penyusunan RDTR berbasis GIS.',
                'image' => 'tata-ruang-industri.jpg',
                'client' => 'Dinas PTSP Jabar',
                'location' => 'Bandung Barat',
                'duration' => '10 Bulan',
                'scope' => 'Perencanaan Tata Ruang',
                'team_size' => '4 Ahli',
                'status' => 'ongoing'
            ],

            [
                'title' => 'AMDAL Rumah Sakit Pendidikan',
                'category' => 'Lingkungan',
                'year' => '2023',
                'short_description' => 'Penyusunan dokumen AMDAL rumah sakit.',
                'description' => 'Kajian dampak lingkungan dan rencana pengelolaan.',
                'image' => 'amdal-mall.png',
                'client' => 'Universitas Padjadjaran',
                'location' => 'Bandung',
                'duration' => '5 Bulan',
                'scope' => 'AMDAL',
                'team_size' => '3 Ahli',
                'status' => 'completed'
            ],

            [
                'title' => 'Manajemen Proyek Apartemen',
                'category' => 'Manajemen Proyek',
                'year' => '2024',
                'short_description' => 'Konsultansi manajemen proyek apartemen 25 lantai.',
                'description' => 'Pengendalian biaya, mutu dan waktu proyek.',
                'image' => 'apartemen.png',
                'client' => 'PT. Griya Investama',
                'location' => 'Surabaya',
                'duration' => '18 Bulan',
                'scope' => 'Manajemen Proyek',
                'team_size' => '5 Ahli',
                'status' => 'ongoing'
            ],

            [
                'title' => 'Survey Topografi Perkebunan Sawit',
                'category' => 'Jasa Survey',
                'year' => '2022',
                'short_description' => 'Pemetaan lahan sawit skala besar.',
                'description' => 'Survey topografi dan pemetaan GIS.',
                'image' => 'survey-sawit.jpeg',
                'client' => 'PT. Perkebunan Nusantara V',
                'location' => 'Riau',
                'duration' => '3 Bulan',
                'scope' => 'Survey Topografi',
                'team_size' => '4 Surveyor',
                'status' => 'completed'
            ],

            [
                'title' => 'Desain Interior Hotel Bintang 5',
                'category' => 'Desain Interior',
                'year' => '2023',
                'short_description' => 'Interior mewah hotel di Nusa Dua.',
                'description' => 'Perancangan interior lobby dan kamar tamu.',
                'image' => 'interior-hotel.jpg',
                'client' => 'PT. Bali Luxury Dev',
                'location' => 'Bali',
                'duration' => '6 Bulan',
                'scope' => 'Desain Interior',
                'team_size' => '3 Desainer',
                'status' => 'completed'
            ],

        ];

        foreach ($projects as $project) {

            Project::create([
                'title' => $project['title'],
                'slug' => Str::slug($project['title']),
                'category' => $project['category'],
                'year' => $project['year'],
                'short_description' => $project['short_description'],
                'description' => $project['description'],
                'image' => $project['image'],
                'client' => $project['client'],
                'location' => $project['location'],
                'duration' => $project['duration'],
                'scope' => $project['scope'],
                'team_size' => $project['team_size'],
                'status' => $project['status'],
            ]);

        }
    }
}
