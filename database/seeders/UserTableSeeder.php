<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            "nombres" => "Admin",
            "apellidos" => "Lol",
            "correo" => "admin@gmail.com",
            "rol" => Role::ADMIN,
            "estado" => true,
            "password" => bcrypt(12345678)
        ]);
    }
}
