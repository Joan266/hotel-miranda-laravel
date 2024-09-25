<?php

namespace Database\Factories;

use App\Models\Bookings;
use App\Models\User;
use App\Models\Rooms;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingsFactory extends Factory
{
    protected $model = Bookings::class;

    public function definition(): array
    {
        $checkInDate = $this->faker->dateTimeBetween('+1 days', '+1 month');
        $checkOutDate = (clone $checkInDate)->modify('+' . random_int(1, 7) . ' days');

        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'room_id' => null,
            'order_date' => $this->faker->dateTimeBetween('-1 month', $checkInDate), 
            'check_in' => $checkInDate,
            'check_out' => $checkOutDate,
        ];
    }

    public function forRoom($roomId): self
    {
        return $this->state(function (array $attributes) use ($roomId) {
            return [
                'room_id' => $roomId,
            ];
        });
    }
}
