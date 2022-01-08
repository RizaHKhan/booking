<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'size'   => array_rand(['One', 'Two', 'Three'], 1),
            'amount' => $this->faker->numberBetween(100, 500),
            'price'  => $this->faker->numberBetween(100, 500),
        ];
    }
}
