<?php

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

$like_id = $_GET['like_id'];
$query = "DELETE FROM likes where id='$like_id'";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=likes.php'>";
}
else
{
	echo "<font color='red'>Deletion failed";
}

?>