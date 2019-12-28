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

$id=$_POST["organization_id"];
$name=$_POST["organization_name"];
$email=$_POST["organization_email"];

$sql = "UPDATE users SET Name='$name',Email='$email' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=update_success.html">
    <?php
} else {
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=update_fail.html'>";
}

$conn->close();
?>