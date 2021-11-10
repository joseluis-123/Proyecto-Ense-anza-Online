<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('admin.categoria.index', compact('categorias'));
    }
    public function create()
    {
        return view('admin.categoria.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:categorias'
        ]);

        $input = $request->all();

        $categoria = new Categoria();
        $categoria->fill( $input )->save();

        return Redirect::route('categoria.index')->with('success', 'Categoría agregada correctamente.');
    }
}
