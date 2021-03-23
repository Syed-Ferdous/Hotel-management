<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Customer;
use App\Models\Room;
use Session;
use Crypt;
use Illuminate\Pagination\Paginator;

class customerController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function roomBook()
    {
        $rooms = Room::all()->where('status', '=', 0);
        return view('add')->with('rooms', $rooms);
    }

    public function list()
    {
        $data = Client::Paginate(5);
        return view('list', ['data'=>$data]);
    }
    public function add(Request $req)
    {
        $validatedData = $req->validate([
                'name' => 'required|min:3',
                'address' => 'required',
                'phone' => 'required',
                'room_no' => 'required'
            ]);
        $c = Client::create($validatedData);

        $room = $c->room_no;
            
        $UpdateDetails = Room::where('room_no', '=', $room)->first();
        $UpdateDetails->status = 1;
        $UpdateDetails->save();

        return redirect(route('availableRoom'));
    }
    public function edit($id)
    {
        $data = Client::find($id);
        return view('edit', ['data'=> $data]);
    }

    public function update(Request $req)
    {
        $client = Client::find($req->input('id'));
        $client->name = $req->input('name');
        $client->email = $req->input('email');
        $client->mobile = $req->input('mobile');
        $client->address = $req->input('address');
        $client->room = $req->input('room');
        $client->checked_in = $req->input('checked_in');
        $client->checked_out = $req->input('checked_out');
        $client->save();
        return redirect('list');
    }

    public function delete(Client $id)
    {
        $room = $id->room_no;
            
        $UpdateDetails = Room::where('room_no', '=', $room)->first();
        $UpdateDetails->status = 0;
        $UpdateDetails->save();

      
        //  client::find($id)->delete();
        $id->delete();

        return redirect('list');
    }
}