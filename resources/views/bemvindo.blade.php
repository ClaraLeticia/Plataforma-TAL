<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <!-- JAVASCRIPT -->
    <script src="{{asset('/js/javascript.js')}}"></script>
</head>
<body>
    <!--CABEÇALHO-->
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">TAL Horários</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/horarios">Horários</a>
                    <a class="nav-link" href="/documento">Documentação</a>
                    <a class="nav-link" href="/login">Login</a>
                    <a class="nav-link" href="/cadastro">Cadastro</a>
                </div>
                </div>
            </div>
        </nav>
        <div class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Matérias
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#matematica">Matemática</a></li>
                        <li><a class="dropdown-item" href="#programacao">Programação</a></li>
                        <li><a class="dropdown-item" href="#portugues">Português</a></li>
                        <li><a class="dropdown-item" href="#solos">Solos</a></li>
                        <li><a class="dropdown-item" href="#fisica">Física</a></li>
                        <li><a class="dropdown-item" href="#quimica">Químimca</a></li>                   
                        <li><a class="dropdown-item" href="#eletricidade">Eletricidade e Eletrônica Analógica e/ou Digital</a></li>
                        <li><a class="dropdown-item" href="#area">Área Técnica-Irrigação</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Turno
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Manhã</a></li>
                        <li><a class="dropdown-item" href="#">Tarde</a></li>
                        <li><a class="dropdown-item" href="#">Noite</a></li>
                    </ul>
                    </li>   
                </ul>
                </div>
            </div>
        </div>
    </header>
    <!--MENSAGEM DE BOAS VINDAS-->
    <div>
        <h1>Bem vindo</h1>
    </div>
    <!--RODAPE-->
    <footer>
        <p>criado por clara, marina, ruana e sebas &copy 2022</p>
    </footer>
</body>
</html>
