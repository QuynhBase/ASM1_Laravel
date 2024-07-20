<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'image'=> '',
            'name' =>fake()->name(),
            'price' => 100000,
            'category_id' => rand(1,10),
            'description' =>fake()->text(100),
            'quantity'=> rand(100,200)
        ];
    }
}
