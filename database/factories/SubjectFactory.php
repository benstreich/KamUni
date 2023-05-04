<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subjectid' => $this->faker->numberBetween(1, 5),
            'subject' => $this->faker->randomElement(['Mathematik', 'Englisch', 'Französisch', 'Deutsch', 'Naturwissenschaften']),
            'date' => $this->faker->dateTimeThisMonth()->format('d.m.Y'),
            'teacher_id' => $this->faker->numberBetween(1, 50), 
            'price' => $this->faker->numberBetween(40, 300),
            'time' => $this->faker->time()
           
        ];
    }
}
