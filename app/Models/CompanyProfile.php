<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $fillable = [
        'name',
        'type',
        'address_main',
        'address_branch',
        'established_year',
        'npwp',
        'nib',
        'association',
        'is_pkp_active',        // boolean: true = aktif, false = tidak aktif
        'pkp_activation_date',   // date (nullable): tanggal pengukuhan PKP
        'telepon_pt',
        'email_pt',
        'website_pt',
        'inkindo',
        'kadin',
    ];

    protected $casts = [
        'is_pkp_active' => 'boolean',
        'pkp_activation_date' => 'date',
        'established_year' => 'integer',
    ];

    /**
     * Accessor untuk menampilkan status PKP dalam bentuk teks.
     * Contoh output:
     * - "Aktif sejak 16 Desember 2020" (jika aktif dan tanggal terisi)
     * - "Aktif (tanggal tidak tersedia)" (jika aktif tapi tanggal null)
     * - "Tidak terdaftar sebagai PKP" (jika tidak aktif)
     */
    public function getPkpStatusTextAttribute(): string
    {
        if (!$this->is_pkp_active) {
            return 'Tidak terdaftar sebagai PKP';
        }

        if ($this->pkp_activation_date) {
            // Guard against non-DateTime values to avoid static analyzer/type errors
            if ($this->pkp_activation_date instanceof \DateTimeInterface) {
                return 'Aktif sejak ' . $this->pkp_activation_date->format('d F Y');
            }

            // Fallback for string/other values
            $ts = strtotime((string) $this->pkp_activation_date);
            if ($ts !== false) {
                return 'Aktif sejak ' . date('d F Y', $ts);
            }
        }

        return 'Aktif (tanggal tidak tersedia)';
    }
}
