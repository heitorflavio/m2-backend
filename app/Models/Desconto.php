<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desconto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'sale_price',
        'status',
        'campanha_id',
    ];
}
