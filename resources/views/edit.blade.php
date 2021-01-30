@extends('layout')
 

@section('content')
<br>
<div class="col-sm-6">
    <h4>Edit Customer Info</h4>
    <form action="edit" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <input type="hidden" class="form-control"  name= "id" value="{{$data->id}}">
            <label>Customer Name</label>
            <input type="text" class="form-control"  name= "name" value="{{$data->name}}" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control"  name= "email" value="{{$data->email}}" placeholder="Enter email">
         </div>
         <div class="form-group">
            <label>Mobile</label>
            <input type="mobile" class="form-control"  name= "mobile" value="{{$data->mobile}}" placeholder="Enter Mobile No">
         </div>
         <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control"  name= "address" value="{{$data->address}}" placeholder="Enter address">
         </div>
          <div class="form-group">
            <label>Room No</label>
            <input type="text" class="form-control"  name= "room" value="{{$data->room}}"placeholder="Enter room">
        </div>
         <div class="form-group">
            <label>Checked In Date</label>
            <input type="text" class="form-control"  name= "checked_in" value="{{$data->checked_in}}" placeholder="Enter Checked In Date">
         </div>
         <div class="form-group">
            <label>Checked Out Date</label>
            <input type="text" class="form-control"  name= "checked_out" value="{{$data->checked_out}}" placeholder="Enter Checked Out Date">
         </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

    
@endsection