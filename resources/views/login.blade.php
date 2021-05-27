@extends('layout')

@section('content')
<div class="col-sm-8">
<br><br>
<h1 style=" text-align:center;">Login User</h1>
@if(Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{Session::get('error')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@endif
<br><br><br>
<form action="loginUser" method="post">
@csrf
<div class="form-group" style=" text-align:center; font-size: 20px">

<input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter the Email here" required>
</div><br>
@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group" style=" text-align:center; font-size: 20px">

<input type="password" name="password" class="form-control" placeholder="Enter the Password here" required>
</div>
@error('password')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
<div style=" text-align:center;">
<button type="submit" class="btn btn-primary" style="font-size: 20px">Login</button>
</div>

</form>
</div>
@endsection