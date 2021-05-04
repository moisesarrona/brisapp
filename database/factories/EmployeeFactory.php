<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastname(),
            'birthdate' => $this->faker->date(),
            'sex' => "",
            'phone' => $this->faker->tollFreePhoneNumber(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'nss' => $this->faker->ssn(),
            'curp' => $this->faker->ein(),
            'marital_s' => "",
            'salary_id' => Salary::factory(),
            'status' => true,
        ];
    }
}
