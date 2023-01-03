@extends('layouts.main')

@section('content')

<div class="container-fluid margin-top">
    <div class="row">
        @foreach($tutores as $tutor)
        <div class="col-sm-6 card-margin" id={{$tutor->materia}}>
            <div class="card-horarios rounded shadow">
                <h4 class="titulo-materia border border-dark rounded-top m-0 d-flex align-items-center justify-content-center">{{$tutor->materia}}</h4>
                <div class="row m-0">
                    <div class="col-sm-5 border border-end-0 border-dark p-2">
                        <div class="text-center">
                            <img class="icon-profile-card" src="{{asset('/img/person-circle-outline.svg')}}" alt="icone pessoa">
                            <h6 class="mt-2">{{$tutor->nome}}</h5><br>
                        </div>
                        <p><strong>Email:</strong> {{$tutor->email}}</p>
                        <p><strong>Telefone:</strong> {{$tutor->telefone}}</p>
                    </div>
                    <div class="col-sm-7 border border-dark">
                        <table class="table text-center">
                            <tr>
                                <th></th>
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
    
</div>

    

@endsection
