<?php

namespace App\Http\Controllers;

use App\Models\AtividadeRealizada;
use App\Models\Expediente;
use App\Models\Materia;
use App\Models\Professor;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AtividadeRealizadaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $atividades = AtividadeRealizada::orderBy('id_expediente','asc')->get();
        $expedientes = Expediente::all();
        Gate::authorize('opcoes-tutor');
        return view('atividades-realizadas',compact('atividades','expedientes'));
    }

    public function visualizar_atividades(){
        $atividades = AtividadeRealizada::all();
        $tutor = Tutor::all();
        $materias = Materia::all();
        $professores = Professor::all();
        $expedientes = Expediente::all();
        Gate::authorize('opcoes-tutor');
        return view('atividades-realizadas-pdf',compact('atividades','tutor','materias','professores','expedientes'));
    }

    public function cadastrar_atividades(Request $request){
        $atividade = new AtividadeRealizada;
        $atividade->id_tutor = auth()->user()->matricula;
        $atividade->id_expediente = $request->id_expediente;
        $atividade->dia = $request->dia;
        $atividade->horario = $request->horario;
        $atividade->discente = $request->discente;
        $atividade->turma_discente = $request->turma_discente;
        $atividade->assunto = $request->assunto;
        $atividade->save();
        return redirect('/perfil-tutor/atividades-realizadas')->with('success','Atendimento cadastrado!');
    }

    public function deletar_atividades($id){
        AtividadeRealizada::findOrFail($id)->delete();
        return redirect('/perfil-tutor/atividades-realizadas')->with('success','Atendimento excluído!');
    }

    public function editar_atividades($id){
        $atividades = AtividadeRealizada::findOrFail($id);
        $expedientes = Expediente::all();
        Gate::authorize('opcoes-tutor');
        return view('editar-atividades-realizadas',compact('atividades','expedientes'));
    }

    public function atualizar_atividades(Request $request){
        AtividadeRealizada::findOrFail($request->id)->update($request->all());
        return redirect('/perfil-tutor/atividades-realizadas')->with('success','Atendimento editado!');
    }

    
}
