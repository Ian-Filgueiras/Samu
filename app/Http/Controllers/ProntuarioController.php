<?php
namespace App\Http\Controllers;

use App\Models\Prontuario;
use Illuminate\Http\Request;

class ProntuarioController extends Controller
{
    public function index()
    {

        $prontuarios = Prontuario::all();

        return view('prontuario.lista', compact('prontuarios'));
    }

    public function show($id)
    {
        $prontuario = Prontuario::findOrFail($id);
        return view('prontuario.show', compact('prontuario'));
    }

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
            'gravidade_id' => 'required|exists:gravidades,id',
        ]);

        Prontuario::create([
            'nome' => $request->input('nome'),
            'sexo' => $request->input('sexo'),
            'cpf' => $request->input('cpf'),
            'sintomas' => $request->input('sintomas'),
            'procedimentos' => $request->input('procedimentos'),
            'medicacoes' => $request->input('medicacoes'),
            'diagnostico_previo' => $request->input('diagnostico_previo'),
            'gravidade_id' => $request->input('gravidade_id'),
        ]);

        return redirect()->route('prontuario.create')->with('success', 'Prontuário salvo com sucesso!');
    }
}
