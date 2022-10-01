<?php 

include "dbconnect.php";

$sql = "SELECT * FROM people";

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

        <h2>Members</h2>

<table class="table">

    <thead>

        <tr>



        <th>Name</th>

        <th>Role</th>

        <TH>OPTIONS</TH>

        

        

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>



                    <td><?php echo $row['pname']; ?></td>
                    <td><?php echo $row['prole']; ?></td>

                    
                    <td><img src="<?php echo $row['image']; ?>" alt="" height="40px"></td>



                    

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>