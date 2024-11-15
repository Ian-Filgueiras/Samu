<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gravidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 
    ];

    
    public function prontuarios()
    {
        return $this->hasMany(Prontuario::class);
    }
}