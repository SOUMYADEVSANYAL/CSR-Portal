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
    <div class="container to-center">
      <div class="row align-items-center">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" style="margin-top: 250px">
          <h1 style="margin-bottom: 40px; color:orange">
            Enter OTP :
          </h1>
          <p style="margin-bottom: 40px; color:rgb(255, 255, 255)">A Verification Mail has been sent to your Email Id : </p style="margin-bottom: 40px; color:orange">
          <form action="provider_otp_check.php" method="POST">
            <div class="form-group">
             <input type="password" value="<?php echo $_SESSION['otp'];?>" name="session_otp" hidden/>
              <input
                type="password"
                class="form-control bg-dark"
                id="exampleInputName"
                aria-describedby="emailHelp"
                placeholder="OTP"
                style="color: white;"
                name="input_otp"
              />
              <br />
              <br />
            <input type="submit" class="btn btn-outline-warning hover-effect" value="Submit">
          </form> 
        </div>
      </div>
    </div>
  </body>
</html>
