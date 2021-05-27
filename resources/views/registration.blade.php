@extends('layout')

@section('content')
<div class="col-sm-8">
<br><br>
<h1 style=" text-align:center;">Register User</h1>
@if(Session::get('register_status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('register_status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@endif
<br><br>
<form action="registerUser" method="post" return="false">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Name" required>
</div>
<br>
@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
@csrf
<div class="form-group">
<label>Email</label>
<input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Email" required>
</div><br>
@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group">
<label>Password</label>
<input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Enter Password" required>
</div><br>
@error('password')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="confirm_password" value="{{ old('confirm_password') }}" class="form-control" placeholder="Confirm Password" required>
</div><br>
@error('confirm_password')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group">
<label>Mobile</label>
<input type="number" name="mobile" value="{{ old('mobile') }}" class="form-control" placeholder="Enter Mobile Number" required>
</div>
@error('mobile')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
<div style=" text-align:center;">
<button type="submit" class="btn btn-primary" style="font-size: 20px">Register</button>
</div>
</form>
</div>
@endsection