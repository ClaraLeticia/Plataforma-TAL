@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Cadastrar Relatório Mensal</h1>
    <form action="/editar-avaliacao/{{$avaliacao->id}}" method="POST" class="p-3">
        @csrf
        @method('PUT')
        <div>
            <label for="atendimentos">Número aproximado de atendimentos (individuais e/ou em grupo; cursos e turmas).</label>
            <textarea name="atendimentos" class="form-control" rows="3">{{$avaliacao->atendimentos}}</textarea>
        </div><br>
        <div>
            <label for="dificuldade_discente">Principais dificuldades apresentadas pelos alunos por curso/turma (descreva o conteúdo que considera que apresentou maior dificuldade aos alunos; indique a natureza dessa dificuldade: compreensão das explicações do professor, do conteúdo, das atividades avaliativas, entre outras).</label>
            <textarea name="dificuldade_discente" class="form-control" rows="3">{{$avaliacao->dificuldade_discente}}</textarea>
        </div><br>
        <div>
            <label for="dificuldade_tutor">Principais dificuldades enfrentadas pelo tutor na execução das atividades (indique os conteúdos em que teve maior dificuldade ao realizar as orientações; descreva outras dificuldades, tais como disponibilidade de espaço, de tempo, de contato com os professores da área, entre outras que considere relevantes).</label>
            <textarea name="dificuldade_tutor" class="form-control" rows="3">{{$avaliacao->dificuldade_tutor}}</textarea>
        </div><br>
        <div>
            <label for="sugestoes">Sugestões de encaminhamentos a respeito de sua tutoria que possam facilitar o processo de aprendizado do aluno atendido.</label>
            <textarea name="sugestoes" class="form-control" rows="3">{{$avaliacao->sugestoes}}</textarea>
        </div><br>
        <div class="d-flex justify-content-between">
            <a href="/perfil-tutor/avaliacao" class="btn btn-success">Voltar</a>
            <input type="submit" class="btn btn-success" value="Editar">
        </div>
        
    </form>
</div>

@endsection