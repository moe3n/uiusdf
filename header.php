
<html>
<head>
    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        * {
	box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
  font-size: 100%;
  font-family: sans-serif;
}

section {
	/* height: 100vh; */
	/* background: url(https://cdn.pixabay.com/photo/2018/01/22/13/07/sea-3098951_1280.jpg); */
	/* background-size: cover; */
	background-repeat: no-repeat;
    background-position: center center;
}

header {
	display: flex;
	justify-content: space-between;
    align-items: center;
	height: 18%;
	box-shadow: 0 5px 15px rgba(0,0,0,.2);	
}

.logo img {
   margin-left: 2.3em;
   max-height: 50px;
   /* max-width: 100%; */
   height: auto !important;
}

 nav ul {
	display: flex;
    flex-flow: nowrap;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	transition: .5s;
    list-style-type: none;
}

ul li a {
	padding: 10px 20px;
	text-transform: uppercase;
	text-decoration: none;
	color: #262625;
	font-weight: bold;
    transition: .5s;
}

ul li a:hover {
	background: #000;
	color: #fff;
    transition: .5s
}

.menu-trigger {
    display:none;
    margin-right: 1.5em;
	background: #D56287;
    color: #fff;
    padding: 5px;
	cursor: pointer;
	font-weight: bold;
    text-decoration: none;
}

@media screen and (max-width:816px) {
	
     .menu-trigger {
    display:block;
  }
  
    header {
	display: flex;
	align-items: flex-start;
	height: 65%;
	
	
    }
  
    nav ul {
    display:block;
	
	
	}
	
	ul li {
    width: 100%;
	
	}
   
    ul li a {
        display: block;
		/* text-align: center; */
		color: #ffff;
		background: #dcdedc;
        
	}
  
}

@media (max-width: 359px)
{
	.logo img {
       margin-left: 0.1em;
       
}
	
    
}
    </style>
</head>


<body>
      <section>
        <header>
            <div class="logo">
		      <a href="index.php"><img src="Images/logo.jpg.png" alt=""></a>
            </div>
            <nav>
		    <ul>
			    <li><a href="index.php">Home</a></li>
				<li><a href="activities.php
                ">Activities</a></li>
				<li><a href="peoples.php">People</a></li>
				<li><a href="media.php">Media</a></li>
				<li><a href="registration.php">Join us</a></li>
				
			</ul>
            </nav>
            <div class="menu">
               <a href="#" class="menu-trigger">Menu</a>
            </div>
         </header>			
      </section>

      <script>
        $(document).ready(function() {
  $('.menu-trigger').click(function() {
    $('ul li').slideToggle(500);
  });//end slide toggle
  
  $(window).resize(function() {		
		if (  $(window).width() > 500 ) {			
			$('ul li').removeAttr('style');
		 }
	});//end resize
});//end ready
      </script>
    </body>

</html>

