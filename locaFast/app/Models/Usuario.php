<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticable;

class Usuario extends Authenticable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'usarios';

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'senha',
        'data_nascimento',
        'endereco',
        'telefone',
        'tipo_usuario'
    ];
}
