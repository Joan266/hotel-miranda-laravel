<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition()
    {
        return [
            'room_type' => $this->faker->word(),
            'bed_type' => $this->faker->word(),
            'floor_room' => $this->faker->numberBetween(1, 10),
            'facilities' => json_encode([
                'WiFi' => true,
                'Air Conditioning' => true,
                'Breakfast' => false,
            ]),
            'rate' => $this->faker->randomFloat(2, 50, 500), 
            'status' => $this->faker->randomElement(['available', 'booked', 'maintenance']),
        ];
    }
}
