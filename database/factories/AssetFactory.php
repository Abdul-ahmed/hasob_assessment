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
            'type' => $this->faker->name(),
            'serial_number' => $this->faker->name(),
            'description' => $this->faker->name(),
            'fixed_or_Movable' => $this->faker->name(),
            'picture_path' => $this->faker->name(),
            'purchase_date' => $this->faker->name(),
            'start_use_date' => $this->faker->name(),
            'purchase_price' => $this->faker->name(),
            'warranty_expiry_date' => $this->faker->name(),
            'degradation_in_years' => $this->faker->name(),
            'current_value_in_naira' => $this->faker->name(),
            'location' => $this->faker->name()
        ];
    }
}
