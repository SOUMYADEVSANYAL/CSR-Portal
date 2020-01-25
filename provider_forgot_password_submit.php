<?php

$con = mysqli_connect("localhost", "root", "", "interstellar")or die(mysqli_error($con));
session_start();

$email = $_POST['user_name'];

$query = "SELECT Email,id FROM fund_providers WHERE Email='" . $email . "'";
$result = mysqli_query($con, $query)or die("<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=login_fail.html'>");
$num = mysqli_num_rows($result);

if ($num == 0) {
  $error = "<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=login_fail.html'>";
  echo $error;
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['user_id'] = $row['id'];
  $_SESSION['email'] = $row['Email'];
  header('location: provider_otp_password_send.php');
}

?>