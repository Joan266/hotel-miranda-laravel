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
    
    public function checkAvailability($id)
    {
        $room = Rooms::with('bookings')->findOrFail($id);

        $unavailableDates = [];

        foreach ($room->bookings as $booking) {
            $period = new \DatePeriod(
                new \DateTime($booking->check_in),
                new \DateInterval('P1D'),
                (new \DateTime($booking->check_out))->modify('+1 day')
            );

            foreach ($period as $date) {
                $unavailableDates[] = $date->format('Y-m-d');
            }
        }

        return response()->json(['unavailable_dates' => $unavailableDates]);
    }
}
