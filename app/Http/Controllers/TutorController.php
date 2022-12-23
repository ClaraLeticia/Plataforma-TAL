<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Horario;
use App\Models\Recado;
use Illuminate\Console\View\Components\Alert;
use Symfony\Component\VarDumper\VarDumper;


class TutorController extends Controller
{
    public function index() {
        $tutores = Tutor::all();
        $recados = Recado::all();
        return view('home',compact('tutores','recados'));
    }

    public function visualizar_tutor() {
        $tutores = Tutor::all();
        return view('visualizar-tutor',['tutores' => $tutores]);
    }

    public function perfil_tutor() {
        $tutores = Tutor::all();
        return view('perfil-tutor',['tutores' => $tutores]);
    }

    public function store(Request $request) {
        $tutor = new Tutor;
        if ($request->senha != $request->confirmar_senha) {
            return redirect('/perfil-etep/cadastro-tutor');
        }
        $tutor->matricula_aluno = $request->matricula_aluno;
        $tutor->nome = $request->nome;
        $tutor->email = $request->email;
        $tutor->telefone = $request->telefone;
        $tutor->materia = $request->materia;
        $tutor->professor_orientador = $request->professor_orientador;
        $tutor->edital = $request->edital;
        $tutor->semestre = $request->semestre;
        $tutor->senha = $request->senha;
        $tutor->save();

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

        return redirect('/');
        
        // foreach($horario['horario_entrada'] as $i => $value){
        //     if(empty($horario['horario_entrada'][$i]) || empty($horario['horario_saida'][$i])){
        //         unset($horario['horario_entrada'][$i]);
        //         unset($horario['horario_saida'][$i]);
        //     }
        // }
        // $horarioentrada = [];
        // foreach($horario['horario_entrada'] as $i => $value){
        //     array_push($horarioentrada, $value);
        // }
        // $horariosaida = [];
        // foreach($horario['horario_saida'] as $i => $value){
        //     array_push($horariosaida, $value);
        // }
        // // function array_replace_key(&$arr, $old, $new, $overwrite = true): bool {
        // //             if (isset($arr[$new]) and !$overwrite) {
        // //                 return false;
        // //             }
        // //             $arr[$new] = $arr[$old];
        // //             unset($arr[$old]);
        // //             return true;
        // // }
        // $id_tutor = [];
        // foreach($horario['dia'] as $key => $value){
        //     $id_tutor[$key] = $request->matricula_aluno;
        //     // array_replace_key($id_tutor, $key, 'id_tutor');
        // }
        // // array_replace_key($id_tutor, 0, 'id_tutor');
        // // array_replace_key($id_tutor, 1, 'id_tutor');
        // // array_replace_key($horario['dia'], 0, 'dia');
        // // array_replace_key($horario['dia'], 1, 'dia');
        // // array_replace_key($horarioentrada, 0, 'horario_entrada');
        // // array_replace_key($horarioentrada, 1, 'horario_entrada');
        // // array_replace_key($horariosaida, 0, 'horario_saida');
        // // array_replace_key($horariosaida, 1, 'horario_saida');
        // $novohorario = [$id_tutor,$horario['dia'],$horarioentrada,$horariosaida];
        // echo "<pre>";
        // var_dump($novohorario);
        // echo "</pre>";
        // // DB::table('horarios')->insert($novohorario);

        
        
    }

}
