@extends('layouts.app')

@section('title', 'Daftar Kegiatan')

@section('content')
    <h1 class="page-title">Daftar Kegiatan</h1>
    
    <div class="row">
        <div class="col-md-12">
            <div class="event-card">
                <h2 class="event-title">INFEST</h2>
                <p class="event-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</p>
                <a href="{{ route('formulir.pendaftaran', ['kegiatan' => 'infest']) }}" class="btn-daftar">Daftar Panitia</a>
                <div class="status-indicator">
                    <div class="status-dot status-accepted"></div>
                    <span class="status-text">accepted</span>
                </div>
            </div>
            
            <div class="event-card">
                <h2 class="event-title">POINT</h2>
                <p class="event-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</p>
                <a href="{{ route('formulir.pendaftaran', ['kegiatan' => 'point']) }}" class="btn-daftar">Daftar Panitia</a>
                <div class="status-indicator">
                    <div class="status-dot status-rejected"></div>
                    <span class="status-text">rejected</span>
                </div>
            </div>
            
            <div class="event-card">
                <h2 class="event-title">DETIK</h2>
                <p class="event-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</p>
                <a href="{{ route('formulir.pendaftaran', ['kegiatan' => 'detik']) }}" class="btn-daftar">Daftar Panitia</a>
                <div class="status-indicator">
                    <div class="status-dot status-none"></div>
                    <span class="status-text">none</span>
                </div>
            </div>
        </div>
    </div>
@endsection