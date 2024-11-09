@extends('layouts.nav')
@section('title', 'Emergência - SAMU')
@section('content')

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>

<body>

    <div class="form-container">
        <div class="container">
            <form>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Classificação de Risco:</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input style="transform: translateY(-3px);" class="form-check-input" type="radio" name="gridRadios" id="gridRadios4"
                                value="option4">
                            <label class="form-check-label" for="gridRadios4">
                                Emergência
                            </label>
                        </div>
                        <div class="form-check">
                            <input style="transform: translateY(-3px);" class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                value="option3">
                            <label class="form-check-label" for="gridRadios3">
                                Urgência
                            </label>
                        </div>
                        <div class="form-check">
                            <input style="transform: translateY(-3px);" class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Pouco Urgente
                            </label>
                        </div>
                        <div class="form-check">
                            <input style="transform: translateY(-3px);" class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option5">
                            <label class="form-check-label" for="gridRadios1">
                            Não Urgente
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                            <input style="transform: translateY(-3px);" class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">
                    <img style="transform: translateY(-1px); margin-right: 5px;" src="/img/forward_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.svg">Enviar Formulário</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

@endsection