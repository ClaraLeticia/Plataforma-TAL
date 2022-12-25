<?php

namespace App\Http\Controllers;
use App\Models\Recado;
use Illuminate\Http\Request;
use DateTime;

class RecadoController extends Controller
{
    public function index() {
        $recados = Recado::all();
        return view('visualizar-recado',compact('recados'));
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
}
