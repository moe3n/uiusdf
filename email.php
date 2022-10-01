
<?php include("dbconnect.php"); ?>
<?php 
  if (isset($_POST['submit'])) {

    
    
    $email = $_POST['email'];


    

    
    $sql = "INSERT INTO `email` (`email`) VALUES ( '$email')";
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