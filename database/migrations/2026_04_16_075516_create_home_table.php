<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home', function (Blueprint $table) {
            $table->id();

            // HERO
            $table->string('hero_title');
            $table->text('hero_description');
            $table->text('hero_specialist');

            // ABOUT (Profil Singkat)
            $table->text('about_desc_1');
            $table->text('about_desc_2');

            // BACKGROUND (Latar Belakang)
            $table->text('background_desc_1');
            $table->text('background_desc_2');
            $table->json('background_list');

            // STATS
            $table->integer('experience_years');
            $table->integer('projects_done');
            $table->integer('certifications');
            $table->integer('experts');

            // CTA
            $table->string('cta_title');
            $table->text('cta_description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home');
    }
};
