<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Listing;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 *
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'pictures' => json_encode(['https://source.unsplash.com/random/200x200"?kitchen','https://source.unsplash.com/random/200x200"?livingroom','https://source.unsplash.com/random/200x200"?house']),
            'price' => $this->faker->numberBetween(150000,7500000),
        ];
    }
}
