<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="icon" type="image/x-icon" href="assets/img/icon.jfif" />
     <link rel="stylesheet" type="text/css" href="style.css">
     <!-- navbar bootstrap-->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	   <script type="text/javascript" src="js/jquery.js"></script>
	   <script type="text/javascript" src="js/bootstrap.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
    <title>POS | Mari Bayar</title>
  </head>
  <body class="page-top">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/2.jpg" class="d-block w-100" alt="...">
                @if (Route::has('login'))
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4"><span class="font-weight-bold">KASIR | MARI BAYAR</span></h1>
                    <p class="lead">KASIR | MARI BAYAR adalah aplikasi Point of sales.</p>
                    <hr class="my-4 bg-light">
                    @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                    <a class="btn btn-primary btn-lg"  href="{{ route('login') }}" role="button">MASUK</a>
                    @if (Route::has('register'))
                    <a class="btn btn-primary btn-lg"  href="{{ route('register') }}" role="button">DAFTAR</a>
                @endif
                @endauth    
                </div>
                @endif
              </div>
              <div class="carousel-item">
                <img src="assets/img/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4"><span class="font-weight-bold">KASIR | Mari Bayar</span></h1>
                    <p class="lead">KASIR | MARI BAYAR adalah aplikasi Point of sales.</p>
                    <hr class="my-4 bg-light">
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4"><span class="font-weight-bold">POS | Mari Bayar</span></h1>
                    <p class="lead">POS | MARI BAYAR adalah aplikasi Point of sales.</p>
                    <hr class="my-4 bg-light">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Sebelumnya</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Selanjutnya</span>
            </a>
          </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"></script>
  </body>
</html>