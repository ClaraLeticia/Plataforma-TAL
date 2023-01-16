@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Editar Atendimento</h1>
    @if($mensagem = Session::get('erro'))
        <div class="alert alert-danger">{{$mensagem}}</div><br>
    @endif
    @if($mensagem = Session::get('success'))
        <div class="alert alert-success">{{$mensagem}}</div><br>
    @endif
    <form action="/editar-atividades-realizadas/{{$atividades->id}}" method="POST" class="p-3">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="id_expediente">Dia do expediente</label>
                <select class="form-control" name="id_expediente">
                    @foreach($expedientes as $expediente) 
                        @if($expediente->dia == $atividades->id_expediente)
                            <option value="{{$expediente->id}}">{{$expediente->dia}}</option>
                        @endif
                    @endforeach
                    @foreach($expedientes as $expediente) 
                        @if($expediente->dia != $atividades->id_expediente)
                            <option value="{{$expediente->id}}">{{$expediente->dia}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="dia">Dia do atendimento</label>
                <input class="form-control" type="date" name="dia" value="{{$atividades->dia}}">
            </div>
            <div class="col">
                <label for="horario">Horário do atendimento</label>
                <input class="form-control" type="time" name="horario" value="{{$atividades->horario}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label for="discente">Aluno atendido</label>
                <input class="form-control" type="text" name="discente" placeholder="Nome do aluno" value="{{$atividades->discente}}">
            </div>
            <div class="col-md-4">
                <label for="turma_discente">Turma do aluno</label>
                <input class="form-control" type="text" name="turma_discente" placeholder="Turma do aluno" value="{{$atividades->turma_discente}}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="assunto">Assunto</label>
                <textarea name="assunto" class="form-control" rows="3" placeholder="Assunto tratado no atendimento">{{$atividades->assunto}}</textarea>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-success" href="/perfil-tutor/atividades-realizadas">Voltar</a>
            <input type="submit" class="btn btn-success" value="Editar">
        </div><br>
    </form>
</div>

@endsection