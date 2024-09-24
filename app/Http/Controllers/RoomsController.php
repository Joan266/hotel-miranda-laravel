<?php

namespace App\Http\Controllers;

use App\Models\RoomType; // Ensure you're using the correct model
use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function show($id)
    {
        $roomType = RoomType::with('rooms')->findOrFail($id);
        return view('pages.roomdetails', compact('roomType'));
    }
}