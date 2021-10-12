<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'presentacion',
        'descripcion',
        'precio',
        'instructor_id',
        'categoria_id',
        'idioma',
        'requisitos',
        'objetivos',
        'dirigido',
        'estado'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
