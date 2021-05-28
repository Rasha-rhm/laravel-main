@extends('layoutcust')
@section("content")
<div class="custom-item">
    
        <div class="trending-wrapper">
        <br>
        <h4  style="text-align: center;">Cart</h4><br><br>
       
        @foreach($items as $item)
        <div class="row searched-item ">
        <div class="col-sm-4">
        <a href="detail/{{$item->id}}">
        <td><img width="150" height="100" src="{{ URL ::asset('assets/product_img/'.$item->Image) }}"></td>
        </a>
        </div>
        <div class="col-sm-4">
        <div class="">
        <h2>{{$item->ItemName}}</h2>
        <h5>{{$item->price}}</h5>
        </div>

        </div>
        <div class="col-sm-4">
        <a href="/removecart/{{$item->cartid}}" class="btn btn-warning">Remove from cart</a>
        </div>
        </div>
        @endforeach
        </div>
        <br><br><a class="btn btn-success" href="ordernow">Order Now</a><br><br>
        </div>
        @endsection