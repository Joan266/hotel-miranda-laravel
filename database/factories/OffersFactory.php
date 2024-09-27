<?php

namespace Database\Factories;

use App\Models\Offers;
use App\Models\Rooms;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class OffersFactory extends Factory
{
    protected $model = Offers::class;

    public function definition(): array
    {
        return [
            'room_id' => Rooms::factory(), 
            'discount_percentage' => $this->faker->numberBetween(5, 50), 
            'valid_until' => Carbon::now()->addDays($this->faker->numberBetween(1, 30)), 
        ];
    }
}
