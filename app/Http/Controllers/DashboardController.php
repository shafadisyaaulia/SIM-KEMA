<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Ambil semua kegiatan
        $kegiatan = Kegiatan::with(['panitia' => function ($query) use ($userId) {
            $query->where('user_id', $userId);
        }])->get();

        return view('daftar_kegiatan', compact('kegiatan'));
    }
}
