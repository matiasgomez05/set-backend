<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'descripcion' => 'Primer Equipo',
            'tipo' => 'Equipo',
            'numero_parte' => 'AAA0001',
        ]);
        Producto::create([
            'descripcion' => 'Primer Accesorio',
            'tipo' => 'Accesorio',
            'numero_parte' => 'AAA0002',
        ]);
    }
}
