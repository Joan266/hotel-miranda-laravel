<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    
}
