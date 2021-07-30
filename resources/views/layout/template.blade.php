<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>@yield('judul')</title>

    <style type="text/css">
      .navbar-brand{
        margin-left: 2vh;
      }

      body{
        background: #D7E3FC; 
        background-repeat: no-repeat;
        background-size: cover;
        height: 50vh;
      }

      .container{
        background: #D7E3FC;
        width: 150%;
      }

      .bg2 {
        background: #FFF1E6;
        height: auto;
        margin-left: 1.9vh;
      }

      .bg3 {
        background: #F0EFEB;
        height: auto;
        margin-right: 1.9vh;
      }

      .bg4 {
        background: #3D5A80;
        height: 20vh;
        line-height: 20vh;
        text-align: center;
      }

      .bg5 {
        background: #F0EFEB;
        height: 100vh;
        margin-left: 1.9vh;
        margin-right: 1.9vh;
      }

      .bg6 {
        background: #F0EFEB;
        height: auto;
        margin-right: 1.9vh;
      }

      .bg7 {
        background: #fff5eb;
        height: 100vh;
        margin-left: 1.9vh;
      }

      

      .txt {
        font-size: 30px;
        text-align: center;
        margin-right: 10px;
        color: black;
        line-height: 40px;
        font-family: Bubbleboddy Neue Trial;
        margin-top: 3vh;
      }

      .left {
        width: 30%;
        text-align: center;
        list-style: none;
        margin-top: 0 auto;
      }

      .right {
        width: 100%;
        text-align: center;
        margin-top: 0 auto;
      }

      .txt2 {
        font-size: 30px;
        font-family: 'Badhouse';
        text-align: center;
      }
      
      .txt3 {
        font-size: 45px;
        color: white;
        font-family: 'Tentang Nanti Demo';
      }

      img {
        margin-left: 2vh;
      }

     .txt4 {
       text-align: center;
       font-family: 'Archestra';
       font-size: 50px;
     }

     .txt5 {
        font-size: 25px;
        text-align: center;
        margin-right: 10px;
        color: black;
        line-height: 40px;
        font-family: Bubbleboddy Neue Trial;
      }

     .img2 {
       align: center;

     }

     .adding {
        background-color: lightgrey;
        border: none;
        border-radius: 20px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        width: 200px;
        font-family: Bubbleboddy Neue Trial;
        margin-top: 3vh;
    }

    .txt6 {
      font-family: Bubbleboddy Neue Trial;
      font-size: 20px;
    }

    video {
      alignment: center;
      margin-left: 100px;
    }

    .sejarah img{
      margin-left: 210px;
    }

    </style>
  </head>
  <body>
  <div class="container">  
    <div class="header bg4 txt3"><img src="./img/nasgor5.png" width="100" height="100">EatNasgor</div>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<img src="./img/nasgor.png" width="50" height="50">
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    	<div class="navbar-nav">
      		<a class="nav-link active txt6" href="/">Home</a>
      		<a class="nav-link active txt6" href="/menu">Menu</a>
      		<a class="nav-link active txt6" href="whatsapp://send?text=Hello&phone=+6281298217195">Chat Us!</a>
          <a class="nav-link active txt6" href="/login">Login</a>
   		</div>
  	</div>
   </nav>
  </div>


	@yield('container')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>