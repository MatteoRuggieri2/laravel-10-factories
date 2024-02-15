<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Faker | Fake-Car
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\FakeCar($faker));

        // Vehicle
        $vehicle = $faker->vehicleArray();

        return [
            'brand' => $vehicle['brand'],
            'name' => $vehicle['model'],
            'description' => $faker->text(500),
            'price' => rand(8000, 999999),
        ];
    }
}
