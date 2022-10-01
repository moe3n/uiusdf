<?php 

include "dbconnect.php";

  if (isset($_POST['submit'])) {

    $pname = $_POST['pname'];

    $prole = $_POST['prole'];
    $uiuid = $_POST['uiuid'];


    $image = $_POST['image'];

    
    $sql = "INSERT INTO people (pname, prole, uiuid, image) VALUES ('$pname', '$prole', '$uiuid', '$image')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

