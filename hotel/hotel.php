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
    <link href="/projectsitezoo/CSS/style.css" rel="stylesheet" type="text/css">
    <title>Hotel</title>
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
                        echo '<a class="nav-link" href="../ticketform/formTicket.html" style="color: aliceblue;">Professionals - Ticket Manager</a>';
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

    <div>
        <h1>________________</h1>
        <h1 style="color:white">Comming Soon ...</h1>
    </div>


</body>
<footer>
    <center>For any contact or complaint please send an email to <a href="mailto:contact@projectlolzoo.fr">contact@projectlolzoo.fr</a> </center>
</footer>
</html>