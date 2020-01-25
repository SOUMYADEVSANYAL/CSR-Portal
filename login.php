<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style_section.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="provider_login_submit.php" method="POST">
          <h1>Sign in : <br />Fund Provider</h1>

          <input type="email" placeholder="Email" name="user_name"/>
          <input type="password" placeholder="Password" name="user_password"/>
          <a href="provider_forgot_password.php">Forgot your password?</a>
          <button type="submit">Sign In</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="login_submit.php" method="POST">
          <h1>Sign in : <br />Executive</h1>

          <input type="email" placeholder="Email" name="user_name"/>
          <input type="password" placeholder="Password" name="user_password"/>
          <a href="forgot_password.php">Forgot your password?</a>
          <button type="submit">Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Executive</h1>
            <p>
              Sign in as Executive
            </p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Fund Provider</h1>
            <p>Sign in as Fund Provider</p>
            <button class="ghost" id="signUp">Sign In</button>
          </div>
        </div>
      </div>
    </div>

    <script src="main_section.js"></script>
  </body>
</html>
