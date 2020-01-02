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

$sql = "SELECT * FROM posts ORDER BY id DESC";
$result = $conn->query($sql);

date_default_timezone_set('Asia/Calcutta');

// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');
if ( $Hour >= 5 && $Hour <= 11 ) {
    $msg="Good Morning";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    $msg="Good Afternoon";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    $msg="Good Evening";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="newsfeed.css" />
    <script
      src="https://kit.fontawesome.com/ec2985e005.js"
      crossorigin="anonymous"
    ></script>
    <title>News Feeds</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="newsfeed.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profiles.php">Profiles</a>
          </li>
         <!-- <li class="nav-item">
            <a class="nav-link" href="#">Group Chat</a>
          </li>-->
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

    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <?php echo $msg;?> <strong><?php echo $_SESSION['user_name'] ?>!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>

                                      <!-- End of the Navbar-->
                                      
    <div class="container">
      <div class="row">
        <!--Name Showing Division started-->
        <div
          class="col-2 text-center"
          style="background-color: rgb(22, 14, 11); "
        >
          <div class="sticky-top" style="height: 600px;">
            <img
              style="width: 100px;border-radius: 50%;margin-top: 20px;"
              src="hero-3.jpg"
              alt=""
            />
            <h2
              style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;margin-top: 10px; color: #fff;"
            >
              <?php echo $_SESSION['user_name'];?>
            </h2>
          </div>
        </div>
        <!--Name Showing Division end-->
        <!--Middle division started-->
        <div
          class="col-10"
          style="background-color: rgb(34, 27, 6);color: #fff;"
        >
          <!--This is the post part-->
          <div style="margin-top: 60px;">
            <?php
            if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

        $sql2 = "SELECT * FROM users WHERE id='$row[user_id]'";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();
        $cmd = "python count_like.py $row[id]";
        $count_like=shell_exec($cmd);

        echo "<div style='margin-top: 60px;'>
              <div class='jumbotron bg-dark'>
                <img
                  style='width: 100px;border-radius: 50%;margin-top: 20px;'
                  src='hero-3.jpg'
                  alt=''
                />
                <h1 class='display-4'>$row[Name]</h1> shared by $row2[Name]

                <p class='lead' style='width: 700px;'>
                  $row[Content]
                </p>

                <div class='row'>
                  <div class='col'>
                  <a href='like_done.php?post_id=$row[id]' class='fas fa-heart effect' style='font-size: 25px;margin-right: 50px;'></a>
                  $count_like likes.
                  </div>
                  <div class='col'>
                  <form action='comment_done.php' method='POST'>
                  <input type='number' name='post_id' value='$row[id]' hidden>
                    <div class='input-group mb-3'>
                      <input
                        type='text'
                        class='form-control  bg-dark'
                        placeholder='Comment'
                        aria-label='Recipients username'
                        aria-describedby='button-addon2'
                        name='coment_input'
                        required
                      />
                        <input
                          type='submit'
                          class='btn btn-outline-secondary input-group-append'
                          type='button'
                          id='button-addon2'
                          value='Comment'
                        >
                    </div></form>
                  </div>
                </div>
                <a href='comment.php?post_id=$row[id]' style='text-decoration: none; color: #fff;'
                  >View all Comments</a
                ><br>
                <a href='like.php?post_id=$row[id]' style='text-decoration: none; color: #fff;'
                  >View all likes</a
                >
              </div>
            </div>";
          }
      } else {
          echo "<h1>No Post. Be the first one to post anything.</h1>";
      }
      $conn->close();
            ?>
            <!--Post part ends-->
          </div>
          <!--Friend list ends-->
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
