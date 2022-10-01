<!--php admin panel -->

<?php 

include("dbconnect.php");

if(isset($_POST['submit'])){
    $admin_name = $_POST['admin_name'];
    $adminpass = $_POST['adminpass'];
    $admin_email = $_POST['admin_email'];

    $sql = "INSERT INTO `admin` (admin_name, adminpass, admin_email) VALUES ('$admin_name', '$adminpass', '$admin_email')";
    $result = $conn->query($sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        echo "Data not inserted";
    }   
    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
</head>
<body>
  
    
    <h2>Admin Sign UP</h2>
    
    <form action="signup.php" method="POST">
    
      <fieldset>
    
        <legend>Admin Information:</legend>

        
    
    
        Name:<br>
    
        <input type="text" name="admin_name">
    
        <br>
    
        Email<br>
    
        <input type="text" name="admin_email">
    
        <br>
    
        Password:<br>
    
        <input type="text" name="adminpass">
    
        <br>
    
        <input type="submit" name="submit" value="Submit">
    
      </fieldset>
    
    </form>  

    <button><a href="view.php">view</a></button>


</body>
</html>







