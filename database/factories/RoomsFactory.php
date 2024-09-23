<?php

namespace Database\Factories;

use App\Models\Rooms;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomsFactory extends Factory
{
    protected $model = Rooms::class;

    public function definition()
    {
        $roomNumber = $this->faker->unique()->numberBetween(100, 999);
        
        return [
            'room_type_id' => RoomType::inRandomOrder()->first()->id,
            'room_number' => $roomNumber,
        ];
    }

    public function validate(array $data): void
    {
        Rooms::validate($data)->validate();
    }
}
