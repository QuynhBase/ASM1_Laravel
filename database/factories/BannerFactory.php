<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
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

            'title' =>fake()->name(),
            'image_path' => '',
            'description' => fake()->text(100),
            'start_date' =>fake()->date(),
            'end_date' => fake()-> date()
        ];
    }
}
