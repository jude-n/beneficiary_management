<?php

namespace Database\Factories;

use App\Models\Beneficiary;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Beneficiary>
 */
class BeneficiaryFactory extends Factory
{
    protected $model = Beneficiary::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'preferred_name' => $this->faker->firstName(),
            'status' => $this->faker->randomElement(['primary', 'contingent']),
            'email' => $this->faker->unique()->safeEmail(),
            'relationship' => $this->faker->randomElement(['spouse', 'child', 'parent', 'sibling', 'friend']),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'registration_date' => $this->faker->dateTimeBetween('-5 years', 'now'),
        ];
    }
}
