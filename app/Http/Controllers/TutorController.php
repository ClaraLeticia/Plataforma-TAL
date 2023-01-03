<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Horario;
use App\Models\User;
use App\Models\Professor;
use App\Models\Materia;



class TutorController extends Controller
{
        public function index() {
            $tutores = Tutor::all();
            $materias = Materia::all();
            return view('home',compact('tutores','materias'));
        }

    public function visualizar_tutor() {
        $tutores = Tutor::all();
        return view('visualizar-tutor',['tutores' => $tutores]);
    }

    public function perfil_tutor() {
        $tutores = Tutor::all();
        return view('perfil-tutor',['tutores' => $tutores]);
    }

    public function cadastro_tutor(){
        $materias = Materia::all();
        $professores = Professor::all();
        return view('cadastro-tutor', compact('materias','professores'));
    }

    public function cadastrar_tutor(Request $request) {
        $tutor = new Tutor;
        if ($request->senha != $request->confirmar_senha) {
            return redirect('/perfil-etep/cadastro-tutor');
        }
        $tutor->matricula_aluno = $request->matricula_aluno;
        $tutor->nome = $request->nome;
        $tutor->email = $request->email;
        $tutor->telefone = $request->telefone;
        $tutor->id_materia = $request->id_materia;
        $tutor->id_professor_orientador = $request->id_professor_orientador;
        $tutor->edital = $request->edital;
        $tutor->semestre = $request->semestre;
        $tutor->senha = $request->senha;
        $tutor->save();

        $usuario = new User;
        $usuario->name = $request->nome;
        $usuario->email = $request->email;
        $usuario->matricula = $request->matricula_aluno;
        $usuario->id_user = 2;
        $usuario['password'] = bcrypt($request->senha);
        $usuario->save();

        $horario_segunda = new Horario;
        $horario_segunda->id_tutor = $request->matricula_aluno;
        $horario_segunda->dia = $request->dia_segunda;
        $horario_segunda->horario_entrada = $request->horario_entrada_segunda;
        $horario_segunda->horario_saida = $request->horario_saida_segunda;
        $horario_segunda->save();

        $horario_terca = new Horario;
        $horario_terca->id_tutor = $request->matricula_aluno;
        $horario_terca->dia = $request->dia_terca;
        $horario_terca->horario_entrada = $request->horario_entrada_terca;
        $horario_terca->horario_saida = $request->horario_saida_terca;
        $horario_terca->save();

        $horario_quarta = new Horario;
        $horario_quarta->id_tutor = $request->matricula_aluno;
        $horario_quarta->dia = $request->dia_quarta;
        $horario_quarta->horario_entrada = $request->horario_entrada_quarta;
        $horario_quarta->horario_saida = $request->horario_saida_quarta;
        $horario_quarta->save();

        $horario_quinta = new Horario;
        $horario_quinta->id_tutor = $request->matricula_aluno;
        $horario_quinta->dia = $request->dia_quinta;
        $horario_quinta->horario_entrada = $request->horario_entrada_quinta;
        $horario_quinta->horario_saida = $request->horario_saida_quinta;
        $horario_quinta->save();

        $horario_sexta = new Horario;
        $horario_sexta->id_tutor = $request->matricula_aluno;
        $horario_sexta->dia = $request->dia_sexta;
        $horario_sexta->horario_entrada = $request->horario_entrada_sexta;
        $horario_sexta->horario_saida = $request->horario_saida_sexta;
        $horario_sexta->save();

        return redirect('/perfil-etep/visualizar-tutor');   
        
    }

}
