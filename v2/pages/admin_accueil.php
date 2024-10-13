<?php 
/* Vérification ci-dessous à faire sur toutes les pages dont l'accès est
autorisé à un utilisateur connecté. */
session_start();
if(!isset($_SESSION['login'])) //A COMPLETER pour tester aussi le rôle...
{
    
 //Si la session n'est pas ouverte, redirection vers la page du formulaire
header("Location:session.php");
}

if( $_SESSION['role']!='A' && $_SESSION['role']!='R') //A COMPLETER pour tester aussi le rôle...
{
    
 //Si la session n'est pas ouverte, redirection vers la page du formulaire
header("Location:session.php");
}
?>
<html>
<head>
<!--entête du fichier HTML-->
<style>
        body {
            background-color: #CCCCCC; /* Code hexadécimal pour la couleur gris clair */
        }
        nav {
        background-color: #333;
        overflow: hidden;
      }

      /* Style pour les liens de navigation */
      nav a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      /* Style pour les liens de navigation actifs */
      nav a.active {
        background-color: #4CAF50;
      }

      /* Style pour les liens de navigation survolés */
      nav a:hover {
        background-color: #ddd;
        color: black;
      }
    </style>
  </head>
  <body>
    <nav>
      <a href="index.php">Acceuil</a>
      <a href="admin_ateliers.php">Gestion des ateliers&ressources</a>
      <a href="deconnexion.php">Deconnexion</a>
    </nav>


<!--contenu du fichier HTML-->
<h1>ESPACE ADMINISTRATION</h1>
<!--Suite du contenu du fichier HTML-->
<?php
/* Code PHP permettant de souhaiter la bienvenue à l’utilisateur connecté et
d’afficher le détail de son profil. */
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
//echo ("Connexion BDD réussie !");

if($_SESSION['role']=='A'){
echo "BONJOUR,'".$_SESSION['login']."', <br> vous etes animateur";
}
else if($_SESSION['role']=='R'){
    echo "BONJOUR,'".$_SESSION['login']."', <br> vous etes responsable";
    $sql2="SELECT * FROM Profil JOIN Compte USING(cpt_pseudo);";
    echo("<br>");
    if (!$result2 =$mysqli->query($sql2)) //Erreur lors de l’exécution de la requête
    { 
      echo "Error: La requête a echoué \n";
      echo "Query: ".$sql2."\n";
      echo "Errno: " . $mysqli->errno . "\n";
      echo "Error: " . $mysqli->error. "\n";
    }
    else{
        echo("<h2>Comptes/Profils:</h2>");
        echo("<br>");

        echo"<fieldset>";
          echo"Compte à modifier: ";
          echo"<form action='compte_action.php' method='post'>
             <select name='pseudochoix'>
              <option name='pseudochoix'>contact.responsable@beye_association.fr</option>
              <option name='pseudochoix'>contact.responsable@fall_association.fr</option>
              <option name='pseudochoix'>contact.responsable@marc_association.fr</option>
              <option name='pseudochoix'>contact.responsable@mbaye_association.fr</option>
              <option name='pseudochoix'>contact.responsable@nom_association.fr</option>
              <option name='pseudochoix'>contact.responsable@sall_association.fr</option>
              <option name='pseudochoix'>coumba@gmail.com</option>
              <option name='pseudochoix'>fatou@gmail.com</option>
              <option name='pseudochoix'>khadija@gmail.com</option>
              <option name='pseudochoix'>modou@gmail.com</option>
              <option name='pseudochoix'>nata@gmail.com</option>
              <option name='pseudochoix'>ndoumbe@gmail.com</option>
              <option name='pseudochoix'>qsdfghrt@gmail.com</option>
              <option name='pseudochoix'>sallsodamareme@gmail.com</option>
              <option name='pseudochoix'>samibobo@gmail.com</option>
              <option name='pseudochoix'>scvb@gmail.com</option>
              <option name='pseudochoix'>sdfgfghj@gmail.com</option>
              <option name='pseudochoix'>vm</option>
            </select>

          <button type='submit' class='btn btn-default' name='desactive'>Activer/Desactiver</button>";
          echo "</form>";
        echo"</fieldset>";
        echo("count profils:'".$result2->num_rows."'");
        echo"<table><tr><th>pseudo</th><th>nom</th><th>prenom</th><th>role</th><th>Validite</th></tr>";
        while ($prof = $result2->fetch_assoc())
        {
           echo ('<tr><td>'.$prof['cpt_pseudo'] .'</td><td>'. $prof['nom'] .'</td>');
           echo ('<td>'.$prof['prenom'] .'</td><td>'. $prof['role'] .'</td>');
           echo ('<td>'.$prof['validite'] .'</td></tr>');
           //echo "<br />";
        }
        echo('</table>');
}
    }





?>
</body>
</html>