@extends('layouts.app')

@section('title', 'Sertifikat Panitia')

@section('content')
    <h1 class="page-title">Sertifikat Panitia</h1>
    
    <div class="row">
        <div class="col-md-12">
            <div class="info-panel">
                <p>Anda dapat mengunduh sertifikat Anda melalui link berikut ini:</p>
                
                <div class="link-panel">
                    @if(count($sertifikat) > 0)
                        @foreach($sertifikat as $item)
                            <p><a href="{{ route('sertifikat.download', $item->id) }}">[Link untuk sertifikat panitia]</a></p>
                        @endforeach
                    @else
                        <p>[Link untuk sertifikat panitia]</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection