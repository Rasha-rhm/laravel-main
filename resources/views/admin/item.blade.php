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
    <br><h1 style="text-align:center;">ITEM MANAGEMENT</h1><br><br>
        
    <table class="table  table-borderless" style="font-size : 20px;">
        <tr>
            <th>ItemID</th>
            <th>Item Image</th>
            <th>Item Name</th>
            <th>Price</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($itms as $itm)
												<tr>
													<td>{{ $itm->ItemID }}</td>
                                                    <td><img width="150" height="100" src="{{ URL ::asset('assets/product_img/'.$itm->Image) }}"></td>

													<td>{{ $itm->ItemName }}</td>
													<td>{{ $itm->Price }}</td>
													<td><a href="/itemdetail/{{$itm->id }}/edit" style="color: #1a1aff;">Update</a></td>
													<td><a href="/itemdetail/{{$itm->id }}/del" style="color: #ff1a1a;">Delete</a></td>
													
												</tr>
											@endforeach
       

    </table>
    </div></div>
    
    <div class="row" style="text-align:center; font-size: 20px;">
    <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <a href="/readItem"><button class="btn btn-danger">Add New Item</button></a>
    </div>

  @endsection

      
</body>
</html>
