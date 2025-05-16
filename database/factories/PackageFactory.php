<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'package_description' => $this->faker->sentence(),
            'length' => $this->faker->randomFloat(2, 1, 100),
            'height' => $this->faker->randomFloat(2, 1, 100),
            'width' => $this->faker->randomFloat(2, 1, 100),
            'weight' => $this->faker->randomFloat(2, 0.1, 50),
            'delivery_id' => Delivery::factory(), // Create a related Delivery and use its ID
        ];
    }
}
