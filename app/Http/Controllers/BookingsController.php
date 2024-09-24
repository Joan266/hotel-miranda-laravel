<?php
namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingsController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'date_range' => 'required|string', // Assuming this will be a date range string
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $roomId = $request->input('room_type_id'); // Use the correct input name here
        $dateRange = explode(' to ', $request->input('date_range')); // Assuming format is "YYYY-MM-DD to YYYY-MM-DD"

        if (count($dateRange) !== 2) {
            return redirect()->back()->with('error', 'Invalid date range format.')->withInput();
        }

        $checkIn = $dateRange[0];
        $checkOut = $dateRange[1];

        if (Bookings::hasConflictingBooking($roomId, $checkIn, $checkOut)) {
            return redirect()->back()->with('error', 'The selected dates are not available for this room.')->withInput();
        }

        $booking = Bookings::create([
            'room_id' => $roomId,
            'order_date' => now(),
            'check_in' => $checkIn,
            'check_out' => $checkOut,
        ]);

        return redirect()->route('booking.success')->with('success', 'Booking created successfully!');
    }
}
