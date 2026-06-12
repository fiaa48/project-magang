<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate(); // hapus data lama

        $projects = [
            [
                'title' => 'Perencanaan Gedung Perkantoran 15 Lantai',
                'category' => 'Arsitektur',
                'location' => 'Jakarta',
                'year' => 2024,
            ],
            [
                'title' => 'Pengawasan Jalan Tol Cileunyi – Sumedang',
                'category' => 'Teknik Sipil',
                'location' => 'Jawa Barat',
                'year' => 2023,
            ],
            [
                'title' => 'Studi Kelayakan Bendungan Cipanas',
                'category' => 'Sumber Daya Air',
                'location' => 'Sumedang',
                'year' => 2023,
            ],
            [
                'title' => 'Penyusunan RDTR Kawasan Industri',
                'category' => 'Tata Ruang',
                'location' => 'Bandung Barat',
                'year' => 2024,
            ],
            [
                'title' => 'AMDAL Rumah Sakit Pendidikan',
                'category' => 'Lingkungan',
                'location' => 'Bandung',
                'year' => 2023,
            ],
            [
                'title' => 'Manajemen Proyek Apartemen',
                'category' => 'Manajemen Konstruksi',
                'location' => 'Surabaya',
                'year' => 2024,
            ],
            [
                'title' => 'Survey Topografi Perkebunan Sawit',
                'category' => 'Jasa Survey',
                'location' => 'Riau',
                'year' => 2022,
            ],
            [
                'title' => 'Desain Interior Hotel Bintang 5',
                'category' => 'Desain Interior',
                'location' => 'Bali',
                'year' => 2023,
            ],
        ];

        foreach ($projects as $item) {
            Project::create([
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'category' => $item['category'],
                'location' => $item['location'],
                'year' => $item['year'],
            ]);
        }
    }
}
