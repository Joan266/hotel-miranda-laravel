<?php

namespace App\Http\Controllers;

use App\Models\RoomType; 
use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Rooms::with('roomType')->get();  
        return view('pages.rooms', compact('rooms'));
    }
    public function show($id)
    {
        $roomTypes = RoomType::take(6)->get();  
        
        $room = Rooms::with('roomType')->findOrFail($id); 
        
        return view('pages.roomdetails', compact('room', 'roomTypes'));
    }

}
