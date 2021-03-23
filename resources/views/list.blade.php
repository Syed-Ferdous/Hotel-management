@extends('layout')

@section('content')
@if(Session::get('status'))
<br>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('status')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<br>
<br>
<h1 style="text-align: center; color: #000;"><b>Customer List</b></h1>
<br>
<table border="5" class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Address</th>
            <th scope="col">Room</th>

            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>

            <td>{{$item->phone}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->room_no}}</td>

            <td>

                <a href="/delete/{{$item->id}}">Check Out</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<br>
<br>
<span>{{$data->links()}}</span>

@endsection