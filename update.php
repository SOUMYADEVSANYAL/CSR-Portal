<?php

session_start();
$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
$user_email=$_SESSION['email'];

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
    <div class="container to-center">
      <div class="row align-items-center">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <h1 style="margin-bottom: 40px; color:orange">
            Update Info :
          </h1>
          <form action="update_submit.php" method="POST">
            <div class="form-group">
              <input type="number" value="<?php echo $user_id?>" name="organization_id" hidden/>
              <br />
              <br />
             
              <input
                type="text"
                class="form-control bg-dark"
                id="exampleInputName"
                aria-describedby="emailHelp"
                placeholder="Username"
                style="color: white;"
                name="organization_name"
                value="<?php echo $user_name?>"
              />
              <br />
              <br />
              
              
                <input
                type="text"
                class="form-control bg-dark"
                id="exampleInputName"
                aria-describedby="emailHelp"
                placeholder="Email"
                style="color: white;"
                name="organization_email"
                value="<?php echo $user_email?>"
              />
              <br />
              <br />

              
              <!--
              <div class="dropdown-divider"></div>
              <small id="emailHelp" class="form-text text-muted"
                >Enter new values</small
              >

              <label for="exampleInputName" class="text_heading">Name</label>
              <input
                type="text"
                class="form-control bg-dark"
                id="exampleInputName"
                aria-describedby="emailHelp"
                placeholder="Enter Name"
                style="color: white;"
              />
              <br />
              <br />
              <label for="exampleInputRoll" class="text_heading"
                >Roll Number</label
              >
              <input
                type="text"
                class="form-control bg-dark"
                id="exampleInputRoll"
                aria-describedby="emailHelp"
                placeholder="Enter Roll Number"
                style="color: white;"
              />
              <br />
              <br />
              <label for="exampleInputEmail1" class="text_heading"
                >Email address</label
              >
              <input
                type="email"
                class="form-control bg-dark"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter email"
                style="color: white;"
              />

              <small id="emailHelp" class="form-text text-muted"
                >We'll never share your email with anyone else.</small
              >
            </div>
            <br />
            <br />
          -->
            <input type="submit" class="btn btn-outline-warning hover-effect" value="Submit">
            
          </form>
          
        </div>
        <a href="otp_send.php" style="text-decoration: none; color:paleturquoise;">Change Password</a>
      </div>
    </div>
  </body>
</html>
