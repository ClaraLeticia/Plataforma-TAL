<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAL Horários</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Login</h1>
            <form class="form" method="POST" action="/">
                <div class="input">                  
                    <input type="text" name="matricula" required>
                    <span class="border-input"></span>  
                    <label for="matricula">Matrícula</label>              
                </div>
                <div class="input">                  
                    <input type="password" name="senha" required>
                    <span class="border-input"></span>
                    <label for="senha">Senha</label>
                </div>
                <input class="btn-entrar" type="submit" value="Entrar"><br>
                <a class="link" href="/">Voltar</a>
            </form>
        </div>
    </div>
</body>
</html>

