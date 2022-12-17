<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MembroEtepController;
use App\Http\Controllers\TutorController;
use App\Models\MembroEtep;
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

// ROTAS ABERTAS
Route::get('/', [TutorController::class,'index']);

Route::get('/login',[LoginController::class,'login']);

// ROTAS RELACIONADAS A ETEP
Route::post('/etep',[MembroEtepController::class,'cadastrar_etep']);

Route::post('/etep',[MembroEtepController::class,'cadastrar_recado']);

Route::get('/perfil-etep', [MembroEtepController::class,'perfil_etep']);

Route::get('/perfil-etep/cadastro-recado', function () {
    return view('cadastro-recado');
});
Route::get('/perfil-etep/editar-recado', function () {
    return view('editar-recado');
});
Route::get('/perfil-etep/cadastro-etep', function () {
    return view('cadastro-etep');
});
Route::get('/perfil-etep/cadastro-tutor', function () {
    return view('cadastro-tutor');
});

Route::get('/perfil-etep/visualizar-etep', [MembroEtepController::class, 'visualizar_etep']);

Route::get('/perfil-etep/visualizar-tutor', [TutorController::class,'visualizar_tutor']);

Route::get('/perfil-etep/editar-etep', function () {
    return view('editar-etep');
});
Route::get('/perfil-etep/editar-tutor', function () {
    return view('editar-tutor');
});

// ROTAS RELACIONADAS AO TUTOR
Route::post('/tutor',[TutorController::class,'store']);

Route::get('/perfil-tutor', [TutorController::class,'perfil_tutor']);

Route::get('/perfil-tutor/folha-frequencia', function(){
    return view('folha-frequencia');
});
Route::get('/perfil-tutor/atividades-realizadas', function(){
    return view('atividades-realizadas');
});
Route::get('/perfil-tutor/relatorio-atividade', function(){
    return view('relatorio-atividade');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
