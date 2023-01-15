@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Cadastrar Expediente</h1>
    @if($mensagem = Session::get('erro'))
        <div class="alert alert-danger">{{$mensagem}}</div><br>
    @endif
    @if($mensagem = Session::get('success'))
        <div class="alert alert-success">{{$mensagem}}</div><br>
    @endif
    <form action="/cadastrar-expediente" method="POST" class="p-3">
        @csrf
        <div class="row d-flex align-items-center">
            <div class="col-md-2">
                <label for="dia">Dia</label>
                <input class="form-control" type="number" name="dia" placeholder="Dia">
            </div>
            <div class="col-md-2">
                <label for="mes">Mês</label>
                <input class="form-control" type="text" name="mes" placeholder="Mês">
            </div>
            <div class="col-md-2">
                <label for="mes">Ano</label>
                <input class="form-control" type="text" name="ano" placeholder="Ano">
            </div>
            <div class="col-md-2">
                <label for="hora_entrada">Hora de Entrada</label>
                <input class="form-control" type="time" name="hora_entrada" placeholder="Ex.: Janeiro 2023">
            </div>
            <div class="col-md-2">
                <label for="hora_saida">Hora de Saída</label>
                <input class="form-control" type="time" name="hora_saida" placeholder="Ex.: Janeiro 2023">
            </div>
            <div class="col-md-2">
                <input class="btn btn-success" type="submit" value="Cadastrar">
            </div>
        </div>
        <p style="color: #999;">Por favor preencha os dias em ordem.</p>
    </form>
    <h1>Expedientes do mês</h1>
    <table class="mx-auto text-center tables">
        <tr>
            <th>Dia</th>
            <th>Mês</th>
            <th>Ano</th>
            <th>Hora de Entrada</th>
            <th>Hora de Saída</th>
            <th colspan="2" style="width: 200px;">Opções</th>
        </tr>
        @foreach($expedientes as $expediente)
        <tr>
            <td>{{$expediente->dia}}</td>
            <td style="width: 150px">{{$expediente->mes}}</td>
            <td style="width: 100px">{{$expediente->ano}}</td>
            <td style="width: 200px">{{$expediente->hora_entrada}}</td>
            <td style="width: 200px">{{$expediente->hora_saida}}</td>
            <td class="p-2">
            <a href="/perfil-tutor/editar-expediente/{{$expediente->id}}" class="btn btn-success">Editar</a>
            </td>
            <td>
                <form action="/deletar-expediente/{{$expediente->id}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esse expediente?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <p>Clique no botão "Visualizar documento" para verificar se o documento a ser impresso está preenchido corretamente.</p>
    <p>Dentro do página do documento será possivél gerar um PDF para você salvar e imprimir!</p>
    <div class="d-flex justify-content-between p-3">
        <a class="btn btn-success" href="/">Voltar</a>
        <a class="btn btn-success" href="/perfil-tutor/expediente-pdf">Visualizar documento</a>
    </div><br>
</div>

@endsection