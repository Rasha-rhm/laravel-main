<html>
<head>
<title>WESTOOD DINER 
</title>
<style>
.content{
background: #9BC995;
height:100vh;
width:100%;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body > 
<header>
<?php
use App\Http\Controllers\ItemController;
$total=ItemController::cartItem();
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background:#293241">
<a class="navbar-brand" href="/CustHome">WESTOOD DINER</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">

<div class="navbar-nav ml-auto">
@if(Session::get('user'))
<a class="nav-item nav-link" href="#">Welcome, {{Session::get('user')}}</a>
<a class="nav-item nav-link" href="/CustHome">Home </a>
<a class="nav-item nav-link" href="/menu">Menu </a>
<a class="nav-item nav-link" href="/about">About </a>
<a class="nav-item nav-link" href='/cartlist'>Cart({{$total}})</a>
<a class="nav-item nav-link" href="/logout">Logout</a>

@else
<a class="nav-item nav-link active" href="/">Home </a>
<a class="nav-item nav-link active" href="/login">Login </a>
<a class="nav-item nav-link active" href="/register">Register </a>


@endif
</div>
</div>
</nav>
</header>
<div class="content d-flex justify-content-center">
@yield('content')
</div>
<footer class="container"></footer>
</body>
</html>