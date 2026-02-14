<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CadastroClienteRequest;
use App\Repositories\CadastroClienteRepository;


class CadastroClienteController extends Controller
{
    public function __construct(private CadastroClienteRepository $repository){}

    public function index()
    {
        $cadastro_cliente = $this->repository->findAll();
        
        return response()->json([
            'message' => 'Clientes encontrados',
            'data' => $cadastro_cliente
        ], 200);
    }

    public function store(CadastroClienteRequest $request)
    {
        $cliente = $this->repository->createCliente($request->validated());

        return response()->json([
            'message' => 'Cliente cadastrado com sucesso',
            'data' => $cliente
        ], 201);
    }
    
    public function show(int $id)
    {
       $cadastro_cliente = $this->repository->findById($id);

        return response()->json([
            'message' => 'Cliente encontrado',
            'data' => $cadastro_cliente
        ], 200);

    }

    public function delete(int $id)
    {
        $this->repository->deleteById($id); 
        
        return response()->json(null, 204);
    }
   
    public function update(CadastroClienteRequest $request, int $id)
    {
        $cliente = $this->repository->updateById($id, $request->validated());

        return response()->json([
            'message' => 'Cliente atualizado com sucesso',
            'data' => $cliente
        ], 200);

    }    

 }

   
