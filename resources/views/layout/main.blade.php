<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAL Horários</title>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <!-- JAVASCRIPT -->
    <script src="{{asset('/js/javascript.js')}}"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color: #ddd;">
    <!--CABEÇALHO-->
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand fs-1" href="/">TAL Horários</a>
                <a class="text-decoration-none" href="/recado"><ion-icon class="notification" name="notifications"></ion-icon></a>
                <div class="profile bg-light">
                    <ion-icon class="icon-profile" name="person-circle-outline"></ion-icon>
                    <a class="text-decoration-none text-dark p-2" href="/login">Entrar</a>
                </div>
            </div>
        </nav>
        <div class="navbar navbar-expand-lg bg-light border-bottom border-1 border-dark">
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
                </ul>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <!--RODAPE-->
    <footer>
        <p>criado por clara, marina, ruana e sebas &copy 2022</p>
    </footer>
    <!-- IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>