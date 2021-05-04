<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'code' => $this->faker->ean8(),
            'price' => $this->faker->numberBetween($min = 100, $max = 800),
            'amount' => $this->faker->numberBetween($min = 0, $max = 20),
            'description' => $this->faker->realText($maxNbChars = 50),
            'provider_id' => Provider::factory(),
            'status' => true,
        ];
    }
}
