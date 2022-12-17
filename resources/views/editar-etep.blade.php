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
    <h1>Editar Membros da ETEP</h1>
        <form action="/etep" method="POST">
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
                <div class="col-md-12">
                    <label for="email">E-mail</label><br>
                    <input class="form-control" type="email" name="email" id="" placeholder="email@email.com" required>
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
            <div class="d-flex justify-content-between">
                <a href="/perfil-etep"><input type="button" class="btn btn-success" value="Voltar"></a>
                <input form="form-tutor-horario" type="submit" class="btn btn-success" value="Editar">
            </div><br>
        </form>
    </div>
</body>
</html>