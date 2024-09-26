<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Bookings extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'order_date',
        'check_in',
        'check_out',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Rooms::class, 'room_id'); 
    }

    public static function validate($data)
    {
        return Validator::make($data, [
            'room_id' => 'required|exists:rooms,id', 
            'order_date' => 'required|date|before:check_in', 
            'check_in' => 'required|date|after:today', 
            'check_out' => 'required|date|after:check_in',
        ]);
    }

    public static function hasConflictingBooking($roomId, $checkIn, $checkOut)
    {
        return self::where('room_id', $roomId)
            ->where(function ($query) use ($checkIn, $checkOut) {
                $query->whereBetween('check_in', [$checkIn, $checkOut])
                      ->orWhereBetween('check_out', [$checkIn, $checkOut]);
            })
            ->exists();
    }
}
