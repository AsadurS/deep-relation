<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Employee;
use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = Country::factory()->has(
            City::factory()->has(
                Shop::factory()->has(
                    Employee::factory()->count(rand(10, 15), 'employees')
                )
                    ->count(rand(2, 4), 'shops'))
                ->count(30)
        )->count(rand(2, 4), 'cities')
            ->count(10)
            ->create();


    }
}
