<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Horario;
use App\Models\User;
use App\Models\Professor;
use App\Models\Materia;
use Illuminate\Support\Facades\Gate;


class TutorController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function visualizar_tutor() {
        $tutores = Tutor::all();
        $materias = Materia::all();
        $professores = Professor::all();
        $horarios = Horario::all();
        Gate::authorize('opcoes-etep');
        return view('visualizar-tutor',compact('tutores','materias','professores','horarios'));
    }

    public function perfil_tutor() {
        $tutores = Tutor::all();
        return view('perfil-tutor',['tutores' => $tutores]);
    }

    public function cadastro_tutor(){
        $materias = Materia::all();
        $professores = Professor::all();
        Gate::authorize('opcoes-etep');
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
        $tutor['senha'] = bcrypt($request->senha);
        $tutor->save();

        $usuario = new User;
        $usuario->name = $request->nome;
        $usuario->email = $request->email;
        $usuario->matricula = $request->matricula_aluno;
        $usuario->id_user = 2;
        $usuario['password'] = bcrypt($request->senha);
        $usuario->save();
        
        if($request->dia_segunda != null){
        $horario_segunda = new Horario;
        $horario_segunda->id_tutor = $request->matricula_aluno;
        $horario_segunda->dia = $request->dia_segunda;
        $horario_segunda->horario_entrada = $request->horario_entrada_segunda;
        $horario_segunda->horario_saida = $request->horario_saida_segunda;
        $horario_segunda->save();
        }
        if($request->dia_terca != null){
        $horario_terca = new Horario;
        $horario_terca->id_tutor = $request->matricula_aluno;
        $horario_terca->dia = $request->dia_terca;
        $horario_terca->horario_entrada = $request->horario_entrada_terca;
        $horario_terca->horario_saida = $request->horario_saida_terca;
        $horario_terca->save();
        }
        if($request->dia_quarta != null){
        $horario_quarta = new Horario;
        $horario_quarta->id_tutor = $request->matricula_aluno;
        $horario_quarta->dia = $request->dia_quarta;
        $horario_quarta->horario_entrada = $request->horario_entrada_quarta;
        $horario_quarta->horario_saida = $request->horario_saida_quarta;
        $horario_quarta->save();
        }
        if($request->dia_quinta != null){
        $horario_quinta = new Horario;
        $horario_quinta->id_tutor = $request->matricula_aluno;
        $horario_quinta->dia = $request->dia_quinta;
        $horario_quinta->horario_entrada = $request->horario_entrada_quinta;
        $horario_quinta->horario_saida = $request->horario_saida_quinta;
        $horario_quinta->save();
        }
        if($request->dia_sexta != null){
        $horario_sexta = new Horario;
        $horario_sexta->id_tutor = $request->matricula_aluno;
        $horario_sexta->dia = $request->dia_sexta;
        $horario_sexta->horario_entrada = $request->horario_entrada_sexta;
        $horario_sexta->horario_saida = $request->horario_saida_sexta;
        $horario_sexta->save();
        }
        return redirect('/perfil-etep/visualizar-tutor');   
    }

    public function deletar_tutor($matricula_aluno){
        Tutor::findOrFail($matricula_aluno)->delete();
        return redirect('/perfil-etep/visualizar-tutor');
    }

    public function editar_tutor($matricula_aluno){
        $tutor = Tutor::findOrFail($matricula_aluno);
        $materias = Materia::all();
        $professores = Professor::all();
        Gate::authorize('opcoes-etep');
        return view('editar-tutor',compact('tutor','materias','professores'));
    }

    public function atualizar_tutor(Request $request){
        if ($request->senha != $request->confirmar_senha) {
            return redirect('/perfil-etep/editar-tutor/');
        }
        Tutor::findOrFail($request->matricula_aluno)->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'id_materia' => $request->id_materia,
            'id_professor_orientador' => $request->id_professor_orientador,
            'edital' => $request->edital,
            'semestre' => $request->semestre,
            'senha' => bcrypt($request->senha),
        ]);
        $users = User::all();
        foreach($users as $user ){
            if($user->matricula == $request->matricula_aluno){
                User::findOrFail($user->id)->update([
                'nome' => $request->nome,
                'email' => $request->email,
                'senha' => bcrypt($request->senha),
                ]);
            }
        }
        return redirect('/perfil-etep/visualizar-tutor');
    }

    public function editar_horario($matricula_aluno){
        $tutor = Tutor::findOrFail($matricula_aluno);
        $horarios = Horario::all();
        Gate::authorize('opcoes-etep');
        return view('editar-horario',compact('tutor','horarios'));
    }

    public function atualizar_horario(Request $request){
        $horarios = Horario::all();
        foreach ($horarios as $horario) {
            if($horario->id_tutor == $request->matricula_aluno){
                Horario::findOrFail($horario->id)->delete();
            }
        }
        if($request->dia_segunda != null){
            $horario_segunda = new Horario;
            $horario_segunda->id_tutor = $request->matricula_aluno;
            $horario_segunda->dia = $request->dia_segunda;
            $horario_segunda->horario_entrada = $request->horario_entrada_segunda;
            $horario_segunda->horario_saida = $request->horario_saida_segunda;
            $horario_segunda->save();
        }
        if($request->dia_terca != null){
            $horario_terca = new Horario;
            $horario_terca->id_tutor = $request->matricula_aluno;
            $horario_terca->dia = $request->dia_terca;
            $horario_terca->horario_entrada = $request->horario_entrada_terca;
            $horario_terca->horario_saida = $request->horario_saida_terca;
            $horario_terca->save();
        }
        if($request->dia_quarta != null){
            $horario_quarta = new Horario;
            $horario_quarta->id_tutor = $request->matricula_aluno;
            $horario_quarta->dia = $request->dia_quarta;
            $horario_quarta->horario_entrada = $request->horario_entrada_quarta;
            $horario_quarta->horario_saida = $request->horario_saida_quarta;
            $horario_quarta->save();
        }
        if($request->dia_quinta != null){
            $horario_quinta = new Horario;
            $horario_quinta->id_tutor = $request->matricula_aluno;
            $horario_quinta->dia = $request->dia_quinta;
            $horario_quinta->horario_entrada = $request->horario_entrada_quinta;
            $horario_quinta->horario_saida = $request->horario_saida_quinta;
            $horario_quinta->save();
        }
        if($request->dia_sexta != null){
            $horario_sexta = new Horario;
            $horario_sexta->id_tutor = $request->matricula_aluno;
            $horario_sexta->dia = $request->dia_sexta;
            $horario_sexta->horario_entrada = $request->horario_entrada_sexta;
            $horario_sexta->horario_saida = $request->horario_saida_sexta;
            $horario_sexta->save();
        }
        return redirect('/perfil-etep/visualizar-tutor');
    }
}
