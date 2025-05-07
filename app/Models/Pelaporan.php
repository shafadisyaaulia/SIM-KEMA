<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kegiatan_id',
        'judul',
        'deskripsi',
        'link_grup',
        'link_laporan',
    ];

    // Relasi ke model Kegiatan
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
