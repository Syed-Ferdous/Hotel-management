<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Session;
use Illuminate\Pagination\Paginator;


class CustomerController extends Controller
{
    public function index(){
        return view('home');
    }
    public function list(){
        $data = Customer::Paginate(5);
        return view('list', ['data'=>$data]);
    }
    public function add(Request $req){
        $req->validate([
            'name'=> 'required',
            'email'=>'required',
            'mobile'=>'required',
            'address'=> 'required'
        ]);
        $customer = new Customer;
        $customer->name = $req->input('name');
        $customer->email = $req->input('email');
        $customer->mobile = $req->input('mobile');
        $customer->address = $req->input('address');
        $customer->room = $req->input('room');
        $customer->checked_in = $req->input('checked_in');
        $customer->checked_out = $req->input('checked_out');
        $customer->save();
        return redirect('list');
    }
        public function edit($id){
        $data = Customer::find($id);
        return view('edit', ['data'=> $data]);
    }

    public function update(Request $req){
        $customer = Customer::find($req->input('id'));
        $customer->name = $req->input('name');
        $customer->email = $req->input('email');
        $customer->mobile = $req->input('mobile');
        $customer->address = $req->input('address');
        $customer->room = $req->input('room');
        $customer->checked_in = $req->input('checked_in');
        $customer->checked_out = $req->input('checked_out');
        $customer->save(); 
        return redirect('list');
    }

    public function delete($id){
        Customer::find($id)->delete();
        return redirect('list');
    }
        
}
