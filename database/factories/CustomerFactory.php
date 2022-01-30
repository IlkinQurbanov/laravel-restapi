<?php

namespace Database\Factories;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->FirstName,
            'last_name' => $this->faker->LastName,
            'email' => $this->faker->unique()->safeEmail,

        ];
    }
}
