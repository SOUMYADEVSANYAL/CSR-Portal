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
$post_id=$_POST['post_id'];
$comm_cont=$_POST['coment_input'];

$sql = "INSERT INTO comments (Content, user_id, post_id)
VALUES ('$comm_cont', '$user_id', '$post_id')";
if ($conn->query($sql) === TRUE) {
    echo "<META HTTP-EQUIV='Refresh'' CONTENT='1; URL=newsfeed.php'>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>