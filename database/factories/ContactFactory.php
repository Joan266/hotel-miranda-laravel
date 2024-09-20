<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\User;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), 
            'room_id' => Room::factory(), 
            'message' => $this->faker->paragraph(),
            'subject' => $this->faker->sentence(),
            'rating' => $this->faker->numberBetween(1, 5), 
        ];
    }
}
