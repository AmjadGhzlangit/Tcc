<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statusOptions = ['ناجح', 'راسب'];
        $departmentOptions = ['هندسة برمجيات', 'هندسة شبكات', 'هندسة حواسيب'];
        $year=['سنة اولى','سنة ثانية'];
        return [
            'student_number' => $this->faker->unique()->randomNumber(),
            'student_email' => $this->faker->unique()->safeEmail,
            'user_id' =>  User::inRandomOrder()->first()->id,
            'department' => $this->faker->randomElement($departmentOptions),
            'status' => $this->faker->randomElement($statusOptions),
            'year' => $this->faker->randomElement($year),
            'semester' => $this->faker->numberBetween(1, 2),
        ];
    }
}
