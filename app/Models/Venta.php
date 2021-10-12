<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_venta',
        'fecha_venta',
        'alumno_id',
        'estado',
        'total'
    ];

    public function detalle()
    {
        return $this->hasMany(Venta_Detalle::class);
    }

    public function alumno()
    {
        return $this->belongsTo(User::class);
    }
}
