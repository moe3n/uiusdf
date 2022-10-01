

<?php include("dbconnect.php"); ?>
<?php 
  if (isset($_POST['submit'])) {

    $uiuid = $_POST['uiuid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $skills = $_POST['skills'];

    

    
    $sql = "INSERT INTO `registration` (`uiuid`, `name`, `email`, `skills`) VALUES ('$uiuid', '$name', '$email', '$skills')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }
//   header("Location: registration.php");

   

?>
<a href="registration.php">Go Back</a>