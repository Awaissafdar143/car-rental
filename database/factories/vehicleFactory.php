<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vehicle>
 */
class vehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "car_name"=>fake()->name(),
            "car_review"=>fake()->numberBetween(2,5),
            "car_type"=>fake()->numberBetween(1,7),
            "car_image"=>fake()->numberBetween(1,12),
            "car_passenger"=>fake()->numberBetween(3,52),
            "car_gate"=>fake()->numberBetween(1,5),
            "car_rent"=>fake()->numberBetween(200,1500),
            "shortdescription"=>fake()->sentence(30),
            "car_luggage"=>fake()->numberBetween(20,300),
            "car_fuel_type"=>fake()->word(),
            "car_engine"=>fake()->numberBetween(1000,7000),
            "car_model_year"=>fake()->numberBetween(2000,2024),
            "car_exterior_color"=>fake()->colorName(),
            "car_interior_color"=>fake()->colorName(),
        ];
    }
}
