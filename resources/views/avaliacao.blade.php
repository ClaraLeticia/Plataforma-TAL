@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Cadastrar Relatório Mensal</h1>
    @if($mensagem = Session::get('erro'))
        <div class="alert alert-danger">{{$mensagem}}</div><br>
    @endif
    @if($mensagem = Session::get('success'))
        <div class="alert alert-success">{{$mensagem}}</div><br>
    @endif
    <form action="/cadastrar-avaliacao" method="POST" class="p-3">
        @csrf
        <div>
            <label for="atendimentos">Número aproximado de atendimentos (individuais e/ou em grupo; cursos e turmas).</label>
            <textarea name="atendimentos" class="form-control" rows="3"></textarea>
        </div><br>
        <div>
            <label for="dificuldade_discente">Principais dificuldades apresentadas pelos alunos por curso/turma (descreva o conteúdo que considera que apresentou maior dificuldade aos alunos; indique a natureza dessa dificuldade: compreensão das explicações do professor, do conteúdo, das atividades avaliativas, entre outras).</label>
            <textarea name="dificuldade_discente" class="form-control" rows="3"></textarea>
        </div><br>
        <div>
            <label for="dificuldade_tutor">Principais dificuldades enfrentadas pelo tutor na execução das atividades (indique os conteúdos em que teve maior dificuldade ao realizar as orientações; descreva outras dificuldades, tais como disponibilidade de espaço, de tempo, de contato com os professores da área, entre outras que considere relevantes).</label>
            <textarea name="dificuldade_tutor" class="form-control" rows="3"></textarea>
        </div><br>
        <div>
            <label for="sugestoes">Sugestões de encaminhamentos a respeito de sua tutoria que possam facilitar o processo de aprendizado do aluno atendido.</label>
            <textarea name="sugestoes" class="form-control" rows="3"></textarea>
        </div><br>
        <div class="d-flex justify-content-between">
            <p style="color: #999;">Por favor preencha todos os campos corretamente.</p>
            <input type="submit" class="btn btn-success" value="Cadastrar">
        </div>
    </form>
    <h1>Relatório Mensal</h1>
    @foreach($avaliacao as $avaliacao)
    @if($avaliacao->id_tutor == auth()->user()->matricula)
        <div class="container-lg px-4">
            <div class="p-3">
                <p>Número aproximado de atendimentos (individuais e/ou em grupo; cursos e turmas).</p>
                <textarea class="form-control" rows="3" readonly>{{$avaliacao->atendimentos}}</textarea>
            </div>
            <div class="p-3">
                <p>Principais dificuldades apresentadas pelos alunos por curso/turma (descreva o conteúdo que considera que apresentou maior dificuldade aos alunos; indique a natureza dessa dificuldade: compreensão das explicações do professor, do conteúdo, das atividades avaliativas, entre outras).</p>
                <textarea class="form-control" rows="3" readonly>{{$avaliacao->dificuldade_discente}}</textarea>
            </div>
            <div class="p-3">
                <p>Principais dificuldades enfrentadas pelo tutor na execução das atividades (indique os conteúdos em que teve maior dificuldade ao realizar as orientações; descreva outras dificuldades, tais como disponibilidade de espaço, de tempo, de contato com os professores da área, entre outras que considere relevantes).</p>
                <textarea class="form-control" rows="3" readonly>{{$avaliacao->dificuldade_tutor}}</textarea>
            </div>
            <div class="p-3">
                <p>Sugestões de encaminhamentos a respeito de sua tutoria que possam facilitar o processo de aprendizado do aluno atendido.</p>
                <textarea class="form-control" rows="3" readonly>{{$avaliacao->sugestoes}}</textarea>
            </div>
            <div class="d-flex justify-content-end p-3">
                <a href="/perfil-tutor/editar-avaliacao/{{$avaliacao->id}}" class="btn btn-success me-4">Editar</a>
                <form action="/deletar-avaliacao/{{$avaliacao->id}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esse atendimento?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success">Excluir</button>
                </form>
            </div>
        </div>
    @endif
    @endforeach       
    <br>
    <div class="ps-3">
        <p>Clique no botão "Visualizar documento" para verificar se o documento a ser impresso está preenchido corretamente.</p>
        <p>Dentro do página do documento será possivél gerar um PDF para você salvar e imprimir!</p>
    </div>
    <div class="d-flex justify-content-between p-3">
        <a class="btn btn-success" href="/">Voltar</a>
        <a class="btn btn-success" href="/perfil-tutor/avaliacao-pdf">Visualizar documento</a>
    </div><br>
</div>

@endsection