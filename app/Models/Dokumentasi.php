<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;
    
    protected $table = 'dokumentasi';
    
    protected $fillable = [
        'kegiatan_id',
        'judul',
        'deskripsi',
        'link',
    ];
    
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}