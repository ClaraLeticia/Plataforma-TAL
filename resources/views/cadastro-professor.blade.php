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
        <h1>Cadastrar Professores</h1>
        <form action="/cadastrar-professor" method="POST" class="p-4">
            @csrf
            <h2>Dados pessoais</h2><br>
            <div class="row">
                <div class="col-md-12">
                    <label for="nome">Nome Completo</label><br>
                    <input class="form-control" type="text" name="nome" id="" placeholder="Nome Completo" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <label for="materia">Matéria</label><br>
                    <select class="form-select" name="materia">
                        <option></option>
                        @foreach($materias as $key => $materia)
                        <option value="{{$materia->id}}">{{$materia->materia}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="semestre">Semestre</label><br>
                    <input class="form-control" type="text" name="semestre" id="" placeholder="Semestre" required>
                </div>
            </div><br>
            <div class="d-flex justify-content-between">
                <a href="/perfil-etep"><input type="button" class="btn btn-success" value="Voltar"></a>
                <input type="submit" class="btn btn-success" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>