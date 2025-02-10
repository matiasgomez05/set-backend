<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        User::create([
            'name' => 'Matias Gomez',
            'email' => 'matias.gomez@ejemplo.com',
            'password' => bcrypt('password123'),
        ]);
    }
}
