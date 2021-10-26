<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "nombres" => "Administrador",
            "descripcion" => "Soy Admin"
        ]);

        Role::create([
            "nombres" => "Alumno",
            "descripcion" => "Soy Alumno"
        ]);

        Role::create([
            "nombres" => "Instructor",
            "descripcion" => "Soy Instructor"
        ]);
    }
}
