<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Offers extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'discount_percentage',
        'valid_until',
    ];

    /**
     * Relationship with Room.
     */
    public function room()
    {
        return $this->belongsTo(Rooms::class, 'room_id');
    }

    /**
     * Check if the offer is still valid.
     */
    public function isValid()
    {
        return Carbon::now()->lt(Carbon::parse($this->valid_until));
    }
}
