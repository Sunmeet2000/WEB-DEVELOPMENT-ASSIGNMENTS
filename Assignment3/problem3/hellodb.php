<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="myDb";
$name=$_POST['name'];
$email=$_POST['email'];
$city=$_POST['city'];
$gender=$_POST['gender'];
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $city;
echo "<br>";
echo $gender;
echo "<br>";


// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error."<br>");
}
echo "Connected successfully <br>";

$sql= "INSERT INTO FORMDATA(
username, 
email, 
city,
gender
) VALUES('$name', '$email','$city', '$gender')";
if($conn->query($sql)===TRUE){
echo "record created <br>";
}
else{
    echo"record creation fail" .$conn->error;
}
$conn->close();

?>
</body>
</html>
