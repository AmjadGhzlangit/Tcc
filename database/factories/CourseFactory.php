<?php
namespace Database\Factories;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{

    public function definition()
    {
        return [
            'course_name' => $this->faker->word,
            'teacher_id' => Teacher::inRandomOrder()->first()->id,
            'year' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'), // Generate a valid date string
            'department' => $this->faker->randomElement(['Software Engineering', 'Network Engineering', 'Computer Engineering']),
            'semester' => $this->faker->randomElement(['Semester One', 'Semester Two']),
        ];
    }
}
