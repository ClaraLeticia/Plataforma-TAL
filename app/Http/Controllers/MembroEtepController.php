<?php

namespace App\Http\Controllers;

use App\Models\MembroEtep;
use App\Models\Recado;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class MembroEtepController extends Controller
{
    public function visualizar_etep() {
        $membros_etep = MembroEtep::all();
        return view('visualizar-etep',['membros_etep' => $membros_etep]);
    }

    public function perfil_etep() {
        $membros_etep = MembroEtep::all();
        return view('perfil-etep',['membros_etep' => $membros_etep]);
    }

    public function cadastrar_etep(Request $request) {
        $membro_etep = new MembroEtep;
        if ($request->senha != $request->confirmar_senha) {
            return redirect('/perfil-etep/cadastro-etep');
        }
        $membro_etep->matricula_membro = $request->matricula_membro;
        $membro_etep->nome = $request->nome;
        $membro_etep->email = $request->email;
        $membro_etep->senha = $request->senha;
        $membro_etep->save();
        return redirect('perfil-etep');
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
