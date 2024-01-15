<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Essas duas variáveis são caso você deseje personalizar como o laravel
    // vai trabalhar com esse Model.
    protected $table = 'clientes_ativos';

    protected $primaryKey = 'codigo';

    // Permite que esses campos possam ser preenchidos em um []
    protected $fillable = [
        'nome',
        'endereco',
        'numero'
    ];

}
 