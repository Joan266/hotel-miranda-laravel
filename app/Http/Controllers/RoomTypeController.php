<?php

namespace App\Http\Controllers;

use App\Models\RoomType; 
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function index()
    {
        $roomTypes = RoomType::all();  
        return view('pages.rooms', compact('roomTypes'));
    }

}
