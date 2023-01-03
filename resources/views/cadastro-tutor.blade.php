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
        <h1>Cadastrar tutores</h1>
        <form action="/cadastrar-tutor" method="POST" id="form-tutor-horario" class="p-3">
            @csrf
            <h2>Dados pessoais</h2><br>
            <div class="row g-2">
                <div class="col-md-9">
                    <label for="nome">Nome Completo</label><br>
                    <input class="form-control" type="text" name="nome" id="" placeholder="Nome Completo" required>
                </div>
                <div class="col-md-3">
                    <label for="matricula">Matrícula</label><br>
                    <input class="form-control" type="text" name="matricula_aluno" id="" placeholder="Matrícula" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="email">E-mail</label><br>
                    <input class="form-control" type="email" name="email" id="" placeholder="email@email.com" required>
                </div>
                <div class="col-md-6">
                    <label for="telefone">Número de Telefone</label><br>
                    <input class="form-control" type="text" name="telefone" id="" placeholder="(xx) xxxxx-xxxx" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="materia">Matéria</label>
                    <select class="form-select" name="id_materia">
                        <option></option>
                        @foreach($materias as $materia)
                        <option value="{{$materia->id}}">{{$materia->materia}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="professor_orientador">Professor Orientador</label><br>
                    <select class="form-select" name="id_professor_orientador">
                        <option></option>
                        @foreach($professores as $professor)
                        <option value="{{$professor->id}}">{{$professor->nome}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="edital">Edital</label><br>
                    <input class="form-control" type="text" name="edital" id="" placeholder="Edital" required>
                </div>
                <div class="col-md-6">
                    <label for="semestre">Semestre</label><br>
                    <input class="form-control" type="text" name="semestre" id="" placeholder="Semestre" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="senha">Senha</label><br>
                    <input class="form-control" type="password" name="senha" placeholder="Senha" minlength="8" maxlength="20" required> 
                    <div id="passwordHelpBlock" class="form-text">
                        Sua senha deve conter de 8 a 20 caracteres.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="senha">Confirmar senha</label><br>
                    <input class="form-control" type="password" name="confirmar_senha" placeholder="Confirmar senha" minlength="8" maxlength="20" required>
                </div>
            </div>

            <h2>Horários</h2>
            <p>Marque os dias da semana selecionados pelo tutor e ao lado seu horário disponível</p><br>
            
                <form action="/cadastrar-tutor" method="POST" id="form-tutor-horario">
                    <div class="row g-3 align-items-center">
                        <div class="col-sm-2">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off" name="dia_segunda" value="Segunda-feira">
                            <label class="btn btn-outline-success" for="btn-check-outlined">Segunda-feira</label><br>
                        </div>
                        <div class="col-sm-2">
                            <label for="horario_entrada_segunda">Hora de Entrada:</label>
                            <input class="form-control" type="time" name="horario_entrada_segunda" id="" value="null">
                        </div>
                        <div class="col-sm-2">
                            <label for="horario_saida_segunda">Hora de Saída:</label>
                            <input class="form-control" type="time" name="horario_saida_segunda" id="" value="null">
                        </div>
                    </div><hr>
                    <div class="row g-3 align-items-center">
                        <div class="col-sm-2">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined-2" autocomplete="off" name="dia_terca" value="Terça-feira">
                            <label class="btn btn-outline-success" for="btn-check-outlined-2">Terça-feira</label><br>
                        </div>
                        <div class="col-sm-2">
                            <label for="horario_entrada_terca">Hora de Entrada:</label>
                            <input class="form-control" type="time" name="horario_entrada_terca" id="">
                        </div>
                        <div class="col-sm-2">
                            <label for="horario_saida_terca">Hora de Saída:</label>
                            <input class="form-control" type="time" name="horario_saida_terca" id="">
                        </div>
                    </div><hr>
                    <div class="row g-3 align-items-center">
                        <div class="col-sm-2">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined-3" autocomplete="off" name="dia_quarta" value="Quarta-feira">
                            <label class="btn btn-outline-success" for="btn-check-outlined-3">Quarta-feira</label><br>
                        </div>
                        <div class="col-sm-2">
                            <label for="horario_entrada_quarta">Hora de Entrada:</label>
                            <input class="form-control" type="time" name="horario_entrada_quarta" id="">
                        </div>
                        <div class="col-sm-2">
                            <label for="horario_saida_quarta">Hora de Saída:</label>
                            <input class="form-control" type="time" name="horario_saida_quarta" id="">
                        </div>
                    </div><hr>
                    <div class="row g-3 align-items-center">
                        <div class="col-sm-2">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined-4" autocomplete="off" name="dia_quinta" value="Quinta-feira">
                            <label class="btn btn-outline-success" for="btn-check-outlined-4">Quinta-feira</label><br>
                        </div>
                        <div class="col-sm-2">
                            <label for="horario_entrada_quinta">Hora de Entrada:</label>
                            <input class="form-control" type="time" name="horario_entrada_quinta" id="">
                        </div>
                        <div class="col-sm-2">
                            <label for="horario_saida_quinta">Hora de Saída:</label>
                            <input class="form-control" type="time" name="horario_saida_quinta" id="">
                        </div>
                    </div><hr>
                    <div class="row g-3 align-items-center">
                        <div class="col-sm-2">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined-5" autocomplete="off" name="dia_sexta" value="Sexta-feira">
                            <label class="btn btn-outline-success" for="btn-check-outlined-5">Sexta-feira</label><br>
                        </div>
                        <div class="col-sm-2">
                            <label for="horario_entrada_sexta">Hora de Entrada:</label>
                            <input class="form-control" type="time" name="horario_entrada_sexta" id="">
                        </div>
                        <div class="col-sm-2">
                            <label for="horario_saida_sexta">Hora de Saída:</label>
                            <input class="form-control" type="time" name="horario_saida_sexta" id="">
                        </div>
                    </div>
                </form>
            <div class="d-flex justify-content-between p-3">
                <a href="/perfil-etep"><input type="button" class="btn btn-success" value="Voltar"></a>
                <input form="form-tutor-horario" type="submit" class="btn btn-success" value="Cadastrar">
            </div><br>
        </form>
    </div>
</body>
</html>