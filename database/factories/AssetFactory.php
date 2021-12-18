<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->type,
            'serial_number' => $this->faker->serial_number,
            'description' => $this->faker->description,
            'fixed_or_Movable' => $this->faker->fixed_or_Movable,
            'picture_path' => $this->faker->picture_path,
            'purchase_date' => $this->faker->purchase_date,
            'start_use_date' => $this->faker->start_use_date,
            'purchase_price' => $this->faker->purchase_price,
            'warranty_expiry_date' => $this->faker->warranty_expiry_date,
            'degradation_in_years' => $this->faker->degradation_in_years,
            'current_value_in_naira' => $this->faker->current_value_in_naira,
            'location' => $this->faker->location
        ];
    }
}
