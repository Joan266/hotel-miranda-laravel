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
    public function homepage()
    {
        $roomTypes = RoomType::all();  
        return view('pages.home', compact('roomTypes'));
    }
    public function checkAvailability(Request $request, $id)
    {
        $request->validate([
            'check_in' => 'required|date|after:today',
            'check_out' => 'required|date|after:check_in',
        ]);

        $roomType = RoomType::with('rooms.bookings')->findOrFail($id);

        $checkIn = $request->input('check_in');
        $checkOut = $request->input('check_out');

        $availableRooms = $roomType->rooms()->whereDoesntHave('bookings', function ($query) use ($checkIn, $checkOut) {
            $query->where(function ($query) use ($checkIn, $checkOut) {
                $query->whereBetween('check_in', [$checkIn, $checkOut])
                      ->orWhereBetween('check_out', [$checkIn, $checkOut])
                      ->orWhere(function ($query) use ($checkIn, $checkOut) {
                          $query->where('check_in', '<=', $checkIn)
                                ->where('check_out', '>=', $checkOut);
                      });
            });
        })->get();

        if ($availableRooms->isNotEmpty()) {
            return response()->json([
                'available' => true,
                'rooms' => $availableRooms,
            ]);
        } else {
            return response()->json([
                'available' => false,
                'message' => 'No rooms available for the selected dates.',
            ]);
        }
    }
}
