<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
@extends('layout')

@section('content')
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    <br><h1 style="text-align:center;">BOOKINGS</h1><br><br>
        
   
        @foreach($bview as $b)
        <div class="row" style="outline: thick solid #000; font-size:20px;" >
        <h4><p style="text-align:center;">  {{$b->UserID}}</p></h4>
        <div>
         <h5> Item : {{$b->ItemID}}<br>
            Address : {{$b->address}}<br>
            Booking Time: <br></h5>
        </div>		
        </div>										
		<br><br>
        @endforeach

       

   
    </div></div>
    </div>
    

  @endsection

      
</body>
</html>
