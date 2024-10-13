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
      <a href="admin_accueil.php">Gestion des comptes&profils</a>
      <a href="deconnexion.php">Deconnexion</a>
    </nav>


<!--contenu du fichier HTML-->
<h1>ESPACE ADMINISTRATION Atelier</h1>
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

<?php
//Préparation de la requête récupérant tous les profils
$requete="SELECT * FROM Ressource JOIN Atelier USING(ate_id) JOIN Pad USING(pad_id) JOIN Animation USING(pad_id);";
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

  echo"<fieldset>";
          echo"Compte à modifier: ";
          echo"<form action='atelier_action.php' method='post'>
            <input type='text' name='atelierchoix'><br>
          <button type='submit' class='btn btn-default' name='desactive'>Supprimer</button>";
          echo "</form>";
        echo"</fieldset>";
echo "<br />";
//echo($result1->num_rows); //Donne le bon nombre de lignes récupérées
 echo "<br />";
 echo"<table><tr><th>ID</th><th>Pad_intitule</th><th>Atelier_intitule</th><th>Ressource</th><th>Cpt_pseudo</th></tr>";
 while ($actu = $result1->fetch_assoc())
 {
echo ('<tr><td>'.$actu['pad_id'] .'</td><td>'.$actu['pad_intitule'] .'</td><td>'. $actu['ad_intitule'] .'</td>');
echo ('<td>'.$actu['res_titre'] .'</td><td>'. $actu['cpt_pseudo'] .'</td></tr>');
 }
 echo('</table>');
echo "<br />";

  echo"<fieldset>";
          echo"<form action='atelier_ajout_action.php' method='post'>
            <input type='text' name='idajout' placeholder='ate_id'><br>
            <input type='text' name='intituleajout' placeholder='ate_intitule'><br>
            <input type='text' name='texteajout' placeholder='ate_texte'><br>
            <input type='text' name='etatajout' placeholder='ate_etat'><br>
            <input type='text' name='etrangerajout' placeholder=pad_id><br>
          <button type='submit' class='btn btn-default' name='desactive'>Ajout</button>";
          echo "</form>";
        echo"</fieldset>";
}

?>

</body>
</html>