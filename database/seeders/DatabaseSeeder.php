<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\CategoriasSeeder;
use Database\Seeders\ProductoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamar a otros seeders
        $this->call([
            CategoriasSeeder::class,
            ProductoSeeder::class,
        ]);

        // Crear un usuario manualmente
        User::factory()->create([
            'name' => 'Andres Massuttier',
            'email' => 'andres@m-studio.com.mx',
            'password' => bcrypt('tu_contraseña_segura'), // Cámbialo por una contraseña real
        ]);
    }
}
