@extends('layout.main')

@section('content')
<h1 class="text-center my-4">Meu Perfil</h1>
<div class="container-sm d-flex justify-content-center">
    
<div class="card shadow rounded" style="width: 40rem;">
    <div class="card-body">
    <h3 class="mb-3 text-center">Dados Pessoais</h3>
        <div class="row m-0 mb-3">
            <div class="col-sm-2 p-0 text-center">
                <img class="icon-profile-card" src="{{asset('/img/person-circle-outline.svg')}}" alt="icone">
            </div>
            <div class="col-sm-10">
                @foreach($tutores as $tutor)
                <h5 class="my-3">{{$tutor->nome}}</h5>
                <div class="row m-0">
                    <div class="col-sm-6 p-0">
                        <p><strong>Matrícula: </strong>{{$tutor->matricula_aluno}}</p>
                        <p><strong>Edital: </strong>{{$tutor->edital}}</p>
                        <p><strong>Professor: </strong>{{$tutor->professor_orientador}}</p>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>Matéria: </strong>{{$tutor->materia}}</p>
                        <p><strong>Semestre: </strong>{{$tutor->semestre}}</p>
                        <p><strong>Telefone: </strong>{{$tutor->telefone}}</p>
                    </div>
                </div>
                <p><strong>E-mail: </strong>{{$tutor->email}}</p>
            </div><hr>
            <h3 class="mb-2 text-center">Horários</h3>
            <div class="container-sm-3 d-flex justify-content-center">
            <table class="table table-sm table-bordered border-dark text-center">
                <tr class="bg-success text-light">
                    <th>Dias</th>
                    <th>Entrada</th>
                    <th>Saída</th>
                </tr>
                <tr>
                    <th>Segunda-feira</th>
                    <td>13h</td>
                    <td>18h</td>
                </tr>
                <tr>
                    <th>Terça-feira</th>
                    <td>13h</td>
                    <td>18h</td>
                </tr>
                <tr>
                    <th>Quarta-feira</th>
                    <td>13h</td>
                    <td>18h</td>
                </tr>
                <tr>
                    <th>Quinta-feira</th>
                    <td>13h</td>
                    <td>18h</td>
                </tr>
                <tr>
                    <th>Sexta-feira</th>
                    <td>13h</td>
                    <td>18h</td>
                </tr>
            </table>
            </div>
        </div>
    </div>                
</div>

@endforeach
</div>

@endsection
