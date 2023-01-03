@extends('layouts.main')

@section('content')

<div class="container">
    <h1 class="text-center mt-4">Recados</h1>
    <div class="container-sm d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col">
            @foreach($recados as $recado)
                <div class="card shadow rounded visualizar-card card-recado" style="width: 50rem;">
                    <div class="rounded-top p-3 title d-flex justify-content-between align-items-center bg-success text-light">
                        <h4 class="m-0">{{date('d/m/Y', strtotime($recado->dia))}}</h4>
                        <div class="d-flex align-items-center">
                            <a class="p-1 me-2" href="/perfil-etep/editar-recado/{{$recado->id}}"><img class="rounded" style="width: 40px;" src="{{asset('/img/create-outline.svg')}}" alt="editar" title="Editar"></a>
                            <form action="/deletar-recado/{{$recado->id}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esse Recado?')">
                                @csrf
                                @method('DELETE')
                                <button class="bg-transparent border-0 p-1" type="submit">
                                    <img class="rounded" style="width: 40px;" src="{{asset('/img/trash-outline.svg')}}" alt="excluir" title="Excluir">
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="p-3">
                        <p class="m-0">{{$recado->descricao}}</p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>

@endsection