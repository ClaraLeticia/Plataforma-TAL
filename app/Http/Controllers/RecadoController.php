<?php

namespace App\Http\Controllers;
use App\Models\Recado;
use Illuminate\Http\Request;

class RecadoController extends Controller
{
    public function index() {
        $recados = Recado::all();
        return view('visualizar-recado',compact('recados'));
    }
}
