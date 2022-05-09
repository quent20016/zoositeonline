
<?php
	#on regarde si l'utilisateur à une raison d'être la, sinon on lui envoie un message
	if (!isset($_POST["cotisation"])){
        exit("<h1>Vous n'avez pas les droits nécessaires pour acceder à cette page!</h1><br><a href='../../index.php'>Retourner à l'acueil</a>");
    }
	$cotisation= $_POST['cotisation']; #savoir si c'est une cotisation ou un paiement

	if ($cotisation==1) {
		$prix= "10"; #le prix de cotisation est de 10€
	}
	else{
		$prix = $_POST["price"];
		$ids = $_POST["ids"]; #panier
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Paiement</title>
		<link rel="icon" href="../../images/favicon.ico" sizes="32x32">
		<link rel="stylesheet" type="text/css" href="forme.css" />
		<script type='text/javascript' src='Paiement.js' >
		</script>
		<meta charset="utf-8" />
        <link href="../../CSS/style.css" rel="stylesheet" type="text/css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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
        <div id="firstpbody"
             class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
             style="background-image: url('https://nexus.leagueoflegends.com/wp-content/uploads/2016/11/LOL_CMS_Welcome_Hero.jpg');">
            <h1>      </h1>
            <h1 class="mb-3 h1" style="color: #ffffff;">Paiement</h1>
        </div>
		<div class ="container">
		<div class = "paiement">
			<form id='f1' action='confirm.php' method="POST">
				<fieldset>
					<legend>
						        Veuillez saisir les informations de votre paiement    
					</legend>
					<div class="card-data">
						<p class="picto-field" id="splitCardNumberBlock">
							<label for="cardNumberField" id="cardNumberField-label" class="control-label">Numéro de carte&nbsp;:</label>
							<input type="tel" id="cardNumberField0" maxlength="4" pattern="[0-9]{3,7}" style="width:32px;" class="bite">
							     -     
							<input type="tel" id="cardNumberField1" maxlength="4" inputmode="numeric" pattern="[0-9]{3,7}" style="width:32px;" class="cardNumberFieldSplitBlock">
							     -     
							<input type="tel" id="cardNumberField2" maxlength="4" inputmode="numeric" pattern="[0-9]{3,7}" style="width:32px;" class="cardNumberFieldSplitBlock">
							     -     
							<input type="tel" id="cardNumberField3" maxlength="7" inputmode="numeric" pattern="[0-9]{3,7}" style="width:56px;" class="cardNumberFieldSplitBlock">
						</p>
						<fieldset class="k-choice">
							<legend>
								                Date d’expiration :            
							</legend>
							<p>
								<label for="expirydatefield" id="expirydatefield-label" class="control-label"><span></span></label>
								<span aria-labelledby="expirydatefield-label" class="monthdatafield" id="expirydatefield">
									<label class="month-date-label" for="expirydatefield-month">
										                        Mois :                        
										<span class="styledSelect">
											<select autocomplete="cc-month" name="expirydatefield-month" class="date-select" id="expirydatefield-month">
												<option value="01">01</option>
												<option value="02">02</option>
												<option value="03">03</option>
												<option value="04">04</option>
												<option value="05">05</option>
												<option value="06">06</option>
												<option value="07">07</option>
												<option value="08">08</option>
												<option value="09">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
										</span>
									</label>
									<label class="year-date-label" for="expirydatefield-year">
										                        Année :                        
										<span class="styledSelect">
											<select autocomplete="cc-year" name="expirydatefield-year" class="date-select" id="expirydatefield-year">
												<option value="2021">2021</option>
												<option value="2022">2022</option>
												<option value="2023">2023</option>
												<option value="2024">2024</option>
												<option value="2025">2025</option>
												<option value="2026">2026</option>
												<option value="2027">2027</option>
												<option value="2028">2028</option>
												<option value="2029">2029</option>
												<option value="2030">2030</option>
												<option value="2031">2031</option>
											</select>
										</span>
									</label>
								</span>
							</p>
						</fieldset>
						<div id = "fin">
							<p>
								<label for="cvvfield" id="cvvfield-label" class="control-label">Cryptogramme visuel :</label>
								<input aria-labelledby="cvvfield-label" maxlength="3" autocomplete="OFF" id="cvvfield" class="form-control" name="cvvfield" type="tel"/>
							</p>
							<p id ="fin2">
								<?php  echo "Total :" .$prix."€"  ?>
								<br>
								<br>
								<input type="hidden" name="cotisation" value='<?php echo $cotisation ?>' >
								<input type="hidden" name="produits" value='<?php echo $ids ?>' >
								<input type="button" name="Payer" value="Payer" onClick="pay()">
							</p>
						</div>
					</div>
				</fieldset>
			</form>
</div>
<div id=commande style="text-align:center">
			<u>
				 Pannier :
			</u>
			<br>
			<?php
				if ($cotisation==0){ #si on a un paiement
					$products = explode("\n", file_get_contents("../../BDD/product.txt", true)); #on récupère la base de donnée des produits
					foreach (str_split($ids) as $item){
						$list = explode("µ", $products[intval($item)]);
						echo $list[4]." ".$list[2]." €<br>"; #pour chauque produit, si il est dans la liste du panier, on l'affiche
					}   
				}
				else{
					echo "Cotisation";
				}
				
				?>
		</div>
</div>
</body>
<?php include('../footer.php')?>
</html>


