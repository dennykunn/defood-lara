<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CuisineSeeder::class,
            TypeMenuSeeder::class,
            CategoryMenuSeeder::class,
            SeasonalMenuSeeder::class,
            MenuSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
