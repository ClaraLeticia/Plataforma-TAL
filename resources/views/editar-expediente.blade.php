@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Editar Expediente</h1>
    <form action="/editar-expediente/{{$expediente->id}}" method="POST" class="p-3">
        @csrf
        @method('PUT')
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-2">
                <label for="dia">Dia</label>
                <input class="form-control" type="number" name="dia" placeholder="Dia" value="{{$expediente->dia}}">
            </div>
            <div class="col-md-2">
                <label for="mes">Mês</label>
                <input class="form-control" type="text" name="mes" placeholder="Mês" value="{{$expediente->mes}}">
            </div>
            <div class="col-md-2">
                <label for="mes">Ano</label>
                <input class="form-control" type="text" name="ano" placeholder="Ano" value="{{$expediente->ano}}"> 
            </div>
            <div class="col-md-2">
                <label for="hora_entrada">Hora de Entrada</label>
                <input class="form-control" type="time" name="hora_entrada" value="{{$expediente->hora_entrada}}">
            </div>
            <div class="col-md-2">
                <label for="hora_saida">Hora de Saída</label>
                <input class="form-control" type="time" name="hora_saida" value="{{$expediente->hora_saida}}">
            </div>
        </div><br>
        <div class="d-flex justify-content-between ">
            <a class="btn btn-success" href="/">Voltar</a>
            <button class="btn btn-success" type="submit">Editar</button>
        </div><br>
    </form>
    
</div>

@endsection