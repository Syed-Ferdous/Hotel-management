@extends('layout')

@section('content')
<br>
<h1 style="text-align: center; color: #000;"><b>Customer List</b></h1>
  <br>
<table border="5" class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Address</th>
        <th scope="col">Room</th>
        <th scope="col">Checked In Date</th>
        <th scope="col">Checked Out Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->mobile}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->room}}</td>
        <td>{{$item->checked_in}}</td>
        <td>{{$item->checked_out}}</td>
        <td>
          <a style="margin-left: 15px;" href="/edit/{{$item->id}}"><i class="far fa-edit" title="edit"></i></a>
          <a href="/delete/{{$item->id}}"><i class="far fa-trash-alt" title="delete"> </i></a>
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