<?php

namespace Database\Seeders;

use App\Models\Rooms;
use App\Models\Bookings;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    public function run()
    {
        Rooms::factory()->count(8)->create()->each(function ($room) {
            Bookings::factory()->count(3)->forRoom($room->id)->create();
        });
    }
}
