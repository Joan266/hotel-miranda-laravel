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

    $relatedRooms = Rooms::where('id', '!=', $room->id)
                         ->where('roomType', $room->roomType)
                         ->take(4)
                         ->get();

    return view('rooms.roomDetails', compact('room', 'relatedRooms'));
}



   
}
