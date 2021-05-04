<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Package::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$min = 0, $max = NULL
        return [
            'name' => $this->faker->name(),
            'discount' => $this->faker->numberBetween($min = 50, $max = 150),
            'invitation' => $this->faker->numberBetween($min = 1, $max = 50),
            'key' => $this->faker->numberBetween($min = 50, $max = 200),
            'ticket' => $this->faker->numberBetween($min = 50, $max = 200),
            'price_lm' => $this->faker->numberBetween($min = 100, $max = 150),
            'price_jv' => $this->faker->numberBetween($min = 100, $max = 150),
            'price_sd' => $this->faker->numberBetween($min = 150, $max = 200),
            'price_e' => $this->faker->numberBetween($min = 50, $max = 150),
        ];
    }
}
