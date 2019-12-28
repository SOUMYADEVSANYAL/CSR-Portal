<?php
session_start();
$user_id=$_SESSION['user_id'];
$friend_id=$_GET['friend_id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interstellar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM peerchats WHERE sender_id=$user_id OR sender_id=$friend_id";
$result = $conn->query($sql);

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
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand" href="newsfeed.php">beTogether</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-left: 800px;">
          <li class="nav-item">
            <a class="nav-link" href="newsfeed.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profiles.php">Profiles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Group Chat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout_submit.php">Logout</a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            <a
              href="post_upload.php"
              style="text-decoration: none;color: rgb(0, 255, 64);"
              >Post</a
            >
          </button>
        </form>
      </div>
    </nav></div><br><br>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <h3 style="margin-bottom: 40px; color:orange">
            <table><style>
table, th, td {
    border: 1px solid black;
  padding:5px;
}
</style>
      <th>Name</th>
      <th>Email</th>
      <th>Content</th>
            <?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
          <tr>
            <td><a href='#' style='text-decoration: none;  color:orange'>$row[Name]</a></td>
            <td><a href='www.gmail.com' style='text-decoration: none;  color:orange'>$row[Email]</td>
            <td><a class='btn btn-outline-success' href=''>Send message</a></td>
          </tr>
           ";
    }
} else {
    echo "0 results";
}
$conn->close();

            ?>
            </table>
          </h3>
        </div>
      </div>
    </div>
  </body>
</html>