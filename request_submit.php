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

$user_id=$_SESSION['user_id'];
$cause=$_POST['cause'];
$amount=$_POST['amount'];

$sql = "INSERT INTO requests (Cause, user_id, Amount)
VALUES ('$cause', '$user_id', '$amount')";

if ($conn->query($sql) === TRUE) {
    echo "<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=newsfeed.php'>";
} else {
    echo "<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=upload_fail.html'>";
}

$conn->close();

?>
