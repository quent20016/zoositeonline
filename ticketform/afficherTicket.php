<!DOCTYPE html>
<html lang="en">
  <?php 
    header("Access-Control-Allow-Origin: 8000");
  ?>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/projectsitezoo/images/favicon.ico" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/formstyle.css" rel="stylesheet" type="text/css">
    <title>Affichage ticket précis</title>
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
        } ?>
<div id="secpbody">
<form action="afficherTicket.php" method="post">
    <div class="input-group mb-3">
      <span class="input-group-text" name = "selecid">ID : </span>
      <select id="sel_depart">
   <option value="0">- Select -</option>
   <?php 
      $sql = "SELECT * FROM ticket";
      $ticket_data = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($ticket_data) ){
          $ticketid = $row['id'];
          echo "<option value='".$ticketid."' >".$ticketid."</option>";
      }
   ?>
</select>
    
</form>
</div>

<div>
<?php 
      if(isset($_POST['ticketid'])){
        $idselec = $_POST['ticketid'];
        $sql = "select * from ticket where id=".$idselec;
        $row = $conn->query($sql)->fetch_assoc();
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
            if ($row["statut"] != "OK")
            echo '     <th>Update</th>';
            echo "   </tr>";
            echo "</thead>";
         echo '<tbody style="color: aliceblue;"> ';
               echo "<tr>";
               echo "<td id='id'>".$row["id"];
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
               if ($row["statut"] != "OK")
               echo "<td> <div id=buttonsubmit><button class='btn btn-primary'>Resolve</button></div></td>";
               echo "</tr>";     
              echo "</tbody>";
              echo "</table>";
    $conn->close();}
     ?>
</div>
<h3 id="result"></h3>
<script>
  $(document).ready(function () {
    $( "#sel_depart" ).change(function () {
      var selectedValue = $(this).val();
      
      $.ajax("http://localhost/projectsitezoo/ticketform/afficherTicket.php",
        {
            type: "POST",
            data: 'ticketid=' + selectedValue,
            success: function (data, textStatus, jqXHR) {
                console.log(jqXHR.status);
                console.log(textStatus);
                var part = data.substring(
                    data.indexOf("<table") + 1, 
                    data.indexOf("</table>")
                );
                $("#result").html("<" + part + "</table>");
            },
            error: function (xhr,status,error) {
                console.log(xhr.status);
                $("#result").html("Error occured while doing request.");
            }
            
        });
    });
  });

  $(document).on('click','#buttonsubmit', function() {
    console.log($('#id').html());

    $.ajax("http://localhost/projectsitezoo/ticketform/modifierTicket.php",
        {
            type: "POST",
            data:{
              submitbutton: true,
              selecid: $('#id').html()
            },
            success: function (data, textStatus, jqXHR) {
                console.log(jqXHR.status);
                console.log(textStatus);
                var part = data.substring(
                    data.indexOf("<table") + 1, 
                    data.indexOf("</table>")
                );
                $("#result").html("<" + part + "</table>");
            },
            error: function (xhr,status,error) {
                console.log(xhr.status);
                $("#result").html("Error occured while doing request.");
            }
            
        });
  });

  // $(document).ready(function () {
  //     $('#buttonsubmit').click(function () {
  //         console.log("click on resolve");
  //           // $("#result").html("");
  //           // let email=$("#email").val();
  //           // let password=$("#password").val();
  //           // $.ajax("http://localhost:8000/projectsitezoo/login/verification.php",
  //           //     {
  //           //         type: "GET",
  //           //         data: 'email=' + email + '&password=' + password,
  //           //         success: function (data, textStatus, jqXHR) {
  //           //             console.log(jqXHR.status);
  //           //             console.log(textStatus);
  //           //             if (data.includes("incorrects")) {
  //           //               $("#result").html("Ces données n'appartiennent à aucun utilisateur. Vérifier votre login et votre mot de passe.");
  //           //             } else {
  //           //               $("#result").html("Identifiants correctes, vous allez être redirigé.");
  //           //               window.setTimeout(function(){
  //           //                 window.location.href = "http://localhost:8000/projectsitezoo/index.php";
  //           //               }, 5000);
  //           //             }
  //           //         },
  //           //         error: function (xhr,status,error) {
  //           //             console.log(xhr.status);
  //           //             $("#result").html("Error occured while doing request.");
  //           //         }
                    
  //           //     });
  //       });
  //   });

</script>

    <ul>
          <li>
            <a style="color:ghostwhite" href="../index.php"> Accueil </a>
          </li>
          <li>
            <a style="color:ghostwhite" href="formTicket.html"> Ticket form Complaints Department</a>
          </li>
      </ul>
      
</body>
<!-- <?php include('../footer.php')?> -->
</html>