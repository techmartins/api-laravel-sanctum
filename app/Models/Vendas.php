<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id_vendedor',
        'valor',
        'comissao'
    ];
}
