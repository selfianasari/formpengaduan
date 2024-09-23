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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor', 128);
            $table->text('alamat')->nullable();
            $table->string('no_telepon_atau_email')->nullable();
            $table->string('kategori_pengaduan');
            $table->longText('deskripsi_pengaduan');
            $table->string('lokasi_pengaduan')->nullable();
            $table->string('foto_bukti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
