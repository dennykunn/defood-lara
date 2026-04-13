<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dest = storage_path('app/public/menu');
    File::ensureDirectoryExists($dest);

    $menus = [
        ['name' => 'Fried Chicken', 'folder' => 'foods', 'img' => 'fried-chicken.webp', 'cat' => 10, 'cui' => 1, 'type' => 1, 'price' => 85000],
        ['name' => 'Mexican Tacos With Beef', 'folder' => 'foods', 'img' => 'mexican-tacos-with-beef.webp', 'cat' => 2, 'cui' => 5, 'type' => 1, 'price' => 50000],
        ['name' => 'Ramen', 'folder' => 'foods', 'img' => 'ramen.webp', 'cat' => 5, 'cui' => 6, 'type' => 1, 'price' => 50000],
        ['name' => 'Grilled Chicken Wings', 'folder' => 'foods', 'img' => 'grilled-chiken-wings.webp', 'cat' => 4, 'cui' => 1, 'type' => 1, 'price' => 50000],
        ['name' => 'French Fries', 'folder' => 'foods', 'img' => 'french-fries.webp', 'cat' => 10, 'cui' => 5, 'type' => 1, 'price' => 35000, 'disc' => 5],
        ['name' => 'Pizza With Salami Cheese', 'folder' => 'foods', 'img' => 'pizza-with-salami-cheese.webp', 'cat' => 3, 'cui' => 5, 'type' => 1, 'price' => 35000, 'disc' => 5],
        ['name' => 'Spice Meals', 'folder' => 'foods', 'img' => 'spicy-meals.webp', 'cat' => 8, 'cui' => 1, 'type' => 1, 'price' => 25000],
        ['name' => 'Ice Diet Lemon Soda', 'folder' => 'drinks', 'img' => 'ice-diet-lemon-soda.webp', 'cat' => 9, 'cui' => 3, 'type' => 2, 'price' => 25000],
        ['name' => 'Margarita', 'folder' => 'drinks', 'img' => 'margarita.webp', 'cat' => 6, 'cui' => 1, 'type' => 2, 'price' => 30000],
        ['name' => 'Chocolate Ice Cream', 'folder' => 'desserts', 'img' => 'ice-cream.webp', 'cat' => 7, 'cui' => 1, 'type' => 3, 'price' => 20000, 'disc' => 10],
    ];

    foreach ($menus as $item) {
        $source = public_path("assets/images/menu/{$item['folder']}/{$item['img']}");
        if (File::exists($source)) {
            File::copy($source, $dest . '/' . $item['img']);
        }

        Menu::create([
            'name' => $item['name'],
            'slug' => str($item['name'])->slug(),
            'image' => "public/menu/{$item['img']}",
            'price' => $item['price'],
            'discount' => $item['disc'] ?? 0,
            'category_id' => $item['cat'],
            'cuisine_id' => $item['cui'],
            'type_id' => $item['type'],
        ]);
    }
    }
}
