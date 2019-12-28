<?php
session_start();
$user_id=$_SESSION['user_id'];
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

// sql to delete a record
$sql = "DELETE FROM users WHERE id=$user_id";
$sql2 = "DELETE FROM posts WHERE user_id=$user_id";
$conn->query($sql2);

if ($conn->query($sql) === TRUE) {
	?>
	<META HTTP-EQUIV='Refresh' CONTENT='0; URL=logout_submit.php'>
	<?php
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>