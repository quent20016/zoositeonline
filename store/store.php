<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/projectsitezoo/images/favicon.ico" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/projectsitezoo/store/store.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="store.js"></script>
    <title>Store</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #b8860b">
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

    <div class="carousel-inner" id="titre">
        <h1>²²²²</h1>
        <h1>Store</h1>
        <h2>Here you can buy different items from the League of Legend ZOO</h2>
    </div>
    <div id="invisible">
        <p>heyyy</p>
    </div>
    <div id="store">
        <?php
        #récupération de la liste des articles
        $articles = explode("\n", file_get_contents("../BDD/product.txt", true));
        for ($i=0; $i<count($articles); $i++) { #pour chaque element, on l'affiche
            $list = explode("µ", $articles[$i]);
            echo "<div id=KIT".$i." >";
            echo "<div> <h3 style='text-align : center;'> <strong>".$list[4]." : ".$list[2]." € </strong> </h3> (".$list[1]." elements restants) </div>";
            echo "<div> <img src=".$list[3]."> </div>";
           # if ($_SESSION["USER"] == -1){ #si l'utilisateur n'est pas connecté, on affiche un bouton dédié
           #     echo "<button class='article' style='background:#555' disabled>Vous n'êtes pas connecté</button>";
           # }
            if ($list[1] > 0){
                #si un article est disponible, on affiche le bouton pour le commander
                echo "<div> <button name= ".$list[2].",".str_replace(" ", "_", $list[4])." id=".$i." class='article' onclick='panier(this)' >JE COMMANDE</button> </div>";
            }
            else{
                #si l'article est en rupture de stock, on affiche un bouton pour l'anoncer
                echo "<button class='article' style='background:#555' disabled>Rupture de stock</button>";
            }
            echo "<p style='color: #0f4236; font-size: 250%;'>heyy</p>";
           echo "</div>";
        }
        ?>
    </div>

    <div  id="destination">
        <h2>Votre Panier</h2>
        <form id="FormPanier" action="../store/Paiement/Paiement.php" method="POST">
            <u> Montant du panier : <span id="panierPrice"  name="panier"> 0 </span>€</u>
            <div id="panierText"></div>
            <br>
            <input type="button" id="panierButton" onClick="validerPanier()" value="VALIDER LE PANIER" disabled>
            <input type="hidden" name="cotisation" value ="0">
            <input type="hidden" name="ids" id="ids" value ="">
            <input type="hidden" name="price" id="price" value ="0">
        </form>
    </div>

</body>
<footer>
    <center>For any contact or complaint please send an email to <a href="mailto:contact@bds.fr">contact@projectlolzoo.fr</a> </center>
</footer>
</html>