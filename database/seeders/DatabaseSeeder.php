<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\RoomType;
use App\Models\Rooms;
use App\Models\Bookings;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        User::truncate();
        RoomType::truncate();
        Rooms::truncate();
        Bookings::truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call(UserSeeder::class);
        $this->call(RoomTypeSeeder::class);
        $this->call(RoomsSeeder::class);
        $this->call(BookingsSeeder::class);
    }
}
