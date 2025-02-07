<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = \App\Models\Job::class;
    public function definition(): array
    {
        return [
            'naziv_pozicije' => $this->faker->jobTitle(),
            'iskustvo' => $this->faker->randomElement(['Entry', 'Mid', 'Senior']),
            'kompanija' => $this->faker->company(),
            'lokacija' => $this->faker->randomElement([$this->faker->city(), 'Remote']),
            'opis_pozicije' => $this->faker->paragraph(),
            'link' => $this->faker->url(),
            'ime' => $this->faker->name(),
            'kontakt' => $this->faker->phoneNumber(),
            'vrsta_oglasa' => $this->faker->randomElement(['Full-time', 'Part-time', 'Freelance', null]),
            'tip_oglasa' => $this->faker->randomElement(['Premium', 'Standard', 'Običan'])
        ];
    }
}
