<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroClienteController;


Route::get('/ping', function () {
    return response()->json('API FUNCIONANDO');
});

Route::prefix('/cliente')-> group(function(){
    Route::get('/',[CadastroClienteController::class, 'index']) -> name('cliente.index');
    Route::get('/{id}',[CadastroClienteController::class, 'show']) -> name('cliente.show')->whereNumber('id');
    Route::delete('/{id}',[CadastroClienteController::class, 'delete']) -> name('cliente.delete')->whereNumber('id');
    Route::post('/',[CadastroClienteController::class, 'store']) -> name('cliente.store');
    Route::put('/{id}',[CadastroClienteController::class, 'update']) -> name('cliente.update')->whereNumber('id');
    
});
    
