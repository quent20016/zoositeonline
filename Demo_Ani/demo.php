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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/style.css" rel="stylesheet" type="text/css">
    <title>Demonstrations and Animals</title>
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
            <a class="nav-link" aria-current="page"  href="/projectsitezoo/index.php" style="color: aliceblue;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/projectsitezoo/Demo_Ani/demo.php" style="color: aliceblue;">Demonstrations and Animals</a>
            </li>
            <li class="nav-item">
              <?php if($_SESSION["sessionconnect"]!="null"){
                  echo '<a class="nav-link" href="/projectsitezoo/hotel/hotel.php" style="color: aliceblue;">Hotel</a>';
                }else{
                  echo '<a class="nav-link" href="#" style="color: aliceblue;">Hotel</a>';
                }?>
              
            </li>
            <li class="nav-item">
            <?php 
                if($_SESSION["sessionconnect"]!="null"){
                  echo '<a class="nav-link" href="/projectsitezoo/store/store.php" style="color: aliceblue;">Store</a>';
                }else{
                  echo '<a class="nav-link" href="#" style="color: aliceblue;">Store</a>';
                }
              ?>
            </li>
            <li class="nav-item">
              <?php 
                if($_SESSION["sessionconnect"]!="null"){
                  echo '<a class="nav-link" href="/projectsitezoo/ticketform/formTicket.html" style="color: aliceblue;">Professionals - Ticket Manager</a>';
                }else{
                  echo '<a class="nav-link" href="#" style="color: aliceblue;">Professionals - Ticket Manager</a>';
                }
              ?>
            </li>
            <li class="nav-item">
              <?php  if($_SESSION["sessionconnect"]=="null"){
                 echo' <a class="nav-link" style="color:ghostwhite" href="/projectsitezoo/login/inscription.php"> Register </a>';
              }
              ?>
                
              </li>
            <?php   
                if($_SESSION["sessionconnect"]!="null"){
                    echo '<a class="nav-link" style="color: aliceblue;">';
                    echo "Connecté ";
                    echo $_SESSION["sessionconnect"];
                    echo '</a>';
                    echo '<a class="nav-link" href="/projectsitezoo/login/logout.php" style="color: aliceblue;">Logout</a>';
                }else{
                    echo '<a class="nav-link" href="/projectsitezoo/login/authentification.php" style="color: aliceblue;">Login</a>';
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
    <!-- <div class="carousel-inner" id="titre">
        <h1>²²²²</h1>
        <h2>Come discover our creatures</h2>
    </div> -->
    <div id="firstpbody"
        class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
        style="background-image: url('https://nexus.leagueoflegends.com/wp-content/uploads/2016/11/LOL_CMS_Welcome_Hero.jpg');">
       <h1>      </h1>
        <h1 class="mb-3 h1" color=white;> Come discover our creatures</h1>
    </div>
  <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="../images/animals/Renekton.png"  class="img-thumbnail" alt="Lights" style="width: 80%">
        <div class="caption">
          <p style="color:white;" >-With its Latin name "Renektus Crocodilus", this 2 ton mastodon reigns over its territory of several kilometers with an iron fist. Predator in the water as well as on land, it wears a thick skin almost impenetrable. Its greatest asset is its jaw capable of exerting a force of about 20 000 Newton. </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="../images/animals/Rammus_.png" class="img-thumbnail" alt="Nature" style="width:80%">
        <div class="caption">
          <p style="color:white;">Rammus are a rare desert species.  These giant armadillos can reach up to 1 ton and have a fearsome spiny carapace. They live mainly in the Shurima desert and its surroundings as herbivores. We can observe in this species a very long life expectancy because of their thick skin and their carapace which allow them to repel any predator. </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="../images/animals/Anivia_.png" class="img-thumbnail" alt="Fjords" style="width:80%">
        <div class="caption">
          <p style="color:white;">- Lurking in the clouds, the Anivius is the king of the sky. With a wingspan of 3 meters long and its powerful talons, this bird of prey is a threat to all things crossing its path. It has indeed a very territorial and protective instinct.</p>
        </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="../images/animals/Fizz_.png"  class="img-thumbnail" alt="Lights" style="width: 80%">
        <div class="caption">
          <p style="color:white;">This peaceful amphibian is the ally of all sea giants. It stays like the remora around sharks and other predators. Thus, it can move quickly and stay safe from threats. In exchange, the fizzus clean the parasites of their host and thus make themselves very useful. </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="../images/animals/Skarner.png" class="img-thumbnail" alt="Nature" style="width:80%">
        <div class="caption">
          <p style="color:white;"> Invisible in the vastness of the Shurima desert, the Skarner scorpion despite its appearance is not a predator. Equipped with an impressive survival and protective instinct, it will not hesitate to defend itself if it is threatened. Neither the extreme temperatures of the desert, nor the lack of water frightens it. </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="../images/animals/Teemo.png" class="img-thumbnail" alt="Fjords" style="width:80%">
        <div class="caption">
          <p style="color:white;">A species rarely seen from the mountains, the Teemobus bee produces some of the tastiest honey in the world. It is nevertheless necessary to be wary of its sting because this one is provided with a venom able to paralyze a man. The honey produced, although delicious, remains very rare because it is difficult to access. </p>
        </div>
    </div>
  </div>
</div>
<!-- <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="../images/animals/Renekton.png">
        <img src="../images/animals/Renekton.png"  class="img-thumbnail" alt="Lights" style="width: 80%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="../images/animals/Rammus_.png">
        <img src="../images/animals/Rammus_.png" class="img-thumbnail" alt="Nature" style="width:80%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="../images/animals/Anivia_.png">
        <img src="../images/animals/Anivia_.png" class="img-thumbnail" alt="Fjords" style="width:80%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
</div> -->
<h1 style="color:aliceblue">You have to come to see more ...</h1>
</body>
<!-- <footer sytle="position:relative;">
    <center>For any contact or complaint please send an email to <a href="mailto:contact@bds.fr">contact@projectlolzoo.fr</a> </center>
</footer> -->
<?php include('../footer.php')?>
</html>
