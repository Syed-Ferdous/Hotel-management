<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function roomPrice()
    {
        return view('room.room-price');
    }

    public function index()
    {
        return view('room.index')->with('rooms', Room::all());
    }
    public function edit()
    {
        return view('room.edit');
    }
    public function create()
    {
        return view('room.create');
    }
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'room_no' => 'required|unique:rooms',
        //     'price' => 'required',
        // ]);

        $request->validate(
            [
            'room_no'=> 'required:unique',
            'price'=>'required'
         ]
        );
        Room::create([
            'room_no' => $request->room_no,
            'price' => $request->price
        ]);
        // $request->session()->flash('status', 'New Room added successfully!');
        return redirect(route('room-list'));
    }

    public function availableRoom()
    {
        return view(
            'room.available',
            ['rooms'=> Room::all()->where('status', '0')
        ]
        );
    }
}