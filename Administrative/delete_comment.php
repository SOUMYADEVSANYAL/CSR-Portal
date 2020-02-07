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

$comment_id = $_GET['comment_id'];
$query = "DELETE FROM comments where id='$comment_id'";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=comments.php'>";
}
else
{
	echo "<font color='red'>Deletion failed";
}

?>