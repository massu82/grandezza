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
                'titulo' => 'La Redonda',
                'descripcion' => '<ul class="list-disc list-inside text-xs"><li>ROSADO SEMI SECO</li><li>BLANCO DULCE</li><li>NOSOTROS SEMI DULCE</li></ul>',
                'salon' => 'Amarillo',
                'logo' => 'logo-03',
                'expositor' => 'Adrian Roa',
                'fecha_hora' => Carbon::create(2025,8,2)->setTime(13,0),
                'capacidad' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'La Puerta del Sol',
                'descripcion' => '',
                'salon' => 'Troje',
                'logo' => 'logo-19',
                'expositor' => 'Luis Alberto Martinez',
                'fecha_hora' => Carbon::create(2025,8,2)->setTime(13,0),
                'capacidad' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Viña Concha y Toro',
                'descripcion' => '',
                'salon' => 'Rojo',
                'logo' => 'logo-11',
                'expositor' => 'Viridiana Mosqueda',
                'fecha_hora' => Carbon::create(2025,8,2)->setTime(13,0),
                'capacidad' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Cesarfer',
                'descripcion' => '<ul class="list-disc list-inside text-xs"><li>VINO NOZECO</li></ul>',
                'salon' => 'Amarillo',
                'logo' => '',
                'expositor' => 'Paola Cruz Villanueva',
                'fecha_hora' => Carbon::create(2025,8,2)->setTime(14,0),
                'capacidad' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
