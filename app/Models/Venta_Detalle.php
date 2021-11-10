<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta_Detalle extends Model
{
    use HasFactory;

    protected $table = 'venta_detalles';

    protected $fillable = [
        'venta_id',
        'curso_id',
        'precio'
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }

    public function curso()
    {
        return $this->belongsTo(curso::class);
    }
}
