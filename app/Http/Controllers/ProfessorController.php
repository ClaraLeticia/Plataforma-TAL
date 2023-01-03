<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\Materia;

class ProfessorController extends Controller
{
    public function visualizar_professor() {
        $professores = Professor::all();
        $materias = Materia::all();
        return view('visualizar-professor',['professores' => $professores,'materias' => $materias]);
    }

    public function cadastro_professor(){
        $materias = Materia::all();
        return view('cadastro-professor',['materias' => $materias]);
    }

    public function cadastrar_professor(Request $request) {
        $professor = new Professor;
        $professor->nome = $request->nome;
        $professor->id_materia = $request->id_materia;
        $professor->semestre = $request->semestre;
        $professor->save();
        return redirect('perfil-etep/visualizar-professor');
    }

    public function deletar_professor($id){
        Professor::findOrFail($id)->delete();
        return redirect('/perfil-etep/visualizar-professor');
    }

    public function editar_professor($id){
        $professor = Professor::findOrFail($id);
        $materias = Materia::all();
        return view('editar-professor',['professor' => $professor,'materias' => $materias]);
    }

    public function atualizar_professor(Request $request){
        Professor::findOrFail($request->id)->update($request->all());
        return redirect('/perfil-etep/visualizar-professor');
    }
}
