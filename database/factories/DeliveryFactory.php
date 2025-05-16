<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pickup_address' => $this->faker->address(),
            'pickup_name' => $this->faker->name(),
            'pickup_contact_no' => $this->faker->phoneNumber(),
            'pickup_email' => $this->faker->safeEmail(),
            'delivery_address' => $this->faker->address(),
            'delivery_name' => $this->faker->name(),
            'delivery_contact_no' => $this->faker->phoneNumber(),
            'delivery_email' => $this->faker->safeEmail(),
            'type_of_good' => 1, // Default to Document
            'transport_mode' => $this->faker->numberBetween(1, 3), // Random transport mode
            'priority' => $this->faker->numberBetween(1, 3), // Random priority
            'pickup_time' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'shipment_ready_time' => $this->faker->dateTimeBetween('now', '+1 week'),
        ];
    }
}
