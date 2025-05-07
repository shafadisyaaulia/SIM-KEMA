{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-title">Daftar Kegiatan</h1>

        @foreach ($kegiatan as $item)
            @php
                $userPanitia = $item->panitia->first();
                $status = $userPanitia->status ?? 'none';
            @endphp

            <div class="card activity-card mb-4">
                <div class="card-body">
                    <h2 class="activity-title">{{ $item->nama_kegiatan }}</h2>
                    <p class="activity-description">{{ $item->deskripsi }}</p>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <a href="{{ route('formulir.pendaftaran', ['kegiatan' => $item->id]) }}"
                            class="btn btn-primary">Daftar Panitia</a>
                        <div class="activity-status">
                            @if ($status === 'accepted')
                                <span class="status-indicator accepted"></span> <span class="text-success">accepted</span>
                            @elseif ($status === 'rejected')
                                <span class="status-indicator rejected"></span> <span class="text-danger">rejected</span>
                            @else
                                <span class="status-indicator none"></span> <span class="text-muted">none</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection --}}
