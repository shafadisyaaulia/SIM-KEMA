<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Panitia;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index()
    {
        $totalKegiatan = Kegiatan::count();
        $totalPendaftar = Panitia::count();
        $totalUsers = User::where('role', 'user')->count();
        $kegiatanAktif = Kegiatan::where('status', 'aktif')->count();
        
        $pendaftarTerbaru = Panitia::with(['user', 'kegiatan', 'divisi'])
                                ->orderBy('created_at', 'desc')
                                ->take(5)
                                ->get();
        
        return view('admin.dashboard', compact(
            'totalKegiatan', 
            'totalPendaftar', 
            'totalUsers', 
            'kegiatanAktif', 
            'pendaftarTerbaru'
        ));
    }
}