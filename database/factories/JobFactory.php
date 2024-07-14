<?php

namespace Database\Factories;

use App\Models\Employer;
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
    public function definition() : array
    {
        return [
            'title' => fake()->jobTitle(),
            'location' => fake()->city(),
            'salary' => '$' . fake()->numberBetween(1000, 10000) . ' USD',
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Contract', 'Internship', 'Freelance']),
            'url' => fake()->url(),
            'featured' => fake()->boolean(),
            'employer_id' => Employer::factory(),
        ];
    }
}
