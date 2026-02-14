<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroClienteController;


Route::get('/ping', function () {
    return response()->json('API FUNCIONANDO');
});

Route::prefix('/cadastro_cliente')-> group(function(){
    Route::get('/',[CadastroClienteController::class, 'index']) -> name('cadastro_cliente.index');
    Route::get('/{id}',[CadastroClienteController::class, 'show']) -> name('cadastro_cliente.show')->whereNumber('id');
    Route::delete('/{id}',[CadastroClienteController::class, 'delete']) -> name('cadastro_cliente.delete')->whereNumber('id');
    Route::post('/',[CadastroClienteController::class, 'store']) -> name('cadastro_cliente.store');
    Route::put('/{id}',[CadastroClienteController::class, 'update']) -> name('cadastro_cliente.update')->whereNumber('id');
    
});
    
