@extends('layouts.nav')
@section('title', 'Emergência - Prontuário')
@section('content')

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <form action="{{ route('prontuario.store') }}" method="POST">
            @csrf

            <div class="form-container">
                <div class="container">
                    <form>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputText" name="nome">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">CPF:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputText" name="cpf">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sintomas" class="col-sm-2 col-form-label">Sintomas:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="sintomas" name="sintomas" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="procedimentos" class="col-sm-2 col-form-label">Procedimentos Realizados:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="procedimentos" name="procedimentos"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="medicacoes" class="col-sm-2 col-form-label">Medicações:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="medicacoes" name="medicacoes" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="diagnostico_previo" class="col-sm-2 col-form-label">Diagnóstico Prévio:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="diagnostico_previo" name="diagnostico_previo"
                                    rows="3"></textarea>
                            </div>
                        </div>

                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Classificação de Risco:</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input style="transform: translateY(-3px);" class="form-check-input" type="radio"
                                        name="gravidade_id" id="gridRadios4" value="4">
                                    <label class="form-check-label" for="gridRadios4">
                                        Emergência
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input style="transform: translateY(-3px);" class="form-check-input" type="radio"
                                        name="gravidade_id" id="gridRadios3" value="3">
                                    <label class="form-check-label" for="gridRadios3">
                                        Urgência
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input style="transform: translateY(-3px);" class="form-check-input" type="radio"
                                        name="gravidade_id" id="gridRadios2" value="2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Pouco Urgente
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input style="transform: translateY(-3px);" class="form-check-input" type="radio"
                                        name="gravidade_id" id="gridRadios1" value="1">
                                    <label class="form-check-label" for="gridRadios1">
                                        Não Urgente
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <div class="mb-3">
                                <label for="sexo" class="form-label">Sexo</label>
                                <select class="form-select" id="sexo" name="sexo">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">
                            <img style="transform: translateY(-1px); margin-right: 5px;"
                                src="/img/forward_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.svg">Enviar Formulário</button>
                    </form>
                </div>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection