<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country_id'    => rand(1, 100),
            'state'         => $this->faker->state(),
            'city'          => $this->faker->city(),
            'street'        => $this->faker->streetName(),
            'postal_code'   => $this->faker->postcode(),
            'address'       => $this->faker->address(),
        ];
    }
}
