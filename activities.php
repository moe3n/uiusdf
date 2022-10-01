
<?php 

include "dbconnect.php";

$sql = "SELECT * FROM events";

$result = $conn->query($sql);
$events = $result->fetch_all(MYSQLI_ASSOC);
// echo $peoples[0]['image'];
$index= 0;
$index = count($events)-1;
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
      .row1{
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 5px;
      }
    </style>
  </head>
  <body><?php include 'header.php'; ?>
    <section class="sub-header">
    
      <h1>Our Activities</h1>
    </section>

    <!-------------------------Activities------------------------>

    <section class="activities">


    <div class="seminar">
        <h1>Happenning Right Now</h1>
        <br />
        <img src="<?php echo $events[$index-1]['image'] ?>" />
        <div class="date p-5">
          <h2><?php echo $events[$index-1]['e_title'] ?><br /><?php echo $events[$index-1]['e_date'] ?></h2>
        </div>
      </div>
      <!-- <div class="row">
        <div class="activities-col">
          <h1>Career Talk</h1>
          <p>
            Career talk with the Trinomial Podcast was our biggest event ever hosting more than a thousand participants.
          </p>
          <a href="" class="hero-btn red-btn">See More</a>
        </div>
        <div class="activities-col">
          <img src="images/careertalk.jpg.jpg" />
        </div>
      </div> -->


      <!-- overlay -->

      <h2>Recent two events</h2>


<div class="container d-flex">
<div class="ov-container">
  <img src="<?php echo $events[$index]['image']; ?>" alt="Avatar" class="ov-img" >
  <div class="overlay">
    <div class="ov-text">
      <p> 
      <?php echo $events[$index]['e_desc'] ?>
      </div>
<!-- <h2>Hello World</h2> -->
  </div>
</div>
<div class="ov-container mx-4">
  <img src="<?php echo $events[$index-1]['image']; ?>" alt="Avatar" class="ov-img" >
  <div class="overlay">
    <div class="ov-text">
      <p> 
      <?php echo $events[$index-1]['e_desc'] ?>
      </div>
<!-- <h2>Hello World</h2> -->
  </div>
</div>
 </div>

      <?php foreach($events as $event){ ?>
      
      <div class="row row1 rounded mt-4 px-3">

        <div class="activities-col ">
          <h1><?php echo $event['e_title']; ?></h1>
          <p>
            <?php echo $event['e_desc']; ?>
          </p>
          <!-- <a href="" class="hero-btn red-btn">See More</a> -->
        </div>
        <div class="activities-col">
          <img src="<?php echo $event['image']; ?>" />
        </div>
      </div>
      <?php } ?>


      
      <br />
      <br />
      <!-- <h1 class="event1">Successful Events</h1>
      <br />
      <div class="event1-row">
        <div class="event1-col">
          <img src="images/event.jpg.jpg" />
           <a href="" class="hero-btn red-btn">See More</a> 
        </div>
      </div> -->

      
      <div class="featured-event">
        <h1>Featured Event</h1>
        <p>
          <img src="images/tarunnya_adda.jpg.jpg" />
          <h1>Tarunnya Adda</h1>
          <br />Tarunnya Adda is a platform for the students of UIU to get the opportunity to
          participate and share their ideas and thoughts. Here we do what plan to do and we 
          are here to make a difference. At the end we discuss club's progress and future plan. 
        </p>
        <a href="participate.php" class="hero-btn red-btn">Request to participate</a>
      </div>
      
    </section>

        <!--------------------------Footer--------------------------->

        <?php include "footer.php" ?>
    
        <!--------------------------Footer end--------------------------->

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
