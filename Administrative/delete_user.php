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

$user_id = $_GET['user_id'];
$query = "DELETE FROM users where id='$user_id'";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "<font color='green'>Record Deleted";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=user.php">
	<?php
}
else
{
	echo "<font color='red'>Deletion failed";
}

?>