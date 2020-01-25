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
        $name=$_POST['organization_name'];
        $email=$_POST['organization_email'];
        $password = md5($_POST['organization_password']);
        $filename=$_FILES['uploadfile']['name'];
        $tempname=$_FILES['uploadfile']['tmp_name'];
        $folder="user_image/".$filename;
        copy($_FILES['uploadfile']['tmp_name'], $folder);

        if($name!="" && $email!="" && $password!="" && $filename!="")
        {
            $sql="INSERT INTO fund_providers (Name, Email, Password, ImageSource) VALUES ('$name', '$email', '$password', '$folder')";

            if ($conn->query($sql) === TRUE) {
                echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=signup_success.php'>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else
        {
            echo "All fields are required";
        }
    ?>