@extends('layout')

@section('content')


<div class="container">
    <div class="row">
      
        <div class="card-header">
       <center> <h3>Customer Feedbacks</h3></center>
       </div>
       
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <!-- <td>Edit</td>
            <td>Delete</td> -->
        </tr>
    </thead>
    <tbody>
 
    @foreach($User as $tab_user)
    <tr>
        <td> {{$tab_user->id }}</td>
        <td> {{$tab_user->name }}</td>
        <td> {{$tab_user->email }}</td>
        <td> {{$tab_user->message }}</td>
       
    </tr> 
    @endforeach
   
    </tbody>

</table>
    </div>

</div>
@endsection