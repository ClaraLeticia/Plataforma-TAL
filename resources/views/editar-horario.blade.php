<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAL Horários</title>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cadastro.css')}}">
    <!-- JAVASCRIPT -->
    <script src="{{asset('/js/javascript.js')}}"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color: #ddd;">
    <div class="container">
        <h1>Editar Horários</h1>
        <div class="ms-2">
            <h5>Tutor: {{$tutor->nome}}</h5>
            <h5>Horário atual:</h5>
            <div class="row mb-0">
                <div class="col">
                    <table class="table table-bordered border-dark text-center table-tutores">
                        <tr class="table-green">
                            <th>Dias</th>
                            <th>Entrada</th>
                            <th>Saída</th>
                        </tr>
                        <tr>
                            <th>Segunda-feira</th>
                            <td>
                            @foreach($horarios as $horario)
                                @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Segunda-feira')
                                    {{date('H:i', strtotime($horario->horario_entrada))}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                            @foreach($horarios as $horario)
                                @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Segunda-feira')
                                    {{date('H:i', strtotime($horario->horario_saida))}}
                                @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Terça-feira</th>
                            <td>
                            @foreach($horarios as $horario)
                                @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Terça-feira')
                                    {{date('H:i', strtotime($horario->horario_entrada))}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                            @foreach($horarios as $horario)
                                @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Terça-feira')
                                    {{date('H:i', strtotime($horario->horario_saida))}}
                                @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Quarta-feira</th>
                            <td>
                            @foreach($horarios as $horario)
                                @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quarta-feira')
                                    {{date('H:i', strtotime($horario->horario_entrada))}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                            @foreach($horarios as $horario)
                                @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quarta-feira')
                                    {{date('H:i', strtotime($horario->horario_saida))}}
                                @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Quinta-feira</th>
                            <td>
                            @foreach($horarios as $horario)
                                @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quinta-feira')
                                    {{date('H:i', strtotime($horario->horario_entrada))}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                            @foreach($horarios as $horario)
                                @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quinta-feira')
                                    {{date('H:i', strtotime($horario->horario_saida))}}
                                @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Sexta-feira</th>
                            <td>
                            @foreach($horarios as $horario)
                                @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Sexta-feira')
                                    {{date('H:i', strtotime($horario->horario_entrada))}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                            @foreach($horarios as $horario)
                                @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Sexta-feira')
                                    {{date('H:i', strtotime($horario->horario_saida))}}
                                @endif
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col"></div>
            </div>
        </div>
            <form action="/editar-horario/{{$tutor->matricula_aluno}}" method="POST" id="form-tutor-horario" class="p-3">
            @csrf
                <input type="hidden" name="matricula_aluno" value="{{$tutor->matricula_aluno}}">
                <div class="row g-3 align-items-center">
                    <hr>
                    <div class="col-sm-2">
                        <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off" name="dia_segunda" value="Segunda-feira" <?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Segunda-feira'){
                                    echo 'checked';
                                }
                            }
                        ?> onclick="HABILITAR_HORARIOS_SEGUNDA(this)">
                        <label class="btn btn-outline-success" for="btn-check-outlined">Segunda-feira</label><br>
                    </div>
                    <div class="col-sm-2">
                        <label for="horario_entrada_segunda">Hora de Entrada:</label>                        
                        <input class="form-control horario_segunda" type="time" name="horario_entrada_segunda" value="<?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Segunda-feira'){
                                    echo date('H:i', strtotime($horario->horario_entrada));
                                }
                            }
                        ?>">
                    </div>
                    <div class="col-sm-2">
                        <label for="horario_saida_segunda">Hora de Saída:</label>
                        <input class="form-control horario_segunda" type="time" name="horario_saida_segunda" value="<?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Segunda-feira'){
                                    echo date('H:i', strtotime($horario->horario_saida));
                                }
                            }
                        ?>">
                    </div>
                </div><hr>
                <div class="row g-3 align-items-center">
                    <div class="col-sm-2">
                        <input type="checkbox" class="btn-check" id="btn-check-outlined-2" autocomplete="off" name="dia_terca" value="Terça-feira" <?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Terça-feira'){
                                    echo 'checked';
                                }
                            }
                        ?> onclick="HABILITAR_HORARIOS_TERCA(this)">
                        <label class="btn btn-outline-success" for="btn-check-outlined-2">Terça-feira</label><br>                        
                    </div>
                    <div class="col-sm-2">
                        <label for="horario_entrada_terca">Hora de Entrada:</label>
                        <input class="form-control horario_terca" type="time" name="horario_entrada_terca" value="<?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Terça-feira'){
                                    echo date('H:i', strtotime($horario->horario_entrada));
                                }
                            }
                        ?>">
                    </div>
                    <div class="col-sm-2">
                        <label for="horario_saida_terca">Hora de Saída:</label>
                        <input class="form-control horario_terca" type="time" name="horario_saida_terca" value="<?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Terça-feira'){
                                    echo date('H:i', strtotime($horario->horario_saida));
                                }
                            }
                        ?>">
                    </div>
                </div><hr>
                <div class="row g-3 align-items-center">
                    <div class="col-sm-2">
                        <input type="checkbox" class="btn-check" id="btn-check-outlined-3" autocomplete="off" name="dia_quarta" value="Quarta-feira" <?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quarta-feira'){
                                    echo 'checked';
                                }
                            }
                        ?> onclick="HABILITAR_HORARIOS_QUARTA(this)">
                        <label class="btn btn-outline-success" for="btn-check-outlined-3">Quarta-feira</label><br>
                    </div>
                    <div class="col-sm-2">
                        <label for="horario_entrada_quarta">Hora de Entrada:</label>
                        <input class="form-control horario_quarta" type="time" name="horario_entrada_quarta" value="<?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quarta-feira'){
                                    echo date('H:i', strtotime($horario->horario_entrada));
                                }
                            }
                        ?>">
                    </div>
                    <div class="col-sm-2">
                        <label for="horario_saida_quarta">Hora de Saída:</label>
                        <input class="form-control horario_quarta" type="time" name="horario_saida_quarta" value="<?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quarta-feira'){
                                    echo date('H:i', strtotime($horario->horario_saida));
                                }
                            }
                        ?>">
                    </div>
                </div><hr>
                <div class="row g-3 align-items-center">
                    <div class="col-sm-2">
                        <input type="checkbox" class="btn-check" id="btn-check-outlined-4" autocomplete="off" name="dia_quinta" value="Quinta-feira" <?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quinta-feira'){
                                    echo 'checked';
                                }
                            }
                        ?> onclick="HABILITAR_HORARIOS_QUINTA(this)">
                        <label class="btn btn-outline-success" for="btn-check-outlined-4">Quinta-feira</label><br>
                    </div>
                <div class="col-sm-2">
                        <label for="horario_entrada_quinta">Hora de Entrada:</label>
                        <input class="form-control horario_quinta" type="time" name="horario_entrada_quinta" value="<?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quinta-feira'){
                                    echo date('H:i', strtotime($horario->horario_entrada));
                                }
                            }
                        ?>">
                    </div>
                    <div class="col-sm-2">
                        <label for="horario_saida_quinta">Hora de Saída:</label>
                        <input class="form-control horario_quinta" type="time" name="horario_saida_quinta" value="<?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quinta-feira'){
                                    echo date('H:i', strtotime($horario->horario_saida));
                                }
                            }
                        ?>">
                    </div>
                </div><hr>
                <div class="row g-3 align-items-center">
                    <div class="col-sm-2">
                        <input type="checkbox" class="btn-check" id="btn-check-outlined-5" autocomplete="off" name="dia_sexta" value="Sexta-feira" <?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Sexta-feira'){
                                    echo 'checked';
                                }
                            }
                        ?> onclick="HABILITAR_HORARIOS_SEXTA(this)">
                        <label class="btn btn-outline-success" for="btn-check-outlined-5">Sexta-feira</label><br>
                    </div>
                    <div class="col-sm-2">
                        <label for="horario_entrada_sexta">Hora de Entrada:</label>
                        <input class="form-control horario_sexta" type="time" name="horario_entrada_sexta" value="<?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Sexta-feira'){
                                    echo date('H:i', strtotime($horario->horario_entrada));
                                }
                            }
                        ?>">
                    </div>
                    <div class="col-sm-2">
                        <label for="horario_saida_sexta">Hora de Saída:</label>
                        <input class="form-control horario_sexta" type="time" name="horario_saida_sexta" value="<?php 
                            foreach($horarios as $horario){
                                if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Sexta-feira'){
                                    echo date('H:i', strtotime($horario->horario_saida));
                                }
                            }
                        ?>">
                    </div>
                </div><br>
                <p class="text-danger">O horário atual será substituindo pelo novo horário editado, confira os campos do formulário antes de enviar.</p>
                <div class="d-flex justify-content-between p-3">
                    <a href="/perfil-etep/visualizar-tutor"><input type="button" class="btn btn-success" value="Voltar"></a>
                    <input form="form-tutor-horario" type="submit" class="btn btn-success" value="Editar">
                </div>
            </form>
    </div>
</body>
</html>