<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Constants\Table;


class Cliente extends Model
{
    protected $table = Table::CLIENTES;

    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'ie',
        'endereco'
    ];

  public static function novoCliente(array $data):self 
  {
        return self::create($data);      
  }
}
