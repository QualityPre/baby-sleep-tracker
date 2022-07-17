<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Day>
 */
class DayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date('Y-m-d'),
            'time' => $this->faker->time('H:i'),
            'bottle' => $this->faker->numberBetween(1, 5),
            'breast' => '15L/20R',
            'urine' => $this->faker->boolean(50),
            'stool' => $this->faker->boolean(50),
            'description' => $this->faker->paragraph(1),
        ];
    }
}
