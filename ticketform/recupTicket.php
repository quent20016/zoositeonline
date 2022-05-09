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
    <link href="../CSS/style.css" rel="stylesheet" type="text/css">
    <title>Affichage de validation</title>
</head>
<body>
<header>
    <div id="firstpbody"
        class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
        style="background-image: url('https://nexus.leagueoflegends.com/wp-content/uploads/2016/11/LOL_CMS_Welcome_Hero.jpg');">
        <h1 class="mb-3 h2">Zoo of the rift</h1>
        <h1 class="mb-3 h2">  Votre Ticket  </h1>
    </div>
    </header>

    <div id = "elementticket">
    <?php
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $priority = $_POST['priority'];
    $state = $_POST['states'];
    $texte = $_POST['detail'];
    $secteur = $_POST['Place'];
    echo '<h3 style="color:ghostwhite" "elementticket">Email : '.$email."</h3>";
    echo '<h3 style="color:ghostwhite" id= "elementticket">Sujet du ticket : '.$subject."</h3>";
    echo '<h3 style="color:ghostwhite" id= "elementticket">Niveau de priorité sur 10 : '.$priority."</h3>";
    echo '<h3 style="color:ghostwhite" id= "elementticket">Etat d avancement : '.$state."</h3>";
    echo '<h3 style="color:ghostwhite" id= "elementticket">Secteur : '.$secteur."</h3>";
    echo '<h3 style="color:ghostwhite" id= "elementticket">Description : '.$texte."</h3>";
    
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bddzoo";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $sql = 'insert into ticket(login, sujet, description, prio, secteur, statut) values("'.$email.'"'.',"'.$subject.'"'.',"'.$texte.'"'.',"'.$priority.'"'.',"'.$secteur.'"'.',"'.$state.'");';
            // $sql = 'insert into ticket(login, sujet, description, prio, secteur, statut) values("zaza","fuite d eau","l eau coule du robinet","moyen","savane", "en cours");';
            if (mysqli_query($conn ,$sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
            ?>
    </div>

    <div>
        <ul>
              <li>
                <a style="color:ghostwhite" href="../ticketform/afficheListeTickets.php"> In database  </a>
              </li>
          </ul>
    </div>
</body>
<?php include "../footer.php"; ?>
</html>