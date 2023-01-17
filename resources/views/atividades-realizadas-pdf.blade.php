<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('/css/atividades-realizadas.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="topo">
            <img id="imgtopo" src="https://portal.ifrn.edu.br/pesquisa/pfrh/logomarcas/logo-ifrn-1/ifrn-1">
            <div id="cabecalho">
                <h6 class="texto">CAMPUS IPANGUAÇU</h6>
                <h6 class="texto">FOLHA DE FREQUÊNCIA - Bolsas Tal</h6>  
                <h6 class="texto">MÊS: @foreach($expedientes as $expediente)
                    @if($expediente->id_tutor == auth()->user()->matricula)
                        {{$expediente->mes}}/{{$expediente->ano}} @break
                    @endif
                    @endforeach</h6>
           
            </div>
        </div>
 
        <div id="tabelatutor">
            <table >
                @foreach($tutor as $tutor)
                @if(auth()->user()->matricula == $tutor->matricula_aluno)
                <tr>
                    <td>Tutor (Bolsista): {{$tutor->nome}}</td>
                    <td>Monitoria: @foreach($materias as $materia)
                            @if($tutor->id_materia == $materia->id)
                                {{$materia->materia}}  
                            @endif
                        @endforeach</td>
                </tr>
                <tr>
                    <td>Professor(a): @foreach($professores as $professor)
                            @if($tutor->id_professor_orientador == $professor->id)
                                {{$professor->nome}}  
                            @endif
                        @endforeach</td>
                    <td>Edital: {{$tutor->edital}}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
 
        <div id="expediente">
            <table>
                <tr>
                    <td rowspan="2" class="qtd"></td>
                    <td colspan="4">Expediente</td>
                </tr>
                <tr>
                    <td style="width: 200px;">DIA/HORÁRIO</td>
                    <td style="width: 200px;">ASSINATURA ESTUDANTE</td>
                    <td style="width: 100px;">TURMA</td>
                    <td>ATIVIDADE / ASSUNTO TRABALHADO</td>
                </tr>
                @foreach($atividades as $key => $atividade)
                @if($atividade->id_tutor == auth()->user()->matricula)          
                <tr>
                    <td style="width: 50px">{{$key+1}}</td>
                    <td style="width: 200px;">{{date('d/m', strtotime($atividade->dia))}} - {{date('H:m', strtotime($atividade->horario))}}</td>
                    <td style="width: 200px;">{{$atividade->discente}}</td>
                    <td style="width: 100px;">{{$atividade->turma_discente}}</td>
                    <td >{{$atividade->assunto}}</td>
                </tr>
                @endif
                @endforeach   
            </table>
        </div>
 
        <p>
            <input type="button" value="GERAR PDF" id="botao" onclick='GERARPDF()'>
        </p>

        <script src="{{asset('/js/javascript.js')}}"></script>
    </body>
</html>
