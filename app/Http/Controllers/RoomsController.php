namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Bookings;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Rooms::all();
        return view('rooms.rooms', ["rooms" => $rooms]);
    }

    public function home()
    {
        $rooms = Rooms::all();
        return view('home', ["rooms" => $rooms]);
    }

    public function show($id)
    {
        $room = Rooms::with(['roomType', 'amenities', 'images'])->findOrFail($id);
        return view('rooms.roomDetails', compact('room'));
    }

    public function storeBooking(Request $request)
    {
        $bookings = Bookings::where('room_id', $request->room_id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('checkIn', [$request->checkIn, $request->checkOut])
                    ->orWhereBetween('checkOut', [$request->checkIn, $request->checkOut])
                    ->orWhere(function ($query) use ($request) {
                        $query->where('checkIn', '<=', $request->checkIn)
                            ->where('checkOut', '>=', $request->checkOut);
                    });
            })
            ->exists();

        if ($bookings) {
            return redirect()->back()->with('error', 'The room is already booked for the selected dates.');
        }

        Bookings::create($request->all());

        return redirect()->route('rooms', $request->room_id)->with('success', 'Booking created successfully');
    }
    
    public function availability(Request $request)
    {
        $bookings = Bookings::whereBetween('checkIn', [$request->checkIn, $request->checkOut])
            ->orWhereBetween('checkOut', [$request->checkIn, $request->checkOut])
            ->get();

        $roomIds = $bookings->pluck('room_id')->unique();
        $rooms = Rooms::whereNotIn('id', $roomIds)->get();

        if ($rooms->isEmpty()) {
            return redirect()->back()->with('error', 'No rooms available for the selected dates.');
        }

        return view('rooms.roomsAvailable', ['rooms' => $rooms]);
    }

   
}
