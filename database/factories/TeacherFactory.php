<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Designation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_number' => $this->faker->unique()->numerify('100####'),
            'user_id' => User::factory(),
            'department_id' => Department::inRandomOrder()->first()->id,
            'designation_id' => Designation::inRandomOrder()->first()->id,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->date('Y-m-d', now()->subYears(22)), // 22+ years old
            'national_id' => $this->faker->optional()->numerify('##########'),
            'birth_certificate' => $this->faker->optional()->numerify('##########'),
            'blood_group' => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-', 'Unknown']),
            'father_name' => $this->faker->name('male'),
            'mother_name' => $this->faker->name('female'),
            'country' => $this->faker->country,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'postal_code' => $this->faker->postcode,
            'joining_date' => $this->faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
        ];
    }
}
