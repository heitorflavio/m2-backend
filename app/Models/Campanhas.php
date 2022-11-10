<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campanhas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'status',
        'grupo_id',
    ];
}
