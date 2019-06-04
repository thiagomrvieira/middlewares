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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Criando 2 middlewares, e chamando através da rota pela assinatura (primeiro e segundo) criada no kernel.php 
Route::get('/usuarios', 'UsuarioControlador@index')->middleware('primeiro', 'segundo');

//Passando parâmetros aos middlewares
Route::get('/terceiro', function () {
    return "terceiro middleware";
})->middleware('terceiro:Thiago');


Route::get('/produtos', 'ProdutoControlador@index');

Route::post('login', function(Request $req){
    $login_ok = false;
    switch ($req->input('user')) {
        case 'Joao':
            $login_ok = $req->input("passwd") === "senhajoao";
            break;
        case 'Marcos':
            $login_ok = $req->input("passwd") === "senhamarcos";
            break;
        default:
            $login_ok = false;
            break;
    }

    if ($login_ok) {
        return response("Login OK", 200);

    } else {
        return response("Erro no login", 404);
    }


});