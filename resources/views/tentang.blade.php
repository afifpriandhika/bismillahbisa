@extends('layouts.navbar')

@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container1">
            <div class="container1-left">
                <center>
                <h1 style="font-weight: bold;">Berdiskusi Bersama</h1>
                <h1 style="font-weight: bold;">Para Content Creator</h1>
                <p style="margin-top:30px">CoCo atau Content Creator Community merupakan sebuah platform berbentuk Website yang dibuat untuk menghubungkan para content creator untuk berdiskusi dengan content creator lainnya.</p>
                </center>
            </div>
            <div class="container1-right">
                <img src="img/pc.png" alt="pc">
            </div>
        </div>
        <div style="height: 20px; background-color:#EF2A82"></div>

        <div class="container2">
            <center>
            <h2 style="font-weight: bold; color: #EF2A82; margin-bottom:30px">Main Features</h2>
            <p>CoCo menyediakan fitur-fitur berdiskusi dan berkolaborasi dengan content creator maupun pengguna lain, serta membuat ruang obrolan privasi.</p>
            </center>
        </div>

        <div class="container3">
            <div class="container3-left">
                <center>
                <img src="img/diskusi.png" style="width: 200px;" alt="">
                <h3 style="font-family: Verdana, Geneva, Tahoma, sans-serif; margin-top: 40px">DISKUSI</h3>
                </center>
            </div>
            <div class="container3-center">
                <center>
                <img src="img/kolaborasi.png" style="width: 200px;" alt="">
                <h3 style="font-family: Verdana, Geneva, Tahoma, sans-serif; margin-top: 40px">KOLABORASI</h3>
                </center>
            </div>
            <div class="container3-right">
                <center>
                <img src="img/chat.png" style="width: 250px; height: 200px" alt="">
                <h3 style="font-family: Verdana, Geneva, Tahoma, sans-serif; margin-top: 40px">CHAT</h3>
                </center>
            </div>
        </div>

        <div style="height: 20px; background-color:#EF2A82"></div>

        <div class="container4">

        </div>
</body>
</html>
<!-- <body class="antialiased">
    
</body> -->
@endSection