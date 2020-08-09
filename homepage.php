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
    <script src="homepage.js" charset="utf-8"></script>
    <meta charset="utf-8">
    <title>Select food items</title>
    <style media="screen">

      .btn{
        position: fixed;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        bottom: 0px;
      }
      .card {
        box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        margin-top: 50px;
        text-align: center;
        font-family: arial;
      }

      .price {
        color: grey;
        font-size: 22px;
      }

      .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #FF7043;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
      }

      .card button:hover {
        opacity: 0.7;
      }
    </style>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php"><img src="pics/logo.png" width="20" height="30" class="d-inline-block align-top" alt=""><em><strong>Chef's Magic</strong></em></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <center><div style="font-size: 30px; height:75px">
      <u>Select food items</u>
    </div> </center>

    <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-3">
        <div class="card">
          <img src="pics/fooditems/1.jpg" alt="paneer" style="height: 200px; width:100%">
          <h1>Shahi Paneer</h1>
          <p class="price">Rs.100</p>
          <p>The classic cuisine of indian taste</p>
          <p><button onclick="addItem('Shahi Paneer', '100')">Add to Cart</button></p>
        </div>
      </div>
      <div class="col-sm-9 col-md-3">
        <div class="card">
          <img src="pics/fooditems/2.jpg" alt="chole" style="height: 200px; width:100%">
          <h1>Chole</h1>
          <p class="price">Rs.60</p>
          <p>The lunch specialist.</p>
          <p><button onclick="addItem('Chole', '60')">Add to Cart</button></p>
        </div>
      </div>
      <div class="col-sm-9 col-md-3">
        <div class="card">
          <img src="pics/fooditems/3.jpg" alt="Bhature" style="height: 200px; width:100%">
          <h1>Bhature</h1>
          <p class="price">Rs.30</p>
          <p>The Indian bread for chole</p>
          <p><button onclick="addItem('Bhature', '30')">Add to Cart</button></p>
        </div>
      </div>
      <div class="col-sm-9 col-md-3">
        <div class="card">
          <img src="pics/fooditems/4.jpg" alt="Roti" style="height: 200px; width:100%">
          <h1>Roti</h1>
          <p class="price">Rs.15</p>
          <p>The classic Indian bread</p>
          <p><button onclick="addItem('Roti', '15')">Add to Cart</button></p>
        </div>
      </div>
      <div class="col-sm-9 col-md-3">
        <div class="card">
          <img src="pics/fooditems/5.jpg" alt="Maggie" style="height: 200px; width:100%">
          <h1>Maggie</h1>
          <p class="price">Rs.40</p>
          <p>The perfect evening snack.</p>
          <p><button onclick="addItem('Maggie', '40')">Add to Cart</button></p>
        </div>
      </div>
      <div class="col-sm-9 col-md-3">
        <div class="card">
          <img src="pics/fooditems/6.jpg" alt="ice cream" style="height: 200px; width:100%">
          <h1>Ice Cream</h1>
          <p class="price">Rs.70</p>
          <p>The frozen sweet</p>
          <p><button onclick="addItem('Ice Cream', '70')">Add to Cart</button></p>
        </div>
      </div>
      <div class="col-sm-9 col-md-3">
        <div class="card">
          <img src="pics/fooditems/daal.jpg" alt="daal" style="height: 200px; width:100%">
          <h1>Daal</h1>
          <p class="price">Rs.90</p>
          <p>The indian curry specialist</p>
          <p><button onclick="addItem('Daal', '90')">Add to Cart</button></p>
        </div>
      </div>
      <div class="col-sm-9 col-md-3">
        <div class="card">
          <img src="pics/fooditems/8.jpg" alt="Pizza" style="height: 200px; width:100%">
          <h1>Pizza</h1>
          <p class="price">Rs.150</p>
          <p>The cheesiest experience for you</p>
          <p><button onclick="addItem('Pizza', '150')">Add to Cart</button></p>
        </div>
      </div>
      <div class="col-sm-9 col-md-3">
        <div class="card">
          <img src="pics/fooditems/9.jpg" alt="Aloo Parathe" style="height: 200px; width:100%">
          <h1>Aloo Parathe</h1>
          <p class="price">Rs.30</p>
          <p>The amazing breakfast experience</p>
          <p><button onclick="addItem('Aloo Parathe', '30')">Add to Cart</button></p>
        </div>
      </div>
      <div class="col-sm-9 col-md-3">
        <div class="card">
          <img src="pics/fooditems/7.jpg" alt="burger" style="height: 200px; width:100%">
          <h1>Burger</h1>
          <p class="price">Rs.60</p>
          <p>The best burger to get.</p>
          <p><button onclick="addItem('Burger', '60')">Add to Cart</button></p>
        </div>
      </div>
      <div class="col-sm-9 col-md-3">
        <div class="card">
          <img src="pics/fooditems/lassi.jpg" alt="lassi" style="height: 200px; width:100%">
          <h1>Lassi</h1>
          <p class="price">Rs.70</p>
          <p>The best indian Refreshment.</p>
          <p><button onclick="addItem('Lassi', '70')">Add to Cart</button></p>
        </div>
      </div>
      <div class="col-sm-9 col-md-3">
        <div class="card">
          <img src="pics/fooditems/10.jpg" alt="Coca Cola" style="height: 200px; width:100%">
          <h1>Coca Cola</h1>
          <p class="price">Rs.35</p>
          <p>Refreshment Drink</p>
          <p><button onclick="addItem('Coca Cola', '35')">Add to Cart</button></p>
        </div>
      </div>
    </div>
  </div>


  <button onclick="submitBtn()" class="btn btn-success" style="height: 50px; font-size: 20px;width:100%;" >Move to Cart</button>
  <hr>
  </body>
</html>
