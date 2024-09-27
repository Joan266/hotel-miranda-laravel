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
            'date_range' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
            return response()->json(['error' => $validator->errors()->first()], 422);
        }
    
        $roomId = $request->input('room_type_id');
        $dateRange = explode(' to ', $request->input('date_range'));
    
        if (count($dateRange) !== 2) {
            return redirect()->back()->with('error', 'Invalid date range format.');
        }
    
        $checkIn = $dateRange[0];
        $checkOut = $dateRange[1];
    
        if (Bookings::hasConflictingBooking($roomId, $checkIn, $checkOut)) {
            return redirect()->back()->with('error', 'The selected dates are not available for this room.');
        }
    
        $booking = Bookings::create([
            'room_id' => $roomId,
            'order_date' => now(),
            'check_in' => $checkIn,
            'check_out' => $checkOut,
        ]);
    
        
         return redirect()->route('home')->with('success', 'Booking created successfully');
    }
    
    
    public function checkAvailability($room_id)
    {
        $bookings = Bookings::where('room_id', $room_id)->get();  
    
        if ($bookings->isEmpty()) {
            return response()->json(['unavailable_dates' => []]);
        }
    
        $unavailableDates = [];
    
        foreach ($bookings as $booking) {
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
