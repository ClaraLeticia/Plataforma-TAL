<?php

namespace App\Http\Controllers;
use App\Models\Recado;
use Illuminate\Http\Request;
use DateTime;

class RecadoController extends Controller
{
    public function visualizar_recado() {
        $recados = Recado::all();
        return view('visualizar-recado',compact('recados'));
    }

    public function cadastro_recado() {
        return view('cadastro-recado');
    }

    public function cadastrar_recado(Request $request) {
        $recado = new Recado;
        // $recado->id_membro_etep = $request->
        date_default_timezone_set('America/Sao_Paulo');
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
        return view('editar-recado',['recado' => $recado]);
    }

    public function atualizar_recado(Request $request){
        recado::findOrFail($request->id)->update($request->all());
        return redirect('/perfil-etep/visualizar-recado');
    }

}
