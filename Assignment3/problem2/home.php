
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type="number" name="a">
<input type="number" name="b">
<input type="submit">
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $a= $_POST['a']==null?0:$_POST['a'];
    $b= $_POST['b']==null?0:$_POST['b'];
echo $a+$b;
}
?>
</body>
</html