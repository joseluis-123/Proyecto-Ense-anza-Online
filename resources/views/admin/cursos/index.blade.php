@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Cursos</div>

                <div class="card-body">

                    @if ( Session::has('success') )
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <div class="py-4">
                        <a href="{{ route('curso.create') }}" class="btn btn-primary">Nuevo Registro</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-condensed w-100">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cursos as $curso)
                                    <tr>
                                        <td>{{ $curso->id }}</td>
                                        <td>{{ $curso->nombre }}</td>
                                        <th>{{ $curso->categoria->nombre }}</th>
                                        <td>S/{{ $curso->precio }}</td>
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
