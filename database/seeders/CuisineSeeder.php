<?php

namespace Database\Seeders;

use App\Models\Cuisine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CuisineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        File::copy(public_path('assets/images/menu/cuisines/american.webp'), storage_path('app/public/cuisines/american.webp'));
        File::copy(public_path('assets/images/menu/cuisines/chinese.webp'), storage_path('app/public/cuisines/chinese.webp'));
        File::copy(public_path('assets/images/menu/cuisines/french.webp'), storage_path('app/public/cuisines/french.webp'));
        File::copy(public_path('assets/images/menu/cuisines/indian.webp'), storage_path('app/public/cuisines/indian.webp'));
        File::copy(public_path('assets/images/menu/cuisines/italian.webp'), storage_path('app/public/cuisines/italian.webp'));
        File::copy(public_path('assets/images/menu/cuisines/japanese.webp'), storage_path('app/public/cuisines/japanese.webp'));

        Cuisine::create([
            'id' => 1,
            'name' => 'american',
            'slug' => 'american',
            'image' => 'public/cuisines/american.webp',
        ]);
        Cuisine::create([
            'id' => 2,
            'name' => 'chinese',
            'slug' => 'chinese',
            'image' => 'public/cuisines/chinese.webp',
        ]);
        Cuisine::create([
            'id' => 3,
            'name' => 'french',
            'slug' => 'french',
            'image' => 'public/cuisines/french.webp',
        ]);
        Cuisine::create([
            'id' => 4,
            'name' => 'indian',
            'slug' => 'indian',
            'image' => 'public/cuisines/indian.webp',
        ]);
        Cuisine::create([
            'id' => 5,
            'name' => 'italian',
            'slug' => 'italian',
            'image' => 'public/cuisines/italian.webp',
        ]);
        Cuisine::create([
            'id' => 6,
            'name' => 'japanese',
            'slug' => 'japanese',
            'image' => 'public/cuisines/japanese.webp',
        ]);
    }
}
