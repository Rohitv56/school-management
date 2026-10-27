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
        return [
            'id_number' => $this->faker->unique()->numberBetween(100000, 999999),
            'user_id' => User::factory(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->date(),
            'national_id' => $this->faker->optional()->numerify('##########'),
            'birth_certificate' => $this->faker->optional()->numerify('##########'),
            'blood_group' => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-', 'Unknown']),
            'father_name' => $this->faker->name('male'),
            'mother_name' => $this->faker->name('female'),
            'guardian_name' => $this->faker->name,
            'guardian_phone' => $this->faker->phoneNumber,
            'guardian_email' => $this->faker->safeEmail,
            'guardian_relationship' => $this->faker->randomElement(['Father', 'Mother', 'Uncle', 'Aunt', 'Guardian']),
            'country' => $this->faker->country,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'postal_code' => $this->faker->postcode,
            'temp_country' => $this->faker->country,
            'temp_state' => $this->faker->state,
            'temp_city' => $this->faker->city,
            'temp_address' => $this->faker->address,
            'temp_postal_code' => $this->faker->postcode,
            'prev_school' => $this->faker->company . ' School',
            'last_attended_class' => $this->faker->randomElement(['Class 5', 'Class 6', 'Class 7', 'Class 8']),
            'board_curriculum' => $this->faker->randomElement(['National', 'Cambridge', 'IB', 'Edexcel']),
            'reason_for_leaving' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['approved', 'pending', 'rejected']),
            // 'approved_by' => Teacher::factory(),
            'approved_at' => $this->faker->optional()->dateTime(),
        ];
    }
}
