<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Bookings extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'room_id',
        'check_in',
        'check_out',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    
    /**
     * Add validation logic for booking data.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validate($data)
    {
        return Validator::make($data, [
            'user_id' => 'required|exists:users,id', 
            'room_id' => 'required|exists:rooms,id', 
            'check_in' => 'required|date|after:today', 
            'check_out' => 'required|date|after:check_in',
            'status' => 'required|in:pending,confirmed,cancelled', 
        ]);
    }
}
