@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Cadastrar Atividades</h1>
    @if($mensagem = Session::get('erro'))
        <div class="alert alert-danger">{{$mensagem}}</div><br>
    @endif
    @if($mensagem = Session::get('success'))
        <div class="alert alert-success">{{$mensagem}}</div><br>
    @endif
    <form action="/cadastrar-atividades-realizadas" method="POST" class="p-3">
        @csrf
        <div class="row">
            <div class="col">
                <label for="id_expediente">Dia do expediente</label>
                <select class="form-control" name="id_expediente">
                    @foreach($expedientes as $expediente)  
                        <option value="{{$expediente->id}}">{{$expediente->dia}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="dia">Dia do atendimento</label>
                <input class="form-control" type="date" name="dia">
            </div>
            <div class="col">
                <label for="horario">Horário do atendimento</label>
                <input class="form-control" type="time" name="horario">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label for="discente">Aluno atendido</label>
                <input class="form-control" type="text" name="discente" placeholder="Nome do aluno">
            </div>
            <div class="col-md-4">
                <label for="turma_discente">Turma do aluno</label>
                <input class="form-control" type="text" name="turma_discente" placeholder="Turma do aluno">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="assunto">Assunto</label>
                <textarea name="assunto" class="form-control" rows="3" placeholder="Assunto tratado no atendimento"></textarea>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <p style="color: #999;">Por favor preencha todos os campos corretamente.</p>
            <input type="submit" class="btn btn-success" value="Cadastrar">
        </div>
    </form>
    <h1>Atividades realizadas do mês</h1>
    <table class="mx-auto text-center tables">
        <tr>
            <th>Expediente</th>
            <th>Dia/Horário</th>
            <th>Assinatura estudante</th>
            <th>Turma</th>
            <th>Assunto</th>
            <th colspan="2" style="width: 200px;">Opções</th>
        </tr>
        @foreach($atividades as $atividade)
        <tr>
            <td style="width: 50px;">{{$atividade->id_expediente}}</td>
            <td style="width: 200px;">{{date('d/m', strtotime($atividade->dia))}} - {{$atividade->horario}}</td>
            <td style="width: 200px;">{{$atividade->discente}}</td>
            <td style="width: 100px;">{{$atividade->turma_discente}}</td>
            <td style="width: 400px;">{{$atividade->assunto}}</td>
            <td class="p-2">
            <a href="/perfil-tutor/editar-atividades-realizadas/{{$atividade->id}}" class="btn btn-success">Editar</a>
            </td>
            <td>
                <form action="/deletar-atividades-realizadas/{{$atividade->id}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esse atendimento?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <th class="text-start p-3" colspan="5">Total de atendimentos:</th>
            <td colspan="2"><?php echo count($atividades) ?></td>
        </tr>
    </table>
    <div class="ps-3">
        <p>Clique no botão "Visualizar documento" para verificar se o documento a ser impresso está preenchido corretamente.</p>
        <p>Dentro do página do documento será possivél gerar um PDF para você salvar e imprimir!</p>
    </div>
    <div class="d-flex justify-content-between p-3">
        <a class="btn btn-success" href="/">Voltar</a>
        <a class="btn btn-success" href="/perfil-tutor/atividades-realizadas-pdf">Visualizar documento</a>
    </div><br>
</div>

@endsection