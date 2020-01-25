<?php

$con = mysqli_connect("localhost", "root", "", "interstellar")or die(mysqli_error($con));
session_start();

$email = $_POST['user_name'];
$password = md5($_POST['user_password']);
// Query checks if the email and password are present in the database.
$query = "SELECT * FROM fund_providers WHERE Email='" . $email . "' AND Password='" . $password . "'";
$result = mysqli_query($con, $query)or die("<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=login_fail.html'>");
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = "<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=login_fail.html'>";
  echo $error;
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['user_name'] = $row['Name'];
  $_SESSION['email'] = $row['Email'];
  $_SESSION['user_id'] = $row['id'];
  $_SESSION['image_source'] = $row['ImageSource'];
  header('location: provider_newsfeed.php');
}

?>