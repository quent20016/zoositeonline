

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/projectsitezoo/images/favicon.ico" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src = "../JS/user.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/formstyle.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<?php 
        // include ('../header.php'); 
        // include ('../JS/user.js');
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bddzoo";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } ?>
    <header>
        <div id="firstpbody"
            class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
            style="background-image: url('https://nexus.leagueoflegends.com/wp-content/uploads/2016/11/LOL_CMS_Welcome_Hero.jpg');">
            <h1 style="color:ghostwhite" class="mb-3 h2">Zoo of the Rift</h1>
            <h2 style="color:ghostwhite" class="mb-3 h2">  Register form </h2>
        </div>
    </header>
    <div id="secpbody" style="margin-top: 20px">
        <form id="myForm" method="post">
            <h2 style="color:ghostwhite">Informations :</h2>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input name="email" type="email" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="e-mail address">
            </div>
            <div class="input-group mb-3">
                <input name="password" type="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
                <span class="input-group-text" id="password">Password</span>
            </div>
            <div id=buttonsubmit>
                <button type="submit" name ='buttonSubmit' class="btn btn-primary" id="buttonSubmit" onclick="openForm()">Save</button>
            </div>
            <!--  onclick="openForm(); -->
        </form>
        <script>
                //$("#save").click(openForm());
                function openForm() {
                    var nom = $("#nom").val();
                    var mdp = $("#password").val();
                    var newUser= new user(nom, mdp);
                    newUser.toString();
                    sessionStorage.setItem('email', nom);
                    var email = sessionStorage.getItem('email');
                    localStorage.setItem("mdp", mdp);
                    var mdp = localStorage.getItem('mdp');
                    // sessionStorage.removeItem('token');
                    // localStorage.clear();
                    alert('Inscription reussite ! Votre login : ' + nom);
                    window.location.href = "../index.php";
                }
            </script>
            
            <?php
            if(isset($_POST['buttonSubmit'])){
                $email = $_POST['email'];
                $mdp = $_POST['password'];
                $sql = 'insert into user (login, mdp) values("'.$email.'"'.',"'.$mdp.'");';
                // $sql = 'insert into ticket(login, sujet, description, prio, secteur, statut) values("'.$email.'"'.',"'.$subject.'"'.',"'.$texte.'"'.',"'.$priority.'"'.',"'.$secteur.'"'.',"'.$state.'");';
                $result = $conn->query($sql);
                //  echo '<script>', 'openForm();', '</script>';
                 header('Location: /projectsitezoo/index.php');
                $conn->close();
            }
            ?>
        <ul>
          <li>
            <a style="color:ghostwhite" href="../index.php"> Accueil </a>
          </li>
        </ul>
    </div>
</body>
<footer>
    <center>For any contact or complaint please send an email to <a href="mailto:contact@bds.fr">contact@projectlolzoo.fr</a> </center>
</footer>
</html> 