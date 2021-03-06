<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'         => $this->faker->name(),
            'description'  => $this->faker->sentence(),
            'room_type_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
