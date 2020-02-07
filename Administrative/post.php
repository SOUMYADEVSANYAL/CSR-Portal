
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

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Control page</title>
</head>
<body>
    <table class="table table-dark container" style="margin-top: 25px;">
        <thead class="bg-warning">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">user_id</th>
            <th scope="col">Content</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>
<?php
          
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>$row[id]</td>
        <td>$row[Name]</td>
        <td>$row[user_id]</td>
        <td>$row[Content]</td>
        <td><a class='btn btn-danger' href='delete_post.php?post_id=$row[id]'>Delete</a></td>
      </tr>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
        </tbody>
      </table>
</body>
</html>