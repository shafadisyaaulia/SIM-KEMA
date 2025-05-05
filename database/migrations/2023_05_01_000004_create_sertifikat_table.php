<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSertifikatTable extends Migration
{
    public function up()
    {
        Schema::create('sertifikat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('panitia_id')->constrained('panitia')->onDelete('cascade');
            $table->string('file_path');
            $table->string('nomor_sertifikat')->unique();
            $table->date('tanggal_terbit');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sertifikat');
    }
}