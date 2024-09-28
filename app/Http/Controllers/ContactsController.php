<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Illuminate\Support\Facades\Validator;

class ContactsController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'phone' => 'required',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'stars' => 'required|integer|min:1|max:5', 
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        Contacts::create([
            'fullname' => $request->input('fullname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            'stars' => $request->input('stars'), 
        ]);

        return redirect()->route('home')->with('success', 'Your message has been sent successfully!');
    }
}
