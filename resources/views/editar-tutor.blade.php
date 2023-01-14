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
        <h1>Editar tutor {{$tutor->nome}}</h1>
        <form action="/editar-tutor/{{$tutor->matricula_aluno}}" method="POST" id="form-tutor-horario" class="p-3">
            @csrf
            @method('PUT')
            <h2>Dados pessoais</h2><br>
            <div class="row g-2">
                <div class="col-md-9">
                    <label for="nome">Nome Completo</label><br>
                    <input class="form-control" type="text" name="nome" placeholder="Nome Completo" value="{{$tutor->nome}}" required>
                </div>
                <div class="col-md-3">
                    <label for="matricula">Matrícula</label><br>
                    <input class="form-control" type="text" name="matricula_aluno" placeholder="Matrícula" value="{{$tutor->matricula_aluno}}" readonly required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="email">E-mail</label><br>
                    <input class="form-control" type="email" name="email" placeholder="email@email.com" value="{{$tutor->email}}" required>
                </div>
                <div class="col-md-6">
                    <label for="telefone">Número de Telefone</label><br>
                    <input class="form-control" type="text" name="telefone" placeholder="(xx) xxxxx-xxxx" value="{{$tutor->telefone}}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="materia">Matéria</label>
                    <select class="form-select" name="id_materia">
                        <option value="{{$tutor->id_materia}}">
                        @foreach($materias as $materia)
                            @if($tutor->id_materia == $materia->id)
                                {{$materia->materia}}  
                            @endif
                        @endforeach
                        </option>
                        @foreach($materias as $materia)
                            @if($tutor->id_materia != $materia->id)
                                <option value="{{$materia->id}}">{{$materia->materia}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="professor_orientador">Professor Orientador</label><br>
                    <select class="form-select" name="id_professor_orientador">
                    <option value="{{$tutor->id_materia}}">
                        @foreach($professores as $professor)
                            @if($tutor->id_professor_orientador == $professor->id)
                                {{$professor->nome}}  
                            @endif
                        @endforeach
                        </option>
                        @foreach($professores as $professor)
                            @if($tutor->id_professor_orientador != $professor->id)
                                <option value="{{$professor->id}}">{{$professor->nome}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="edital">Edital</label><br>
                    <input class="form-control" type="text" name="edital" placeholder="Edital" value="{{$tutor->edital}}" required>
                </div>
                <div class="col-md-6">
                    <label for="semestre">Semestre</label><br>
                    <input class="form-control" type="text" name="semestre" placeholder="Semestre" value="{{$tutor->semestre}}" required>
                </div>
            </div>
            <div><br>
                <p class="text-danger">Não é possível editar a senha por motivos de segurança. Informe ao tutor que ele deverá alterar a senha na tela de login clicando em "Esqueci minha senha".</p>
            </div>
            <!-- <div class="row">
                <div class="col-md-6">
                    <label for="senha">Senha</label><br>
                    <input class="form-control senha" type="password" name="senha" placeholder="Senha criptografada" minlength="8" maxlength="20" value="{{$tutor->senha}}" readonly required> 
                    <div id="passwordHelpBlock" class="form-text">
                        Sua senha deve conter de 8 a 20 caracteres.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="senha">Confirmar senha</label><br>
                    <input class="form-control senha" type="password" name="confirmar_senha" placeholder="Senha criptografada"  minlength="8" maxlength="20" value="{{$tutor->senha}}" readonly required>
                </div>
            </div> -->

            <div class="d-flex justify-content-between p-3">
                <a href="/perfil-etep/visualizar-tutor"><input type="button" class="btn btn-success" value="Voltar"></a>
                <input form="form-tutor-horario" type="submit" class="btn btn-success" value="Editar">
            </div>
        </form>
    </div>
</body>
</html>