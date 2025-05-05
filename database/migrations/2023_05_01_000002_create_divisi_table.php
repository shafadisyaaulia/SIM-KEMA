<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisiTable extends Migration
{
    public function up()
    {
        Schema::create('divisi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('kegiatan_id')->constrained('kegiatan')->onDelete('cascade');
            $table->text('deskripsi')->nullable();
            $table->integer('kuota')->default(10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('divisi');
    }
}
