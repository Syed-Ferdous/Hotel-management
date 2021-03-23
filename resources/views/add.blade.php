@extends('layout')

@section('content')
<br>
<br>
<h1 style="text-align: center; color: #000;"><b>Book Room Information</b></h1>
<br>
<div style="margin-left: 13.5rem;" class="col-sm-6">
    <br>
    <form action="add" method="post">
        @csrf

        <div class="form-group">
            <label>Customer Name</label>
            <input type="text" class="form-control" name="name" value='{{old("name")}}'
                placeholder="Enter name">
            @error('name')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">
                {{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" name="phone" value='{{old("phone")}}'
                placeholder="Enter mobile no">
            @error('mobile')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">
                {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" value='{{old("address")}}'
                placeholder="Enter address">
            @error('address')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">
                {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Select Your Room</label>
            <select class="form-control" name="room_no">
                <option>Enter Rooms</option>

                @foreach ($rooms as $room)

                <option value="{{ $room->room_no }}">

                    {{ $room->room_no }}

                </option>

                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<br>
<br>
<br>
<br>



@endsection