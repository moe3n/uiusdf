<?php include 'header.php'; ?>
<?php 

include "dbconnect.php";

    if (isset($_POST['update'])) {

        $e_title = $_POST['e_title'];

        $e_desc = $_POST['e_desc'];

        $e_date = $_POST['e_date'];

        $image = $_POST['image'];



       
        
        $sql = "UPDATE `events` SET `e_title`='$e_title',`e_desc`='$e_desc',`e_date`='$e_date',`image`='$image' WHERE id = $id";

        // $sql = "UPDATE `signup_input` SET  `name`='$name',`password`='$password',`email`='$email','gender'=$gender WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `signup_input` WHERE `id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $id=$row['id'];

            $name = $row['name'];

            $password = $row['password'];

            $email = $row['email'];

            $gender = $row['gender'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="event-update.php" method="post">

        <fieldset>
        <legend>Event information:</legend>

        title:<br />

        <input type="text" name="e_title" />

        <br />

        description:<br />

        <input type="text" name="e_desc" />

        <br />

        date:<br />

        <input type="date" name="e_date" />

        <br />
        image:<br />

        <input type="text" name="image" />

        <!-- input image -->

        <br />

        <br /><br />

        <input type="submit" name="submit" value="submit" />
      </fieldset>

        </form> 

        <button><a href="view.php">view</a></button>
        <button><a href="create.php">create</a></button>
        
        

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

  
   


}

?> 