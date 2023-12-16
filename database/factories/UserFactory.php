<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'father_name' => $this->faker->firstName('male'), // Assuming a male father
            'mother_name' => $this->faker->firstName('female'), // Assuming a female mother
            'date_birth' => $this->faker->date,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), 
            'remember_token' => Str::random(10),
            'student_number' => $this->faker->unique()->numberBetween(100000, 999999),
            'student_email' => $this->faker->unique()->safeEmail,
            'department' => $this->faker->randomElement(['Software Engineering', 'Network Engineering', 'Computer Engineering']),
            'status' => $this->faker->randomElement(['Passed', 'Inactive']),
            'year' => $this->faker->randomElement(['First', 'Second', 'Third', 'Fourth']),
            'semester' => $this->faker->randomElement(['Spring', 'Summer', 'Fall']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
