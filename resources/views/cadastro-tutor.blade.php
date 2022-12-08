<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAL Horários</title>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/cadastro.css')}}">
    <!-- JAVASCRIPT -->
    <script src="{{asset('/js/javascript.js')}}"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color: #ddd;">
    <div class="container">
        <form action="" method="get">
            <h1>Cadastrar tutores</h1>
            <h2>Dados pessoais</h2><br>
            <div class="row g-2">
                <div class="col-md-9">
                    <label for="nomecompleto">Nome Completo</label><br>
                    <input class="form-control" type="text" id="nomecompleto" placeholder="Nome Completo">
                </div>
                <div class="col-md-3">
                    <label for="matricula">Matrícula</label><br>
                    <input class="form-control" type="text" id="matricula" placeholder="Matrícula">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="email">E-mail</label><br>
                    <input class="form-control" type="email" id="email" placeholder="email@email.com">
                </div>
                <div class="col-md-6">
                    <label for="numerotelefone">Número de Telefone</label><br>
                    <input class="form-control" type="text" id="numerotelefone" placeholder="(xx) xxxxx-xxxx">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="materia">Matéria</label>
                    <select class="form-select" name="" id="materia">
                        <option selected></option>
                        <option value="1">Matemática</option>
                        <option value="2">Programação</option>
                        <option value="3">Português</option>
                        <option value="4">Solos</option>
                        <option value="5">Física</option>
                        <option value="6">Químimca</option>
                        <option value="7">Eletricidade e Eletrônica Analógica e/ou Digital</option>
                        <option value="6">Área Técnica-Irrigação</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="proforientador">Professor Orientador</label><br>
                    <select class="form-select" name="" id="proforintador">
                        <option value="0"></option>
                        <option value="1">Daniel Aguiar</option>
                        <option value="2">Leonardo Rafael</option>
                        <option value="3">Yasmin</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="senha">Senha</label><br>
                    <input class="form-control" type="password" placeholder="Senha">
                    <div id="passwordHelpBlock" class="form-text">
                        Sua senha deve conter de 8 a 20 caracteres.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="senha">Confirmar senha</label><br>
                    <input class="form-control" type="password" placeholder="Senha">
                </div>
            </div>
            <h2>Horários</h2>
            <p>Marque os dias da semana selecionados pelo tutor e ao lado seu horário disponível</p><br>
                <div class="row g-3 align-items-center">
                    <div class="col-sm-2">
                        <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                        <label class="btn btn-outline-success" for="btn-check-outlined">Segunda-feira</label><br>
                    </div>
                    <div class="col-sm-2">
                        <label for="horaentrada-segunda">Hora de Entrada:</label>
                        <input class="form-control" type="time" name="horaentrada-segunda" id="">
                    </div>
                    <div class="col-sm-2">
                        <label for="horasaida-segunda">Hora de Saída:</label>
                        <input class="form-control" type="time" name="horasaida-segunda" id="">
                    </div>
                </div>
                <hr>
                <div class="row g-3 align-items-center">
                    <div class="col-sm-2">
                        <input type="checkbox" class="btn-check" id="btn-check-outlined-2" autocomplete="off">
                        <label class="btn btn-outline-success" for="btn-check-outlined-2">Terça-feira</label><br>
                    </div>
                    <div class="col-sm-2">
                        <label for="horaentrada-terca">Hora de Entrada:</label>
                        <input class="form-control" type="time" name="horaentrada-terca" id="">
                    </div>
                    <div class="col-sm-2">
                        <label for="horasaida-terca">Hora de Saída:</label>
                        <input class="form-control" type="time" name="horasaida-terca" id="">
                    </div>
                </div>
                <hr>
                <div class="row g-3 align-items-center">
                    <div class="col-sm-2">
                        <input type="checkbox" class="btn-check" id="btn-check-outlined-3" autocomplete="off">
                        <label class="btn btn-outline-success" for="btn-check-outlined-3">Quarta-feira</label><br>
                    </div>
                    <div class="col-sm-2">
                        <label for="horaentrada-quarta">Hora de Entrada:</label>
                        <input class="form-control" type="time" name="horaentrada-quarta" id="">
                    </div>
                    <div class="col-sm-2">
                        <label for="horasaida-quarta">Hora de Saída:</label>
                        <input class="form-control" type="time" name="horasaida-quarta" id="">
                    </div>
                </div>
                <hr>
                <div class="row g-3 align-items-center">
                    <div class="col-sm-2">
                        <input type="checkbox" class="btn-check" id="btn-check-outlined-4" autocomplete="off">
                        <label class="btn btn-outline-success" for="btn-check-outlined-4">Quinta-feira</label><br>
                    </div>
                    <div class="col-sm-2">
                        <label for="horaentrada-quinta">Hora de Entrada:</label>
                        <input class="form-control" type="time" name="horaentrada-quinta" id="">
                    </div>
                    <div class="col-sm-2">
                        <label for="horasaida-quinta">Hora de Saída:</label>
                        <input class="form-control" type="time" name="horasaida-quinta" id="">
                    </div>
                </div>
                <hr>
                <div class="row g-3 align-items-center">
                    <div class="col-sm-2">
                        <input type="checkbox" class="btn-check" id="btn-check-outlined-5" autocomplete="off">
                        <label class="btn btn-outline-success" for="btn-check-outlined-5">Sexta-feira</label><br>
                    </div>
                    <div class="col-sm-2">
                        <label for="horaentrada-sexta">Hora de Entrada:</label>
                        <input class="form-control" type="time" name="horaentrada-sexta" id="">
                    </div>
                    <div class="col-sm-2">
                        <label for="horasaida-sexta">Hora de Saída:</label>
                        <input class="form-control" type="time" name="horasaida-sexta" id="">
                    </div>
                </div>
                <hr><br>
            <div class="d-flex justify-content-between">
                <a href="/cadastro"><input type="button" class="btn btn-success" value="Voltar"></a>
                <input type="submit" class="btn btn-success" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>