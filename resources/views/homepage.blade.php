<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
    html, body{
        height: 100%;
    }
    .container-left{
        height: 100%;
        background-color: #FFF2F9;
        width: 33%;
        padding-top: 300px;
        padding-left: 30px;
        padding-right: 30px;
        float: left;
    }
    .container-right{
        width: 67%;
        height: 100%;
        float: left;
    }
</style>
<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light"style="background-color: #FD7EC2;">
        <a class="navbar-brand"><img src="img/logo.png" alt="logo" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav ml-auto" style="margin-right: 20px;">
            
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: #FFF2F9; font-weight :600">Beranda</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #FFF2F9; font-weight :600">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #FFF2F9; font-weight :600">Masuk</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-light" style="background-color:#FFF2F9; color:#FD7EC2; font-weight :600" type="submit">Daftar</button>
            </form>
        </div>
        
    </nav>
    <div class = "container-left">
        <center><h4>Bergabung bersama CoCo</h4>
        <h4>Mulai Sekarang!</h4>
        </center>
        <a class="btn btn-light btn-lg btn-block" style="background-color:#FD7EC2; color:#FFF2F9; font-weight :600; margin-top: 30px;" href="#" role="button">Masuk</a>
        <a class="btn btn-light btn-lg btn-block" style="background-color:#FD7EC2; color:#FFF2F9; font-weight :600" href="#" role="button">Daftar</a>
    </div>
    <div class = "container-right">
        <img src="img/berpelukan.png" alt="" width="100%">
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>