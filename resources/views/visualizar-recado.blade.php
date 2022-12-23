@extends('layout.main')

@section('content')

<h1 class="text-center mt-4">Recados</h1>
<div class="container-sm d-flex justify-content-center mt-5">
    <div class="row">
        <div class="col">
        

        @foreach($recados as $recado)
            <div class="card shadow rounded visualizar-card card-recado" style="width: 50rem;">
                <div class="rounded-top p-3 title d-flex justify-content-between align-items-center bg-success text-light">                
                    <h4 class="m-0">{{$recado->dia}}</h4>
                    <div class="d-flex align-items-center">
                        <a class="p-1 me-2" href="/editar-recado"><img class="rounded" style="width: 40px;" src="{{asset('/img/create-outline.svg')}}" alt="icone editar"></a>
                        <a class="p-1" href=""><img class="rounded" style="width: 40px;" src="{{asset('/img/trash-outline.svg')}}" alt="icone excluir"></a>
                    </div>
                </div>
                <div class="p-3">
                    <p>{{$recado->descricao}}</p>
                </div>          
            </div>
        @endforeach


        </div>
    </div>
</div>

@endsection