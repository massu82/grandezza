<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cata;
use Carbon\Carbon;


class CataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cata::insert([
            [
                'titulo' => 'Cata de Vinos Tintos',
                'descripcion' => 'Una selección de los mejores vinos tintos del país.',
                'fecha_hora' => Carbon::now()->addDays(1)->setTime(17, 0),
                'capacidad' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Cata de Mezcales Artesanales',
                'descripcion' => 'Explora sabores únicos de distintas regiones de México.',
                'fecha_hora' => Carbon::now()->addDays(2)->setTime(18, 30),
                'capacidad' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Cata de Cervezas Locales',
                'descripcion' => 'Descubre el mundo cervecero con productores locales.',
                'fecha_hora' => Carbon::now()->addDays(3)->setTime(16, 0),
                'capacidad' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
