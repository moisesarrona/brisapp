<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Salary;
use App\Models\Employee;
use App\Models\Provider;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Package;
use App\Models\Party;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Seeds
        $this->call([
            UserSeed::class,
        ]);

        //Factory
        Salary::factory(6)->create();
        Employee::factory(12)->create();
        Provider::factory(8)->create();
        Product::factory(22)->create();
        Customer::factory(28)->create();
        Package::factory(13)->create();
        Party::factory(58)->create();
    }
}
