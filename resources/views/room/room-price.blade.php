@extends('layout')

@section('content')
<br><br>
<div class="container-fluid d-flex justify-content-center">
    <div class="row mt-5">
        <div class="col-sm-4">
            <div class="card"> <img
                    src="https://media.istockphoto.com/photos/hotel-room-suite-with-view-picture-id627892060?k=6&m=627892060&s=612x612&w=0&h=lVIi3QTDsZ1UDnMAjuy8ob9Zm6sBPCZ84x_e_OUl7Wk="
                    class="card-img-top" width="100%">
                <div class="card-body pt-0 px-0">
                    <div class="d-flex flex-row justify-content-between mb-0 px-3"> <small
                            class="text-muted mt-1">PRICE</small>
                        <h6>&dollar;100&ast;</h6>
                    </div>
                    <hr class="mt-2 mx-3">

                    <small class="text-muted key pl-3">VIP ROOM</small>
                    <div class="mx-3 mt-3 mb-2">
                        <a href="/add" style="text-decoration: none;"><button type="button"
                                class="btn btn-danger btn-block"><small>Book
                                    Now!</small></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card"> <img
                    src="https://images.unsplash.com/photo-1576675784201-0e142b423952?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWwlMjByb29tfGVufDB8fDB8&ixlib=rb-1.2.1&w=1000&q=80"
                    class="card-img-top" width="100%">
                <div class="card-body pt-0 px-0">
                    <div class="d-flex flex-row justify-content-between mb-0 px-3"> <small
                            class="text-muted mt-1">PRICE</small>
                        <h6>&dollar;40&ast;</h6>
                    </div>
                    <hr class="mt-2 mx-3">

                    <small class="text-muted key pl-3">SINGLE BED</small>
                    <div class="mx-3 mt-3 mb-2">
                        <a href="/add" style="text-decoration: none;"><button type="button"
                                class="btn btn-danger btn-block"><small>Book
                                    Now!</small></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card"> <img
                    src="https://www.italianbark.com/wp-content/uploads/2018/01/hotel-room-design-trends-italianbark-interior-design-blog.jpg"
                    class="card-img-top" width="100%">
                <div class="card-body pt-0 px-0">
                    <div class="d-flex flex-row justify-content-between mb-0 px-3"> <small
                            class="text-muted mt-1">PRICE</small>
                        <h6>&dollar;60&ast;</h6>
                    </div>
                    <hr class="mt-2 mx-3">

                    <small class="text-muted key pl-3">DOUBLE BED</small>
                    <div class="mx-3 mt-3 mb-2">
                        <a href="/add" style="text-decoration: none;"><button type="button"
                                class="btn btn-danger btn-block"><small>Book
                                    Now!</small></button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection