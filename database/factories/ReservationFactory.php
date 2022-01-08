<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'check_in' => $this->faker->dateTimeBetween('-30 days', '-1 day'),
            'check_out' => $this->faker->dateTimeBetween('+1 day', '30 days'),
            'price' => $this->faker->numberBetween(100, 300),
        ];
    }
}
