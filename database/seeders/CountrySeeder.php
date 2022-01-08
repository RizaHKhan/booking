<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\City;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::factory()->count(10)->create()->each(function ($country) {
            $country->cities()->saveMany(City::factory()->count(mt_rand(3, 10))->make())->each(function ($city) {
                $city->hotels()->saveMany(Hotel::factory()->count(mt_rand(3, 10))->make())->each(function ($hotel) {
                    $hotel->rooms()->saveMany(Room::factory()->count(mt_rand(3, 10))->make());
                });
            });
        });
    }
}
