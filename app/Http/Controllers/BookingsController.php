<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Bookings; // Assuming you have a Booking model
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'fullname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'room_type_id' => 'required|exists:room_types,id', // Ensure room type exists
        ]);

        // Get the booking dates from the request
        $checkIn = $request->input('check_in');
        $checkOut = $request->input('check_out');
        $roomTypeId = $request->input('room_type_id');

        // Check for available rooms in the specified room type
        $availableRoom = Room::where('room_type_id', $roomTypeId)
            ->whereDoesntHave('bookings', function ($query) use ($checkIn, $checkOut) {
                $query->where(function ($query) use ($checkIn, $checkOut) {
                    $query->whereBetween('check_in', [$checkIn, $checkOut])
                          ->orWhereBetween('check_out', [$checkIn, $checkOut])
                          ->orWhere(function ($query) use ($checkIn, $checkOut) {
                              $query->where('check_in', '<=', $checkIn)
                                    ->where('check_out', '>=', $checkOut);
                          });
                });
            })
            ->first();

        if ($availableRoom) {
            // Proceed to create a booking
            $booking = Booking::create([
                'room_id' => $availableRoom->id,
                'check_in' => $checkIn,
                'check_out' => $checkOut,
                'fullname' => $request->input('fullname'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
            ]);

            // Redirect or return a success message
            return redirect()->route('booking.success')->with('message', 'Booking successful!');
        } else {
            // Redirect back with an error message
            return redirect()->back()->withErrors('No rooms available for the selected dates.');
        }
    }
}
