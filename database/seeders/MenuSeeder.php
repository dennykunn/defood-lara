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
        File::copy(public_path('assets/images/menu/drinks/ice-diet-lemon-soda.webp'), storage_path('app/public/menu/ice-diet-lemon-soda.webp'));
        File::copy(public_path('assets/images/menu/drinks/margarita.webp'), storage_path('app/public/menu/margarita.webp'));
        File::copy(public_path('assets/images/menu/desserts/ice-cream.webp'), storage_path('app/public/menu/ice-cream.webp'));
        File::copy(public_path('assets/images/menu/foods/mexican-tacos-with-beef.webp'), storage_path('app/public/menu/mexican-tacos-with-beef.webp'));
        File::copy(public_path('assets/images/menu/foods/french-fries.webp'), storage_path('app/public/menu/french-fries.webp'));
        File::copy(public_path('assets/images/menu/foods/ramen.webp'), storage_path('app/public/menu/ramen.webp'));
        File::copy(public_path('assets/images/menu/foods/fried-chicken.webp'), storage_path('app/public/menu/fried-chicken.webp'));
        File::copy(public_path('assets/images/menu/foods/grilled-chiken-wings.webp'), storage_path('app/public/menu/grilled-chiken-wings.webp'));
        File::copy(public_path('assets/images/menu/foods/pizza-with-salami-cheese.webp'), storage_path('app/public/menu/pizza-with-salami-cheese.webp'));
        File::copy(public_path('assets/images/menu/foods/spicy-meals.webp'), storage_path('app/public/menu/spicy-meals.webp'));

        Menu::create([
            'name' => 'Fried Chicken',
            'slug' => 'fried-chicken',
            'image' => 'public/menu/fried-chicken.webp',
            'price' => 85000,
            'discount' => 0,
            'category_id' => 10,
            'cuisine_id' => 1,
            'type_id' => 1,
        ]);
        Menu::create([
            'name' => 'Mexican Tacos With Beef',
            'slug' => 'mexican-tacos-with-beef',
            'image' => 'public/menu/mexican-tacos-with-beef.webp',
            'price' => 50000,
            'discount' => 0,
            'category_id' => 2,
            'cuisine_id' => 5,
            'type_id' => 1,
        ]);
        Menu::create([
            'name' => 'Ramen',
            'slug' => 'Ramen',
            'image' => 'public/menu/ramen.webp',
            'price' => 50000,
            'discount' => 0,
            'category_id' => 5,
            'cuisine_id' => 6,
            'type_id' => 1,
        ]);
        Menu::create([
            'name' => 'Grilled Chicken Wings',
            'slug' => 'grilled-chicken-wings',
            'image' => 'public/menu/grilled-chiken-wings.webp',
            'price' => 50000,
            'discount' => 0,
            'category_id' => 4,
            'cuisine_id' => 1,
            'type_id' => 1,
        ]);
        Menu::create([
            'name' => 'French Fries',
            'slug' => 'french-fries',
            'image' => 'public/menu/french-fries.webp',
            'price' => 35000,
            'discount' => 5,
            'category_id' => 10,
            'cuisine_id' => 5,
            'type_id' => 1,
        ]);
        Menu::create([
            'name' => 'Pizza With Salami Cheese',
            'slug' => 'pizza-with-salami-cheese',
            'image' => 'public/menu/pizza-with-salami-cheese.webp',
            'price' => 35000,
            'discount' => 5,
            'category_id' => 3,
            'cuisine_id' => 5,
            'type_id' => 1,
        ]);
        Menu::create([
            'name' => 'Spice Meals',
            'slug' => 'spice-meals',
            'image' => 'public/menu/spicy-meals.webp',
            'price' => 25000,
            'discount' => 0,
            'category_id' => 8,
            'cuisine_id' => 1,
            'type_id' => 1,
        ]);
        Menu::create([
            'name' => 'Ice Diet Lemon Soda',
            'slug' => 'ice-diet-lemon-soda',
            'image' => 'public/menu/ice-diet-lemon-soda.webp',
            'price' => 25000,
            'discount' => 0,
            'category_id' => 9,
            'cuisine_id' => 3,
            'type_id' => 2,
        ]);
        Menu::create([
            'name' => 'Margarita',
            'slug' => 'margarita',
            'image' => 'public/menu/margarita.webp',
            'price' => 30000,
            'discount' => 0,
            'category_id' => 6,
            'cuisine_id' => 1,
            'type_id' => 2,
        ]);
        Menu::create([
            'name' => 'Chocolate Ice Cream',
            'slug' => 'chocolate-ice-cream',
            'image' => 'public/menu/ice-cream.webp',
            'price' => 20000,
            'discount' => 10,
            'category_id' => 7,
            'cuisine_id' => 1,
            'type_id' => 3,
        ]);
    }
}
