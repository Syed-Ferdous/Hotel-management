@extends('layout')


@section('content')


<h2 style="text-align:center;">New Room Entry</h2>
<br>



<div class="card card-default">
    <div class="card-header p-3 font-bold">
        <!-- {{ isset($category) ? 'Edit Category' : 'Create Category'}} -->
        Create Room
    </div>
    <div class="card-body">


        <form action="{{ route('room-store')}}" method="POST">
            @csrf

            <!-- @if (isset($category))
            @method('PUT')
            @endif -->

            <div class="form-group mb-2 col-sm-6">
                <input type="text" name="room_no" class="form-control rounded" id="name"
                    placeholder="room no" value="{{ old('room-no') }}">
            </div>
            <div class="form-group mb-2 col-sm-6">
                <input type="text" name="price" class="form-control rounded" id="name"
                    placeholder="price" value="{{ old('price') }}">
            </div>
            <button type=" submit" class="btn btn-primary  mb-2 ml-3">
                <!-- {{ isset($category) ? 'Update' : 'Add Category' }} -->
                Add Room
            </button>
        </form>
    </div>
</div>

@endsection