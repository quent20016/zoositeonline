<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Basic Bootstrap Table</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <link href="../CSS/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
   <?php
      include ('../header.php'); 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bddzoo";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM ticket";
        $result = $conn->query($sql);
        ?>
      <div class="container">
         <h2>Content contained in the loaded ticket</h2>
         <table class="table">
            <thead>
               <tr style="color: LightGrey;">
                  <th>ID</th>
                  <th>Login</th>
                  <th>Sujet</th>
                  <th>Description</th>
                  <th>Priority</th>
                  <th>Secteur</th>
                  <th>Statut</th>
               </tr>
            </thead>
         <tbody style="color: aliceblue;"> 
         <?php   
         if ($result->num_rows > 0) {
               $cmpt=0;
                while($row = $result->fetch_assoc()) {
                //echo "id: " . $row["id"]. " - Login: " . $row["login"]. " - Sujet :" . $row["sujet"]. $row["description"]. "<br>";
               $cmpt = 1+$cmpt;
               if ($cmpt = 7){
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
               }else{
                  echo "<td>".$row["id"];
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
                  echo "<tr>";
               }
            } 
                } else {
                echo "0 results";
                }
                ?>
            </tbody>
         </table>
         <ul>
          <li>
            <a style="color:ghostwhite" href="../index.php"> Accueil </a>
          </li>
      </ul>
      </div>
      
      <?php
      $conn->close();
        ?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
         
   </body>
   <?php include "../footer.php"; ?>
</html>

