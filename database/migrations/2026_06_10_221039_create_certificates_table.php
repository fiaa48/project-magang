<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            //DATA KEDUA
            $table->string('jenis_sertifikat', 100);
            $table->string('nomor_sertifikat', 200)->nullable();
            $table->string('nama_sertifikat', 200)->nullable();
            $table->string('penerbit', 200)->nullable();
            $table->date('tanggal_terbit')->nullable();
            $table->date('tanggal_berlaku_sampai')->nullable();
            $table->string('kualifikasi', 100)->nullable();
            $table->string('kode_kbli', 50)->nullable();
            $table->text('scope')->nullable();
            $table->text('keterangan')->nullable();

            // Kolom versi pertama
            $table->string('name')->nullable();   // atau NOT NULL jika wajib
            $table->string('type')->nullable();
            $table->string('siujk')->nullable();
            $table->string('siup')->nullable();
            $table->string('sbu_konstruksi')->nullable();
            $table->string('sbu_non_konstruksi')->nullable();
            $table->string('pkp')->nullable();
            $table->string('skt_pajak')->nullable();
            $table->string('bukti_spt')->nullable();
            $table->string('iso')->nullable();
            $table->string('sertifikasi_baru')->nullable();
            $table->string('akta_pendirian')->nullable();
            $table->string('akta_perubahan')->nullable();
            $table->string('pengesahan_ahu')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificates');
    }
};
