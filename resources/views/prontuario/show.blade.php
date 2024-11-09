@extends('layouts.nav')
@section('title', 'Detalhes do Prontuário')

@section('content')

<div class="container mt-5">
    <h3>Detalhes do Prontuário</h3>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nome:</strong> {{ $prontuario->nome }}</li>
        <li class="list-group-item"><strong>CPF:</strong> {{ $prontuario->cpf }}</li>
        <li class="list-group-item"><strong>Sintomas:</strong> {{ $prontuario->sintomas }}</li>
        <li class="list-group-item"><strong>Procedimentos Realizados:</strong> {{ $prontuario->procedimentos }}</li>
        <li class="list-group-item"><strong>Medicações:</strong> {{ $prontuario->medicacoes }}</li>
        <li class="list-group-item"><strong>Diagnóstico Prévio:</strong> {{ $prontuario->diagnostico_previo }}</li>
        <li class="list-group-item"><strong>Classificação de Risco:</strong> 
            @switch($prontuario->gravidade_id)
                @case(4) Emergência @break
                @case(3) Urgência @break
                @case(2) Pouco Urgente @break
                @default Não Urgente
            @endswitch
        </li>
        <li class="list-group-item"><strong>Sexo:</strong> {{ $prontuario->sexo }}</li>
    </ul>
</div>

@endsection
