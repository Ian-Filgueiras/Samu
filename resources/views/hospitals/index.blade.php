@extends('layouts.nav')
@section('title', 'Emergência - Prontuário')
@section('content')

<link href="{{ asset('css/index.css') }}" rel="stylesheet">

<div class="container mt-5 pt-5">
    <ul class="list-group">
        @foreach ($hospitals as $hospital)
            <li class="list-group-item p-4 mb-3 rounded shadow-sm" style="border-left: 5px solid #007bff; background-color: #f8f9fa; margin-top: 15px;">
                <h3 class="h5 mb-2" style="color: #007bff;">{{ $hospital->name }}</h3>
                <p class="mb-1"><strong>Localização:</strong> {{ $hospital->location }}</p>
                <p class="mb-1"><strong>Leitos Disponíveis:</strong> {{ $hospital->available_beds }} / {{ $hospital->total_beds }}</p>
                <a href="{{ url('/hospitals/' . $hospital->id) }}" class="btn btn-outline-primary btn-sm mt-2">Localização</a>
            </li>
        @endforeach
    </ul>
</div>

@endsection
