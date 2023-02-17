<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduto extends Model
{
    protected $table='produto'; //nome da tabela
    protected $fillable=['codigo', 'nome', 'descricao', 'preco'];
    //use HasFactory;
}
