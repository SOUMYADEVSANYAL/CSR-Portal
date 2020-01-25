<?php

session_start();
$user_id=$_SESSION['user_id'];

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
            New Password :
          </h1>
          <form action="provider_password_update.php" method="POST">
            <div class="form-group">
             <input type="number" name="organization_id" value="<?php echo $user_id?>" hidden/>
              <input
                type="password"
                class="form-control bg-dark"
                id="exampleInputName"
                aria-describedby="emailHelp"
                placeholder="New password"
                style="color: white;"
                name="new_password"
              />
              <br />
              <br />
            <input type="submit" class="btn btn-outline-warning hover-effect" value="submit">            
          </form>          
        </div>
      </div>
    </div>
  </body>
</html>
