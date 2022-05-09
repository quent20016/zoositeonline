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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/projectsitezoo/CSS/formstyle.css" rel="stylesheet" type="text/css">
    <title>Connexion</title>
</head>
<body>
<header>
    <div id="firstpbody"
        class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
        style="background-image: url('https://nexus.leagueoflegends.com/wp-content/uploads/2016/11/LOL_CMS_Welcome_Hero.jpg');">
        <h1 style="color:ghostwhite" class="mb-3 h2">Zoo of the Rift</h1>
        <h2 style="color:ghostwhite" class="mb-3 h2">  Authentification form </h2>
    </div>
</header>

<div id="secpbody" style="margin-top: 20px">
        <form action="../login/verification.php" method="post">
        <h2 style="color:ghostwhite">Login :</h2>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="e-mail address">
          </div>
          
          <div class="input-group mb-3">
            <input name="password" type="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
            <span class="input-group-text" id="password">Password</span>
          </div>
          <div id=buttonsubmit>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>  
          </form>
          <ul>
              <li>
                <a style="color:ghostwhite" href="../index.php"> Accueil </a>
              </li>
          </ul>
  </div>
  <h3 id="result"></h3>
  <div class="alert alert-warning alert-dismissible fade hide" role="alert">
    <strong>Identifiants incorrects !</strong> Vérifier votre login et votre mot de passe.
  </div>
  <script>
    $(document).ready(function () {
        $('#buttonsubmit').click(function () {
            $("#result").html("");
            let email=$("#email").val();
            let password=$("#password").val();
            $.ajax("http://localhost/projectsitezoo/login/verification.php",
                {
                    type: "POST",
                    data: 'email=' + email + '&password=' + password,
                    success: function (data, textStatus, jqXHR) {
                        console.log(jqXHR.status);
                        console.log(textStatus);
                        if (data.includes("incorrects")) {
                          $('.alert').removeClass("hide");
                          $('.alert').addClass("show");
                        } else {
                          $('.alert').removeClass("show");
                          $('.alert').addClass("hide");
                          $("#result").html("Identifiants correctes, vous allez être redirigé.");
                          window.setTimeout(function(){
                            window.location.href = "http://localhost/projectsitezoo/index.php";
                          }, 5000);
                        }
                    },
                    error: function (xhr,status,error) {
                        console.log(xhr.status);
                        $("#result").html("Error occured while doing request.");
                    }
                    
                });
        });
    });
  </script>
  </body>

  <footer>
  <center>For any contact or complaint please send an email to <a href="mailto:contact@projectlolzoo.fr">contact@projectlolzoo.fr</a> </center>
  </footer>
</html>