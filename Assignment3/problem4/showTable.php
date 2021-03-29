<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border=1>
  <tr><td>id</td><td>name</td><td>email</td><td>city</td><td>gender</td></tr>
  <?php
$servername="localhost";
$username="root";
$password="";
$database="myDb";

$conn=new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }
//  echo "Connected successfully <br>";
  $sql = "SELECT id, username, email,city,gender FROM formdata";
$result = mysqli_query($conn, $sql);
$del='DELETE FROM formdata WHERE id=$row["id"]';
function delete($rowid){

}
if (mysqli_num_rows($result) > 0) {
  // output data of each row

  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["id"]. "</td><td> " . $row["username"]. "</td><td>" . $row["email"]. "</td><td>". $row["city"]."</td><td>". $row["gender"].'</td><td><button>edit</button> <button >delete</button></td></tr>';
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
  </table>
</body>
</html>
