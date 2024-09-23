<?php

namespace Database\Seeders;

use App\Models\Rooms;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    public function run()
    {
        Rooms::factory()->count(14)->create();
    }
}
