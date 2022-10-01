


<?php include("dbconnect.php"); ?>
<?php 
  if (isset($_POST['submit'])) {

    $uiuid = $_POST['uiuid'];
    $name = $_POST['name'];
    $email = $_POST['email'];


    

    
    $sql = "INSERT INTO `tarunnya` (`uiuid`, `name`, `email`) VALUES ('$uiuid', '$name', '$email')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

       echo "We have received your request. You'll hear from us soon!";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }
//   header("Location: registration.php");

   

?>
<a href="activities.php">Go Back</a>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UIU Skill Development Forum</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- bootstrap -->
  <link
  rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
/>
</head>
<body>
  <?php include 'header.php'; ?>

  <section class="sub-header">
    
    <h1>Join Us</h1>

  </section>
 
<!-----------------------Registration------------------------> 
<section class="registration">
  <div class="row">
    <div class="registration-col">
        <div>
            <i class="fa fa-envelope"></i>
            <span>
                <h5>uiusdf@uiu.ac.bd</h5>
            </span>
        </div>
        <div>
            <i class="fa fa-facebook-official"></i>
            <span>
                <h5>facebook/uiusdf</h5>
            </span>
        </div>

    <div class="registration-col">

    <form action="participate.php" method="POST">
      <fieldset>
        <input type="text" name="uiuid" placeholder="Enter UIU ID"/>
        <input type="text" name="name" placeholder="Enter your name"/>
        <input type="text" name="email" placeholder="Enter your email"/>
        <!-- <input type="text" name="skills" placeholder="Tell us about your skills"/> -->
        <input class="btn btn-primary" type="submit" name="submit" value="submit" />
      </fieldset>
    </form>


</div>

    </div>
    </div>    
</section>
         


<!--------------------------Footer---------------------------> 

    <!--------------------------Footer--------------------------->


    <div class="footer pt-5">
      <div class="container">
        <div class="row">
          <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="footer_section">
              <h4>Links</h4>
              <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="uiu.ac.bd">UIU</a></li>
                <li><a href="cse.uiu.ac.bd">UIU CSE Department</a></li>
                <li><a href="lms.uiu.ac.bd">Students Portal</a></li>

                
              </ul>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="footer_section">
              <h4>Emergency Contacts</h4>
              <img src="Images/emergency-contact-bd.jpg" alt="">
            </div>
          </div>
          
          <div class="col-12 col-sm-6 col-md-12 col-lg-3 mb-5">
            <div class="row">
              <div
                class="col-sm-12 col-md-6 col-lg-12 footer_section footer_section_contact"
              >
                <h4>Contact Us</h4>
                <div class="search">
                  <form action="#" class="subscribe">
                    <input
                      type="email"
                      class="contact_input"
                      placeholder="E-mail address"
                    />
                    <button type="submit" class="submit_button">
                      <i class="fa fa-paper-plane"></i>
                    </button>
                  </form>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-12 social_media">
                <h4>Follow Up</h4>
                <ul>
                  
                  <li>
                    <a href=""><img src="Images/facebook.svg" alt=""></a>
                  </li>
                  <li>
                    <a href=""><img src="Images/twitter.svg" alt=""></a>
                  </li>
                  
                  
                </ul>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--------------------------Footer end--------------------------->

<!-------JavaScript for Toggle Menu------->

<script>

  var navLinks = document.getElementById("navLinks");

  function showMenu(){
       navLinks.style.right = "0";
  }
  function hideMenu(){
       navLinks.style.right = "-200px";
  }


  // var success = document.getElementById("success");
  // function formSuccess(){
  //   success.innerHTML = "Thank you for your registration. We will contact you soon.";
  // }



</script>

  
</body>
</html>