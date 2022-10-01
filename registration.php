


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

    <form action="reg-create.php" method="POST">
      <fieldset>
        <input type="text" name="uiuid" placeholder="Enter UIU ID"/>
        <input type="text" name="name" placeholder="Enter your name"/>
        <input type="text" name="email" placeholder="Enter your email"/>
        <input type="text" name="skills" placeholder="Tell us about your skills"/>
        <input class="btn btn-primary" type="submit" name="submit" value="submit" />
      </fieldset>
    </form>

    </div>
    </div>    
</section>
         


<!--------------------------Footer---------------------------> 

<?php include "footer.php" ?>

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

</script>

  
</body>
</html>