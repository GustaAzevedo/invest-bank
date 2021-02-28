<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

//Fillable são os valores que são "preenchiveis",
// que eu posso enviar para o banco

    protected $fillable = [
        'nome',
        'endereco',
        'email',
        'cell'
    ];

    protected $table = 'Usuarios';
}
