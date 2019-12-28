<?php
session_start();
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

$post_id=$_GET['post_id'];

$sql = "SELECT * FROM likes WHERE post_id='$post_id'";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>particles.js</title>
    <meta
      name="description"
      content="particles.js is a lightweight JavaScript library for creating particles."
    />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <link rel="stylesheet" media="screen" href="css/style1.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/css/login.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand" href="#">beTogether</a>
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
            <a class="nav-link" href="friends.php">Friends</a>
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
    </nav>
    <!-- particles.js container -->
    <div id="particles-js">
      <div
        class="container to-center"
        style="background-color: rgba(0, 0, 0, 0.404);"
      >
        <div class="row">
          <div class="col text-center align-to-center" style="margin-top: 250px;">
            <?php
            if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $sql2 = "SELECT * FROM users WHERE id=$row[user_id]";
      $result2 = $conn->query($sql2);
      $row2 = $result2->fetch_assoc();
        echo "<h4 style='margin-bottom: 40px; color:rgb(17, 179, 201);'>
              <a href='#' style='text-decoration: none;  color:orange'
                >$row2[Name]
              </a>
            </h4>";
    }
} else {
    echo "<h4 style='margin-bottom: 40px; color:rgb(17, 179, 201)'>
              No one liked this post.
            </h4>";
}
$conn->close();
?>
        </div>
      </div>
    </div>

    <!-- scripts -->
    <script src="particles.js"></script>
    <script src="js/app.js"></script>

    <!-- stats.js -->
    <script src="js/lib/stats.js"></script>
  </body>
</html>
