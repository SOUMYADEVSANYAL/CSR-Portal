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
$post_id=$_GET['post_id'];

$query="SELECT id,type FROM likes WHERE user_id='$user_id' AND post_id='$post_id'";
$result = $conn->query($query);

if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    if($row['type']=='dislike')
        {
            $change="UPDATE likes SET type='like' WHERE user_id='$user_id' AND post_id='$post_id'";
            $conn->query($change);
            echo "<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=newsfeed.php'>";

        }
    else
        {
            $query_not_like="DELETE FROM likes WHERE user_id='$user_id' AND post_id='$post_id'";
            if ($conn->query($query_not_like) === TRUE) 
                {
                    echo "<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=newsfeed.php'>";
                } 
            else 
                {
                    echo "Error deleting record: " . $conn->error;
                }
        }?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=newsfeed.php">
    <?php
}
else{
    $sql = "INSERT INTO likes (user_id, post_id,type)
VALUES ('$user_id', '$post_id','like')";

if ($conn->query($sql) === TRUE) {
    ;?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=newsfeed.php">
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>