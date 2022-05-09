<code><!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="/projectsitezoo/images/favicon.ico" sizes="32x32">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/style.css" rel="stylesheet" type="text/css">
        <title>Vérification</title>
    </head>
    <body>
        <header>
            <div id="firstpbody"
                class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
                style="background-image: url('https://nexus.leagueoflegends.com/wp-content/uploads/2016/11/LOL_CMS_Welcome_Hero.jpg');">
                <h1 class="mb-3 h2">Zoo of the rift</h1>
                <h1 class="mb-3 h2">  Vous allez être redirigé </h1>
            </div>
        </header>

        <h1 style = "color:aliceblue">Connexion  :</h1>
        <?php
        $email = $_POST['email'];
        $passwd = $_POST['password'];

         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "bddzoo";
        

 
        $link = mysqli_connect( $servername, $username , $password , $dbname);
        $verif = false;
        // Attempt select query execution
        $sql = "SELECT * FROM user";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    if ($row['login']==$email and  $row['mdp']==$passwd){
                        $verif=true;
                    }
                }
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        // $jsondata = file_get_contents("../BDD/login.json");
        // $json = json_decode($jsondata, true);
        // // echo $json['logs'][2]['email'];
        // $verif = false;
        // foreach($json['logs'] as $log){
        //     if($email == $log['email'] && $password ==$log['mdp']){
        //         $verif=true;
        //     }
        // }

        if($verif==true){
                echo"<h3>Ces identifiants sont corrects</h3>";
                echo"<h3>Vous êtes connecté avec l'identifiant : $email </h3>";
                //UPDATE LONG.LOG
                $log  = "[".date("F j, Y, g:i a")."]"."{email: ".$email.
                ", mdp: ".$passwd."}".PHP_EOL;
                file_put_contents('long.log', $log, FILE_APPEND);
                //UPDATE LONG.LOG
                header("refresh:2;url=../index.php");  
                // COMPLETE JSON
            }else if($verif ==false) {
                // echo"<h3>Ces identifiants sont incorrects</h3>";
                echo '<div class="alert alert-danger" role="alert">';
                echo "Ces identifiants sont incorrects!";
                echo "</div>";  
                $email="null";
                // header("refresh:5;url=../authentification.php");  
            }
            session_start();
            $_SESSION["sessionconnect"]=$email;
            
       ?>
       <ul>
              <li>
                <a style="color:ghostwhite" href="../index.php"> Accueil </a>
              </li>
          </ul>
    </body>
</html>
<!-- différence méthode post et get 
get : limité en taille, données présente dans l'url 
post : non limité en taille, 
données absente de l'url besoin d'une commander php pour être récupéré
et être utilisé en php ou js -->