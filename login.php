<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/css/login.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="row align-items-center" style="margin-top: 150px">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <h1 style="margin-bottom: 40px; color:orange">
            Log In :
          </h1>
          <form action="login_submit.php" method="POST">
            <div class="form-group">
             
              <input
                type="text"
                class="form-control bg-dark"
                id="exampleInputName"
                aria-describedby="emailHelp"
                placeholder="Username"
                style="color: white;"
                name="user_name"
              />
              <br />
              <br />
              
              
                <input
                type="password"
                class="form-control bg-dark"
                id="exampleInputName"
                aria-describedby="emailHelp"
                placeholder="Password"
                style="color: white;"
                name="user_password"
              />
              <br />
              <br />
            <input type="submit" class="btn btn-outline-warning hover-effect" value="Log In">
              <!--a href="logout.php" class="hover-effect" >Log In</a>
            </button>-->
            <a href="signup.html" class="btn btn-outline-warning hover-effect">Do not have account</a>
          </form>
          
        </div>
        <a href="#" style="text-decoration: none; color:paleturquoise;">Forgot Password?</a>
      </div>
    </div>
  </body>
</html>
