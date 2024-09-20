<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Room::all()->each(function ($room) {
            Image::factory()->count(5)->create(['room_id' => $room->id]);
        });
    }
}
