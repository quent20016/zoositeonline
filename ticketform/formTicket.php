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
    <link href="../CSS/formstyle.css" rel="stylesheet" type="text/css">
    <title>Professionals - Ticket Manager</title>
</head>

<body>
    <header>
        <div id="firstpbody"
            class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
            style="background-image: url('https://nexus.leagueoflegends.com/wp-content/uploads/2016/11/LOL_CMS_Welcome_Hero.jpg');">
            <h1 class="mb-3 h2">Zoo of the rift</h1>
            <h2 class="mb-3 h2">  Ticket form
                Complaints Department</h2>
        </div>
    </header>

    <div id="secpbody" style="margin-top: 110px">
        <form action="recupTicket.php" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" name = "email">@</span>
                <input type="email" name = "email" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" name = "subject">Subject</span>
                <input class="input-group-text" type="text" name = "subject" name="subject" aria-label="Fill your subject">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" name ="priority"  id="priority">Priority lvl (1-10):</span>
                <input class="input-group-text" name ="priority" type="number" id="priority" name="priority" min="1" max="10">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" name="states" id="state-selection"> Status :</span>
                <select class="input-group-text" name="states" type="text" id="state-selection">
                    <option value="">--Please choose an option--</option>
                    <option value="NOK">NOK</option>
                    <option value="En cours">En Cours</option>
                    <option value="OK">OK</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" name="Place" id="state-selection"> Place :</span>
                <select class="input-group-text" name="Place" type="text" id="state-selection">
                    <option value="">--Please choose an place--</option>
                    <option value="secteur1">secteur1</option>
                    <option value="secteur2">secteur2</option>
                    <option value="secteur3">secteur3</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" name="detail" id="detail">Description</span>
                <textarea class="input-group-text" type="text" id="detail" name="detail" aria-label="Fill details"></textarea>
            </div>
            <div class="input-group mb-3" id=buttonsubmit>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <ul>
            <li>
                <a style="color: LightGrey;" href="../index.php"> Accueil </a>
            </li>
            <li>
                <a style="color: LightGrey;" href="../ticketform/afficheListeTickets.php"> Afficher tout les tickets </a>
            </li>
            <li>
                <a style="color: LightGrey;" href="../ticketform/afficherTicket.php"> Afficher un ticket </a>
            </li>
            <li>
                <a style="color: LightGrey;" href="../ticketform/modifierTicket.php"> Modifier un ticket </a>
            </li>
        </ul>
    </div>
</body>

<footer>
    <center>Site appartenant au BDS Le Veistiaire, pour tout contact ou réclamation veuillez envoyer un mail à <a href="mailto:contact@bds.fr">contact@bds.fr</a> </center>
</footer>

</code>