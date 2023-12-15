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
            'courseable_id' => $this->faker->numberBetween(1, 100),
            'courseable_type' =>Teacher::class,
            'year' => $this->faker->numberBetween(2022, 2023),
            'semester' => $this->faker->randomElement(['Spring', 'Summer', 'Fall']),
        ];
    }
}
