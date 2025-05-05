<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    
    protected $table = 'divisi';
    
    protected $fillable = [
        'nama',
        'kegiatan_id',
    ];
    
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
    
    public function panitia()
    {
        return $this->hasMany(Panitia::class);
    }
}