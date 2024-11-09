@extends('layouts.nav')
@section('title', 'Emergência - Prontuário')
@section('content')

<link href="{{ asset('css/show.css') }}" rel="stylesheet">

<body style="background-image: url('{{ asset('img/Background.svg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">

<div class="container mt-5 pt-5">
    <div class="card mb-3 shadow-sm">
        <div class="card-body">
            <h3 class="card-title text-primary mb-2">{{ $hospital->name }}</h3>
            <p class="card-text mb-1"><strong>Localização:</strong> {{ $hospital->location }}</p>
            <p class="card-text mb-1"><strong>Leitos Disponíveis:</strong> {{ $hospital->available_beds }} / {{ $hospital->total_beds }}</p>
            <a href="{{ url('/hospitals/' . $hospital->id) }}" class="btn btn-outline-primary btn-sm mt-2">Ver Localização</a>
        </div>
    </div>
</div>

</body>

@endsection