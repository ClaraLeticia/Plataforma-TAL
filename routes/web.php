<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/recado', function () {
    return view('recado');
});

Route::get('/perfiltutor', function () {
    return view('perfil-tutor');
});

Route::get('/perfiletep', function () {
    return view('perfil-etep');
});

Route::get('/cadastrotutor', function () {
    return view('cadastro-tutor');
});

Route::get('/login',[LoginController::class,'login']);

