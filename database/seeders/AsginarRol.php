<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsginarRol extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                        // Encontrar un usuario por ID
                $user = User::find(2);


                $user->assignRole('Administrador');

    }
}
