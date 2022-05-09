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
    <title>Modification ticket</title>
</head>
<body>
<?php include ('../header.php'); 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bddzoo";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } ?>
<div id="secpbody">
<form action="modifierTicket.php" method="post">
    <div class="input-group mb-3">
      <span class="input-group-text" name = "selecid">ID : </span>
      <input type="number" name = "selecid" class="form-control" placeholder="number" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3" id=buttonsubmit>
      <button type="submit" name = "submitbutton" class="btn btn-primary">Choose and resolve</button>
      <!-- <button type="submit" name = "buttonresolving" class="btn btn-primary">Resolve</button> -->
    </div>
    
</form>
</div>
<div>
<?php 
      $idselec = 0;
      if(isset($_POST['submitbutton'])){
         $idselec = $_POST['selecid'];
         $sql = "select * from ticket where id=".$idselec;
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<table class="table">';
            echo "<thead>";
            echo '  <tr style="color: LightGrey;">';
            echo '      <th>ID</th>';
            echo '    <th>Login</th>';
            echo '    <th>Sujet</th>';
            echo '      <th>Description</th>';
            echo '      <th>Priority</th>';
            echo '      <th>Secteur</th>';
            echo '     <th>Statut</th>';
            echo "   </tr>";
            echo "</thead>";
             echo '<tbody style="color: aliceblue;"> ';
               echo "<tr>";
               echo "<td>".$row["id"];
               echo "</td>";
               echo "<td>".$row["login"];
               echo "</td>";
               echo "<td>".$row["sujet"];
               echo "</td>";
               echo "<td>".$row["description"];
               echo "</td>";
               echo "<td>".$row["prio"];
               echo "</td>";
               echo "<td>".$row["secteur"];
               echo "</td>";
               echo "<td>".$row["statut"];
               echo "</td>";
               echo "</tr>";     
            echo "</tbody>";
             echo "</table>";}
             $sql = 'update ticket set statut="OK" where id='.$idselec.';';
                $result = $conn->query($sql);
                // $sql = 'insert into ticket(login, sujet, description, prio, secteur, statut) values("zaza","fuite d eau","l eau coule du robinet","moyen","savane", "en cours");';
                $conn->close();
            // echo '<form action = "" method="post"><div name = "buttonresolve" class="input-group mb-3" id=buttonresolve>';
            // echo '<button type="submit" name = "buttonresolve" class="btn btn-primary">Résoudre</button>';
            // echo "</div></form>";
        //  if(isset($_POST['buttonresolve'])){
        //      if($idselec = 0){
        //          echo "Please select a ticket ID !";
        //      }else {
        //         echo "modification de : ". $idselec;
        //         $sql = 'update ticket set statut="OK" where id='.$idselec.';';
        //         $result = $conn->query($sql);
        //         // $sql = 'insert into ticket(login, sujet, description, prio, secteur, statut) values("zaza","fuite d eau","l eau coule du robinet","moyen","savane", "en cours");';
        //         if ($conn->query($sql) === TRUE) {
        //             echo "New record created successfully";
        //         } else {
        //             echo "Error: " . $sql . "<br>" . $conn->error;
        //         }
        //         $conn->close();

        //      } 
        // }
    }
     ?>
     <ul>
          <li>
            <a style="color: LightGrey;" href="../index.php"> Accueil </a>
          </li>
          <li><a style="color: LightGrey;" href="../ticketform/afficheListeTickets.php"> Afficher tout les tickets </a></li>
          <li><a style="color: LightGrey;" href="../ticketform/afficherTicket.php"> Afficher un ticket </a></li>
      </ul>
  <footer>
    <center>For any contact or complaint please send an email to <a href="mailto:contact@projectlolzoo.fr">contact@projectlolzoo.fr</a> </center>
</footer>
</body>
<!-- <?php include "../footer.php"; ?> -->
</html>