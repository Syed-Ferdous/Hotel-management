 <!DOCTYPE html>
 <html lang="en">

 <head>
     <style type="text/css">
     body {
         margin: 0;
         padding: 0;
         height: 100vh;
         font-family: Arial, Helvetica, sans-serif;
     }

     .hero-image {

         background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/room.jpg");


         height: 100%;
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         position: relative;
     }

     .hero-image .hero-text {
         color: #fff;
         text-align: center;
     }

     .hero-image .hero-text h1 {
         color: #fff;
         font-size: 50px;
         font-weight: 500;
     }

     .hero-image .hero-text p {
         font-size: 30px;
         font-weight: 500;
         line-height: 10px;
     }

     .hero-image .hero-btn {
         text-decoration: none;
         color: #000;
         background: #fff;
         padding: 10px 30px;
         border-radius: 5px;
         margin-top: 10px;
         display: inline-block;
     }

     .hero-image .hero-btn:hover {
         background: #000;
         color: #fff;
     }
     </style>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     {{-- css and js bootstrap --}}
     <link rel="stylesheet"
         href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
         crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
         crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
         integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
         crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
         integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
         crossorigin="anonymous"></script>

     {{-- font-awesome cdn --}}
     <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

     <style>
     h1,
     h2,
     h3,
     h4 {
         color: rgba(0, 0, 0, 0.5);
     }
     </style>


     <title>Hotel Management</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="style.css">

 </head>

 <body>
     <header>
         <nav style="background-color: #000;" class="navbar navbar-expand-lg navbar-dark">
             <a class="navbar-brand" href="/"><img src="{{URL('images/logo.png')}}" alt=""
                     class="rounded-circle" width="40px;"></a>

             <button class="navbar-toggler" type="button" data-toggle="collapse"
                 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                 aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul style="margin-left: 47rem; font-weight: 500; " class="navbar-nav mr-auto">
                     <li class="nav-item">
                         <a style="color: #fff;" class="nav-link" href="/">Home</a>
                     </li>
                     <li class="nav-item">
                         <a style="color: #fff;" class="nav-link" href="/room-list">Rooms</a>
                     </li>
                     <li class="nav-item">
                         <a style="color: #fff;" class="nav-link" href="/list">Lists</a>
                     </li>
                     <li class="nav-item">
                         <a style="color: #fff;" class="nav-link" href="/available-rooms">Available
                             Rooms</a>
                     </li>
                     <li class="nav-item">
                         <a style="color: #fff;" class="nav-link" href="/add">Room Booking</a>
                     </li>
                     <li class="nav-item">
                         <a style="color: #fff;" class="nav-link"
                             href="{{route('room-price')}}">Pricing</a>
                     </li>
                     <li class="nav-item">
                         <a style="color: #fff;" class="nav-link" href="/contact">Contact</a>
                     </li>
                     <li class="nav-item">
                         <a style="color: #fff;" class="nav-link" href="/about">About Us</a>
                     </li>
                 </ul>
             </div>
         </nav>
     </header>
     <div class="hero-image">
         <div class="hero-text">
             <br>
             <br>
             <br>
             <br>
             <h1>Welcome </h1>
             <br>
             <br>
             <br>
             <a href="/add" class="hero-btn">Add Customer Info</a>
         </div>
     </div>
 </body>

 </html>