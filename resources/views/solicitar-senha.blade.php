<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAL Horários</title>
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="card">
            <h1 class="mb-4">Trocar a senha</h1>
            <p class="text-start">Digite o seu e-mail para enviarmos o link de resete da senha.</p>
            @if($errors->all())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            @if($mensagem = Session::get('success'))
                <div class="alert alert-success">{{$mensagem}}</div>
            @endif
            <br>
            <form class="form" method="post" action="/forgot-password">
                @csrf
                <div class="input">                  
                    <input type="text" name="email" required>
                    <span class="border-input"></span>  
                    <label for="email">Email</label>              
                </div><br>
                
                <div class="d-flex justify-content-between">
                    <a href="/login"><input type="button" class="btn btn-success" value="Login"></a>
                    <input type="submit" class="btn btn-success" value="Enviar link">
                </div>
            </form>
        </div>
    </div>
</body>
</html>

