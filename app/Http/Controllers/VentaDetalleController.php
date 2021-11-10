<?php

namespace App\Http\Controllers;

use App\Models\Venta_Detalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaDetalleController extends Controller
{
    public function misAlumnos()
    {
        $ventasDetalle = Venta_Detalle::with(['venta', 'venta.alumno', 'curso'])
            ->whereHas('curso', function ($query) {
                return $query->where('instructor_id', Auth::id());
            })
            ->get();

        return view('admin.alumnos.index', compact('ventasDetalle'));
    }
}
