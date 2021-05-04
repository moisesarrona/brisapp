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
        Salary::factory(8)->create();
        Employee::factory(8)->create();
        Provider::factory(6)->create();
        Product::factory(24)->create();
        Customer::factory(30)->create();
        Package::factory(5)->create();
        Party::factory(20)->create();
    }
}
