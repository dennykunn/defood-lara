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
        $dest = storage_path('app/public/types');
        File::ensureDirectoryExists($dest);

        $types = [
            ['id' => 1, 'name' => 'food', 'img' => 'foods.webp'],
            ['id' => 2, 'name' => 'drink', 'img' => 'drinks.webp'],
            ['id' => 3, 'name' => 'dessert', 'img' => 'desserts.webp'],
        ];

        foreach ($types as $type) {
            $source = public_path("assets/images/menu/types/{$type['img']}");

            if (File::exists($source)) {
                File::copy($source, $dest . '/' . $type['img']);
            }

            TypeMenu::create([
                'id' => $type['id'],
                'name' => $type['name'],
                'slug' => $type['name'],
                'image' => "public/types/{$type['img']}",
            ]);
        }
    }
}
