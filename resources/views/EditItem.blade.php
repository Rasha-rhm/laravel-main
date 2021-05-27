<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
@extends('layout')

@section('content')

        <div class="container">
        <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <br><h1 style="text-align:center;">ADD ITEM</h1><br>
        <form action="/itemeditprocess/{{$itms->id}}/edit" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <table class="table table-borderless">
            
            <tr>
                <td>Item Name</td>
                <td><input type="text" name="name" value="{{$itms->ItemName}}" class="form-control"></td>
            </tr>
            <tr>
                <td>Item Image</td>
                <td><input type="file" name="image" class="form-control"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" value="{{$itms->Price}}" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="SUBMIT"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-danger">RESET</button></td>
            </tr>
        </table>
        </form>
        </div></div></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    @endsection
</body>
</html>