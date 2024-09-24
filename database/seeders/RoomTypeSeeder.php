<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomType;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomTypes = [
            [
                'name' => 'Single Room',
                'price_per_night' => 75,
                'bed_type' => 'Single',
                'image' => 'img/Miranda_Explorer-Suite-Bedroom.webp',
                'sqm' => 25, 
                'adults_capacity' => 1,
                'children_capacity' => 0,
            ],
            [
                'name' => 'Double Room',
                'price_per_night' => 120,
                'bed_type' => 'Double',
                'image' => 'img/Miranda_Cotton-Tree-Suite.webp',
                'sqm' => 35,
                'adults_capacity' => 2,
                'children_capacity' => 1,
            ],
            [
                'name' => 'Deluxe Room',
                'price_per_night' => 200,
                'bed_type' => 'King',
                'image' => 'img/Miranda_Superior-King-Room.webp',
                'sqm' => 45,
                'adults_capacity' => 2,
                'children_capacity' => 2,
            ],
            [
                'name' => 'Suite',
                'price_per_night' => 350,
                'bed_type' => 'King',
                'image' => 'img/Miranda_Signature-Suite.webp',
                'sqm' => 60,
                'adults_capacity' => 2,
                'children_capacity' => 2,
            ],
            [
                'name' => 'Family Room',
                'price_per_night' => 180,
                'bed_type' => 'Queen',
                'image' => 'img/Miranda_Deluxe-Room.webp',
                'sqm' => 50,
                'adults_capacity' => 2,
                'children_capacity' => 2,
            ],
            [
                'name' => 'Penthouse',
                'price_per_night' => 500,
                'bed_type' => 'King',
                'image' => 'img/Miranda_Family-Room.webp',
                'sqm' => 100,
                'adults_capacity' => 4,
                'children_capacity' => 2,
            ],
        ];

        foreach ($roomTypes as $type) {
            RoomType::create($type);
        }
    }
}
