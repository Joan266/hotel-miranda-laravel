<?php

namespace App\Http\Controllers;

use App\Models\RoomType; 
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function availableRooms(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date_range' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        $dateRange = explode('to', $request->input('date_range')); 
        
        if (count($dateRange) !== 2) {
            return redirect()->back()->with('error', 'Invalid date range format. Please use --start date to end date--.');
        }    

        $checkIn = $dateRange[0];
        $checkOut = $dateRange[1];

        $rooms = Rooms::whereDoesntHave('bookings', function($query) use ($checkIn, $checkOut) {
            $query->where(function($q) use ($checkIn, $checkOut) {
                $q->whereBetween('check_in', [$checkIn, $checkOut])
                ->orWhereBetween('check_out', [$checkIn, $checkOut])
                ->orWhere(function($query) use ($checkIn, $checkOut) {
                    $query->where('check_in', '<=', $checkIn)
                            ->where('check_out', '>=', $checkOut);
                });
            });
        })->with('roomType')->get(); 

        if ($rooms->isEmpty()) {
            return redirect()->back()->with('error', 'No available rooms for the selected dates.');
        }

        return view('pages.rooms', compact('rooms'));
    }
 
}
