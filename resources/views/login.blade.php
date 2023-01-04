<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAL Horários</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
    @if($mensagem = Session::get('erro'))
        <div class="container-fluid bg-danger fixed-top p-2 text-center">{{$mensagem}}</div>
    @endif
    <div class="container">
        <div class="card">
            <h1 class="mb-4">Login</h1>
            
            <form class="form" method="post" action="/auth">
                @csrf
                <div class="input">                  
                    <input type="text" name="matricula" required>
                    <span class="border-input"></span>  
                    <label for="matricula">Matrícula</label>              
                </div>
                <div class="input">                  
                    <input type="password" name="password" required>
                    <span class="border-input"></span>
                    <label for="password">Senha</label>
                </div>
                <div id="div-checkbox">
                    <input id="checkbox" type="checkbox" name="remember">
                    <label for="remember">Lembrar-me</label>
                </div>
                <input class="btn-entrar" type="submit" value="Entrar"><br>
                <a class="link" href="/">Voltar</a>
            </form>
        </div>
    </div>
</body>
</html>

