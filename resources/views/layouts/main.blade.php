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
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color: #ddd;">
    <!--CABEÇALHO-->
    <header>
        <nav class="navbar navbar-expand-lg bg-body">
            <div class="container-fluid ">
                <a class="navbar-brand fs-1" href="/">TAL Horários</a>
                <div class="d-flex align-items-center" id="recados-perfil">
                    <a class="d-flex align-items-center text-decoration-none text-dark p-1 rounded" href="/perfil-etep/visualizar-recado">
                        <img class="me-2" style="width: 40px;" src="{{asset('/img/notifications.svg')}}" alt="">
                        <h5 class="m-0">Recados</h5>
                    </a>
                    <img class="ms-5 me-2" style="width: 100px;" src="{{asset('/img/person-circle-outline.svg')}}" alt="">
                    <a class="text-decoration-none text-dark p-2 rounded" href="/login"><h5 class="m-0">Entrar</h5></a>
                </div>
            </div>
        </nav>
        <div class="navbar navbar-expand-lg bg-body border-bottom border-1 border-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle text-dark me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Opções Tutor
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/perfil-tutor/folha-frequencia">Registrar Folha de Frequência</a></li>
                            <li><a class="dropdown-item" href="/perfil-tutor/atividades-realizadas">Registrar Atividades Realizadas</a></li>
                            <li><a class="dropdown-item" href="/perfil-tutor/relatorio-atividade">Registrar Relatório Mensal</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Opções ETEP
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/perfil-etep/cadastro-recado">Postar Recado</a></li>
                            <li><a class="dropdown-item" href="/perfil-etep/materias">Matérias</a></li>
                            <li><h5 class="ms-2 mt-1">ETEP</h5></li>
                            <li><a class="dropdown-item" href="/perfil-etep/cadastro-etep">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="/perfil-etep/visualizar-etep">Visualizar</a></li>
                            <li><h5 class="ms-2 mt-1">Professores</h5></li>
                            <li><a class="dropdown-item" href="/perfil-etep/cadastro-professor">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="/perfil-etep/visualizar-professor">Visualizar</a></li>
                            <li><h5 class="ms-2 mt-1">Tutores</h5></li>
                            <li><a class="dropdown-item" href="/perfil-etep/cadastro-tutor">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="/perfil-etep/visualizar-tutor">Visualizar</a></li>
                        </ul>
                    </li> 
                </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    
    <!--RODAPE-->
    <footer class="d-flex justify-content-center align-items-center bg-body p-2">
        <p class="m-0">Criado por Clara, Marina, Ruana e Sebastião &copy 2022</p>
    </footer>
    <!-- IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- JAVASCRIPT -->
    <script src="{{asset('/js/javascript.js')}}"></script>
</body>
</html>