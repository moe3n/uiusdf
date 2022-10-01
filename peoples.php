<?php 

include "dbconnect.php";

$sql = "SELECT * FROM people";

$result = $conn->query($sql);
$peoples = $result->fetch_all(MYSQLI_ASSOC);
// echo $peoples[0]['image'];
$index= 0;
$index = count($peoples)-1;
// echo $index; 


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UIU Skill Development Forum</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <style>
       .imgs{
        height: 300px;
        max-width: 400px;
        margin:20px;
      }
    </style>
  </head>
  <body>
  <?php include 'header.php'; ?>
    <section class="sub-header">
      
      <h1>Our Peoples</h1>
    </section>

<!-- ------- -->
    <div class="container" style="background:whitesmoke">

      <div class="row">
        <div class="col-md-12">
          <div class="verify">
            <h2 class="text-primary">Verify Membership</h2>
            <form action="people-verify.php" method="POST">
              <input class="" type="text" name="uiuid" placeholder="Enter UIU ID" />
              <button class="btn btn-outline-primary" type="submit" name="submit">Verify</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-------------------------Peoples--------------------------->

    <section class="peoples">
      <h1>A Glimse of Us</h1>
      <!-- <div class="row">
        <div class="peoples-col">
          <img src="images/people.jpg.jpg" />
        </div>
      </div> -->
      <div class="container">
  <div class="row">
    <div class="col">
      <img src="Images/orientation.jpg.jpg" class="imgs" alt="">
    </div>
    <div class="col">
    <img src="Images/people.jpg.jpg" class="imgs" alt="">
    </div>
    <div class="col">
      <img src="Images/tarunnya_adda.jpg.jpg" class="imgs" alt="">
    </div>
    <div class="col">
      <img src="Images/event-photo-cit.jpg" class="imgs" alt="">
    </div>
  </div>
</div>

      <div class="row d-flex ">
        <div class="peoples-col2 mx-5">
          <h3>Total Members</h3>
          <!-- <a href="" class="hero-btn red-btn">See Here</a> -->
          <div class="hero-btn rounded rounded-pill bg-danger"><?php echo count($peoples);?> </div>
        </div>
        <div class="peoples-col2">
          <h3>Last Recruit</h3>
          <a href="" class="hero-btn btn-danger rounded-pill"><?php echo $peoples[$index]['pname'];?></a>
        </div>
        
      </div>
    </section>

    <!-- people table ------------------------ -->

    <?php include 'people-view.php'; ?>
    

<!-- 
    <div class="container"><h2>Members</h2>
<table class="table">

    <thead>

        <tr>



        <th>Name</th>

        <th>Role</th>

        

        

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

</table> -->
<!-- </div> -->

    <!--------------------------Footer--------------------------->
    <?php include 'footer.php'; ?>

    <!-------JavaScript for Toggle Menu------->

    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.right = "-200px";
      }
    </script>
  </body>
</html>
