<?php

namespace App\Http\Controllers;
use App\Models\Recado;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Gate;


class RecadoController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['cadastro_recado','editar_recado']);
    }
    
    public function visualizar_recado() {
        $recados = Recado::all();
        return view('visualizar-recado',compact('recados'));
    }

    public function cadastro_recado() {
        Gate::authorize('opcoes-etep');
        return view('cadastro-recado');
    }

    public function cadastrar_recado(Request $request) {
        $recado = new Recado;
        // $recado->id_membro_etep = $request->
        date_default_timezone_set('America/Sao_Paulo');
        $recado->id_membro_etep = auth()->user()->matricula;
        $recado->dia = date('Y-m-d');
        $recado->hora = new DateTime();
        $recado->descricao = $request->descricao;
        $recado->save();
        return redirect('perfil-etep');
    }

    public function deletar_recado($id){
        Recado::findOrFail($id)->delete();
        return redirect('/perfil-etep/visualizar-recado');
    }

    public function editar_recado($id){
        $recado = recado::findOrFail($id);
        Gate::authorize('opcoes-etep');
        return view('editar-recado',['recado' => $recado]);
    }

    public function atualizar_recado(Request $request){
        recado::findOrFail($request->id)->update($request->all());
        return redirect('/perfil-etep/visualizar-recado');
    }

}
