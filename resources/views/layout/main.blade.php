<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAL Horários</title>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color: #ddd;">
    <!--CABEÇALHO-->
    <header>
        <nav class="navbar navbar-expand-lg bg-body">
            <div class="container-fluid">
                <a class="navbar-brand fs-1" href="/">TAL Horários</a>
                <a class="text-decoration-none" href="/recado" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><ion-icon class="notificacao" name="notifications"></ion-icon></a>
                <!-- MODAL RECADO -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                    <div class="modal-header border-0">
                        <div class="container-fluid d-flex justify-content-center align-items-center">
                            <h2>Recados</h2>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <!-- RECADOS -->
                       
                        <div class="card-recado mx-auto">
                            <div class=" p-1 title d-flex justify-content-between align-items-center border border-dark bg-success text-light">                
                                <h4 class="m-0">Data</h4>
                                <div>
                                    <a href="/editar-recado"></a>
                                    <img id="edit" class="rounded" src="{{asset('/img/create-outline.svg')}}" alt="icone editar">
                                    <img id="trash" class="rounded" src="{{asset('/img/trash-outline.svg')}}" alt="icone excluir">
                                </div>
                            </div>
                            <div class="p-3 border border-dark content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquam pharetra leo, tincidunt egestas ex venenatis ac. Vestibulum porta velit quis quam tincidunt, vel auctor massa faucibus. Mauris consectetur, odio quis euismod imperdiet, tortor turpis varius arcu, id mollis sapien lorem non nulla. In orci magna, tempus quis venenatis et, interdum sit amet libero. Morbi varius tortor eget diam dictum rhoncus. In hac habitasse platea dictumst. Sed facilisis vestibulum tempor.</p>
                            </div>
                        </div>
                        <div class="card-recado mx-auto">
                            <div class=" p-1 title d-flex justify-content-between align-items-center border border-dark bg-success text-light">                
                                <h4 class="m-0">Data</h4>
                                <div>
                                    <img id="edit" class="rounded" src="{{asset('/img/create-outline.svg')}}" alt="icone editar">
                                    <img id="trash" class="rounded" src="{{asset('/img/trash-outline.svg')}}" alt="icone excluir">
                                </div>
                            </div>
                            <div class="p-3 border border-dark content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquam pharetra leo, tincidunt egestas ex venenatis ac. Vestibulum porta velit quis quam tincidunt, vel auctor massa faucibus. Mauris consectetur, odio quis euismod imperdiet, tortor turpis varius arcu, id mollis sapien lorem non nulla. In orci magna, tempus quis venenatis et, interdum sit amet libero. Morbi varius tortor eget diam dictum rhoncus. In hac habitasse platea dictumst. Sed facilisis vestibulum tempor.</p>
                            </div>
                        </div>
                      

                    </div>
                    <div class="modal-footer d-flex justify-content-center border-0">
                        <button type="button" class="btn btn-success px-5" data-bs-dismiss="modal">Ok</button>
                    </div>
                    </div>
                </div>
                </div>
                
                <div class="profile bg-body">
                    <img class="icon-profile" src="{{asset('/img/person-circle-outline.svg')}}" alt="icone pessoa">
                    @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <a class="text-decoration-none text-dark p-2" href="/logout"
                        onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                    </form>
                    @endauth
                    @guest
                    <a class="text-decoration-none text-dark p-2" href="/login">Entrar</a>
                    @endguest
                    
                </div>
            </div>
        </nav>
        <div class="navbar navbar-expand-lg bg-body border-bottom border-1 border-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <li><a class="dropdown-item" href="/perfil-etep/cadastro-tutor">Cadastrar Tutores</a></li>
                        <li><a class="dropdown-item" href="/perfil-etep/visualizar-tutor">Visualizar Tutores</a></li>
                        <li><a class="dropdown-item" href="/perfil-etep/cadastro-etep">Cadastrar Membros da ETEP</a></li>
                        <li><a class="dropdown-item" href="/perfil-etep/visualizar-etep">Visualizar Membros da ETEP</a></li>
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
        <p class="m-0">criado por clara, marina, ruana e sebastião &copy 2022</p>
    </footer>
    <!-- IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- JAVASCRIPT -->
    <script src="{{asset('/js/javascript.js')}}"></script>
</body>
</html>