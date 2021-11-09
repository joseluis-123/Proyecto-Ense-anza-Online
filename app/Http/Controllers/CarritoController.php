<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    public function anadirCarrito(Request $request)
    {
        if ( request()->ajax() ) {
            $input = $request->all();

            $input['alumno_id'] = Auth::id();

            $carrito = new Carrito();
            $carrito->fill( $input )->save();

            $data = [
                'id' => $carrito->id,
                'msg' => 'El carrito fue agregado con éxito.'
            ];

            return response()->json($data);
        }
    }

    public function eliminarCarrito(Request $request)
    {
        if ( request()->ajax() ) {
            $carrito = Carrito::find($request->carrito_id);
            $carrito->delete();

            $data = [
                'msg' => 'El carrito fue eliminado con éxito.'
            ];

            return response()->json($data);
        }
    }
}
