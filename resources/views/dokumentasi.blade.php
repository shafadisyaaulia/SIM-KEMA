@extends('layouts.app')

@section('title', 'Dokumentasi Acara')

@section('content')
    <h1 class="page-title">Dokumentasi Acara</h1>
    
    <div class="row">
        <div class="col-md-12">
            <div class="info-panel">
                <p>Untuk melihat dokumentasi acara, klik link berikut:</p>
                
                <div class="link-panel">
                    @if(count($dokumentasi) > 0)
                        @foreach($dokumentasi as $item)
                            <p><a href="{{ $item->link }}" target="_blank">[Link untuk dokumentasi acara {{ $item->judul }}]</a></p>
                        @endforeach
                    @else
                        <p>[Link untuk dokumentasi acara]</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection