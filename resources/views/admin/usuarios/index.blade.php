@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Usuarios</div>

                <div class="card-body">

                    @if ( Session::has('success') )
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <div class="py-4">
                        <a href="{{ route('usuario.create') }}" class="btn btn-primary">Nuevo Registro</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-condensed w-100">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres y Apellidos</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario->id }}</td>
                                        <td>{{ $usuario->nombres . ' ' . $usuario->apellidos }}</td>
                                        <td>{{ $usuario->correo }}</td>
                                        <td>{{ $usuario->rol->nombres }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
