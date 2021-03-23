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
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                <tr>
                    <td>{{ $room->room_no }}</td>
                    <td>{{ $room->price }}</td>
                    <td>
                        <a href="/edit/{{$room->id}}">Edit</a>
                    </td>
                    <td>
                        <form action="" onsubmit="return confirm('Are you sure?')" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-block" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>
    </div>

    @endsection