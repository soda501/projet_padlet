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






	<!-- LOADER -->
	<div id="preloader">
		<div class="loader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div><!-- end loader -->
	<!-- END LOADER -->
	
	<!-- Navigation -->
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
	
	<div id="home" class="ct-header ct-header--slider ct-slick-custom-dots">
		<div class="ct-slick-homepage" data-arrows="true" data-autoplay="false">

			<div class="ct-header tablex item" data-background="uploads/banner-01.jpg">
				<div class="ct-u-display-tablex">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-lg-8 slider-inner">

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
 echo ($actu['cfg_president']);
 echo "<br />";
 }
}
?>

 <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>





									<!--<h1 class="big animated">Hello I'm Web Designer</h1>
									<p class="animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis massa bibendum sodales rhoncus.</p>
									<a class="btn-new from-middle animated" href="#">Download cv</a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="ct-header tablex item" data-background="uploads/banner-01.jpg">
				<div class="ct-u-display-tablex">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-lg-8 slider-inner">

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
 echo ($actu['cfg_president']);
 echo "<br />";
 }
}
?>




									<!--<h1 class="big animated">Hello I'm Ux/Ui Designer</h1>
									<p class="animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis massa bibendum sodales rhoncus.</p>
									<a class="btn-new from-middle animated" href="#">Download cv</a>-->

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="ct-header tablex item" data-background="uploads/banner-01.jpg">
				<div class="ct-u-display-tablex">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-lg-8 slider-inner">
									<!--<h1 class="big animated">Hello I'm Web Developer</h1>
									<p class="animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis massa bibendum sodales rhoncus.</p>
									<a class="btn-new from-middle animated" href="#">Download cv</a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div><!-- .ct-slick-homepage -->
	</div><!-- .ct-header --> 

    <div id="about" class="section wb">
        <div class="container">
            <!--<div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>About Nickie.</h2>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>
						<p>Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						
						<ul>
							<li><b>Follow Me</b></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>

						<a class="btn-new from-middle animated" href="#">Download cv</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
						<img src="images/about-1.png" alt="" class="img-fluid img-rounded fat-ab">
                    </div>
                </div>
            </div> -->


<?php
//Préparation de la requête récupérant tous les profils
$requete="SELECT * FROM Actualite WHERE etat='P' ;";
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
 echo"<table><tr><th>titre</th><th>texte</th><th>cpt_pseudo</th><th>new_date</th></tr>";
 while ($actu = $result1->fetch_assoc())
 {
echo ('<tr><td>'.$actu['titre'] .'</td><td>'. $actu['texte'] .'</td>');
echo ('<td>'.$actu['cpt_pseudo'] .'</td><td>'. $actu['new_date'] .'</td></tr>');
 echo "<br />";
 }
 echo('</table>');
}
?>




        </div><!-- end container -->
    </div><!-- end section -->
	
    
	<div id="portfolio" class="section lb">
		<div class="container">
			<!--<div class="section-title text-center">
                <h3>Portfolio</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div>
			
			<div class="gallery-menu text-center row">
				<div class="col-md-12">
					<div class="button-group filter-button-group">
						<button class="btn-new from-middle animated active" data-filter="*">All</button>
						<button class="btn-new from-middle animated" data-filter=".gal_a">Web Development</button>
						<button class="btn-new from-middle animated" data-filter=".gal_b">Creative Design</button>
						<button class="btn-new from-middle animated" data-filter=".gal_c">Graphic Design</button>
					</div>
				</div>
			</div>
			
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single spi-hr fix hover">
						<img src="uploads/gallery_img-01.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>App design</h3>
							<h4>Lorem ipsum</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/gallery_img-02.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Logo design</h3>
							<h4>Lorem ipsum</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/gallery_img-03.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>App design</h3>
							<h4>Lorem ipsum</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/gallery_img-04.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Logo design</h3>
							<h4>Lorem ipsum</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/gallery_img-05.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>App design</h3>
							<h4>Lorem ipsum</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-05.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/gallery_img-06.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Logo design</h3>
							<h4>Lorem ipsum</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>-->



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
 echo ('<div class="box contactdetails"><h2>'.$actu['cfg_adresse_mail'] . ' // ' .$actu['cfg_adresse_postale'] . ' // ');
 echo ($actu['cfg_tel']);
 echo "<br />";
 }
}
?>





		</div>
	</div>
	
	

    <!--<div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Nickie</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div>end container 
    </div> end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/animated-slider.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>


<!--$mysqli->close();
?>-->
</body>
</html>