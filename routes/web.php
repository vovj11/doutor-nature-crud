<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// As Route(rotas) define o que seu usuário acessa(get) e o que vai ser mostrado pra ele de acordo com a função

//Route::get('/produtos', [\App\Http\Controllers\ProdutoController::class, 'index']);
Route::resource('/produtos', \App\Http\Controllers\ProdutoController::class);
