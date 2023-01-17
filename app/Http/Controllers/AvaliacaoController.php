<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Expediente;
use App\Models\Materia;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AvaliacaoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        $avaliacao = Avaliacao::all();
        $tutores = Tutor::all();
        Gate::authorize('opcoes-tutor');
        return view('avaliacao',compact('avaliacao','tutores'));
    }

    public function visualizar_avaliacao(){
        $avaliacao = Avaliacao::all();
        $tutor = Tutor::findOrFail(auth()->user()->matricula);
        $materias = Materia::all();
        $expedientes = Expediente::all();
        Gate::authorize('opcoes-tutor');
        return view('avaliacao-pdf',compact('avaliacao','tutor','materias','expedientes'));
    }

    public function cadastrar_avaliacao(Request $request){
        $avaliacao = new Avaliacao;
        $avaliacao->id_tutor = auth()->user()->matricula;
        $avaliacao->atendimentos = $request->atendimentos;
        $avaliacao->dificuldade_discente = $request->dificuldade_discente;
        $avaliacao->dificuldade_tutor = $request->dificuldade_tutor;
        $avaliacao->sugestoes = $request->sugestoes;
        $avaliacao->save();
        return redirect('/perfil-tutor/avaliacao')->with('success','Relatório mensal cadastrado!');
    }

    public function deletar_avaliacao($id){
        Avaliacao::findOrFail($id)->delete();
        return redirect('/perfil-tutor/avaliacao')->with('success','Relatório mensal excluído!');
    }

    public function editar_avaliacao($id){
        $avaliacao = Avaliacao::findOrFail($id);
        Gate::authorize('opcoes-tutor');
        return view('editar-avaliacao',['avaliacao' => $avaliacao]);
    }

    public function atualizar_avaliacao(Request $request){
        Avaliacao::findOrFail($request->id)->update($request->all());
        return redirect('/perfil-tutor/avaliacao')->with('success','Relatório mensal editado!');
    }
}
