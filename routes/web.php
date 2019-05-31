<?php
use App\Http\Middleware\PrimeiroMiddleware;
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



//Route::get('/usuarios', 'UsuarioControlador@index')->middleware(PrimeiroMiddleware::class);

//middleware nomeado
//Route::get('/usuarios', 'UsuarioControlador@index')->middleware('primeiro');

// middleware no controller
Route::get('/usuarios', 'UsuarioControlador@index');

