<?php
//chamada do middleware no kernel.php
//use App\Http\Middleware\PrimeiroMiddleware;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Criando 2 middlewares, e chamando através da rota pela assinatura (primeiro e segundo) criada no kernel.php 
Route::get('/usuarios', 'UsuarioControlador@index')->middleware('primeiro', 'segundo');

//Passando parâmetros aos middlewares
Route::get('/terceiro', function () {
    return "terceiro middleware";
})->middleware('terceiro:Thiago');