<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Prontuário Médico</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Formulário de Prontuário Médico - SAMU</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('prontuario.store') }}" method="POST">
        @csrf

        <!-- Nome -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Paciente</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <!-- Sexo -->
        <div class="mb-3">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select" id="sexo" name="sexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select>
        </div>

        <!-- CPF -->
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" maxlength="14" required>
        </div>

        <!-- Sintomas -->
        <div class="mb-3">
            <label for="sintomas" class="form-label">Sintomas</label>
            <textarea class="form-control" id="sintomas" name="sintomas" rows="3" required></textarea>
        </div>

        <!-- Procedimentos -->
        <div class="mb-3">
            <label for="procedimentos" class="form-label">Procedimentos Realizados</label>
            <textarea class="form-control" id="procedimentos" name="procedimentos" rows="3"></textarea>
        </div>

        <!-- Medicações -->
        <div class="mb-3">
            <label for="medicacoes" class="form-label">Medicações Administradas</label>
            <textarea class="form-control" id="medicacoes" name="medicacoes" rows="3"></textarea>
        </div>

        <!-- Diagnóstico Prévio -->
        <div class="mb-3">
            <label for="diagnostico_previo" class="form-label">Diagnóstico Prévio</label>
            <textarea class="form-control" id="diagnostico_previo" name="diagnostico_previo" rows="3"></textarea>
        </div>

        <!-- Gravidade -->
        <div class="mb-3">
            <label for="gravidade" class="form-label">Gravidade do Caso</label>
            <select class="form-select" id="gravidade" name="gravidade" required>
                <option value="Leve">Leve</option>
                <option value="Moderado">Moderado</option>
                <option value="Grave">Grave</option>
                <option value="Crítico">Crítico</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Prontuário</button>
    </form>
</div>
</body>
</html>

