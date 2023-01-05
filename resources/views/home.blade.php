@extends('layouts.main')

@section('content')

<div class="container-fluid margin-top">
    <div class="row">
    @foreach($tutores as $tutor)
        @foreach($materias as $materia)
            @if($tutor->id_materia == $materia->id)
                <?php $nomemateria = $materia->materia ?>  
            @endif
        @endforeach
        <div class="col-sm-6 card-margin" id="{{$nomemateria}}">
            <div class="card-horarios rounded shadow">
                <h4 class="titulo-materia border border-dark rounded-top m-0 d-flex align-items-center justify-content-center">{{$nomemateria}}</h4>
                <div class="row m-0">
                    <div class="col-sm-5 border border-end-0 border-dark p-2">
                        <div class="text-center">
                            <img class="icon-profile-card" src="{{asset('/img/person-circle-outline.svg')}}" alt="icone pessoa">
                            <h6 class="mt-2">{{$tutor->nome}}</h5><br>
                        </div>
                        <p class="ms-1"><strong>Email:</strong><br>{{$tutor->email}}</p>
                        <p class="ms-1"><strong>Telefone:</strong> {{$tutor->telefone}}</p>
                    </div>
                    <div class="col-sm-7 border border-dark">
                        <table class="table text-center table-tutores-home">
                            <tr>
                                <th></th>
                                <th>Entrada</th>
                                <th>Saída</th>
                            </tr>
                            <tr>
                                <th>Segunda-feira</th>
                                <td>
                                @foreach($horarios as $horario)
                                    @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Segunda-feira')
                                        {{date('H:i', strtotime($horario->horario_entrada))}}
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                @foreach($horarios as $horario)
                                    @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Segunda-feira')
                                        {{date('H:i', strtotime($horario->horario_saida))}}
                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Terça-feira</th>
                                <td>
                                @foreach($horarios as $horario)
                                    @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Terça-feira')
                                        {{date('H:i', strtotime($horario->horario_entrada))}}
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                @foreach($horarios as $horario)
                                    @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Terça-feira')
                                        {{date('H:i', strtotime($horario->horario_saida))}}
                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Quarta-feira</th>
                                <td>
                                @foreach($horarios as $horario)
                                    @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quarta-feira')
                                        {{date('H:i', strtotime($horario->horario_entrada))}}
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                @foreach($horarios as $horario)
                                    @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quarta-feira')
                                        {{date('H:i', strtotime($horario->horario_saida))}}
                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Quinta-feira</th>
                                <td>
                                @foreach($horarios as $horario)
                                    @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quinta-feira')
                                        {{date('H:i', strtotime($horario->horario_entrada))}}
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                @foreach($horarios as $horario)
                                    @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Quinta-feira')
                                        {{date('H:i', strtotime($horario->horario_saida))}}
                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Sexta-feira</th>
                                <td>
                                @foreach($horarios as $horario)
                                    @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Sexta-feira')
                                        {{date('H:i', strtotime($horario->horario_entrada))}}
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                @foreach($horarios as $horario)
                                    @if($horario->id_tutor == $tutor->matricula_aluno && $horario->dia == 'Sexta-feira')
                                        {{date('H:i', strtotime($horario->horario_saida))}}
                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>  
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
    

@endsection
