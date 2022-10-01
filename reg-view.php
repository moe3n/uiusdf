<?php 

include "dbconnect.php";


$sql = "SELECT * FROM registration";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>


    <div class="container">

        <h2>New Registrations</h2>

<table class="table">

    <thead>

        <tr>


        <th>UIU ID</th>
        <th>Name</th>

        <th>Email</th>
        <th>Skills</th>

        

        

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>



                    <td><?php echo $row['uiuid']; ?></td>
                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['skills']; ?></td>



                    
                    



                    

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>