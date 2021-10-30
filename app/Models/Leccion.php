<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    use HasFactory;

    protected $table = 'lecciones';

    protected $fillable = [
        'nombre',
        'descripcion',
        'tipo',
        'descripcion_texto',
        'url_video',
        'duracion_video',
        'seccion_id'
    ];
}
