<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ADMIN = 1;
    const ALUMNO = 2;
    const INSTRUCTOR = 3;

    protected $fillable = [
        'nombres',
        'descripcion'
    ];
}
