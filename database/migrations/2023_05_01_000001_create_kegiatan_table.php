<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanTable extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel kegiatan.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();  // Kolom ID utama
            $table->string('nama_kegiatan');  // Nama kegiatan
            $table->text('deskripsi')->nullable();  // Deskripsi kegiatan (nullable)
            $table->timestamps();  // Kolom waktu (created_at, updated_at)
        });
    }

    /**
     * Hapus tabel kegiatan jika migrasi dibatalkan.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
}
