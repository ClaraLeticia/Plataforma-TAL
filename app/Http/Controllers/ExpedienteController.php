<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use App\Models\Materia;
use App\Models\Professor;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ExpedienteController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        $expedientes = Expediente::all();
        Gate::authorize('opcoes-tutor');
        return view('expediente',compact('expedientes'));
    }

    public function visualizar_expediente(){
        $expedientes = Expediente::all();
        $tutor = Tutor::all();
        $materias = Materia::all();
        $professores = Professor::all();
        Gate::authorize('opcoes-tutor');
        return view('expediente-pdf',compact('expedientes','tutor','materias','professores'));
    }

    public function cadastrar_expediente(Request $request){
        $expediente = new Expediente;
        $expediente->id_tutor = auth()->user()->matricula;
        $expediente->dia = $request->dia;
        $expediente->mes = $request->mes;
        $expediente->ano = $request->ano;
        $expediente->hora_entrada = $request->hora_entrada;
        $expediente->hora_saida = $request->hora_saida;
        $expediente->save();
        return redirect('/perfil-tutor/expediente')->with('success','Expediente cadastrado!');
    }

    public function deletar_expediente($id){
        Expediente::findOrFail($id)->delete();
        return redirect('/perfil-tutor/expediente')->with('success','Expediente excluído!');
    }

    public function editar_expediente($id){
        $expediente = Expediente::findOrFail($id);
        Gate::authorize('opcoes-tutor');
        return view('editar-expediente',['expediente' => $expediente]);
    }

    public function atualizar_expediente(Request $request){
        Expediente::findOrFail($request->id)->update($request->all());
        return redirect('/perfil-tutor/expediente')->with('success','Expediente editado!');
    }
}
