@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Nuevo Cliente</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cliente.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombres</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="off" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="txt_apellido_paterno" class="col-md-4 col-form-label text-md-right">Apellido paterno</label>

                            <div class="col-md-6">
                                <input id="txt_apellido_paterno" type="text" class="form-control @error('txt_apellido_paterno') is-invalid @enderror" name="txt_apellido_paterno" value="{{ old('txt_apellido_paterno') }}" autocomplete="off" autofocus>

                                @error('txt_apellido_paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_apellido_materno" class="col-md-4 col-form-label text-md-right">Apellido materno</label>

                            <div class="col-md-6">
                                <input id="txt_apellido_materno" type="text" class="form-control @error('txt_apellido_materno') is-invalid @enderror" name="txt_apellido_materno" value="{{ old('txt_apellido_materno') }}" autocomplete="off" autofocus>

                                @error('txt_apellido_materno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">DNI</label>
                            <div class="col-md-6">
                                <input type="text" name="txt_dni" id="txt_dni" class="form-control @error('txt_dni') is-invalid @enderror" value="{{ old('txt_dni') }}">
                                @error('txt_dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cbo_sexo" class="col-md-4 col-form-label text-md-right">Sexo</label>

                            <div class="col-md-6">
                                <select class="form-control" id="cbo_sexo" name="cbo_sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>

                                @error('cbo_sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                                <a href="{{Route('cliente.index')}}" class="btn btn-danger btn-xs">Atrás</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
