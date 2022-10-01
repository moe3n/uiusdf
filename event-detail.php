<?php include("dbconnect.php"); ?>

<?php

$sql = "SELECT e_id, e_title, `image`,`e_desc` FROM events";
$result = $conn->query($sql);
$events = $result->fetch_all(MYSQLI_ASSOC);
// echo $events[0]['e_desc'];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["e_id"]. " - Event Name: " . $row["e_title"]. " " . $row["image"]. "<br>";
    $id = $row["e_id"];
    
  }
} else {
  echo "0 results";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <style>
      img{
        height:300px
      }
    </style>
</head>
<body>
    <div class="container ">
        <img src="<?php echo $events[0]['image'] ?>" alt="">
        <p> <?php echo $events[0]['e_title'] ?></p>
        <p> <?php echo $events[0]['e_desc'] ?></p>
    </div>
    
</body>
</html>