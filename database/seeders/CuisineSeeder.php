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
        $destinationPath = storage_path('app/public/cuisines');

        File::ensureDirectoryExists($destinationPath);

        $cuisines = [
            'american', 'chinese', 'french', 'indian', 'italian', 'japanese'
        ];

        foreach ($cuisines as $index => $name) {
            $fileName = $name . '.webp';
            $source = public_path("assets/images/menu/cuisines/{$fileName}");
            $target = "{$destinationPath}/{$fileName}";

            if (File::exists($source)) {
                File::copy($source, $target);
            }

            Cuisine::create([
                'id' => $index + 1,
                'name' => $name,
                'slug' => $name,
                'image' => "public/cuisines/{$fileName}",
            ]);
        }
    }
}
