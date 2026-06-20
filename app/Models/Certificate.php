<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Certificate extends Model
// {
//     protected $table = 'certificates';

//     protected $fillable = [
//         'name',
//         'type',
//         'year',
//         'image',
//         'file',
//         'certificate_number',
//         'valid_until',
//         'nib',
//         'siujk',
//         'siup',
//         'sbu_konstruksi',
//         'sbu_non_konstruksi',
//         'pkp',
//         'skt_pajak',
//         'bukti_spt',
//         'iso',
//         'sertifikasi_baru',
//     ];
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $table = 'certificates';
    protected $fillable = [
        // Versi 2 (kolom sertifikat terstruktur)
        'jenis_sertifikat',
        'nomor_sertifikat',
        'nama_sertifikat',
        'penerbit',
        'tanggal_terbit',
        'tanggal_berlaku_sampai',
        'kualifikasi',
        'kode_kbli',
        'scope',
        'keterangan',

        // Kolom versi pertama
        'name',
        'type',
        'siujk',
        'siup',
        'sbu_konstruksi',
        'sbu_non_konstruksi',
        'pkp',
        'skt_pajak',
        'bukti_spt',
        'iso',
        'sertifikasi_baru',
        'akta_pendirian',
        'akta_perubahan',
        'pengesahan_ahu',
    ];

        /**
     * Kolom yang harus di-casting ke tipe data tertentu.
     */
    protected $casts = [
        'tanggal_terbit' => 'date',
        'tanggal_berlaku_sampai' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Jika Anda ingin mengamankan atribut tertentu, bisa pakai $guarded = [] untuk all mass assignable
    // protected $guarded = [];
}
