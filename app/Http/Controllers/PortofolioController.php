<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    private function getPortofolioData()
    {
        return [
            1 => [
                'id'          => 1,
                'title'       => 'Perencanaan Gedung Perkantoran 15 Lantai',
                'category'    => 'Arsitektur',
                'year'        => '2024',
                'short_description' => 'Desain arsitektur premium dengan konsep green building.',
                'description' => 'Perencanaan lengkap gedung perkantoran di kawasan CBD Jakarta. Meliputi desain skematik, pengembangan desain, gambar kerja, dan RAB. Mengusung konsep hemat energi dan ramah lingkungan.',
                'image'       => 'gedung-perkantoran.jpg',
                'gallery'     => [],
                'client'      => 'PT. Properti Nusantara',
                'location'    => 'Jakarta Selatan',
                'duration'    => '8 Bulan',
                'scope'       => 'Konsultansi Arsitektur, Struktur, MEP',
                'details'     => [
                    'Studi kelayakan dan analisis tapak',
                    'Desain arsitektur dan interior',
                    'Dokumen tender dan spesifikasi',
                    'Pengawasan berkala',
                ],
                'tags'        => ['Arsitektur', 'Gedung Tinggi', 'Green Building'],
                'testimonial' => 'Desain yang inovatif dan tim yang sangat profesional. Proyek selesai tepat waktu.',
                'start_date'  => 'Jan 2024',
                'end_date'    => 'Agu 2024',
                'team_size'   => '6 Ahli',
                'status'      => 'Selesai',
            ],
            2 => [
                'id'          => 2,
                'title'       => 'Pengawasan Jalan Tol Cileunyi – Sumedang',
                'category'    => 'Teknik Sipil',
                'year'        => '2023',
                'short_description' => 'Pengawasan konstruksi jalan tol sepanjang 30 km.',
                'description' => 'Jasa pengawasan teknik untuk ruas jalan tol. Meliputi quality control, pengendalian waktu, dan keselamatan kerja.',
                'image'       => 'jalan-tol.jpg',
                'gallery'     => [],
                'client'      => 'PT. Jasamarga',
                'location'    => 'Sumedang',
                'duration'    => '12 Bulan',
                'scope'       => 'Pengawasan, Quality Assurance, Manajemen Konstruksi',
                'details'     => [
                    'Inspeksi harian',
                    'Pengujian material',
                    'Pelaporan progress',
                ],
                'tags'        => ['Teknik Sipil', 'Jalan Tol', 'Pengawasan'],
                'testimonial' => null,
                'start_date'  => 'Mar 2023',
                'end_date'    => 'Feb 2024',
                'team_size'   => '4 Ahli',
                'status'      => 'Selesai',
            ],
            3 => [
                'id'          => 3,
                'title'       => 'Studi Kelayakan Bendungan Cipanas',
                'category'    => 'Sumber Daya Air',
                'year'        => '2023',
                'short_description' => 'Studi kelayakan bendungan multi guna.',
                'description' => 'Kajian teknis, ekonomi, dan lingkungan untuk pembangunan bendungan.',
                'image'       => 'bendungan.jpg',
                'gallery'     => [],
                'client'      => 'BBWS Cimanuk-Cisanggarung',
                'location'    => 'Sumedang',
                'duration'    => '6 Bulan',
                'scope'       => 'Studi Kelayakan, Desain Awal, AMDAL',
                'details'     => [
                    'Survei topografi',
                    'Investigasi geoteknik',
                    'Analisis hidrologi',
                ],
                'tags'        => ['Sumber Daya Air', 'Bendungan', 'Studi Kelayakan'],
                'testimonial' => 'Laporan sangat komprehensif.',
                'start_date'  => 'Apr 2023',
                'end_date'    => 'Sep 2023',
                'team_size'   => '5 Ahli',
                'status'      => 'Selesai',
            ],
            4 => [
                'id'          => 4,
                'title'       => 'RDTR Kawasan Industri Terpadu',
                'category'    => 'Tata Ruang',
                'year'        => '2024',
                'short_description' => 'Rencana detail tata ruang kawasan industri 500 ha.',
                'description' => 'Penyusunan RDTR berbasis GIS dan partisipatif.',
                'image'       => 'tata-ruang-industri.jpg',
                'gallery'     => [],
                'client'      => 'Dinas PTSP Jabar',
                'location'    => 'Bandung Barat',
                'duration'    => '10 Bulan',
                'scope'       => 'Perencanaan Tata Ruang, GIS, Zonasi',
                'details'     => [
                    'Pemetaan digital',
                    'Analisis kesesuaian lahan',
                    'Peraturan zonasi',
                ],
                'tags'        => ['Tata Ruang', 'RDTR', 'GIS'],
                'testimonial' => 'Hasil sangat detail dan aplikatif.',
                'start_date'  => 'Jan 2024',
                'end_date'    => 'Okt 2024',
                'team_size'   => '4 Ahli',
                'status'      => 'Dalam Proses',
            ],
            5 => [
                'id'          => 5,
                'title'       => 'AMDAL Rumah Sakit Pendidikan',
                'category'    => 'Lingkungan',
                'year'        => '2023',
                'short_description' => 'Penyusunan dokumen AMDAL rumah sakit.',
                'description' => 'Kajian dampak lingkungan dan rencana pengelolaan.',
                'image'       => 'amdal-mall.png',
                'gallery'     => [],
                'client'      => 'Universitas Padjadjaran',
                'location'    => 'Bandung',
                'duration'    => '5 Bulan',
                'scope'       => 'AMDAL, UKL-UPL',
                'details'     => [
                    'Identifikasi dampak',
                    'Pemodelan sebaran polutan',
                    'Dokumen ANDAL, RKL-RPL',
                ],
                'tags'        => ['Lingkungan', 'AMDAL', 'Kesehatan'],
                'testimonial' => null,
                'start_date'  => 'Jul 2023',
                'end_date'    => 'Nov 2023',
                'team_size'   => '3 Ahli',
                'status'      => 'Selesai',
            ],
            6 => [
                'id'          => 6,
                'title'       => 'Manajemen Proyek Apartemen',
                'category'    => 'Manajemen Proyek',
                'year'        => '2024',
                'short_description' => 'Konsultansi manajemen proyek apartemen 25 lantai.',
                'description' => 'Perencanaan, pengendalian biaya, mutu, dan waktu.',
                'image'       => 'apartemen.png',
                'gallery'     => [],
                'client'      => 'PT. Griya Investama',
                'location'    => 'Surabaya',
                'duration'    => '18 Bulan',
                'scope'       => 'Manajemen Proyek, Pengadaan, QC',
                'details'     => [
                    'Penyusunan jadwal',
                    'Pengendalian biaya',
                    'Inspeksi mutu',
                ],
                'tags'        => ['Manajemen Konstruksi', 'Apartemen'],
                'testimonial' => 'Proyek tepat waktu dan sesuai anggaran.',
                'start_date'  => 'Mar 2024',
                'end_date'    => 'Agu 2025',
                'team_size'   => '5 Ahli',
                'status'      => 'Berjalan',
            ],
            7 => [
                'id'          => 7,
                'title'       => 'Survey Topografi Perkebunan Sawit',
                'category'    => 'Jasa Survey',
                'year'        => '2022',
                'short_description' => 'Pemetaan lahan sawit skala besar.',
                'description' => 'Survey terestris dan fotogrametri untuk perkebunan.',
                'image'       => 'survey-sawit.jpeg',
                'gallery'     => [],
                'client'      => 'PT. Perkebunan Nusantara V',
                'location'    => 'Riau',
                'duration'    => '3 Bulan',
                'scope'       => 'Survey Topografi, Pemetaan, GIS',
                'details'     => [
                    'Pengukuran GPS geodetik',
                    'Orthophoto UAV',
                    'Peta kontur',
                ],
                'tags'        => ['Survey', 'Topografi', 'Perkebunan'],
                'testimonial' => null,
                'start_date'  => 'Agu 2022',
                'end_date'    => 'Okt 2022',
                'team_size'   => '4 Surveyor',
                'status'      => 'Selesai',
            ],
            8 => [
                'id'          => 8,
                'title'       => 'Desain Interior Hotel Bintang 5',
                'category'    => 'Desain Interior',
                'year'        => '2023',
                'short_description' => 'Interior mewah hotel di Nusa Dua.',
                'description' => 'Perancangan lobby, restaurant, dan kamar tamu.',
                'image'       => 'interior-hotel.jpg',
                'gallery'     => [],
                'client'      => 'PT. Bali Luxury Dev',
                'location'    => 'Bali',
                'duration'    => '6 Bulan',
                'scope'       => 'Desain Interior, Furniture, Lighting',
                'details'     => [
                    'Konsep desain',
                    'Gambar kerja',
                    'Supervisi instalasi',
                ],
                'tags'        => ['Desain Interior', 'Hotel'],
                'testimonial' => 'Elegan dan sesuai brand.',
                'start_date'  => 'Feb 2023',
                'end_date'    => 'Jul 2023',
                'team_size'   => '3 Desainer',
                'status'      => 'Selesai',
            ],
        ];
    }

    public function index()
    {
        $portofolios = $this->getPortofolioData();
        // Tambahkan link detail
        foreach ($portofolios as $id => &$item) {
            $item['link'] = route('portofolio.details', $id);
        }
        $portofolios = array_values($portofolios);
        return view('portofolio.index', compact('portofolios'));
    }

    public function show($id)
    {
        $portofolios = $this->getPortofolioData();
        if (!isset($portofolios[$id])) {
            abort(404);
        }
        $portofolio = $portofolios[$id];
        $portofolio['link'] = route('portofolio.details', $id);
        return view('portofolio.show', compact('portofolio'));
    }
}
