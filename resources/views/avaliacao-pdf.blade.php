<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('/css/relatorio-atividade.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="topo">
            <img id="imgtopo" src="https://portal.ifrn.edu.br/pesquisa/pfrh/logomarcas/logo-ifrn-1/ifrn-1">
            <h3>TUTORIA DE APRENDIZAGEM DE LABORATÓRIO – TAL</h3>
            <p>Disciplina: @foreach($materias as $materia)
                            @if($tutor->id_materia == $materia->id)
                                {{$materia->materia}}  
                            @endif
                        @endforeach</p>
 
            <h3>RELATÓRIO DE ATIVIDADES</h3>
            <p>TUTOR: {{$tutor->nome}}</p>
            <p>PERÍODO: @foreach($expedientes as $expediente)
                    @if($expediente->id_tutor == auth()->user()->matricula)
                        {{$expediente->mes}}/{{$expediente->ano}} @break
                    @endif
                    @endforeach</p>
            <p>Relate, de forma sucinta e organizada, as atividades desenvolvidas durante o período. </p>
        </div>
       
        <div id="questionario">
            @foreach($avaliacao as $avaliacao)
            @if($avaliacao->id_tutor == auth()->user()->matricula)
            <p class="questao">1. Número aproximado de atendimentos (individuais e/ou em grupo; cursos e turmas)</p>
            <p>{{$avaliacao->atendimentos}}</p>
            <p class="questao">2. Principais dificuldades apresentadas pelos alunos por curso/turma (descreva o conteúdo que considera que apresentou maior dificuldade aos alunos; indique a natureza dessa dificuldade: compreensão das explicações do professor, do conteúdo, das atividades avaliativas, entre outras).</p>
            <p>{{$avaliacao->dificuldade_discente}}</p>
            <p class="questao">3. Principais dificuldades enfrentadas pelo tutor na execução das atividades (indique os conteúdos em que teve maior dificuldade ao realizar as orientações; descreva outras dificuldades, tais como disponibilidade de espaço, de tempo, de contato com os professores da área, entre outras que considere relevantes</p>
            <p>{{$avaliacao->dificuldade_tutor}}</p>
            <p class="questao">4. Sugestões de encaminhamentos a respeito de sua tutoria que possam facilitar o processo de aprendizado do aluno atendido.</p>
            <p>{{$avaliacao->sugestoes}}</p>
            @endif
            @endforeach
        </div>
 
        <p>
            <input type="button" value="GERAR PDF" id="botao" onclick='GERARPDF()'>
        </p>

        <script src="{{asset('/js/javascript.js')}}"></script>
    </body>
</html>
