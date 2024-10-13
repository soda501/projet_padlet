<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Nickie - Personal Portfolio OnePage Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">


    <?php
$mysqli = new mysqli(...);
if ($mysqli->connect_errno)
{
 // Affichage d'un message d'erreur
 echo "Error: Problème de connexion à la BDD \n";
 echo "Errno: " . $mysqli->connect_errno . "\n";
 echo "Error: " . $mysqli->connect_error . "\n";
 // Arrêt du chargement de la page
 exit();
}
// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
if (!$mysqli->set_charset("utf8")) {
 printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
 exit();
}
echo ("Connexion BDD réussie !");
?>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">

            <?php
//Préparation de la requête récupérant tous les configuration
$requete="SELECT * FROM Configuration ;";
//Affichage de la requête préparée
//echo ($requete);
$result1 = $mysqli->query($requete);
if ($result1 == false) //Erreur lors de l’exécution de la requête
{ // La requête a echoué
 echo "Error: La requête a echoué \n";
 echo "Errno: " . $mysqli->errno . "\n";
 echo "Error: " . $mysqli->error . "\n";
 exit();
}
else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
{
echo "<br />";
//echo($result1->num_rows); //Donne le bon nombre de lignes récupérées
 echo "<br />";
 while ($actu = $result1->fetch_assoc())
 {
 echo ($actu['cfg_nom']);
 echo "<br />";
 }
}
?>
			<a class="navbar-brand js-scroll-trigger" href="#page-top">
				<img class="img-fluid" src="images/logo.jfif" alt="" />
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
				data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu
				<i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger active" href="index.php">Acceuil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="activite.php">Galerie</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="formulaire.php">Inscription</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="pad.php">Pad</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="session.php">session</a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
<div id="contact" class="section db">
    <div class="container">
        <div class="section-title text-center">
            <h3>Contact Me</h3>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12">
                <div class="contact_form">
                    <div id="message"></div>
                    <form id="contactForm" action="action.php" name="sentMessage" novalidate="novalidate" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="nom"  name="nom"  type="text" placeholder="Nom"  data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="prenom" name="prenom" type="text" placeholder="prenom"  data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="pseudo" name=pseudo type="email" placeholder="Email"  data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="mdp1" name="mdp1" type="tel placeholder="Mot de passe"  data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="mdp2" name="mdp2" type="tel" placeholder=" confirmer le mot de passe"  data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <div id="success"></div>
                                    <button id="sendMessageButton" class="form-control" style="background-color: yellow;"data-text="Send Message" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<!--//Ferme la connexion avec la base MariaDB
$mysqli->close();
?>-->
</body>
</html>