<?php
error_reporting(0);
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

$follwer_id=$_SESSION['user_id'];
$friend_id=$_GET['friend_id'];

$query="SELECT FROM follows WHERE follwer_id='$follwer_id' AND friend_id='friend_id'";
$result = $conn->query($query);

if ($result->num_rows > 0)
{
    echo "<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=newsfeed.php'>";
}
else
{
    $sql = "INSERT INTO follows (friend_id, follower_id) VALUES ('$friend_id', '$follwer_id')";
    $result2 = $conn->query($sql);
    echo "<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=newsfeed.php'>";
}
?>