<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
    {
        $management = [
            'top' => [
                'Dewan Komisaris',
                'Direktur Utama',
                'Direktur Operasional dan Teknis',
            ],
            'divisions' => [
                'Divisi Pengembangan',
                'Divisi Umum',
                'Divisi Pemasaran, Pembina Relasi dan Promosi',
                'Divisi Administrasi dan Personalia',
                'Divisi Keuangan dan Perlengkapan',
                'Divisi Tata Ruang',
                'Divisi Arsitektur dan Landscaping',
                'Divisi Lingkungan',
                'Divisi Sipil',
                'Divisi Manajemen',
            ],
            'support' => [
                'Tenaga Ahli',
                'Staff',
            ]
        ];

        return view('management.index', compact('management'));
    }
}
