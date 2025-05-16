<?php

namespace Database\Seeders;

use App\Models\Delivery;
use App\Models\Package;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@dms.com',
            'password' => 'admin',
        ]);

        Delivery::factory(25)->create();

        Delivery::all()->each(function ($delivery) {
            Package::factory(3)->create([
                'delivery_id' => $delivery->id,
            ]);
        });




    }
}
