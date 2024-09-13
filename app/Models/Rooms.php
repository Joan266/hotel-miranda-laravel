<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Rooms extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'room_type',
        'bed_type',
        'floor_room',
        'facilities',
        'rate',
        'status',
    ];

  
    public function bookings()
    {
        return $this->hasMany(Bookings::class);
    }

   
    public function contact()
    {
        return $this->hasMany(Contact::class);
    }

    /**
     * Add validation logic for room data.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validate($data)
    {
        return Validator::make($data, [
            'room_type' => 'required|string|max:255', 
            'bed_type' => 'required|string|max:255',
            'floor_room' => 'required|string|max:255', 
            'facilities' => 'required|array', 
            'facilities.*' => 'string|max:255',
            'rate' => 'required|numeric|min:0',
            'status' => 'required|in:available,booked,maintenance', 
        ]);
    }
}
