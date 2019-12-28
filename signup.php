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

$name=$_POST["organization_name"];
$email=$_POST["organization_email"];
$password=md5($_POST["organization_password"]);

$sql = "INSERT INTO users (Name, Email, Password)
VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=signup_success.php">
    <?php
} else {
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=signup_fail.html'>";
}

$conn->close();
?>