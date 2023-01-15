<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('/css/expediente.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="topo">
            <img id="imgtopo" src="https://portal.ifrn.edu.br/pesquisa/pfrh/logomarcas/logo-ifrn-1/ifrn-1">
            <div id="cabecalho">
                <h6 class="texto">CAMPUS IPANGUAÇU</h6>
                <h6 class="texto">FOLHA DE FREQUÊNCIA - Bolsas Tal</h6>  
                <h6 class="texto">MÊS: 
                    @foreach($expedientes as $expediente)
                    @if($expediente->id_tutor == auth()->user()->matricula)
                        {{$expediente->mes}}/{{$expediente->ano}} @break
                    @endif
                    @endforeach
                </h6>
           
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
                <td rowspan="3" class="dia">Dia</td>
                <td colspan="4">Expediente</td>
            </tr>
            <tr>
                <td colspan="2">Entrada</td>
                <td colspan="2">Saída</td>
            </tr>
            <tr>
                <td>Rubrica</td>
                <td class="dia">Hora</td>
                <td>Rubrica</td>
                <td class="dia">Hora</td>
            </tr>
            @foreach($expedientes as $expediente)
                @if($expediente->id_tutor == auth()->user()->matricula)
                    <tr>
                        <td class="qtd" style="width: 50px;">{{$expediente->dia}}</td>
                        <td class="linha" style="width: 500px;">{{auth()->user()->name}}</td>
                        <td class="linha" style="width: 30px;">{{$expediente->hora_entrada}}</td>
                        <td class="linha" style="width: 500px;">{{auth()->user()->name}}</td>
                        <td class="linha" style="width: 30px;">{{$expediente->hora_saida}}</td>
                    </tr>
                @endif
            @endforeach
           

           </table>
           <p class="texto">A ser preenchido pelo Servidor Responsável pelo Bolsista</p>
            <table>
            <tr>
                <th  style="width: 600px;">Avaliação obrigatória no ultimo mês da Bolsa(*)</th>
                <th>Sim</th>
                <th>Não</th>
                <th>Parcialmente</th>
            </tr>
            <tr>
                <td class="texto" style="padding: 4px;">1) O bolsista desempenhou todas as suas funções com competência e dedicação? </td>
                <td style="width: 100px;"></td>
                <td style="width: 100px;"></td>
                <td style="width: 100px;"></td>
            </tr>
            <tr>
                <td class="texto" style="padding: 4px;">2) O bolsista é assíduo?</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="texto" style="padding: 4px;">3) Houve faltas NÃO justificadas nesse mês?</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <br>
        <table>
        <tr>
                <th class="texto">Declaração do Aluno Bolsista</th>
                <th class="texto">Confirmação do Coordenador do Projeto</th>
                <th class="texto">Deferimento da Coordenação de Extensão</th>
            </tr>
            <tr>
                <td class="texto" style="padding: 4px; width: 300px">Declaro para os fins de pagamento de bolsa, que realizei as atividades pertinentes ao projeto e cumpri a carga horária de horas ___ semanais, conforme edital e seus anexos.
                <br><br><br>Assinatura do(a) Aluno(a) Bolsista
                </td>
                <td class="texto" style="padding: 4px; width: 300px">Confirmo que o aluno bolsista realizou as atividades descritas e cumpriu a carga horária de ___ horas semanais.
                <br><br><br>Coordenador(a) do Projeto
                </td>
                <td class="texto" style="padding: 4px; width: 300px">
                <br><br><br>Coordenador(a) de Extensão</td>
                </tr>
        </table>
        </div>
        <p class="texto">OBSERVAÇÕES: 1) Encaminhar a original para solicitação de pagamento de bolsa; 2) Anexar todos os documentos que comprovem as possíveis ausências justificadas; 3) (*) Avaliação prevista no item 8, c, da Deliberação nº 04/2011-COSEPEX.</p>
        <br>
        <input type="button" value="GERAR PDF" id="botao" onclick='GERARPDF()'>

        <script src="{{asset('/js/javascript.js')}}"></script>
    </body>
</html>
