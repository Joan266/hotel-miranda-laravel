<?php

namespace Database\Seeders;

use App\Models\Rooms;
use App\Models\Bookings;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    public function run()
    {
        Rooms::factory()->count(14)->create()->each(function ($room) {
            Bookings::factory()->count(2)->forRoom($room->id)->create();
        });
    }
}
