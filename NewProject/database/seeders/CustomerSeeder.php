<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customers;
use faker\Factory as faker;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        for ($i = 1 ; $i <= 100; $i ++) {
        $customer = new Customers;
        $customer->email = $faker->email;
        $customer->password = $faker->password;
        $customer->save();
        }
        
    }
}
