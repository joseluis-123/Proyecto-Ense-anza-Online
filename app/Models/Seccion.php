<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    protected $table = 'secciones';

    protected $fillable = [
        'nombre',
        'orden',
        'curso_id'
    ];

    public function lecciones()
    {
        return $this->hasMany(Leccion::class);
    }
}
