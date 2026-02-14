<?php

namespace App\Repositories;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Collection;



class CadastroClienteRepository {
   
   public function findAll():Collection{
     return Cliente::all();
   }  

   public function findById(int $id):Cliente{
     return Cliente::findOrFail($id);
   }

   public function createCliente(array $data):Cliente{
          return Cliente::novoCliente($data);
   }

   public function updateById(int $id, array $data):Cliente
   {
        $cadastro_cliente = Cliente::findOrFail($id);
        $cadastro_cliente->update($data);
        return $cadastro_cliente;
   }

   public function deleteById(int $id):void
   {
     Cliente::findOrFail($id)->delete();
   }
   
}