<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('section');
            // index, construction_consultancy, non_construction_consultancy, architectural, engineering

            $table->string('category')->nullable();
            // construction / non_construction / dll

            $table->json('data');
            // 🔥 ISI FULL ARRAY PERSIS DARI CONTROLLER

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
