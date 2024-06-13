<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressSiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address_id'    => rand(1, 3),
            'site_id'       => rand(1, 3),
            'start_at'       => date('Y-m-d'),
            'end_at'        => null
        ];
    }
}
