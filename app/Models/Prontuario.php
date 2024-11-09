<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'sexo',
        'cpf',
        'sintomas',
        'procedimentos',
        'medicacoes',
        'diagnostico_previo',
        'gravidade_id',
    ];

    public function gravidade()
    {
        return $this->belongsTo(Gravidade::class);
    }

}
