<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Panitia;
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

    return view('dashboard', compact('kegiatan'));
}
}