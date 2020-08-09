<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.button {
  margin: 10px;
  border-radius: 20px;
  font-family: 'Livvic', sans-serif;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 25px;
  padding: 2px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  height: 50px;
  margin-left: 60px;
}
::selection{
    color: white;
    background: purple;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

div.card {
  width: 30%;
  height: 80%;
  padding: 16px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 30%;
  margin-top: 8%;
}

span.psw {
  float: right;
  padding-top: 16px;
}
a{
  color: white;
}
/* Change styles for span and cancel button on extra small screens */

  /* .cancelbtn {
     width: 100%;
  } */
  img.avatar {
  width: 40%;
  border-radius: 50%;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
body{
  background-color: #F3F3F3;
}
</style>
</head>
<body>
<form action="">
  <div class="card">
    <p style="text-align:center;font-family:Dealerplate claifornia;font-size:30px;"><u>Login</u></p>
    <div class="imgcontainer">
          <img src="loginimage.jpg" alt="Avatar" class="avatar">
    </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="button"><span><a href="homepage.php">Register</a> </span></div>
</div>
</form>
</body>
</html>
