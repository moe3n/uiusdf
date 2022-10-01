<!-- require dbconnect -->

<?php include("dbconnect.php"); ?>

<?php

$sql = "SELECT e_id, e_title, `image` FROM events";
$result = $conn->query($sql);
$events = $result->fetch_all(MYSQLI_ASSOC);
// echo $events[0]['image'];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["e_id"]. " - Event Name: " . $row["e_title"]. " " . $row["image"]. "<br>";
    $id = $row["e_id"];
    
  }
} else {
  echo "0 results";
}

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
      @media (max-width: 800px) {
        .card-container {
          display: flex;
          flex-direction: column;
          align-items: center;
          /* max-width: 300px; */
          margin: 0 auto;

          /* background-color: red; */
        }
        .card-container .wrapperr {
          max-width: 100%;
          overflow: hidden;
          margin-bottom: 10px;
          padding: 0;
          /* background-color: black; */
        }
        
        
      }
    </style>
  </head>
  <body><?php include 'header.php'; ?>
    <section class="header">
      
      <div class="text-box">
        <h1>Enhance Your Skills, Get Better!</h1>
      </div>
    </section>

    <!-------------Description-------------->
    <div class="container mt-4">
      <div class="row">
        <div class="col pt-5">
          <h1>What is UIU Skill Development Forum?</h1>
          <p style="font-size: 17px; color: black;">
            UIU Skills Development Forum is an initiative of UIU Career
            Counseling Center. Developing different skills of UIU students is
            our aim. Skills development is very essential to address the
            oppotunities and challenges to meet the demands of changing market
            economies and new technologies in the context of globalization. In
            today's highly vying world,students with only academic
            qualifications are not enough to conquer the world. Different
            co-curricular activities are also very important. UIUSDF works for
            building students career in a more competitive way.
          </p>
        </div>
        <div class="col">
          <img src="Images/thinking.jpg" alt="thinking" class="img-fluid" />
        </div>
      </div>
    </div>
    <!-- events cards -->

    <div class="container my-5">
      <h2 class="title">
        <span class="title-word title-word-1">Notable</span>
        <span class="title-word title-word-2">Events</span>
      </h2>
    </div>

    <div class="container d-flex p3-4">
      <div class="cards rounded-3">
        <img src="<?php echo $events[0]['image'] ?>" class="card-img" alt="" />
        <div class="card-body">
          <h5 class="card-title"><?php echo $events[0]['e_title'] ?></h5>

          <!-- <a href="href="event-detail.php?id=<?php echo $events['e_id']; ?>" class="btn btn-primary">Read More</a> -->
        </div>
      </div>
      <div class="cards">
        <img src="<?php echo $events[1]['image'] ?>" class="card-img" alt="" />
        <div class="card-body">
          <h5 class="card-title"><?php echo $events[1]['e_title'] ?></h5>

          <!-- <a href="#" class="btn btn-primary">Read More</a> -->
        </div>
      </div>
      <div class="cards">
        <img src="<?php echo $events[3]['image'] ?>" class="card-img" alt="" />
        <div class="card-body">
          <h5 class="card-title"><?php echo $events[3]['e_title'] ?></h5>

          <!-- <a href="#" class="btn btn-primary">Read More</a> -->
        </div>
      </div>
    </div>


    <!-------------Our Goals-------------->
    <div class="container mt-5">
      <h2 class="title">
        <span class="title-word title-word-1">This</span>
        <span class="title-word title-word-2">are</span>
        <span class="title-word title-word-3">our</span>
        <span class="title-word title-word-4">goals!</span>
      </h2>
    </div>
    <div class="container d-flex mt-5">
      <div class="cardss toggleable m-1">
        <div class="text-holder">
          <h2 class="h2">Learn to be Indespensible</h2>
        </div>
        <div class="image-holder"></div>
      </div>
      <div class="cardss toggleable mt-2 mx-3">
        <div class="text-holder">
          <h1 class="">Pickup New Skills</h1>
        </div>
        <div class="image-holder"></div>
      </div>
      <div class="cardss toggleable m-1">
        <div class="text-holder">
          <h1 class="">Sense of timing</h1>
        </div>
        <div class="image-holder"></div>
      </div>
    </div>
    <!-- -------------------------- more detail goals ---------------------------->


    <div class="container">
    <div class="card-container ">
      <div class="wrapperr">
        <div class="banner-image"> </div>
        <h1 class="card-h1"> Educational Development</h1>
        <p class="card-p">A portion of an organization's activities should reflect the mission of the University, which is to “...enable students to realize their educational goals.”
          An intentional effort should be made to enrich each member's educational development through the programs, activities, and priorities of the organization.</p>
        </div>
       
      
      <div class="wrapperr ">
        <div class="banner-image2"> </div>
        <h1 class="card-h1"> Individual Behavior</h1>
        <p class="card-p">The personal behavior of each member impacts both the organizations
          and the University community. This makes it imperative for the
          individual to act ethically at all times, including demonstrating
          self-respect and integrity.</p>
        </div>
       
      
      <div class="wrapperr">
        <div class="banner-image1"> </div>
        <h1 class="card-h1"> Community Relation</h1>
        <p class="card-p">Organizations that conduct activities that impact the surrounding
          community should seek to maintain supportive, communicative, and
          positive relations with the community. The impression made by an
          organization on the community reflects upon the University as a
          whole. All members will conduct themselves so as to support a
          positive relationship with the community.</p>
        </div>
       
      </div>
    </div>
  </div>

    
    <!-- ------------------------Footer--------------------------->


    <?php include "footer.php" ?>

    <!--------------------------Footer end------------------------- -->
    

    <!-------JavaScript for Toggle Menu------->

    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.right = "-200px";
      }

      // -----------------toggleable card-----------------

      const toggleables = document.querySelectorAll(".toggleable");

      const toggleImage = (e) => {
        const icon = e
          .composedPath()
          .find((el) => el.classList.contains("toggleable"));

        if (icon.classList.contains("toggled")) {
          icon.classList.remove("toggled");
        } else {
          icon.classList.add("toggled");
        }
      };

      toggleables.forEach((toggleable) => {
        toggleable.addEventListener("click", toggleImage);
      });
    </script>
  </body>
</html>
