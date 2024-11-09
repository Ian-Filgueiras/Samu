@extends('layouts.nav')
@section('title', 'Emergência - Prontuário')
@section('content')

<link href="{{ asset('css/lista.css') }}" rel="stylesheet">

<div class="container mt-5">
    <h3>Detalhes do Prontuário</h3>
    <ul class="list-group">
        @foreach ($prontuarios as $prontuario)
        <li class="list-group-item">
            <strong>Classificação de Risco:</strong> {{ $prontuario->gravidade_id }}
        </li>
        <li class="list-group-item">
            <a href="{{ route('prontuario.show', $prontuario->id) }}" class="btn btn-info btn-sm">Ver Detalhes</a>
        </li>
        @endforeach
    </ul>
</div>

@endsection