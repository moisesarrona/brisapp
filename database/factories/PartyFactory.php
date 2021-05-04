<?php

namespace Database\Factories;

use App\Models\Party;
use App\Models\Customer;
use App\Models\Package;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Party::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now();
        return [
            'customer_id' => Customer::factory(),
            'package_id' => Package::factory(),
            'date' => $this->faker->dateTimeBetween($startDate = '-30 days', $endDate = '+30 days'),
            'kid' => $this->faker->numerify('#'),
            'total' => 0,
            //'status' => 'date' < $now->toDateTimeString('Y-m-d H:i:s') ? true : false,
            'status' => false
        ];
    }
}
