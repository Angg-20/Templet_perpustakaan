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
        Schema::create('bukus', function (Blueprint $table) {
            $table->string('kode_buku', 20)->primary();
            $table->string('judul', 255);
            $table->string('penerbit', 255);
            $table->year('tahunterbit');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukuses');
    }
};
