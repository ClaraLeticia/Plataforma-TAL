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
            <h1 class="mb-4">Resetar senha</h1>
            <form class="form" method="post" action="/forgot-password/reset">
                @csrf
                <input type="hidden" name="token" value="{{$token}}">
                <input type="hidden" name="email" value="{{$email}}">
                
                <p>A nova senha deve conter de 8 a 20 caracteres</p>
                @if($errors->all())
                <div class="alert alert-danger text-start">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
                @endif
                <br>
                <div class="input">                  
                    <input type="password" name="password" required>
                    <span class="border-input"></span>
                    <label for="password">Nova senha</label>
                </div>
                <div class="input">                  
                    <input type="password" name="password_confirmation" required>
                    <span class="border-input"></span>
                    <label for="password_confirmation">Confirmar senha</label>
                </div><br>
                <div class="d-flex justify-content-between">
                    <a href="/login"><input type="button" class="btn btn-success" value="Login"></a>
                    <input type="submit" class="btn btn-success" value="Enviar nova senha">
                </div>
            </form>
        </div>
    </div>
</body>
</html>

