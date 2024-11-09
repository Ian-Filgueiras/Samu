<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProntuarioController extends Controller
{
    public function create()
    {
        return view('prontuario.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'sexo' => 'required|string',
            'cpf' => 'required|string|max:14',
            'sintomas' => 'required|string',
            'procedimentos' => 'nullable|string',
            'medicacoes' => 'nullable|string',
            'diagnostico_previo' => 'nullable|string',
            'gravidade' => 'required|string',
        ]);

        // Salvando os dados (aqui você pode salvar no banco de dados)

        return redirect()->route('prontuario.create')->with('success', 'Prontuário salvo com sucesso!');
    }
}
