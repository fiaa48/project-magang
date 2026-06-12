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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // PT
            $table->text('address_main');   // kantor pusat
            $table->text('address_branch'); // kantor cabang
            $table->year('established_year');
            $table->string('npwp');
            $table->string('nib');
            $table->string('association');
            $table->boolean('is_pkp_active')->default(false);
            $table->date('pkp_activation_date')->nullable();
            $table->string('telepon_pt')->nullable();
            $table->string('email_pt')->nullable();
            $table->string('website_pt')->nullable();
            $table->string('inkindo')->nullable();
            $table->string('kadin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
