<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CertificationController extends Controller
{
    public function index()
    {
        $activeCertifications = [
            [
                'type' => 'SBU Konstruksi - Jasa Pengembangan Pemanfaatan Ruang',
                'description' => 'Klasifikasi: Kecil, Kode: AL001',
                'number' => '025701110009300200010',
                'issuer' => 'LPJK / Kementerian PUPR',
                'valid_from' => '2025-10-06',
                'valid_until' => '2028-10-05',
                'status' => 'active',
                'document' => 'documents/certificates/sbu-al001.pdf'
            ],
            [
                'type' => 'SBU Konstruksi - Jasa Arsitektural Bangunan Gedung',
                'description' => 'Klasifikasi: Kecil, Kode: AR001',
                'number' => 'F.3.01.AL.K.02.2025.0021604',
                'issuer' => 'INKINDO / LPJK',
                'valid_from' => '2025-10-13',
                'valid_until' => '2028-10-12',
                'status' => 'active',
                'document' => 'documents/certificates/sbu-ar001.pdf'
            ],
            [
                'type' => 'ISO 9001:2015 - Quality Management System',
                'description' => 'Consultancy and Management System',
                'number' => 'QAIS-Q-INDO-PM-11.25.004',
                'issuer' => 'QACS International (Accredited by IAS USA)',
                'valid_from' => '2025-01-04',
                'valid_until' => '2028-01-03',
                'status' => 'active',
                'document' => 'documents/certificates/iso-9001.pdf'
            ],
            [
                'type' => 'ISO 14001:2015 - Environmental Management System',
                'description' => 'Environmental Management for Consultancy Services',
                'number' => 'QAIS-E-INDO-PM-11.25.003',
                'issuer' => 'QACS International (Accredited by IAS USA)',
                'valid_from' => '2025-01-04',
                'valid_until' => '2028-01-03',
                'status' => 'active',
                'document' => 'documents/certificates/iso-14001.pdf'
            ],
            [
                'type' => 'ISO 45001:2018 - Occupational Health & Safety',
                'description' => 'OH&S Management System',
                'number' => 'QAIS-OH-INDO-PM-11.25.003',
                'issuer' => 'QACS International (Accredited by IAS USA)',
                'valid_from' => '2025-01-04',
                'valid_until' => '2028-01-03',
                'status' => 'active',
                'document' => 'documents/certificates/iso-45001.pdf'
            ],
            [
                'type' => 'ISO 37001:2016 - Anti-Bribery Management System',
                'description' => 'Anti-Bribery Management System',
                'number' => 'QAIS-ABM-INDO-PM-11.25.002',
                'issuer' => 'QACS International (Accredited by IAS USA)',
                'valid_from' => '2025-01-04',
                'valid_until' => '2028-01-03',
                'status' => 'active',
                'document' => 'documents/certificates/iso-37001.pdf'
            ],
            [
                'type' => 'NIB (Nomor Induk Berusaha)',
                'description' => 'Perizinan Berusaha Berbasis Risiko',
                'number' => '0257011100093',
                'issuer' => 'Kementerian Investasi / BKPM',
                'valid_from' => '2020-11-09',
                'valid_until' => 'Tidak Terbatas',
                'status' => 'active',
                'document' => 'documents/legal/nib.pdf'
            ],
            [
                'type' => 'Akte Pendirian & Pengesahan',
                'description' => 'Pengesahan Badan Hukum PT',
                'number' => 'AHU-0057316.AH.01.01.TAHUN 2020',
                'issuer' => 'Kementerian Hukum dan HAM RI',
                'valid_from' => '2020-11-04',
                'valid_until' => 'Tidak Terbatas',
                'status' => 'active',
                'document' => 'documents/legal/akte-pendirian.pdf'
            ],
            [
                'type' => 'PKP (Pengusaha Kena Pajak)',
                'description' => 'Surat Pengukuhan Pengusaha Kena Pajak',
                'number' => 'S-544PKP/WPJ.09/KP.0303/2020',
                'issuer' => 'Direktorat Jenderal Pajak',
                'valid_from' => '2020-12-16',
                'valid_until' => 'Tidak Terbatas',
                'status' => 'active',
                'document' => 'documents/legal/pkp.pdf'
            ],
            [
                'type' => 'SBU Non-Konstruksi - INKINDO',
                'description' => 'Jasa Konsultansi Non-Konstruksi',
                'number' => '1.SS-32.73-25-0037',
                'issuer' => 'INKINDO / KADIN',
                'valid_from' => '2025-04-10',
                'valid_until' => '2027-04-10',
                'status' => 'active',
                'document' => 'documents/certificates/inkindo-non-konstruksi.pdf'
            ]
        ];
        
        return view('certifications.index', compact('activeCertifications'));
    }
    
    public function sbu()
    {
        $sbuCategories = [
            [
                'category' => 'Jasa Pengembangan (AL)',
                'services' => [
                    [
                        'code' => 'AL001',
                        'name' => 'Jasa Pengembangan Pemanfaatan Ruang',
                        'qualification' => 'Kecil',
                        'valid_until' => '2028-10-05',
                        'pjtbu' => 'NURUL ARAFAH F 2010 01304 2024 0390458 PW 01'
                    ],
                    [
                        'code' => 'AL002',
                        'name' => 'Jasa Pengembangan Wilayah',
                        'qualification' => 'Kecil',
                        'valid_until' => '2028-10-05',
                        'pjtbu' => 'NURUL ARAFAH F 2010 01304 2024 0390458 PW 01'
                    ],
                    [
                        'code' => 'AL003',
                        'name' => 'Jasa Pengembangan Perkotaan',
                        'qualification' => 'Kecil',
                        'valid_until' => '2028-10-12',
                        'pjtbu' => 'NURUL ARAFAH F 2010 01304 2024 0390458 PW 01'
                    ],
                    [
                        'code' => 'AL004',
                        'name' => 'Jasa Pengembangan Lingkungan Bangunan dan Lanskap',
                        'qualification' => 'Kecil',
                        'valid_until' => '2028-10-05',
                        'pjtbu' => 'NURUL ARAFAH F 2010 01304 2024 0390458 PW 01'
                    ]
                ]
            ],
            [
                'category' => 'Jasa Arsitektural (AR)',
                'services' => [
                    [
                        'code' => 'AR001',
                        'name' => 'Jasa Arsitektural Bangunan Gedung Hunian dan Non Hunian',
                        'qualification' => 'Kecil',
                        'valid_until' => '2028-10-12',
                        'pjtbu' => 'DESTRIYAN HANDOKO S.Ars 1.1.101.3.148.04.1949553'
                    ],
                    [
                        'code' => 'AR002',
                        'name' => 'Jasa Arsitektural Lainnya',
                        'qualification' => 'Kecil',
                        'valid_until' => '2028-10-12',
                        'pjtbu' => 'DESTRIYAN HANDOKO S.Ars 1.1.101.3.148.04.1949553'
                    ],
                    [
                        'code' => 'AR003',
                        'name' => 'Jasa Desain Interior pada Bangunan Gedung dan Bangunan Sipil',
                        'qualification' => 'Kecil',
                        'valid_until' => '2028-10-12',
                        'pjtbu' => 'DESTRIYAN HANDOKO S.Ars 1.1.101.3.148.04.1949553'
                    ]
                ]
            ],
            [
                'category' => 'Jasa Rekayasa (RK)',
                'services' => [
                    [
                        'code' => 'RK001',
                        'name' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
                        'qualification' => 'Kecil',
                        'valid_until' => '2028-10-12',
                        'pjtbu' => 'ANGGI ROHYADI F 1993 21540 2022 0029193 SI 01'
                    ],
                    [
                        'code' => 'RK002',
                        'name' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air',
                        'qualification' => 'Kecil',
                        'valid_until' => '2028-10-06',
                        'pjtbu' => 'JAKA NURUL ARYANA F 1993 10168 2022 0012864 SI 10'
                    ],
                    [
                        'code' => 'RK003',
                        'name' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi',
                        'qualification' => 'Kecil',
                        'valid_until' => '2028-10-06',
                        'pjtbu' => 'FADHIL FADILLAH F 1993 21409 2022 0029086 SI 03'
                    ],
                    [
                        'code' => 'RK005',
                        'name' => 'Jasa Rekayasa Lainnya',
                        'qualification' => 'Kecil',
                        'valid_until' => '2028-10-06',
                        'pjtbu' => 'TEGUH PRANDITA YOGIE, ST 1.5.501.2.142.10.1129388'
                    ]
                ]
            ]
        ];
        
        $generalInfo = [
            'nomor_registrasi' => 'F.3.01.AL.K.02.2025.0021604',
            'pjbu' => 'Muria Cipta, ST',
            'pjbu_umum' => 'TEGUH PRANDITA YOGIE, ST / F 2238 00187 2024 0268284 TL 02',
            'asosiasi' => 'INKINDO',
            'email' => 'mitranusa.kons@gmail.com',
            'npwp' => '964317960429000',
            'jenis_usaha' => 'Jasa Konsultansi Konstruksi'
        ];
        
        return view('certifications.sbu', compact('sbuCategories', 'generalInfo'));
    }
    
    public function iso()
    {
        $isoCertificates = [
            [
                'standard' => 'ISO 9001:2015',
                'title' => 'Quality Management System',
                'scope' => 'Consultancy and Management System Consultancy for (Information Technology and other computer services, computer consulting and other computer facilities management, architecture, engineering and technical consulting, interior design activities), laboratory testing services, public opinion polls',
                'certificate_no' => 'QAIS-Q-INDO-PM-11.25.004',
                'issued_date' => '2025-01-04',
                'valid_until' => '2028-01-03',
                'accredited_by' => 'International Accreditation Service (IAS) - USA',
                'certification_body' => 'QACS International Pvt. Ltd.',
                'status' => 'active'
            ],
            [
                'standard' => 'ISO 14001:2015',
                'title' => 'Environmental Management System',
                'scope' => 'Consultancy and Management System Consultancy for (Information Technology and other computer services, computer consulting and other computer facilities management, architecture, engineering and technical consulting, interior design activities), laboratory testing services, public opinion polls',
                'certificate_no' => 'QAIS-E-INDO-PM-11.25.003',
                'issued_date' => '2025-01-04',
                'valid_until' => '2028-01-03',
                'accredited_by' => 'International Accreditation Service (IAS) - USA',
                'certification_body' => 'QACS International Pvt. Ltd.',
                'status' => 'active'
            ],
            [
                'standard' => 'ISO 45001:2018',
                'title' => 'Occupational Health & Safety Management System',
                'scope' => 'Consultancy and Management System Consultancy for (Information Technology and other computer services, computer consulting and other computer facilities management, architecture, engineering and technical consulting, interior design activities), laboratory testing services, public opinion polls',
                'certificate_no' => 'QAIS-OH-INDO-PM-11.25.003',
                'issued_date' => '2025-01-04',
                'valid_until' => '2028-01-03',
                'accredited_by' => 'International Accreditation Service (IAS) - USA',
                'certification_body' => 'QACS International Pvt. Ltd.',
                'status' => 'active'
            ],
            [
                'standard' => 'ISO 37001:2016',
                'title' => 'Anti-Bribery Management System',
                'scope' => 'Consultancy and Management System Consultancy for (Information Technology and other computer services, computer consulting and other computer facilities management, architecture, engineering and technical consulting, interior design activities), laboratory testing services, public opinion polls',
                'certificate_no' => 'QAIS-ABM-INDO-PM-11.25.002',
                'issued_date' => '2025-01-04',
                'valid_until' => '2028-01-03',
                'accredited_by' => 'International Accreditation Service (IAS) - USA',
                'certification_body' => 'QACS International Pvt. Ltd.',
                'status' => 'active'
            ]
        ];
        
        return view('certifications.iso', compact('isoCertificates'));
    }
    
    public function legal()
    {
        $legalDocuments = [
            [
                'category' => 'Pendirian Perusahaan',
                'documents' => [
                    [
                        'name' => 'Akte Pendirian PT',
                        'number' => 'No. 19 tanggal 22 Oktober 2020',
                        'issued_by' => 'Notaris SUSYANA HERLAWATI, S.H., M.Kn.',
                        'issued_date' => '2020-10-22',
                        'file' => 'documents/legal/akte-pendirian.pdf'
                    ],
                    [
                        'name' => 'Pengesahan Kemenkumham',
                        'number' => 'AHU-0057316.AH.01.01.TAHUN 2020',
                        'issued_by' => 'Kementerian Hukum dan HAM RI',
                        'issued_date' => '2020-11-04',
                        'file' => 'documents/legal/pengesahan-kemenkumham.pdf'
                    ],
                    [
                        'name' => 'Akte Perubahan',
                        'number' => 'No. 03 tanggal 07 Desember 2023',
                        'issued_by' => 'Notaris SUSYANA HERLAWATI, S.H., M.Kn.',
                        'issued_date' => '2023-12-07',
                        'file' => 'documents/legal/akte-perubahan.pdf'
                    ]
                ]
            ],
            [
                'category' => 'Perizinan Usaha',
                'documents' => [
                    [
                        'name' => 'Nomor Induk Berusaha (NIB)',
                        'number' => '0257011100093',
                        'issued_by' => 'Kementerian Investasi / BKPM',
                        'issued_date' => '2020-11-09',
                        'file' => 'documents/legal/nib.pdf'
                    ],
                    [
                        'name' => 'Sertifikat Standar - Aktivitas Arsitektur',
                        'number' => '02570111000930013',
                        'issued_by' => 'Kementerian PUPR',
                        'issued_date' => '2024-10-01',
                        'file' => 'documents/legal/sertifikat-standar-71101.pdf'
                    ],
                    [
                        'name' => 'Sertifikat Standar - Aktivitas Keinsinyuran',
                        'number' => '02570111000930015',
                        'issued_by' => 'Kementerian PUPR',
                        'issued_date' => '2024-03-06',
                        'file' => 'documents/legal/sertifikat-standar-71102.pdf'
                    ]
                ]
            ],
            [
                'category' => 'Perpajakan',
                'documents' => [
                    [
                        'name' => 'Surat Keterangan Terdaftar (SKT)',
                        'number' => 'S-12889KT/WPJ.09/KP.0303/2020',
                        'issued_by' => 'Direktorat Jenderal Pajak',
                        'issued_date' => '2020-11-04',
                        'file' => 'documents/legal/skt.pdf'
                    ],
                    [
                        'name' => 'Surat Pengukuhan PKP',
                        'number' => 'S-544PKP/WPJ.09/KP.0303/2020',
                        'issued_by' => 'Direktorat Jenderal Pajak',
                        'issued_date' => '2020-12-16',
                        'file' => 'documents/legal/pkp.pdf'
                    ],
                    [
                        'name' => 'Keterangan Status Wajib Pajak',
                        'number' => 'KET-00011/KSWP-CT/KPP.0903/2025',
                        'issued_by' => 'Direktorat Jenderal Pajak',
                        'issued_date' => '2025-01-22',
                        'file' => 'documents/legal/status-wp.pdf'
                    ]
                ]
            ],
            [
                'category' => 'Keanggotaan',
                'documents' => [
                    [
                        'name' => 'Keanggotaan INKINDO',
                        'number' => '17744/P/1304.JB',
                        'issued_by' => 'Ikatan Nasional Konsultan Indonesia',
                        'issued_date' => '2020',
                        'file' => 'documents/legal/keanggotaan-inkindo.pdf'
                    ],
                    [
                        'name' => 'Keanggotaan KADIN',
                        'number' => '20112-2026270629',
                        'issued_by' => 'Kamar Dagang dan Industri Indonesia',
                        'issued_date' => '2020',
                        'file' => 'documents/legal/keanggotaan-kadin.pdf'
                    ]
                ]
            ]
        ];
        
        return view('certifications.legal', compact('legalDocuments'));
    }
}