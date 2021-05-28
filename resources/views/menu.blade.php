<!DOCTYPE html>
@extends("layoutcust")
@section("content")
    <div class="container">
    <div class="row">
    <div class="col">
    <!-- <form name="listform" action="/payment" method="post">
                {{csrf_field()}} -->
                <table class="table table-borderless">
                <tr>
                        <th>ItemID</th>
                        <th>Item Image</th>
                        <th>Item Name</th>
                        <th>Price</th>
                </tr>
                @foreach($itms as $itm)
			<tr>
			        <td>{{ $itm->ItemID }}</td>
                                <td><img width="150" height="100" src="{{ URL ::asset('assets/product_img/'.$itm->Image) }}"></td>
			        <td>{{ $itm->ItemName }}</td>
			        <td>{{ $itm->price }}</td>
			        <td><form action="/add_to_cart" method="POST">
    @csrf
    <input type="hidden" name="ItemID" value="{{ $itm->id }}">
    <button type="submit" class="btn btn-primary">Add to cart</button>
    </form></td>
    </tr>
                @endforeach
                
                </table>
                </div>
                </div>
    
   
    </div>
   <script src="{{ asset('checkboxes.js')}}"></script>
   @endsection