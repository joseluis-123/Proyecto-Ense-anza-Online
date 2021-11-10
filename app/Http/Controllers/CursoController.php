<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\Role;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::with('categoria')->get();

        return view('admin.cursos.index', compact('cursos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $instructores = Usuario::where('rol_id', Role::INSTRUCTOR)->get();

        return view('admin.cursos.create', compact('categorias', 'instructores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:cursos',
            'presentacion' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'requisitos' => 'required',
            'objetivos' => 'required',
            'dirigido' => 'required'
        ]);

        $input = $request->all();
        $input['estado'] = true;

        $curso = new Curso();
        $curso->fill( $input )->save();

        return Redirect::route('curso.index')->with('success', 'Curso agregada correctamente.');
    }
}
