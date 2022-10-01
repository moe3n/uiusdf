

<?php include("dbconnect.php"); ?>

<?php 


  if (isset($_POST['submit'])) {

    $e_title = $_POST['e_title'];

    $e_desc = $_POST['e_desc'];

    $e_date = $_POST['e_date'];
    $image = $_POST['image'];

    

    // $sql = "INSERT INTO `signup_input`(`id`, `name`,  `password`,`email`, `gender`) VALUES ('$id','$name','$password','$email','$gender')";
    $sql = "INSERT INTO `events`(`e_title`, `e_desc`, `e_date`) VALUES ('$e_title','$e_desc','$e_date')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>









<!-- html form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events form</title>
</head>
<body>
    <form action="events_form.php" method="post">
        <label for="e_title">Event Name</label>
        <input type="text" name="e_title" id="e_title" required>
        <label for="e_desc">Event Description</label>
        <input type="text" name="e_desc" id="e_desc" required>
        
        <label for="e_date">Event Date</label>
        <input type="date" name="e_date" id="e_date" required>
        <label for="image">Event Image</label>
        <input type="text" name="image" id="image" required>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>
