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
        File::copy(public_path('assets/images/menu/categories/burger.webp'), storage_path('app/public/categories/burger.webp'));
        File::copy(public_path('assets/images/menu/categories/tacos.webp'), storage_path('app/public/categories/tacos.webp'));
        File::copy(public_path('assets/images/menu/categories/pizza.webp'), storage_path('app/public/categories/pizza.webp'));
        File::copy(public_path('assets/images/menu/categories/grill.webp'), storage_path('app/public/categories/grill.webp'));
        File::copy(public_path('assets/images/menu/categories/noodle.webp'), storage_path('app/public/categories/noodle.webp'));
        File::copy(public_path('assets/images/menu/categories/ice-cream.webp'), storage_path('app/public/categories/ice-cream.webp'));
        File::copy(public_path('assets/images/menu/categories/spicy-gravy.webp'), storage_path('app/public/categories/spicy-gravy.webp'));
        File::copy(public_path('assets/images/menu/categories/soda.webp'), storage_path('app/public/categories/soda.webp'));
        File::copy(public_path('assets/images/menu/categories/juice.webp'), storage_path('app/public/categories/juice.webp'));
        File::copy(public_path('assets/images/menu/categories/fried.webp'), storage_path('app/public/categories/fried.webp'));

        CategoryMenu::create([
            'id' => 1,
            'name' => 'burger',
            'slug' => 'burger',
            'type_id' => 1,
            'image' => 'public/categories/burger.webp',
        ]);
        CategoryMenu::create([
            'id' => 2,
            'name' => 'taco',
            'slug' => 'taco',
            'type_id' => 1,
            'image' => 'public/categories/tacos.webp',
        ]);
        CategoryMenu::create([
            'id' => 3,
            'name' => 'pizza',
            'slug' => 'pizza',
            'type_id' => 1,
            'image' => 'public/categories/pizza.webp',
        ]);
        CategoryMenu::create([
            'id' => 4,
            'name' => 'grill',
            'slug' => 'grill',
            'type_id' => 1,
            'image' => 'public/categories/grill.webp',
        ]);
        CategoryMenu::create([
            'id' => 5,
            'name' => 'noodle',
            'slug' => 'noodle',
            'type_id' => 1,
            'image' => 'public/categories/noodle.webp',
        ]);
        CategoryMenu::create([
            'id' => 6,
            'name' => 'juice',
            'slug' => 'juice',
            'type_id' => 2,
            'image' => 'public/categories/juice.webp',
        ]);
        CategoryMenu::create([
            'id' => 7,
            'name' => 'ice cream',
            'slug' => 'ice-cream',
            'type_id' => 3,
            'image' => 'public/categories/ice-cream.webp',
        ]);
        CategoryMenu::create([
            'id' => 8,
            'name' => 'spicy gravy',
            'slug' => 'spicy-gravy',
            'type_id' => 1,
            'image' => 'public/categories/spicy-gravy.webp',
        ]);
        CategoryMenu::create([
            'id' => 9,
            'name' => 'soda',
            'slug' => 'soda',
            'type_id' => 2,
            'image' => 'public/categories/soda.webp',
        ]);
        CategoryMenu::create([
            'id' => 10,
            'name' => 'fried',
            'slug' => 'fried',
            'type_id' => 1,
            'image' => 'public/categories/fried.webp',
        ]);
    }
}
