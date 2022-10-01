<?php 

include "dbconnect.php";

$sql = "SELECT * FROM events";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>
<?php include 'header.php'; ?>

    <div class="container">

        <h2>MANAGE EVENTS </h2>

<table class="table">

    <thead>

        <tr>

        <th> ID</th>

        <th> NAME</th>

        <th>DESCRIPTIONS</th>

        <th>DATE</th>

        <th>IMAGE</th>
        <th>OPTIONS</th>

        

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>



                    <td><?php echo $row['e_id']; ?></td>
                    <td><?php echo $row['e_title']; ?></td>

                    <td><?php echo $row['e_desc']; ?></td>

                    <td><?php echo $row['e_date']; ?></td>
                    <td><img src="<?php echo $row['image']; ?>" alt="" height="40px"></td>



                    <td><a class="btn btn-info" href="event-update.php?id=<?php echo $row['e_id']; ?>">Update</a>&nbsp;<a class="btn btn-danger" href="event-delete.php?id=<?php echo $row['e_id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>