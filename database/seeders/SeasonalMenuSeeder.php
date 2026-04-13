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
        $dest = storage_path('app/public/seasonal');
        File::ensureDirectoryExists($dest);

        $items = [
            ['name' => 'Baked Foods', 'img' => 'baked-foods.webp'],
            ['name' => 'Cheese Bacon', 'img' => 'cheese-bacon.webp'],
            ['name' => 'Grilled Seafood', 'img' => 'grill-seafood.webp'],
            ['name' => 'Shawarma', 'img' => 'shawarma.webp'],
            ['name' => 'Tacos', 'img' => 'tacos.webp'],
            ['name' => 'Salad', 'img' => 'salad.webp'],
        ];

        foreach ($items as $index => $item) {
            $source = public_path("assets/images/menu/seasonal/{$item['img']}");

            if (File::exists($source)) {
                File::copy($source, $dest . '/' . $item['img']);
            }

            SeasonalMenu::create([
                'id' => $index + 1,
                'name' => $item['name'],
                'slug' => str($item['name'])->slug(),
                'image' => "public/seasonal/{$item['img']}",
            ]);
        }
    }
}
