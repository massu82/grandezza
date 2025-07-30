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
                'descripcion' => '<ul class="list-disc list-inside text-xs"><li>ROSADO SEMI SECO<li>BLANCO DULCE<li>NOSOTROS SEMI DULCE</ul>',
                'salon' => 'Amarillo',
                'logo' => '',
                'expositor' => 'Adrian Roa',
                'fecha_hora' => Carbon::create(2025,8,2,13),
                'capacidad' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
