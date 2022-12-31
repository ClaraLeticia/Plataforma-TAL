<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\MembroEtepController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\RecadoController;
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
Route::get('/', [TutorController::class,'index']); //OK

Route::get('/login',[LoginController::class,'login']);

Route::get('/visualizar-recado', [RecadoController::class,'index']);

// ROTAS RELACIONADAS A ETEP
//CRUD ETEP
Route::post('/cadastrar-etep',[MembroEtepController::class,'cadastrar_etep']); //OK
Route::get('/perfil-etep/cadastro-etep', [MembroEtepController::class,'cadastro_etep']); //OK
Route::get('/perfil-etep/visualizar-etep', [MembroEtepController::class,'visualizar_etep']);//Ok
Route::get('/perfil-etep/editar-etep/{matricula_membro}', [MembroEtepController::class,'editar_etep']); //OK
Route::put('/editar-etep/{matricula_membro}', [MembroEtepController::class,'atualizar_etep']); //OK
Route::delete('/deletar-etep/{matricula_membro}', [MembroEtepController::class,'deletar_etep']); //OK
//CRUD MATERIA
Route::get('/perfil-etep/materias', [MateriaController::class,'index']); //OK
Route::post('/cadastrar-materia', [MateriaController::class,'cadastrar_materia']); //OK
Route::delete('/deletar-materia/{id}',[MateriaController::class,'deletar_materia']); //OK
Route::get('/perfil-etep/editar-materia/{id}', [MateriaController::class,'editar_materia']); //OK
Route::put('/editar-materia/{id}', [MateriaController::class,'atualizar_materia']); //OK

Route::post('/cadastrar-professor',[ProfessorController::class,'cadastrar_professor']); //OK
Route::get('/perfil-etep/cadastro-professor', [ProfessorController::class,'cadastro_professor']); //OK
Route::get('/perfil-etep/visualizar-professor', [ProfessorController::class,'visualizar_professor']);//Ok
Route::get('/perfil-etep/editar-professor/{id}', [ProfessorController::class,'editar_professor']); //OK
Route::put('/editar-professor/{id}', [ProfessorController::class,'atualizar_professor']); //OK
Route::delete('/deletar-professor/{id}', [ProfessorController::class,'deletar_professor']); //OK


Route::post('/cadastrar-recado',[RecadoController::class,'cadastrar_recado']); //OK

Route::get('/perfil-etep', [MembroEtepController::class,'perfil_etep']);

Route::get('/perfil-etep/cadastro-recado', function () {
    return view('cadastro-recado');
});
Route::get('/perfil-etep/editar-recado', function () {
    return view('editar-recado');
});
Route::get('/perfil-etep/cadastro-tutor', function () {
    return view('cadastro-tutor');
});


Route::get('/perfil-etep/visualizar-tutor', [TutorController::class,'visualizar_tutor']); //OK




Route::get('/perfil-etep/editar-tutor', function () {
    return view('editar-tutor');
});

Route::get('/perfil-etep/professores', function(){
    return view('professores');
});

// ROTAS RELACIONADAS AO TUTOR
Route::post('/tutor',[TutorController::class,'store']); //OK

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
