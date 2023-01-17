<?php

use App\Http\Controllers\AtividadeRealizadaController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\MembroEtepController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\RecadoController;
use App\Models\Materia;
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

// ROTA ABERTA
Route::get('/', [Controller::class,'index']); //OK

// ROTAS DE LOGIN
Route::get('/login',[LoginController::class,'login'])->name('login'); //ok
Route::post('/auth',[LoginController::class,'auth']); //ok
Route::get('/logout',[LoginController::class,'logout']); //ok

// ROTAS PARA MUDAR A SENHA DO USUÁRIO QUE ESQUECEU A SENHA 
Route::get('/forgot-password',[LoginController::class,'forgotPasswordForm']);
Route::post('/forgot-password',[LoginController::class,'sendResetLink']);
Route::get('/forgot-password/reset/{token}',[LoginController::class,'resetPasswordForm'])->name('resetPasswordForm');
Route::post('/forgot-password/reset',[LoginController::class,'resetPassword']);


// ROTAS PARA O PERFIL DO USUÁRIO
Route::get('/perfil-etep', [MembroEtepController::class,'perfil_etep']); //ok
Route::get('/perfil-tutor', [TutorController::class,'perfil_tutor']); //ok

//CRUD ETEP
Route::post('/cadastrar-etep',[MembroEtepController::class,'cadastrar_etep']); //ok
Route::get('/perfil-etep/cadastro-etep', [MembroEtepController::class,'cadastro_etep']); //ok
Route::get('/perfil-etep/visualizar-etep', [MembroEtepController::class,'visualizar_etep']);//ok
Route::get('/perfil-etep/editar-etep/{matricula_membro}', [MembroEtepController::class,'editar_etep']); //ok
Route::put('/editar-etep/{matricula_membro}', [MembroEtepController::class,'atualizar_etep']); //ok
Route::delete('/deletar-etep/{matricula_membro}', [MembroEtepController::class,'deletar_etep']); //ok
//CRUD MATERIA
Route::get('/perfil-etep/materias', [MateriaController::class,'index']); //ok
Route::post('/cadastrar-materia', [MateriaController::class,'cadastrar_materia']); //ok
Route::delete('/deletar-materia/{id}',[MateriaController::class,'deletar_materia']); //ok
Route::get('/perfil-etep/editar-materia/{id}', [MateriaController::class,'editar_materia']); //ok
Route::put('/editar-materia/{id}', [MateriaController::class,'atualizar_materia']); //ok
//CRUD PROFESSOR
Route::post('/cadastrar-professor',[ProfessorController::class,'cadastrar_professor']); //ok
Route::get('/perfil-etep/cadastro-professor', [ProfessorController::class,'cadastro_professor']); //ok
Route::get('/perfil-etep/visualizar-professor', [ProfessorController::class,'visualizar_professor']);//ok
Route::get('/perfil-etep/editar-professor/{id}', [ProfessorController::class,'editar_professor']); //ok
Route::put('/editar-professor/{id}', [ProfessorController::class,'atualizar_professor']); //ok
Route::delete('/deletar-professor/{id}', [ProfessorController::class,'deletar_professor']); //ok
//CRUD RECADO
Route::post('/cadastrar-recado',[RecadoController::class,'cadastrar_recado']); //ok
Route::get('/perfil-etep/cadastro-recado', [RecadoController::class,'cadastro_recado']); //ok 
Route::get('/perfil-etep/visualizar-recado', [RecadoController::class,'visualizar_recado']); //ok
Route::get('/perfil-etep/editar-recado/{id}', [RecadoController::class,'editar_recado']); //ok
Route::put('/editar-recado/{id}', [RecadoController::class,'atualizar_recado']); //ok
Route::delete('/deletar-recado/{id}', [RecadoController::class,'deletar_recado']); //ok

//CRUD TUTOR
Route::post('/cadastrar-tutor',[TutorController::class,'cadastrar_tutor']); //ok
Route::get('/perfil-etep/cadastro-tutor', [TutorController::class,'cadastro_tutor']); //ok
Route::get('/perfil-etep/visualizar-tutor', [TutorController::class,'visualizar_tutor']); //ok
Route::get('/perfil-etep/editar-tutor/{matricula_aluno}', [TutorController::class,'editar_tutor']); //ok
Route::put('/editar-tutor/{matricula_aluno}', [TutorController::class,'atualizar_tutor']); //ok
Route::delete('/deletar-tutor/{matricula_aluno}', [TutorController::class,'deletar_tutor']); //ok

//CRUD HORARIO
Route::get('/perfil-etep/editar-horario/{matricula_aluno}', [TutorController::class,'editar_horario']); //ok
Route::post('/editar-horario/{matricula_aluno}', [TutorController::class,'atualizar_horario']); //ok

//CRUD EXPEDIENTE
Route::get('/perfil-tutor/expediente',[ExpedienteController::class,'index']);
Route::get('/perfil-tutor/expediente-pdf',[ExpedienteController::class,'visualizar_expediente']);
Route::post('/cadastrar-expediente', [ExpedienteController::class,'cadastrar_expediente']); 
Route::delete('/deletar-expediente/{id}',[ExpedienteController::class,'deletar_expediente']); 
Route::get('/perfil-tutor/editar-expediente/{id}', [ExpedienteController::class,'editar_expediente']); 
Route::put('/editar-expediente/{id}', [ExpedienteController::class,'atualizar_expediente']);

//CRUD ATIVIDADES REALIZADAS
Route::get('/perfil-tutor/atividades-realizadas',[AtividadeRealizadaController::class,'index']);
Route::get('/perfil-tutor/atividades-realizadas-pdf',[AtividadeRealizadaController::class,'visualizar_atividades']);
Route::post('/cadastrar-atividades-realizadas', [AtividadeRealizadaController::class,'cadastrar_atividades']); 
Route::delete('/deletar-atividades-realizadas/{id}',[AtividadeRealizadaController::class,'deletar_atividades']); 
Route::get('/perfil-tutor/editar-atividades-realizadas/{id}', [AtividadeRealizadaController::class,'editar_atividades']); 
Route::put('/editar-atividades-realizadas/{id}', [AtividadeRealizadaController::class,'atualizar_atividades']);

Route::get('/perfil-tutor/avaliacao',[AvaliacaoController::class,'index']);
Route::get('/perfil-tutor/avaliacao-pdf',[AvaliacaoController::class,'visualizar_avaliacao']);
Route::post('/cadastrar-avaliacao', [AvaliacaoController::class,'cadastrar_avaliacao']); 
Route::delete('/deletar-avaliacao/{id}',[AvaliacaoController::class,'deletar_avaliacao']); 
Route::get('/perfil-tutor/editar-avaliacao/{id}', [AvaliacaoController::class,'editar_avaliacao']); 
Route::put('/editar-avaliacao/{id}', [AvaliacaoController::class,'atualizar_avaliacao']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
