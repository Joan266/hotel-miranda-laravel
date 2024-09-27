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
        'room_type_id', 
        'room_number',   
    ];

    /**
     * Define the relationship with RoomType.
     */
    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id'); 
    }

    public function offers()
    {
        return $this->hasOne(Offers::class, 'room_id');
    }

    public function bookings()
    {
        return $this->hasMany(Bookings::class, 'room_id'); 
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
            'room_type_id' => 'required|exists:room_types,id', 
            'room_number' => 'required|unique:rooms,room_number|string|max:255',
        ]);
    }
}
