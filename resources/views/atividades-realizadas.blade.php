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
                 <td rowspan="2" class="qtd"></td>
                 <td colspan="4">Expediente</td>
             </tr>
             <tr>
                 <td>DIA/HORÁRIO</td>
                 <td>ASSINATURA ESTUDANTE</td>
                 <td>TURMA</td>
                 <td>ATIVIDADE / ASSUNTO TRABALHADO</td>
             </tr>
            
             <?php
            for($i = 1; $i <= 15; $i++) {
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
        </div>
 
        <p>
            <input type="button" value="GERAR PDF" id="botao" onclick='GERARPDF()'>
        </p>

        <script src="{{asset('/js/javascript.js')}}"></script>
    </body>
</html>
