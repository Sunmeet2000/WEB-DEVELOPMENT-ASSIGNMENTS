<?php
// including the database connection file
include_once("config.php");
include_once("common.php");
if(isset($_POST['update'])) 
{    
    $idd= $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];    
    
    // checking empty fields
    if(empty($name) || empty($age) || empty($email)){
            echo "<font color='red'> No field should be left empty....</font><br>";
    } 
    else {    
        //updating the table
        $sql = " UPDATE `users` SET `name` = '$name ', `age` = '$age', `email` = '$email' WHERE `users`.`id` = $idd";
      //        UPDATE `users` SET `name` = 'SUNMEET ', `age` = '51', `email` = 'snm5620@gmail.com' WHERE `users`.`id` = 11;
        if($mysqli->query($sql) == TRUE)
        //redirectig to the home page. In our case, it is index.php
           header("Location: index.php");
        else
         echo 'Error: '. $sql . "<br>" . $mysqli->error; 
    }
}
?>

<?php
//getting id from url
$idd=$_GET['id'];
$idd=(int)$idd;
//selecting data associated with this particular id
$sql = "SELECT * FROM `users` WHERE `users`.`id` = $idd";
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc())
{   
    $name = $row['name'];
    $age = $row['age'];
    $email = $row['email'];
}
?>
<html>
<head>    
    <title>Edit Record</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <section id="contact">
        <div class="contact-section">
        <div class="container">
            <form action="edit.php" method='post' name='form1'>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Your name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo "$name" ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" min=0 max=150 class="form-control" name="age" value="<?php echo "$age" ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" value="<?php echo "$email" ?>" required>
                    </div>  
                    <div>
                        <input type="hidden" name="id" value="<?php echo "$idd" ?>"><!-- Why This hidden ID field is needed??-->
                        <input type="submit" class="btn btn-default submit fa fa-paper-plane" name='update' value="Update">
                    </div>
                </div>
            </form>
        </div>
        </div>
    </section>
</body>
</html>