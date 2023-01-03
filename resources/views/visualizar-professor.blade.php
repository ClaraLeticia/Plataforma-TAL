@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center mt-4">Lista de Professores</h1>
    <div class="container-sm d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col">
            @foreach($professores as $professor)
                <div class="card shadow rounded visualizar-card" style="width: 50rem;">
                    <div class="card-body">
                        <div class="row m-0 mb-3">
                            <div class="col-sm-2 p-0 text-center">
                                <img class="icon-profile-card" src="{{asset('/img/person-circle-outline.svg')}}" alt="icone">
                            </div>
                            <div class="col-sm-10">
                                <h5 class="my-3">{{$professor->nome}}</h5>
                                <div class="row m-0">
                                    <div class="col-sm-5 p-0">
                                    <p><strong>Matéria: </strong>
                                        @foreach($materias as $materia)
                                            @if($professor->id_materia == $materia->id)
                                                {{$materia->materia}}
                                            @endif
                                        @endforeach
                                    </p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p><strong>Semestre: </strong>{{$professor->semestre}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center float-end">
                            <a href="/perfil-etep/editar-professor/{{$professor->id}}" class="btn btn-success ms-4">Editar</a>
                            <form action="/deletar-professor/{{$professor->id}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esse Professor?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-success ms-4">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
    
    
            </div>
        </div>
    </div>
</div>


@endsection