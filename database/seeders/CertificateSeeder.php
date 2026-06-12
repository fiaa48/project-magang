<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        Certificate::updateOrCreate(
            ['type' => 'profil-sertifikasi'],
            [
                'akta_pendirian' => 'Akta Pendirian No. 19 tanggal 22 Oktober 2020 oleh Susyana Herlawati, SH, M.Kn',
                'akta_perubahan' => 'Akta Perubahan No. 03 tanggal 07 Desember 2023',
                'pengesahan_ahu' => 'AHU-0057316.AH.01.01.TAHUN 2020, tanggal 4 November 2020',
                'name' => 'Sertifikasi Perusahaan',
                'siujk' => '0257011100093',
                'siup' => '0257011100093',
                'sbu_konstruksi' => 'AL001, AL002, AL003, AL004, AR001, AR002, AR003, RK001, RK002, RK003, RK005',
                'sbu_non_konstruksi' => 'Pertanian, Transportasi, Telematika, Manajemen, Jasa Khusus, Studi/Penelitian, Survey',
                'pkp' => 'S-544PKP/WPJ.09/KP.0303/2020',
                'skt_pajak' => 'Terdaftar DJP sejak 4 November 2020, NPWP 96.431.796.0-429.000',
                'bukti_spt' => 'SPT 1771 Tahun Pajak 2024, status Nihil, tanggal penyampaian 10/03/2025',
                'iso' => 'Dokumen scan tersedia pada galeri ISO halaman 138-141 company profile',
                'sertifikasi_baru' => null,
            ]
        );
    }
}

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use App\Models\Certificate;

// class CertificateSeeder extends Seeder
// {
//     public function run()
//     {
//         $data = [
//             // ========== 1. Sertifikat Standar (6) ==========
//             [
//                 'jenis_sertifikat' => 'Sertifikat Standar',
//                 'nomor_sertifikat' => '02570111000930013',
//                 'nama_sertifikat' => 'Aktivitas Arsitektur',
//                 'penerbit' => 'Kementerian PUPR / OSS',
//                 'tanggal_terbit' => '2024-10-01',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => 'Menengah Tinggi',
//                 'kode_kbli' => '71101',
//                 'scope' => 'Aktivitas Arsitektur',
//                 'keterangan' => 'Dicetak 1 Oktober 2024. Terverifikasi Kementerian PUPR.'
//             ],
//             [
//                 'jenis_sertifikat' => 'Sertifikat Standar',
//                 'nomor_sertifikat' => '02570111000930014',
//                 'nama_sertifikat' => 'Aktivitas Arsitektur',
//                 'penerbit' => 'Kementerian PUPR / OSS',
//                 'tanggal_terbit' => '2024-03-06',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => 'Menengah Tinggi',
//                 'kode_kbli' => '71101',
//                 'scope' => 'Aktivitas Arsitektur',
//                 'keterangan' => 'Disetujui otomatis sistem OSS (fiktif positif) PP 5/2021 Pasal 204.'
//             ],
//             [
//                 'jenis_sertifikat' => 'Sertifikat Standar',
//                 'nomor_sertifikat' => '02570111000930016',
//                 'nama_sertifikat' => 'Aktivitas Arsitektur',
//                 'penerbit' => 'Kementerian PUPR / OSS',
//                 'tanggal_terbit' => '2024-09-27',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => 'Menengah Tinggi',
//                 'kode_kbli' => '71101',
//                 'scope' => 'Aktivitas Arsitektur',
//                 'keterangan' => 'Dicetak 27 September 2024. Telah terverifikasi.'
//             ],
//             [
//                 'jenis_sertifikat' => 'Sertifikat Standar',
//                 'nomor_sertifikat' => '02570111000930015',
//                 'nama_sertifikat' => 'Aktivitas Keinsinyuran dan Konsultasi Teknis YBDI',
//                 'penerbit' => 'Kementerian PUPR / OSS',
//                 'tanggal_terbit' => '2024-03-06',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => 'Menengah Tinggi',
//                 'kode_kbli' => '71102',
//                 'scope' => 'Aktivitas Keinsinyuran dan Konsultasi Teknis YBDI',
//                 'keterangan' => 'Disetujui otomatis sistem OSS.'
//             ],
//             [
//                 'jenis_sertifikat' => 'Sertifikat Standar',
//                 'nomor_sertifikat' => '02570111000930018',
//                 'nama_sertifikat' => 'Aktivitas Keinsinyuran dan Konsultasi Teknis YBDI',
//                 'penerbit' => 'Kementerian PUPR / OSS',
//                 'tanggal_terbit' => '2024-09-27',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => 'Menengah Tinggi',
//                 'kode_kbli' => '71102',
//                 'scope' => 'Aktivitas Keinsinyuran dan Konsultasi Teknis YBDI',
//                 'keterangan' => 'Dicetak 27 September 2024. Telah terverifikasi.'
//             ],
//             [
//                 'jenis_sertifikat' => 'Sertifikat Standar',
//                 'nomor_sertifikat' => '02570111000930020',
//                 'nama_sertifikat' => 'Aktivitas Desain Interior',
//                 'penerbit' => 'Kementerian PUPR / OSS',
//                 'tanggal_terbit' => '2024-09-12',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => 'Menengah Tinggi',
//                 'kode_kbli' => '74120',
//                 'scope' => 'Aktivitas Desain Interior',
//                 'keterangan' => 'Disetujui otomatis sistem OSS.'
//             ],

//             // ========== 2. SBU Konstruksi (6) ==========
//             [
//                 'jenis_sertifikat' => 'SBU Konstruksi',
//                 'nomor_sertifikat' => '025701110009300200010',
//                 'nama_sertifikat' => 'Jasa Konsultansi Konstruksi',
//                 'penerbit' => 'LPJK / INKINDO',
//                 'tanggal_terbit' => '2025-10-06',
//                 'tanggal_berlaku_sampai' => '2028-10-05',
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => '71101',
//                 'scope' => 'Jasa Pengembangan Pemanfaatan Ruang (AL001)',
//                 'keterangan' => 'Registrasi LPJK F.3.01.AL.K.02.2025.0021604. PJBU: Muria Cipta, ST.'
//             ],
//             [
//                 'jenis_sertifikat' => 'SBU Konstruksi',
//                 'nomor_sertifikat' => '202210100348071088472',
//                 'nama_sertifikat' => 'Jasa Konsultansi Konstruksi',
//                 'penerbit' => 'LPJK / INKINDO',
//                 'tanggal_terbit' => '2025-10-13',
//                 'tanggal_berlaku_sampai' => '2028-10-12',
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => '71101',
//                 'scope' => 'Jasa Pengembangan Wilayah (AL002)',
//                 'keterangan' => 'Registrasi LPJK sama. Perubahan ke-1 13 Okt 2025.'
//             ],
//             [
//                 'jenis_sertifikat' => 'SBU Konstruksi',
//                 'nomor_sertifikat' => '025701110009300190004',
//                 'nama_sertifikat' => 'Jasa Konsultansi Konstruksi',
//                 'penerbit' => 'LPJK / INKINDO',
//                 'tanggal_terbit' => '2025-10-06',
//                 'tanggal_berlaku_sampai' => '2028-10-05',
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => '71101',
//                 'scope' => 'Jasa Pengembangan Lingkungan Bangunan (AL004) + Jasa Arsitektural (AR001, AR002)',
//                 'keterangan' => 'PB-UMKU: 025701110009300190004. Lampiran mencakup AR001, AR002.'
//             ],
//             [
//                 'jenis_sertifikat' => 'SBU Konstruksi',
//                 'nomor_sertifikat' => '025701110009300200011',
//                 'nama_sertifikat' => 'Jasa Desain Interior',
//                 'penerbit' => 'LPJK / INKINDO',
//                 'tanggal_terbit' => '2023-02-20',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => '74120',
//                 'scope' => 'Jasa Desain Interior pada Bangunan Gedung (AR003)',
//                 'keterangan' => 'PJSKBU: DESTRIYAN HANDOKO.'
//             ],
//             [
//                 'jenis_sertifikat' => 'SBU Konstruksi',
//                 'nomor_sertifikat' => '025701110009300190007',
//                 'nama_sertifikat' => 'Jasa Rekayasa Konstruksi',
//                 'penerbit' => 'LPJK / INKINDO',
//                 'tanggal_terbit' => '2022-12-12',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => '71102',
//                 'scope' => 'Jasa Rekayasa Konstruksi Bangunan Gedung (RK001)',
//                 'keterangan' => 'PJSKBU: ANGGI ROHYADI.'
//             ],
//             [
//                 'jenis_sertifikat' => 'SBU Konstruksi',
//                 'nomor_sertifikat' => '025701110009300310001',
//                 'nama_sertifikat' => 'Jasa Rekayasa Teknik Sipil',
//                 'penerbit' => 'LPJK / INKINDO',
//                 'tanggal_terbit' => '2025-10-07',
//                 'tanggal_berlaku_sampai' => '2028-10-06',
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => '71102',
//                 'scope' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air (RK002)',
//                 'keterangan' => 'PJSKBU: JAKA NURUL ARYANA.'
//             ],

//             // ========== 3. SBU Non Konstruksi (7) ==========
//             [
//                 'jenis_sertifikat' => 'SBU Non Konstruksi',
//                 'nomor_sertifikat' => '1.SS-32.73-25-0037',
//                 'nama_sertifikat' => 'Jasa Survey',
//                 'penerbit' => 'INKINDO / KADIN',
//                 'tanggal_terbit' => '2025-04-10',
//                 'tanggal_berlaku_sampai' => '2027-04-10',
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => null,
//                 'scope' => 'Survey Teristris, Penginderaan Jauh, Hidrografi, SIG, Kadastral, Geologi, Pertanian, Non Seismik',
//                 'keterangan' => 'Registrasi KADIN 250410-111004.'
//             ],
//             [
//                 'jenis_sertifikat' => 'SBU Non Konstruksi',
//                 'nomor_sertifikat' => '1.SI-32.73-25-0037',
//                 'nama_sertifikat' => 'Jasa Studi, Penelitian dan Bantuan Teknik',
//                 'penerbit' => 'INKINDO / KADIN',
//                 'tanggal_terbit' => '2025-04-10',
//                 'tanggal_berlaku_sampai' => '2027-04-10',
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => null,
//                 'scope' => 'Studi Makro, Studi Kelayakan, Perencanaan Umum, Penelitian, Bantuan Teknik',
//                 'keterangan' => null
//             ],
//             [
//                 'jenis_sertifikat' => 'SBU Non Konstruksi',
//                 'nomor_sertifikat' => '1.SC-32.73-25-0037',
//                 'nama_sertifikat' => 'Jasa Khusus',
//                 'penerbit' => 'INKINDO / KADIN',
//                 'tanggal_terbit' => '2025-04-10',
//                 'tanggal_berlaku_sampai' => '2027-04-10',
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => null,
//                 'scope' => 'Jasa Teknologi Informasi, Penilai, Surveyor Independen, Sertifikasi, Inspeksi Teknik, Kehumasan',
//                 'keterangan' => null
//             ],
//             [
//                 'jenis_sertifikat' => 'SBU Non Konstruksi',
//                 'nomor_sertifikat' => '1.MS-32.73-25-0037',
//                 'nama_sertifikat' => 'Jasa Konsultansi Manajemen',
//                 'penerbit' => 'INKINDO / KADIN',
//                 'tanggal_terbit' => '2025-04-10',
//                 'tanggal_berlaku_sampai' => '2027-04-10',
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => null,
//                 'scope' => 'Perencanaan Akuntansi, Pelatihan SDM, Konsultasi Manajemen Fungsional, Konsultasi Hukum Bisnis',
//                 'keterangan' => null
//             ],
//             [
//                 'jenis_sertifikat' => 'SBU Non Konstruksi',
//                 'nomor_sertifikat' => '1.03-32.73-25-0037',
//                 'nama_sertifikat' => 'Telematika',
//                 'penerbit' => 'INKINDO / KADIN',
//                 'tanggal_terbit' => '2025-04-10',
//                 'tanggal_berlaku_sampai' => '2027-04-10',
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => null,
//                 'scope' => 'Telekomunikasi Darat/Satelit, Perangkat Keras, Konten, Aplikasi',
//                 'keterangan' => null
//             ],
//             [
//                 'jenis_sertifikat' => 'SBU Non Konstruksi',
//                 'nomor_sertifikat' => '1.02-32.73-25-0037',
//                 'nama_sertifikat' => 'Transportasi',
//                 'penerbit' => 'INKINDO / KADIN',
//                 'tanggal_terbit' => '2025-04-10',
//                 'tanggal_berlaku_sampai' => '2027-04-10',
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => null,
//                 'scope' => 'Pengembangan Sarana Transportasi, Legislasi, Usaha Angkutan, Analisis Dampak Lalu Lintas',
//                 'keterangan' => null
//             ],
//             [
//                 'jenis_sertifikat' => 'SBU Non Konstruksi',
//                 'nomor_sertifikat' => '1.01-32.73-25-0037',
//                 'nama_sertifikat' => 'Pengembangan Pertanian dan Perdesaan',
//                 'penerbit' => 'INKINDO / KADIN',
//                 'tanggal_terbit' => '2025-04-10',
//                 'tanggal_berlaku_sampai' => '2027-04-10',
//                 'kualifikasi' => 'Kecil',
//                 'kode_kbli' => null,
//                 'scope' => 'Prasarana Sosial, Kehutanan, Perikanan dan Kelautan',
//                 'keterangan' => null
//             ],

//             // ========== 4. ISO (4) ==========
//             [
//                 'jenis_sertifikat' => 'ISO',
//                 'nomor_sertifikat' => 'QAIS-Q-INDO-PM-11.25.004',
//                 'nama_sertifikat' => 'ISO 9001:2015 Quality Management System',
//                 'penerbit' => 'QACS International',
//                 'tanggal_terbit' => '2025-01-04',
//                 'tanggal_berlaku_sampai' => '2028-01-03',
//                 'kualifikasi' => null,
//                 'kode_kbli' => null,
//                 'scope' => 'Konsultansi IT, Arsitektur, Teknik, Desain Interior, Pengujian Lab, Jajak Pendapat',
//                 'keterangan' => 'IAF Code 34 & 35.'
//             ],
//             [
//                 'jenis_sertifikat' => 'ISO',
//                 'nomor_sertifikat' => 'QAIS-E-INDO-PM-11.25.003',
//                 'nama_sertifikat' => 'ISO 14001:2015 Environmental Management System',
//                 'penerbit' => 'QACS International',
//                 'tanggal_terbit' => '2025-01-04',
//                 'tanggal_berlaku_sampai' => '2028-01-03',
//                 'kualifikasi' => null,
//                 'kode_kbli' => null,
//                 'scope' => 'Sistem Manajemen Lingkungan',
//                 'keterangan' => null
//             ],
//             [
//                 'jenis_sertifikat' => 'ISO',
//                 'nomor_sertifikat' => 'QAIS-ABM-INDO-PM-11.25.002',
//                 'nama_sertifikat' => 'ISO 37001:2016 Anti Bribery Management System',
//                 'penerbit' => 'QACS International',
//                 'tanggal_terbit' => '2025-01-04',
//                 'tanggal_berlaku_sampai' => '2028-01-03',
//                 'kualifikasi' => null,
//                 'kode_kbli' => null,
//                 'scope' => 'Sistem Manajemen Anti Penyuapan',
//                 'keterangan' => null
//             ],
//             [
//                 'jenis_sertifikat' => 'ISO',
//                 'nomor_sertifikat' => 'QAIS-OH-INDO-PM-11.25.003',
//                 'nama_sertifikat' => 'ISO 45001:2018 Occupational Health & Safety',
//                 'penerbit' => 'QACS International',
//                 'tanggal_terbit' => '2025-01-04',
//                 'tanggal_berlaku_sampai' => '2028-01-03',
//                 'kualifikasi' => null,
//                 'kode_kbli' => null,
//                 'scope' => 'Kesehatan dan Keselamatan Kerja',
//                 'keterangan' => null
//             ],

//             // ========== 5. NIB ==========
//             [
//                 'jenis_sertifikat' => 'NIB',
//                 'nomor_sertifikat' => '0257011100093',
//                 'nama_sertifikat' => 'Nomor Induk Berusaha',
//                 'penerbit' => 'Menteri Investasi/BKPM',
//                 'tanggal_terbit' => '2020-11-09',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => null,
//                 'kode_kbli' => null,
//                 'scope' => 'Seluruh kegiatan usaha sesuai lampiran',
//                 'keterangan' => 'Berlaku selama menjalankan kegiatan usaha di seluruh Indonesia.'
//             ],

//             // ========== 6. NPWP ==========
//             [
//                 'jenis_sertifikat' => 'NPWP',
//                 'nomor_sertifikat' => '96.431.796.0-429.000',
//                 'nama_sertifikat' => 'Nomor Pokok Wajib Pajak',
//                 'penerbit' => 'Direktorat Jenderal Pajak',
//                 'tanggal_terbit' => '2020-10-04',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => null,
//                 'kode_kbli' => null,
//                 'scope' => null,
//                 'keterangan' => 'Terdaftar sejak 4 November 2020.'
//             ],

//             // ========== 7. SKT ==========
//             [
//                 'jenis_sertifikat' => 'SKT',
//                 'nomor_sertifikat' => 'S-12889KT/WPJ.09/KP.0303/2020',
//                 'nama_sertifikat' => 'Surat Keterangan Terdaftar Pajak',
//                 'penerbit' => 'Direktorat Jenderal Pajak',
//                 'tanggal_terbit' => '2020-11-04',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => null,
//                 'kode_kbli' => null,
//                 'scope' => null,
//                 'keterangan' => 'Mencakup kewajiban PPh, PPN, PBB, dll.'
//             ],

//             // ========== 8. PKP ==========
//             [
//                 'jenis_sertifikat' => 'PKP',
//                 'nomor_sertifikat' => 'S-544PKP/WPJ.09/KP.0303/2020',
//                 'nama_sertifikat' => 'Pengukuhan Pengusaha Kena Pajak',
//                 'penerbit' => 'Direktorat Jenderal Pajak',
//                 'tanggal_terbit' => '2020-12-16',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => null,
//                 'kode_kbli' => null,
//                 'scope' => null,
//                 'keterangan' => 'Dikukuhkan sebagai PKP.'
//             ],

//             // ========== 9. SPT Tahunan ==========
//             [
//                 'jenis_sertifikat' => 'SPT Tahunan',
//                 'nomor_sertifikat' => '22960306587256910511',
//                 'nama_sertifikat' => 'SPT Tahunan PPh Badan 2024',
//                 'penerbit' => 'Direktorat Jenderal Pajak',
//                 'tanggal_terbit' => '2025-03-10',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => null,
//                 'kode_kbli' => null,
//                 'scope' => 'Tahun Pajak 2024, Status Nihil',
//                 'keterangan' => 'Disampaikan secara elektronik.'
//             ],

//             // ========== 10. Akte Pendirian ==========
//             [
//                 'jenis_sertifikat' => 'Akte Pendirian',
//                 'nomor_sertifikat' => '19',
//                 'nama_sertifikat' => 'Akta Pendirian PT Mitra Nusa Konsulindo',
//                 'penerbit' => 'Notaris Susyana Herlawati, S.H., M.Kn',
//                 'tanggal_terbit' => '2020-10-22',
//                 'tanggal_berlaku_sampai' => null,
//                 'kualifikasi' => null,
//                 'kode_kbli' => null,
//                 'scope' => 'Modal Dasar Rp 1.000.000.000, Modal Ditempatkan Rp 400.000.000',
//                 'keterangan' => 'Telah disahkan Kemenkumham No. AHU-0057316.AH.01.01.TAHUN.2020 tanggal 04-11-2020.'
//             ],
//         ];

//         foreach ($data as $item) {
//             Certificate::updateOrCreate(
//                 ['nomor_sertifikat' => $item['nomor_sertifikat']],
//                 $item
//             );
//         }
//     }
// }
