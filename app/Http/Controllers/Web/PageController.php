<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Curso;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio()
    {
        $categorias = Categoria::all();
        $cursos = Curso::with(['categoria', 'secciones', 'instructor'])->get();

        return view('web.inicio', compact('cursos', 'categorias'));
    }

    public function curso_detalle($id)
    {
        $curso = Curso::with(['categoria', 'secciones', 'instructor'])->findOrFail($id);

        return view('web.curso_detalle', compact('curso'));
    }
}
