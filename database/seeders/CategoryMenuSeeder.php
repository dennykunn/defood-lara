<?php

namespace Database\Seeders;

use App\Models\CategoryMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CategoryMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dest = storage_path('app/public/categories');
    File::ensureDirectoryExists($dest);

    $categories = [
        ['name' => 'burger', 'type_id' => 1, 'img' => 'burger.webp'],
        ['name' => 'taco', 'type_id' => 1, 'img' => 'tacos.webp'],
        ['name' => 'pizza', 'type_id' => 1, 'img' => 'pizza.webp'],
        ['name' => 'grill', 'type_id' => 1, 'img' => 'grill.webp'],
        ['name' => 'noodle', 'type_id' => 1, 'img' => 'noodle.webp'],
        ['name' => 'juice', 'type_id' => 2, 'img' => 'juice.webp'],
        ['name' => 'ice cream', 'type_id' => 3, 'img' => 'ice-cream.webp', 'slug' => 'ice-cream'],
        ['name' => 'spicy gravy', 'type_id' => 1, 'img' => 'spicy-gravy.webp', 'slug' => 'spicy-gravy'],
        ['name' => 'soda', 'type_id' => 2, 'img' => 'soda.webp'],
        ['name' => 'fried', 'type_id' => 1, 'img' => 'fried.webp'],
    ];

    foreach ($categories as $index => $item) {
        $source = public_path("assets/images/menu/categories/{$item['img']}");
        if (File::exists($source)) {
            File::copy($source, $dest . '/' . $item['img']);
        }

        CategoryMenu::create([
            'id' => $index + 1,
            'name' => $item['name'],
            'slug' => $item['slug'] ?? str($item['name'])->slug(),
            'type_id' => $item['type_id'],
            'image' => "public/categories/{$item['img']}",
        ]);
    }
}
}
