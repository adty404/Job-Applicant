<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'position' => $this->faker->jobTitle,
            'location' => $this->faker->city,
            'thumbnail' => "https://picsum.photos/id/{$this->faker->numberBetween(1, 100)}/200/200",
            'description' => $this->faker->text,
        ];
    }
}
