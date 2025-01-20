<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Menu::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'image' => 'public/menu//FlZAIUqlSGmDCNdgcaJObPKT6X9D85Lt4An5eS1z.webp',
            'price' => $this->faker->numberBetween(10, 100),
            'discount' => $this->faker->numberBetween(0, 20),
            'category_id' => \App\Models\CategoryMenu::inRandomOrder()->first()->id,
            'cuisine_id' => \App\Models\Cuisine::inRandomOrder()->first()->id,
            'type_id' => \App\Models\TypeMenu::inRandomOrder()->first()->id,
        ];
    }

}
