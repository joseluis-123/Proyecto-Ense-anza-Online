<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'alumno_id',
        'curso_id',
        'precio'
    ];

    public function alumno()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
