<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->truncate();

        // Categorías principales
        $categorias = [
            'Vinos',
            'Licores',
            'Otras Bebidas',
        ];

        $ids = [];

        foreach ($categorias as $nombre) {
            $ids[$nombre] = DB::table('categorias')->insertGetId([
                'nombre' => $nombre,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Subcategorías (ejemplo)
        DB::table('categorias')->insert([
            ['nombre' => 'Tinto', 'parent_id' => $ids['Vinos'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Blanco', 'parent_id' => $ids['Vinos'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Rosado', 'parent_id' => $ids['Vinos'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Espumoso', 'parent_id' => $ids['Vinos'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Champagne', 'parent_id' => $ids['Vinos'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Fortificado', 'parent_id' => $ids['Vinos'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Sidra', 'parent_id' => $ids['Vinos'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Tequila', 'parent_id' => $ids['Licores'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ron', 'parent_id' => $ids['Licores'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Whisky', 'parent_id' => $ids['Licores'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Vodka', 'parent_id' => $ids['Licores'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ginebra', 'parent_id' => $ids['Licores'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Mezcal', 'parent_id' => $ids['Licores'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cremas y licores', 'parent_id' => $ids['Licores'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cognac', 'parent_id' => $ids['Licores'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Brandy', 'parent_id' => $ids['Licores'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Sake', 'parent_id' => $ids['Licores'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Otros destilados', 'parent_id' => $ids['Licores'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Agua', 'parent_id' => $ids['Otras Bebidas'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Agua Tónica', 'parent_id' => $ids['Otras Bebidas'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Bebidas con gas', 'parent_id' => $ids['Otras Bebidas'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Bebidas sin alcohol', 'parent_id' => $ids['Otras Bebidas'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Café', 'parent_id' => $ids['Otras Bebidas'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cerveza', 'parent_id' => $ids['Otras Bebidas'], 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Otros', 'parent_id' => $ids['Otras Bebidas'], 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
