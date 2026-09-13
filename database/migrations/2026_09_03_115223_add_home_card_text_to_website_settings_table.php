<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('website_settings', function (Blueprint $table) {

        $table->string('aum_title')->nullable();

        $table->text('aum_description')->nullable();


        $table->string('ortom_title')->nullable();

        $table->text('ortom_description')->nullable();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('website_settings', function (Blueprint $table) {
            //
        });
    }
};
