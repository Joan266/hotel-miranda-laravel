<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(RoomTypeSeeder::class);
        $this->call(RoomsSeeder::class);
        $this->call(OffersSeeder::class);
    }
}
