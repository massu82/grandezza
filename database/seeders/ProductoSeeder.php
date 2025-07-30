<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

claProductoSeeder extends Seeder
{
    public function run()
    {
        DB::table('productos')->truncate();

        $productos = [
            [
                'nombre' => 'Tequila Gran Centenario Rep 950ml',
                'precio' => 276.5,
                'imagen' => '01.webp',
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Centenario Plata',
                'precio' => 420.00,
                'imagen' => '02.webp',
                'categoria_id' => 2,
            ],
            [
                'nombre' => 'Jose Cuervo tradicional',
                'precio' => 990.00,
                'imagen' => '03.webp',
                'categoria_id' => 3,
            ],
            [
                'nombre' => 'Jose Cuervo tradicional Cristalino',
                'precio' => 350.00,
                'imagen' => '04.webp',
                'categoria_id' => 4,
            ],
            [
                'nombre' => 'Maestro Dobel',
                'precio' => 580.00,
                'imagen' => '05.webp',
                'categoria_id' => 5,
            ],
            [
                'nombre' => 'Maestro Dobel Diamante',
                'precio' => 690.00,
                'imagen' => '06.webp',
                'categoria_id' => 6,
            ],
            [
                'nombre' => '1800 Cristalino',
                'precio' => 690.00,
                'imagen' => '07.webp',
                'categoria_id' => 6,
            ],
            [
                'nombre' => 'Jose Cuervo Especial',
                'precio' => 690.00,
                'imagen' => '08.webp',
                'categoria_id' => 6,
            ],
        ];

        foreach ($productos as $producto) {
            DB::table('productos')->insert(array_merge($producto, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
