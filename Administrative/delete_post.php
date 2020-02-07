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

$post_id = $_GET['post_id'];
$query = "DELETE FROM posts where id='$post_id'";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=post.php'>";
}
else
{
	echo "<font color='red'>Deletion failed";
}

?>