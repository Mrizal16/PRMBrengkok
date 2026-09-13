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
       Schema::create('website_settings', function (Blueprint $table) {

    $table->id();

    $table->string('hero_title')->nullable();

    $table->string('hero_subtitle')->nullable();

    $table->string('ketua_nama')->nullable();

    $table->string('ketua_jabatan')->nullable();

    $table->text('deskripsi')->nullable();

    $table->string('foto_ketua')->nullable();

    $table->string('gambar_aum')->nullable();

    $table->string('gambar_ortom')->nullable();

    $table->timestamps();

});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_settings');
    }
};
