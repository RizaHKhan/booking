<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create()->each(function ($user) {
            $user->reservations()->saveMany(Reservation::factory()->count(mt_rand(3, 10))->make());
        });
    }
}
