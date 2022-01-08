<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x < 50; $x++) {
            DB::table('reservation_room')->insert([
                'reservation_id' => random_int(1, 20),
                'room_id'        => random_int(1, 20),
                'status'         => array_rand(['one', 'two', 'three'], 1),
                'created_at'     => now(),
                'updated_at'     => now()
            ]);
        }
    }
}
