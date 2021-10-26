<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Role;
use App\Models\Usuario;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function create()
    {
        $categorias = Categoria::all();
        $instructores = Usuario::where('rol_id', Role::INSTRUCTOR)->get();

        return view('admin.cursos.create', compact('categorias', 'instructores'));
    }
}
