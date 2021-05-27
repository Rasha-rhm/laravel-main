@extends('layoutcust')
@section("content")
<div class="col-sm-10">
    
<table class="table ">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>${{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$0</td>
      </tr>
      <tr>
        <td>Delivery </td>
        <td>$50</td>
      </tr>
      <tr>
        <td>Total Amount </td>
        <td>{{$total+50}}</td>
      </tr>
    
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="POST">
  @csrf
    <div class="form-group">
      <textarea name="address" class="form-control"  placeholder="Enter Address" ></textarea>
    </div>
    <div class="form-group">
        <label for="pwd">Payment Method</label><br><br>
        <input type="radio" value="cash" name="payment"> <span>online payment</span><br><br>
        <input type="radio" value="cash" name="payment"> <span>pay on delivery</span><br><br>
</div>
    <button type="submit" class="btn btn-default">Order Now</button>
  </form>
  </div>
</div>
    
        @endsection