@extends('layout.main')

@section('content')
<h1 class="text-center mt-4">Lista de Membros da ETEP</h1>
<div class="container-sm d-flex justify-content-center mt-5">
    <div class="row">
        <div class="col">
        @foreach($membros_etep as $membro_etep)
            <div class="card shadow rounded visualizar-card" style="width: 50rem;">
                <div class="card-body">
                    <div class="row m-0 mb-3">
                        <div class="col-sm-2 p-0 text-center">
                            <img class="icon-profile-card" src="{{asset('/img/person-circle-outline.svg')}}" alt="icone">
                        </div>
                        <div class="col-sm-10">
                            <h5 class="my-3">{{$membro_etep->nome}}</h5>
                            <div class="row m-0">
                                <div class="col-sm-5 p-0">
                                <p><strong>Matrícula: </strong>{{$membro_etep->matricula_membro}}</p>
                                </div>
                                <div class="col-sm-7">
                                <p><strong>E-mail: </strong>{{$membro_etep->email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center float-end">
                        <a href="" class="btn btn-success ms-4">Editar</a>
                        <form action="/deletar-etep/{{$membro_etep->matricula_membro}}" method="POST">
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


@endsection