<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use Illuminate\Support\Facades\Gate;

class MateriaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        $materias = Materia::all();
        Gate::authorize('opcoes-etep');
        return view('materias',['materias' => $materias]);
    }

    public function cadastrar_materia(Request $request){
        $materia = new Materia;
        $materia->materia = $request->materia;
        $materia->save();
        return redirect('/perfil-etep/materias');
    }

    public function deletar_materia($id){
        Materia::findOrFail($id)->delete();
        return redirect('/perfil-etep/materias');
    }

    public function editar_materia($id){
        $materia = Materia::findOrFail($id);
        Gate::authorize('opcoes-etep');
        return view('editar-materia',['materia' => $materia]);
    }

    public function atualizar_materia(Request $request){
        Materia::findOrFail($request->id)->update($request->all());
        return redirect('/perfil-etep/materias');
    }
}
