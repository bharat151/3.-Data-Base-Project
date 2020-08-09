<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="main.js" charset="utf-8"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="db.css">

    <meta charset="utf-8">
    <title>Food Delivery</title>
  </head>
  <body onload="onLoad()">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><img src="pics/logo.png" width="20" height="30" class="d-inline-block align-top" alt=""><em><strong>Chef's Magic</strong></em></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="registration.php">Register <span class="sr-only">(current)</span></a>

        </form>
      </div>
    </nav>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="pics/banner1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="pics/banner2.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container myContainer">
    <h1>What's Your Mood??</h1>
    <div class="row">
      <div class="col-sm-3 myCard"><div class="item">Breakfast</div></div>
      <div class="col-sm-3 myCard"><div class="item">Lunch</div></div>
      <div class="col-sm-3 myCard"><div class="item">Dinner</div></div>
      <div class="col-sm-3 myCard"><div class="item">Healthy Salad</div></div>
      <div class="col-sm-3 myCard"><div class="item">Fast Food</div></div>
      <div class="col-sm-3 myCard"><div class="item">Drinks</div></div>
      <div class="col-sm-3 myCard"><div class="item">Desserts</div></div>
      <div class="col-sm-3 myCard"><div class="item">Luxury Dining</div></div>
    </div>

  </div>
  <hr>
  </body>
</html>
