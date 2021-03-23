@extends('layout')
@section('content')

<div class="d-flex justify-content-end mt-2 mb-2">
    <a href="{{route('room-create')}}" class="btn btn-success">Add Room</a>
</div>
<div class="card card-default">
    <div class="card-header"> Posts</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Room</th>
                <th>Price</th>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                <tr>
                    <td>{{ $room->room_no }}</td>
                    <td>{{ $room->price }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    @endsection