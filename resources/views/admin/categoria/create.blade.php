@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Categoría</div>

                <div class="card-body">
                    <form action="{{ route('categoria.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Nombres</label>
                            <input type="text" name="nombres" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" name="descripcion" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary" >Registrar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
