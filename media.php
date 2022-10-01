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
      .gallery {
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  grid-template-rows: repeat(8, 5vw);
  grid-gap: 1.5rem; 
  background-color: whitesmoke;
  padding: 1.5rem;
  
}

.g1{
  margin-bottom: 1.5rem;
}

.gallery__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block; 
}

.gallery__item--1 {
  grid-column-start: 1;
  grid-column-end: 3;
  grid-row-start: 1;
  grid-row-end: 3;

  /** Alternative Syntax **/
  /* grid-column: 1 / span 2;  */
  /* grid-row: 1 / span 2; */
}

.gallery__item--2 {
  grid-column-start: 3;
  grid-column-end: 5;
  grid-row-start: 1;
  grid-row-end: 3;

  /** Alternative Syntax **/
  /* grid-column: 3 / span 2;  */
  /* grid-row: 1 / span 2; */
}

.gallery__item--3 {
  grid-column-start: 5;
  grid-column-end: 9;
  grid-row-start: 1;
  grid-row-end: 6;

  /** Alternative Syntax **/
  /* grid-column: 5 / span 4;
  grid-row: 1 / span 5; */
}

.gallery__item--4 {
  grid-column-start: 1;
  grid-column-end: 5;
  grid-row-start: 3;
  grid-row-end: 6;

  /** Alternative Syntax **/
  /* grid-column: 1 / span 4;  */
  /* grid-row: 3 / span 3; */
}

.gallery__item--5 {
  grid-column-start: 1;
  grid-column-end: 5;
  grid-row-start: 6;
  grid-row-end: 9;

  /** Alternative Syntax **/
  /* grid-column: 1 / span 4; */
  /* grid-row: 6 / span 3; */
}

.gallery__item--6 {
  grid-column-start: 5;
  grid-column-end: 9;
  grid-row-start: 6;
  grid-row-end: 9;

  /** Alternative Syntax **/
  /* grid-column: 5 / span 4; */
  /* grid-row: 6 / span 3; */
}
    </style>
  </head>
  <body> <?php include 'header.php'; ?>
    <section class="sub-header">
      <h1>Image Gallery</h1>
    </section>

    <!-------------------------Media--------------------------->
    <!-- <div class="container d-flex">
      <div class="cards">
        <img src="Images/event-arduino.jpg" class="card-img rounded-3" alt="" />
        <div class="card-body">
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <img src="images/cover.jpg.jpg" class="img-fluid" />
          <a href="" class="hero-btn red-btn">See More</a>
        </div>
      </div>
    </div> -->
<!-- media     images -->
    <!-- <div class="container">
        <div class="m-wrapper">
          <div class="content">
            <img src="Images/event.jpg.jpg" alt="" class="m-img">
            <p>Trinomial podcast</p>
          </div>
          <div class="content">
            <img src="Images/event.jpg.jpg" alt="" class="m-img">
            <p>Trinomial podcast</p>
          </div>
          <div class="content">
            <img src="Images/event.jpg.jpg" alt="" class="m-img">
            <p>Trinomial podcast</p>
          </div>

        </div>
    </div> -->

    <!-- grid -->
    <div class="container">
            <div class="gallery">
                <figure class="gallery__item gallery__item--1">
                    <img src="Images/event-photo-cit.jpg" alt="Gallery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--2">
                    <img src="Images/media1.jpg" alt="Gallery image 2" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--3">
                    <img src="Images/media2.jpg" alt="Gallery image 3" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--4">
                    <img src="Images/media3.jpg" alt="Gallery image 4" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--5">
                    <img src="Images/media5.jpg" alt="Gallery image 5" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--6">
                    <img src="Images/media4.jpg" alt="Gallery image 6" class="gallery__img">
                </figure>
            </div>
            <div class="gallery g1">
                <figure class="gallery__item gallery__item--1">
                    <img src="Images/orientation.jpg.jpg" alt="Gallery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--2">
                    <img src="Images/media6.jpg" alt="Gallery image 2" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--3">
                    <img src="Images/oldmedia1.jpg" alt="Gallery image 3" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--4">
                    <img src="Images/oldmedia3.jpg" alt="Gallery image 4" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--5">
                    <img src="Images/oldmedia4.jpg" alt="Gallery image 5" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--6">
                    <img src="Images/oldmedia2.jpg" alt="Gallery image 6" class="gallery__img">
                </figure>
            </div>
        </div>

    <!--------------------------Footer--------------------------->
    <?php include "footer.php" ?>

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
