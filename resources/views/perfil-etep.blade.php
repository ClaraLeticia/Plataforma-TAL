@extends('layout.main')

@section('content')
<!-- <img id="homemdeferro" src="{{asset('/img/homemdeferro.gif')}}" alt="icone"> -->

<h1 class="text-center my-4">Meu Perfil</h1>
<div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="card shadow rounded visualizar-card" style="width: 35rem;">
        <div class="card-body">
            <div class="row m-0">
                <div class="col-sm-3 p-0 text-center">
                    <img class="icon-profile-card" src="{{asset('/img/person-circle-outline.svg')}}" alt="icone">
                </div>
                <div class="col-sm-9">
                    <h5 class="my-3">Sebastião fellipe Pinto Lopes</h5>
                    <p><strong>Matrícula: </strong>20191054010006</p> 
                    <p><strong>E-mail: </strong>s.fellipe@escolar.ifrn.edu.br</p>
                </div>
            </div>
            <div class="d-flex align-items-center float-end">
                <a href="" class="btn btn-success ms-4">Editar perfil</a>
            </div>
        </div>
    </div>
</div>

@endsection