@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Usuario</div>

                <div class="card-body">
                    <form action="{{ route('usuario.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Nombres</label>
                            <input type="text" name="nombres" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" name="apellidos" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" name="correo" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Rol</label>
                            <select name="rol_id" class="form-control">
                                @foreach ($roles as $rol)
                                    <option value="{{ $rol->id }}">{{ $rol->nombres }}</option>
                                @endforeach
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
