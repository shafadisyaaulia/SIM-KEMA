@extends('layouts.app')

@section('title', 'Daftar Kepanitiaan')

@section('content')
    <h1 class="page-title">Daftar Kepanitiaan</h1>
    <p>Pilih kegiatan apa yang ingin kamu ikuti:</p>

    <div class="row">
        <div class="col-md-12">
            <div class="event-card">
                <h2 class="event-title">INFEST</h2>
                <a href="{{ route('formulir.pendaftaran', ['kegiatan' => 'infest']) }}" class="add-button">+</a>
            </div>

            <div class="event-card">
                <h2 class="event-title">POINT</h2>
                <a href="{{ route('formulir.pendaftaran', ['kegiatan' => 'point']) }}" class="add-button">+</a>
            </div>

            <div class="event-card">
                <h2 class="event-title">DETIK</h2>
                <span class="float-end">COMING SOON...</span>
                <a href="#" class="add-button" style="opacity: 0.5; pointer-events: none;">+</a>
            </div>

            <div class="event-card">
                <h2 class="event-title">PAKARMARUM</h2>
                <span class="float-end">COMING SOON...</span>
                <a href="#" class="add-button" style="opacity: 0.5; pointer-events: none;">+</a>
            </div>

            <div class="event-card">
                <h2 class="event-title">MUBES</h2>
                <span class="float-end">COMING SOON...</span>
                <a href="#" class="add-button" style="opacity: 0.5; pointer-events: none;">+</a>
            </div>

            <div class="event-card">
                <h2 class="event-title">MONEV</h2>
                <span class="float-end">COMING SOON...</span>
                <a href="#" class="add-button" style="opacity: 0.5; pointer-events: none;">+</a>
            </div>
        </div>
    </div>
@endsection
