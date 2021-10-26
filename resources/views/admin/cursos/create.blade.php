@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Cursos</div>

                <div class="card-body">
                    <form action="{{ route('curso.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Categoría</label>
                            <select name="categoria_id" class="form-control">
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Presentación</label>
                            <input type="text" name="presentacion" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea name="descripcion" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Precio</label>
                            <input type="number" name="precio" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Instructor</label>
                            <select name="instrcutor_id" class="form-control">
                                @foreach ($instructores as $instructor)
                                    <option value="{{ $instructor->id }}">{{ $instructor->nombres . ' ' . $instructor->apellidos  }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Idioma</label>
                            <select name="idioma" class="form-control">
                                <option value="1">Español</option>
                                <option value="2">Inglés</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" >Registrar</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
