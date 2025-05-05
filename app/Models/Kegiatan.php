<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    
    protected $table = 'kegiatan';
    
    protected $fillable = [
        'nama',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];
    
    public function divisi()
    {
        return $this->hasMany(Divisi::class);
    }
    
    public function panitia()
    {
        return $this->hasMany(Panitia::class);
    }
}