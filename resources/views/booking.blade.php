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
    <table class="table">
    <thead>
        <tr>
            <td>OrderId</td>
            <td>UserId</td>
            <td>Item</td>
            <td>PaymentMethod</td>            
            <td>Address</td> 
            <td>Amount</td> 
        </tr>
    </thead>
    <tbody>

   
        @foreach($bview as $b)
        <tr>
        <td> {{$b->id }}</td>
        <td> {{$b->UserID }}</td>
        <td> {{$b->Item }}</td>
        <td> {{$b->payment_method}}</td>
        <td> {{$b->address}}</td>
        <td> {{$b->amount}}</td>
    </tr>

        @endforeach

       

   
    </div></div>
    </div>
    

  @endsection

      
</body>
</html>
