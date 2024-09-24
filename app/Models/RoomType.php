<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class RoomType extends Model
{
    use HasFactory;

    protected $table = 'room_types';

    protected $fillable = [
        'name',
        'price_per_night',
        'bed_type',
        'image',
        'sqm',
        'adults_capacity',
        'children_capacity',
    ];

    public function rooms()
    {
        return $this->hasMany(Rooms::class);
    }
    
    public static function validate(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'price_per_night' => 'required|numeric|min:0',
            'bed_type' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'sqm' => 'required|integer|min:1',
            'adults_capacity' => 'required|integer|min:0',
            'children_capacity' => 'required|integer|min:0',
        ]);
    }
}
