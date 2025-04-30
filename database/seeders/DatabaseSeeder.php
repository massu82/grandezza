<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(ProductoSeeder::class);
        $this->call(CategoriasSeeder::class);

        User::factory()->create([
            'name' => 'Andres Massuttier',
            'email' => 'andres@m-studio.com.mx',
            'password' => bcrypt('<PASSWORD>'),
        ]);
    }
}
