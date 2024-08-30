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
        if (!Schema::hasTable('siswas')) {
            Schema::create('siswas', function (Blueprint $table) {
                $table->string('nisin', 10)->primary();
                $table->string('nama', 100);
                $table->text('alamat');
                $table->string('no_telp', 15);
                $table->integer('kode_kelas');
                $table->timestamps();

                $table->foreign('kode_kelas')->references('kode_kelas')->on('kelas')->onDelete('cascade');
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
