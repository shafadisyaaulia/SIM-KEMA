@extends('layouts.app')

@section('title', 'Formulir Pendaftaran Kepanitiaan')

@section('content')
    <h1 class="page-title">Formulir Pendaftaran Kepanitiaan</h1>
    <p>Silakan isi formulir di bawah ini untuk mendaftarkan diri sebagai panitia kegiatan yang kamu minati.</p>
    
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="form-container">
                <form action="{{ route('panitia.daftar', ['kegiatan' => $kegiatan->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="kegiatan_id" value="{{ $kegiatan->id }}">
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text" class="form-control" id="npm" name="npm" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="kegiatan" class="form-label">Kegiatan yang ingin di ikuti</label>
                        <input type="text" class="form-control" id="kegiatan" value="{{ $kegiatan->nama }}" disabled>
                    </div>
                    
                    <div class="mb-3">
                        <label for="divisi_id" class="form-label">Divisi yang ingin di ikuti</label>
                        <select class="form-control" id="divisi_id" name="divisi_id" required>
                            <option value="">Pilih Divisi</option>
                            @foreach($kegiatan->divisi as $divisi)
                                <option value="{{ $divisi->id }}">{{ $divisi->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn-submit">KIRIM</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection