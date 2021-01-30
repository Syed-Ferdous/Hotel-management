@extends('layout')
 

@section('content')
<br>
<br>
<h1 style="text-align: center; color: #000;"><b>Add Information</b></h1>
  <br>
<div style="margin-left: 13.5rem;" class="col-sm-6">
    <br>
    <form action="add" method="post">
        @csrf

        <div class="form-group">
            <label>Customer Name</label>
            <input type="text" class="form-control"  name= "name" value='{{old("name")}}' placeholder="Enter name">
            @error('name')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control"  name= "email" value='{{old("email")}}' placeholder="Enter email">
              @error('email')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror
         </div>
         <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control"  name= "mobile" value='{{old("mobile")}}' placeholder="Enter mobile no">
            @error('mobile')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror         
         </div>
         <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control"  name= "address" value='{{old("address")}}' placeholder="Enter address">
            @error('address')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror         
         </div>
           <div class="form-group">
            <label>Room No</label>
            <input type="text" class="form-control"  name= "room" value='{{old("room")}}' placeholder="Enter room">
            @error('room')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror         
         </div>
         <div class="form-group">
            <label>Checked In Date</label>
            <input type="text" class="form-control"  name= "checked_in" value='{{old("checked_in")}}' placeholder="Checked In Date">
            @error('checked_in')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror         
         </div>
         <div class="form-group">
            <label>Cecked Out Date</label>
            <input type="text" class="form-control"  name= "checked_out" value='{{old("checked_out")}}' placeholder="Enter Checked out date">
            @error('checked_out')
            <div style="margin-top:5px; padding:0.50rem 1.25rem" class="alert alert-danger">{{ $message }}</div>   
            @enderror         
         </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<br>
<br>
<br>
<br>


    
@endsection