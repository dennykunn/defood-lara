<?php

namespace Database\Seeders;

use App\Models\TypeMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TypeMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        File::copy(public_path('assets/images/menu/types/drinks.webp'), storage_path('app/public/types/drinks.webp'));
        File::copy(public_path('assets/images/menu/types/foods.webp'), storage_path('app/public/types/foods.webp'));
        File::copy(public_path('assets/images/menu/types/desserts.webp'), storage_path('app/public/types/desserts.webp'));

        TypeMenu::create([
            'id' => 1,
            'name' => 'food',
            'slug' => 'food',
            'image' => 'public/types/foods.webp',
        ]);
        TypeMenu::create([
            'id' => 2,
            'name' => 'drink',
            'slug' => 'drink',
            'image' => 'public/types/drinks.webp',
        ]);
        TypeMenu::create([
            'id' => 3,
            'name' => 'dessert',
            'slug' => 'dessert',
            'image' => 'public/types/desserts.webp',
        ]);
    }
}
