@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Listado de clientes 
                    <a href="{{Route('cliente.create')}}" class="btn btn-xs btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Nuevo</a>
                </div>

                <div class="card-body">
                    <div class="col-sm-12 col-xs-12">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>
                    
                    <table class="table">
                        <thead>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>DNI</th>
                            <th>Sexo</th>

                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->cli_apellido_paterno}} {{$cliente->cli_apellido_materno}}</td>
                                <td>{{$cliente->cli_nombres}}</td>
                                <td>{{$cliente->cli_dni}}</td>
                                <td>{{$cliente->cli_sexo}}</td>
                                
                                <td><a href="#" class="btn btn-xs btn-info">Editar</a></td>
                                <td><a href="#" class="btn btn-xs btn-danger">Eliminar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
