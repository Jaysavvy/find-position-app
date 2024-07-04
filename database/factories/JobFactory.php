<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$50,000 USD', '$90,000 USD', '150,000 USD', '250,000 USD',  '$500,000 USD']),
            'location' => 'remote',
            'schedule' => fake()->randomElement(['full-time', 'part-time', 'contract']),
            'url' => fake()->url,
            'featured' => false,
        ];
    }
}
