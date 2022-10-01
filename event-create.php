<?php 

include "dbconnect.php";

  if (isset($_POST['submit'])) {

    $e_title = $_POST['e_title'];

    $e_desc = $_POST['e_desc'];

    $e_date = $_POST['e_date'];

    $image = $_POST['image'];

    // $image = $_FILES['image']['name'];


    // $sql = "INSERT INTO `signup_input`(`id`, `name`,  `password`,`email`, `gender`) VALUES ('$id','$name','$password','$email','$gender')";

    $sql = "INSERT INTO `events`(`e_title`, `e_desc`, `e_date`,`image`) VALUES ('$e_title','$e_desc','$e_date','$image')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

