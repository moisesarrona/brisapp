<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'business_n' => $this->faker->company(),
            'phone' => $this->faker->tollFreePhoneNumber(),
            'email' => $this->faker->email(),
            'rfc' => $this->faker->bs(),
            'status' => true,
        ];
    }
}
