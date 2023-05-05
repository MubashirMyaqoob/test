<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Crud;
use faker\Factory as faker;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = faker::create();
        for($i=1; $i <= 100; $i++) { 
            $users = new Crud;
        $users->email = $faker->email;
        $users->password = $faker->password;
        $users->image = $faker->image;
        $users->save();
        }
    }
}
