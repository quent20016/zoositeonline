<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../images/favicon.ico" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   <script type="text/javascript" src="../JS/function.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/mainStyle.css" rel="stylesheet" type="text/css">
    <title>Accueil</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01"
          aria-expanded="true"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php session_start();
             ?> 
            <li class="nav-item active">
              <!-- <a class="nav-link" aria-current="page"  href="#" style="color: aliceblue;">ICON</a> -->
              <!-- <img id="logo" src="imgtests\logo.png" class="d-block w-100" alt="..."> -->
            </li>
            <li class="nav-item active">
            <a class="nav-link" aria-current="page"  href="../index.php" style="color: aliceblue;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Demo_Ani/demo.php" style="color: aliceblue;">Demonstrations and Animals</a>
            </li>
            <li class="nav-item">
              <?php if($_SESSION["sessionconnect"]!="null"){
                  echo '<a class="nav-link" href="../hotel/hotel.php" style="color: aliceblue;">Hotel</a>';
                }else{
                  echo '<a class="nav-link" href="#" style="color: aliceblue;">Hotel</a>';
                }?>
              
            </li>
            <li class="nav-item">
            <?php 
                if($_SESSION["sessionconnect"]!="null"){
                  echo '<a class="nav-link" href="../store/store.php" style="color: aliceblue;">Store</a>';
                }else{
                  echo '<a class="nav-link" href="#" style="color: aliceblue;">Store</a>';
                }
              ?>
            </li>
            <li class="nav-item">
              <?php 
                if($_SESSION["sessionconnect"]!="null"){
                  echo '<a class="nav-link" href="../ticketform/formTicket.php" style="color: aliceblue;">Professionals - Ticket Manager</a>';
                }else{
                  echo '<a class="nav-link" href="#" style="color: aliceblue;">Professionals - Ticket Manager</a>';
                }
              ?>
            </li>
            <li class="nav-item">
              <?php  if($_SESSION["sessionconnect"]=="null"){
                 echo' <a class="nav-link" style="color:ghostwhite" href="../login/inscription.php"> Register </a>';
              }
              ?>
                
              </li>
            <?php   
                if($_SESSION["sessionconnect"]!="null"){
                    echo '<a class="nav-link" style="color: aliceblue;">';
                    echo "Connecté ";
                    echo $_SESSION["sessionconnect"];
                    echo '</a>';
                    echo '<a class="nav-link" href="../login/logout.php" style="color: aliceblue;">Logout</a>';
                }else{
                    echo '<a class="nav-link" href="../login/authentification.php" style="color: aliceblue;">Login</a>';
                    $_SESSION["sessionconnect"]="null";
                }
            ?>
            <!-- <li class="nav-item">
              <a class="nav-link" href="authentification.html" style="color: aliceblue;">Login</a>
            </li> -->
          </ul>
        </div>
      </div>
  </nav>
    <!-- Navbar -->
    <!-- Caroussel -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="../images\Caroussel\Gnar.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <div id="container"class="mask position-relative" style="background-color: rgba(0, 0, 0, 0.6);">
              <div id="container" class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                  <h1 class="mb-3" style="color:white">Zoo of the Rift</h1>
                  <h4 class="mb-3" style="color:white">Immerse yourself in the world of League of Legend</h4>
                  <a class="btn btn-outline-light btn-lg" href="../hotel/hotel.php" role="button">Book now !</a>
                  <h1 style="font-size: 25px;">_________</h1>
                </div>
              </div>
            </div>
            <a style="color:white" href="#zone0"><h3 style="color:white">Zoom on the map</h3></a>
            <p style="color:white">Welcome to the website of the Zoo de la Faille! In this new theme park, you will discover the bestiary of your favourite universe. </p>
            <p style="color:white">Through all the animals presented here, you will live an unforgettable adventure. </p>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="2000">
          <img src="../images/Caroussel/Jungle.png" class="d-block w-100" alt="...">
          <div id="container2" class="carousel-caption d-none d-md-block">
            <a style="color:white" href="#zone1"><h3 style="color:white">The River Area</h3></a>
            <p style="color:white" > In this zone, you will discover aquatic creatures as ferocious as they are incredible. </p>
            <p style="color:white">It is in this river that they are most at home, so beware! (Area 1)</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/Caroussel/Red.png" class="d-block w-100" alt="...">
          <div id="container2" class="carousel-caption d-none d-md-block">
            <a style="color:white" href="#zone2"><h3 style="color:white">The Jungle Area</h3></a>
            <p style="color:white" > It is in this jungle that all the land animals of the park hide. </p>
            <p style="color:white">Adapted to this element they are as diverse as they are numerous. Do not touch them, they could bite you. (Area 2)</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/Caroussel/Lanes.png" class="d-block w-100" alt="...">
          <div id="container2" class="carousel-caption d-none d-md-block">
            <a style="color:white" href="#zone3"><h3 style="color:white"> 3 Lines </h3></a>
            <p style="color:white"> The park is criss-crossed by various paths and highways. </p>
            <p style="color:white">These three main roads and the cross roads allow you to move around the park and enjoy the parades and other shows that take place there. Don't get lost! (Area 3)</p>
          </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <style>
        .zoom {
          transition: transform .2s; /* Animation */
          margin-left: auto;
      margin-right: auto;
      vertical-align: middle;
          margin: 0 auto;
        }
        .zoom:hover {
          transform: scale(1.25); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
              <div>
                <h3 style="color:white" id="zone0">Here you can find hotel in blue, stores and commercial area in red : </h3>
                <img class="zoom" id = "map1" src="../images/townMap1.GIF" alt="townMap1"  width="750" />
                <p style="color:white"> At both ends of our park, you will find two areas dedicated to entertainment: stores, souvenir stores, restaurants, attractions and more. </p>
                <p style="color:white">To allow you to enjoy our zoo experience to the fullest it is even possible to stay in our many star hotels...</p>
                <!-- <img src="images\map-HD.jpg" class="img-fluid" alt="Responsive image"> -->
              </div>

              <div>
                <h3 id="zone1">The River : </h3>
                  <!-- <img src="images\map-HD_zone_A.png" class="img-fluid" alt="Responsive image"> -->
                  <img class="zoom" id = "map1" src="../images/River.gif" alt="River"  width="750" />
                  <p style="color:white">Marking a boundary between different biomes of the "jungle", the river is an area where various species live in freedom in harmony. </p>
                  <p style="color:white">It is possible to do various activities allowing you to get closer to our animals: canoeing, boat rides, swimming area...</p>
                </div>

              <div>
                <h3 id="zone2">The Jungle : </h3>
                  <img class="zoom" src="../images\Jungle.gif" class="img-fluid" alt="Jungle" width="750">
                  <p style="color:white" class="mb-0">The heart of our park, the "jungle" is divided into 4 different biomes: hot, cold, tropical and desert climate.</p>
                  <p style="color:white"> You will find our different creatures that flourish in impressive enclosures. Wonderment awaits you...</p>
                </div>

            <div>
              <h3 id="zone3">3 Lines : </h3>
              <img class="zoom" src="../images\Lanes.gif" class="img-fluid" alt="Lanes" width="750">
              <p style="color:white">On these three large lanes you will find fantastic walking trails, views of the plains below and a breath of fresh air like no other.</p>
              <p style="color:white"> A perfect place to rest, relax and enjoy the three gourmet restaurants at your disposal.</p>
            </div>
</body>
<?php include('footer.php');?>
<!-- <footer>
    <center>For any contact or complaint please send an email to <a href="mailto:contact@projectlolzoo.fr">contact@projectlolzoo.fr</a> </center>
</footer> -->
</html>