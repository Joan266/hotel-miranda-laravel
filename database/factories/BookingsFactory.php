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
        $room = Rooms::inRandomOrder()->first();
        $checkInDate = $this->faker->dateTimeBetween('+1 days', '+1 month');

        do {
            $checkOutDate = (clone $checkInDate)->modify('+' . random_int(1, 7) . ' days');
        } while (Bookings::hasConflictingBooking($room->id, $checkInDate, $checkOutDate));

        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'room_id' => $room->id,
            'order_date' => $this->faker->dateTimeBetween('-1 month', $checkInDate), 
            'check_in' => $checkInDate,
            'check_out' => $checkOutDate,
        ];
    }

    public function validate(array $data): void
    {
        Bookings::validate($data)->validate();
    }
}
