<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_post' => $this->faker->name,
            'image'=> $this->faker->imageUrl(),
            'category_id' => $this->faker->numberBetween(1, 4)
        ];
    }
}
