<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo_Cidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'grupo_id',
        'cidade_id'
    ];
}
