<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('/css/folha-frequencia.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="topo">
            <img id="imgtopo" src="https://portal.ifrn.edu.br/pesquisa/pfrh/logomarcas/logo-ifrn-1/ifrn-1">
            <div id="cabecalho">
                <h6 class="texto">CAMPUS IPANGUAÇU</h6>
                <h6 class="texto">FOLHA DE FREQUÊNCIA - Bolsas Tal</h6>  
                <h6 class="texto">MÊS: ----/2022</h6>
           
            </div>
        </div>
 
        <div id="tabelatutor">
            <table >
                <tr>
                    <td>Tutor (Bolsista):</td>
                    <td>Monitoria:</td>
                </tr>
                <tr>
                    <td>Professor(a):</td>
                    <td>Edital:</td>
                </tr>
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
 
            <?php
            for($i = 1; $i <= 31; $i++) {
                echo "<tr>
                <td class='qtd'>".$i."</td>
                <td class='linha'></td>
                <td class='linha'></td>
                <td class='linha'></td>
                <td class='linha'></td>
            </tr>";
            }
            ?>

           </table>
           <p class="texto">A ser preenchido pelo Servidor Responsável pelo Bolsista</p>
            <table>
            <tr>
                <th>Avaliação obrigatória no ultimo mês da Bolsa(*)</th>
                <th>Sim</th>
                <th>Não</th>
                <th>Parcialmente</th>
            </tr>
            <tr>
                <td class="texto">1) O bolsista desempenhou todas as suas funções com competência e dedicação? </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="texto">2) O bolsista é assíduo?</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="texto">3) Houve faltas NÃO justificadas nesse mês?</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
 
        <table>
        <tr>
                <th class="texto">Declaração do Aluno Bolsista</th>
                <th class="texto">Confirmação do Coordenador do Projeto</th>
                <th class="texto">Deferimento da Coordenação de Extensão</th>
            </tr>
            <tr>
                <td class="texto">Declaro para os fins de pagamento de bolsa, que realizei as atividades pertinentes ao projeto e cumpri a carga horária de horas ___ semanais, conforme edital e seus anexos.
                <br> <br>Assinatura do(a) Aluno(a) Bolsista
            </td>
                <td class="texto">Confirmo que o aluno bolsista realizou as atividades descritas e cumpriu a carga horária de ___ horas semanais.
                <br> <br>  Coordenador(a) do Projeto
            </td>
                <td class="texto">
                <br> <br> <br>
                Coordenador(a) de Extensão</td>
            </tr>
        </table>
        </div>
        <p class="texto">OBSERVAÇÕES: 1) Encaminhar a original para solicitação de pagamento de bolsa; 2) Anexar todos os documentos que comprovem as possíveis ausências justificadas; 3) (*) Avaliação prevista no item 8, c, da Deliberação nº 04/2011-COSEPEX.
</p>
 
        <p>
            <input type="button" value="GERAR PDF" id="botao" onclick='GERARPDF()'>
        </p>
   
        <script src="{{asset('/js/javascript.js')}}"></script>
    </body>
</html>
