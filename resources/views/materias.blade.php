@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Cadastrar Matérias</h1>
    <form action="/cadastrar-materia" method="POST" class="p-3">
        @csrf
        <div class="row d-flex align-items-center">
            <div class="col-sm-1">
                <label for="materia">Matéria</label>
            </div>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="materia" placeholder="Matéria" required>
            </div>
            <div class="col-sm-2">
                <input type="submit" class="btn btn-success" value="Cadastrar">
            </div>
        </div>
    </form>
    <h1>Matérias cadastradas</h1>
    <table class="mx-auto text-center" id="table-materias">
        <tr>
            <th>#</th>
            <th style="width: 500px;">Matéria</th>
            <th colspan="2" style="width: 200px;">Opções</th>
        </tr>
        @foreach($materias as $key => $materia)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$materia->materia}}</td>
            <td class="p-2">
            <a href="/perfil-etep/editar-materia/{{$materia->id}}" class="btn btn-success">Editar</a>
            </td>
            <td>
                <form action="/deletar-materia/{{$materia->id}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir essa matéria?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection