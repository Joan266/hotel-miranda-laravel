<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'booking_id',
        'review_date',
        'comment',
        'rating',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rooms()
    {
        return $this->belongsTo(Rooms::class);
    }

    /**
     * Add validation logic for contact data.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validate($data)
    {
        return Validator::make($data, [
            'user_id' => 'required|exists:users,id', 
            'booking_id' => 'required|exists:bookings,id', 
            'review_date' => 'required|date', 
            'comment' => 'nullable|string|max:1000', 
            'rating' => 'required|integer|min:1|max:5', 
        ]);
    }
}
