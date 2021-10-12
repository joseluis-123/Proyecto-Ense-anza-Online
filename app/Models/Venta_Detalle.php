<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta_Detalle extends Model
{
    use HasFactory;

    protected $fillable = [
        'venta_id',
        'curso_id',
        'precio'
    ];
}
