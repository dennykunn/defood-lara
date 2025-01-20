<?php

namespace Database\Seeders;

use App\Models\SeasonalMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SeasonalMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        File::copy(public_path('assets/images/menu/seasonal/baked-foods.webp'), storage_path('app/public/seasonal/baked-foods.webp'));
        File::copy(public_path('assets/images/menu/seasonal/cheese-bacon.webp'), storage_path('app/public/seasonal/cheese-bacon.webp'));
        File::copy(public_path('assets/images/menu/seasonal/grill-seafood.webp'), storage_path('app/public/seasonal/grill-seafood.webp'));
        File::copy(public_path('assets/images/menu/seasonal/shawarma.webp'), storage_path('app/public/seasonal/shawarma.webp'));
        File::copy(public_path('assets/images/menu/seasonal/tacos.webp'), storage_path('app/public/seasonal/tacos.webp'));
        File::copy(public_path('assets/images/menu/seasonal/salad.webp'), storage_path('app/public/seasonal/salad.webp'));

        SeasonalMenu::create([
            'id' => 1,
            'name' => 'Baked Foods',
            'slug' => 'baked-foods',
            'image' => 'public/seasonal/baked-foods.webp',
        ]);
        SeasonalMenu::create([
            'id' => 2,
            'name' => 'Cheese Bacon',
            'slug' => 'cheese-bacon',
            'image' => 'public/seasonal/cheese-bacon.webp',
        ]);
        SeasonalMenu::create([
            'id' => 3,
            'name' => 'Grilled Seafood',
            'slug' => 'grilled-seafood',
            'image' => 'public/seasonal/grill-seafood.webp',
        ]);
        SeasonalMenu::create([
            'id' => 4,
            'name' => 'Shawarma',
            'slug' => 'shawarma',
            'image' => 'public/seasonal/shawarma.webp',
        ]);
        SeasonalMenu::create([
            'id' => 5,
            'name' => 'Tacos',
            'slug' => 'tacos',
            'image' => 'public/seasonal/tacos.webp',
        ]);
        SeasonalMenu::create([
            'id' => 6,
            'name' => 'Salad',
            'slug' => 'salad',
            'image' => 'public/seasonal/salad.webp',
        ]);
    }
}
