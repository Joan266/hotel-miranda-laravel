<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Contacts extends Model
{
    protected $fillable = [
        'user_id',
        'review_date',
        'comment',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function validate(array $data)
    {
        return Validator::make($data, [
            'user_id' => 'required|exists:users,id', 
            'review_date' => 'required|date', 
            'comment' => 'nullable|string|max:1000', 
            'rating' => 'required|integer|min:1|max:5', 
        ]);
    }
}
