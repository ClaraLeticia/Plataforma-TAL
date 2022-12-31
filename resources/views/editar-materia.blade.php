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
        <h1>Editar Matéria</h1>
        <form action="/editar-materia/{{$materia->id}}" method="POST" class="p-4">
            @csrf
            @method('PUT')
            <div class="row d-flex align-items-center">
                <div class="col-sm-1">
                    <label for="materia">Matéria</label>
                </div>
                <div class="col-sm-11">
                    <input class="form-control" type="text" name="materia" placeholder="Matéria" value="{{$materia->materia}}" required>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <a href="/perfil-etep/materias"><input type="button" class="btn btn-success" value="Voltar"></a>
                <input type="submit" class="btn btn-success" value="Editar">
            </div>
        </form>
    </div>
</body>
</html>