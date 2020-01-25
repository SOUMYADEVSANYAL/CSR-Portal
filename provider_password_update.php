<?php

session_start();
$user_id=$_SESSION['user_id'];
$new_password=$_POST['new_password'];
$new_password=md5($new_password);
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

$sql = "UPDATE fund_provider SET Password='$new_password' WHERE id='$user_id'";

if ($conn->query($sql) === TRUE) {
    ?>
    <META HTTP-EQUIV='Refresh' CONTENT='0; URL=update_success.html'>
    <?php
} else {
    ?>
    <META HTTP-EQUIV='Refresh' CONTENT='0; URL=update_fail.html'>
    <?php
}

$conn->close();


?>