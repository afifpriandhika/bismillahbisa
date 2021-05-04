@extends('layouts.navbar')

@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Your Profile</title>
</head>
<style>
    .container-left{
        width: 20%;
    }
</style>
<body>
    <!-- FOTO WALL -->
    <div class="container-top">
        <img src="img/dinding.jpg" alt="wall" width="100%">
    </div>
    <!-- profile detail -->
    <div class="container-left">
        <img src="{{ url('displayImage/'.$image.'')}}" style="width: 60px; height: 60px;   margin-top: 10%; margin-left: 40%; " alt="">
    </div>
</body>
</html>
@endsection