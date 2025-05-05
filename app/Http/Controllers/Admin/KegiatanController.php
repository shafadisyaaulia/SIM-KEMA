<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Divisi;

class KegiatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index()
    {
        $kegiatan = Kegiatan::orderBy('created_at', 'desc')->get();
        return view('admin.kegiatan.index', compact('kegiatan'));
    }
    
    public function create()
    {
        return view('admin.kegiatan.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status' => 'required|in:aktif,selesai,coming_soon',
        ]);
        
        Kegiatan::create($validated);
        
        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan.');
    }
    
    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }
    
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status' => 'required|in:aktif,selesai,coming_soon',
        ]);
        
        $kegiatan->update($validated);
        
        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui.');
    }
    
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        
        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil dihapus.');
    }
    
    // Mengelola divisi untuk kegiatan tertentu
    public function divisi(Kegiatan $kegiatan)
    {
        $divisi = $kegiatan->divisi;
        return view('admin.kegiatan.divisi', compact('kegiatan', 'divisi'));
    }
    
    public function tambahDivisi(Request $request, Kegiatan $kegiatan)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kuota' => 'required|integer|min:1',
        ]);
        
        $divisi = new Divisi();
        $divisi->nama = $request->nama;
        $divisi->kegiatan_id = $kegiatan->id;
        $divisi->deskripsi = $request->deskripsi;
        $divisi->kuota = $request->kuota;
        $divisi->save();
        
        return redirect()->route('admin.kegiatan.divisi', $kegiatan->id)->with('success', 'Divisi berhasil ditambahkan.');
    }
    
    public function hapusDivisi(Divisi $divisi)
    {
        $kegiatanId = $divisi->kegiatan_id;
        $divisi->delete();
        
        return redirect()->route('admin.kegiatan.divisi', $kegiatanId)->with('success', 'Divisi berhasil dihapus.');
    }
}
