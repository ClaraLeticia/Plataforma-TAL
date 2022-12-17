@extends('layout.main')

@section('content')
<h1 class="text-center mt-4">Lista de Tutores</h1>
<div class="container-sm d-flex justify-content-center mt-5">
    <div class="row">
        <div class="col">
            @foreach($tutores as $tutor)
            <div class="card shadow rounded visualizar-card card-tutor-pequeno" style="width: 40rem;">
                <div class="card-body">
                    <div class="row m-0 mb-3">
                        <div class="col-sm-2 p-0 text-center">
                            <img class="icon-profile-card" src="{{asset('/img/person-circle-outline.svg')}}" alt="icone">
                        </div>
                        <div class="col-sm-10">
                            <h5 class="my-3">{{$tutor->nome}}</h5>
                            <div class="row m-0">
                                <div class="col-sm-6 p-0">
                                <p><strong>Matrícula: </strong>{{$tutor->matricula_aluno}}</p>
                                </div>
                                <div class="col-sm-6">
                                <p><strong>Matéria: </strong>{{$tutor->materia}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center float-end">
                        <button class="btn btn-success ver-mais">Ver mais</button>
                        <a href="" class="btn btn-success ms-4">Editar</a>
                        <a href="" class="btn btn-success ms-4">Excluir</a>
                    </div>
                </div>
            </div>
            
            <div class="card shadow rounded visualizar-card card-tutor-grande" style="width: 40rem;">
                <div class="card-body">
                    <div class="row m-0 mb-3">
                        <div class="col-sm-2 p-0 text-center">
                            <img class="icon-profile-card" src="{{asset('/img/person-circle-outline.svg')}}" alt="icone">
                        </div>
                        <div class="col-sm-10">
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
                        </div>
                        <hr>
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
                    <div class="d-flex align-items-center float-end">
                        <button class="btn btn-success ver-menos">Ver menos</button>
                        <a href="" class="btn btn-success ms-4">Editar</a>
                        <a href="" class="btn btn-success ms-4">Excluir</a>
                    </div><br><br>
                </div>
            </div>
            @endforeach

            
            



        </div>
    </div>
</div>


@endsection