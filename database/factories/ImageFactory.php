<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {
        return [
            'room_id' => Room::factory(), 
            'url' => $this->faker->imageUrl(640, 480, 'hotel', true), 
        ];
    }
}
