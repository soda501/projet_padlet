<!DOCTYPE html>
<html>
<head>
    <title>Ma page</title>
    <style>
        body {
            background-color: gray;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>


Bonjour, 

<?php

$prenom=htmlspecialchars(addslashes($_POST['prenom']));
$nom=htmlspecialchars(addslashes($_POST['nom']));
$id=htmlspecialchars(addslashes($_POST["pseudo"]));
$mdp1=htmlspecialchars($_POST['mdp1']);
$mdp2=htmlspecialchars($_POST['pseudo']);

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

// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
if (!$mysqli->set_charset("utf8")) {
 printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
 exit();
}
//Préparation de la requête à partir des chaînes saisies =>
//concaténation (avec le point) des différents éléments composant la 
//requête
if(!htmlspecialchars($_POST['prenom'])|| !htmlspecialchars($_POST['nom'])|| !htmlspecialchars($_POST['pseudo'])|| !htmlspecialchars($_POST['mdp1'])|| !htmlspecialchars($_POST['mdp2'])){
    echo('erreur!! veuiller bien remplir la formulaire');
    echo "<a href='index.php"."'>". "retoure accueil". "</a>";
    exit;
}
if(strcmp($mdp1,$mdp2)!=0){
    //echo('mot de passe incorrect');
}

//requete d'ajout compte et profil

$sql_compte="INSERT INTO Compte VALUES('" .$id. "',MD5('" .$mdp1. "'));";
$sql_profil="INSERT INTO Profil VALUES('" .$nom. "','" .$prenom. "','D','A',CURDATE(),'" .$id. "');";
// Affichage de la requête constituée pour vérification
//echo($sql_compte);
//Exécution de la requête d'ajout d'un compte dans la table des comptes
$result3 = $mysqli->query($sql_compte); 
if ($result3 == false) //Erreur lors de l’exécution de la requête
{
 // La requête a echoué
 echo "Error: La requête a échoué \n";
 echo "Query: " . $sql_compte . "\n";
 echo "Errno: " . $mysqli->errno . "\n";
 echo "Error: " . $mysqli->error . "\n";
 echo "<a href='index.php"."'>". "retoure accueil". "</a>";
 exit;
}
else //Requête réussie
{
echo "<br />";
$result4=$mysqli->query($sql_profil);
if($result4==false){
    //requete echoue
 echo "Error: La requête a échoué \n";
 echo "Query: " . $sql_profil . "\n";
 echo "Errno: " . $mysqli->errno . "\n";
 echo "Error: " . $mysqli->error . "\n";
  $del="DELETE FROM Compte WHERE cpt_pseudo='" .$id. "'";
 $res=$mysqli->query($del);
 exit;
}
echo "Inscription réussie !" . "\n";
echo"<br>";
echo "<a href='index.php"."'>". "retoure accueil". "</a>";
}


?>
</body>
</html>