@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Alumnos</div>

                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table table-condensed w-100">
                            <thead>
                                <tr>
                                    <th>Fecha Compra</th>
                                    <th>Alumno</th>
                                    <th>Curso</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ventasDetalle as $ventaDetalle)
                                    <tr>
                                        <td>{{ $ventaDetalle->created_at }}</td>
                                        <td>{{ $ventaDetalle->venta->alumno->nombres . ' ' . $ventaDetalle->venta->alumno->apellidos }}</td>
                                        <td>{{ $ventaDetalle->curso->nombre }}</td>
                                        <td>{{ $ventaDetalle->precio }}</td>
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
