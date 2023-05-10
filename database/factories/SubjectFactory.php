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
        $subjectName = $this->faker->randomElement(['Mathematik', 'Englisch', 'Französisch', 'Deutsch', 'Naturwissenschaften']);
        $subjectId = null;
    
        switch ($subjectName) {
            case 'Mathematik':
                $subjectId = 1;
                break;
            case 'Englisch':
                $subjectId = 2;
                break;
            case 'Französisch':
                $subjectId = 5;
                break;
            case 'Deutsch':
                $subjectId = 3;
                break;
            case 'Naturwissenschaften':
                $subjectId = 4;
                break;
        }
    
        return [
            'subjectid' => $subjectId,
            'subject' => $subjectName,
            'date' => $this->faker->dateTimeThisMonth()->format('d.m.Y'),
            'teacher_id' => $this->faker->numberBetween(1, 50), 
            'price' => $this->faker->numberBetween(40, 300),
            'time' => $this->faker->time()
        ];
    }
    
}
