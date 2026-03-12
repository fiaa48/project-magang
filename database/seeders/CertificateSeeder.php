<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificate;
use Illuminate\Support\Facades\File;

class CertificateSeeder extends Seeder
{
    public function run()
    {
        $basePath = public_path('certificates');

        // ambil semua folder kategori
        $folders = File::directories($basePath);

        foreach ($folders as $folder) {

            $type = basename($folder); // nama folder jadi type

            $files = File::files($folder);

            foreach ($files as $file) {

                Certificate::create([
                    'name' => pathinfo($file->getFilename(), PATHINFO_FILENAME),
                    'image' => 'certificates/'.$type.'/'.$file->getFilename(),
                    'type' => $type,
                    'year' => date('Y')
                ]);

            }

        }
    }
}
