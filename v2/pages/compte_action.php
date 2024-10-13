 <?php
if($_POST['pseudochoix']){
	$pseudo_choisi=htmlspecialchars(addslashes($_POST['pseudochoix']));
}
$mysqli = new mysqli(...);
$sql="SELECT * FROM Profil  WHERE cpt_pseudo='".$pseudo_choisi."';";
echo("<br>");

 if (!$resultat =$mysqli->query($sql)) //Erreur lors de l’exécution de la requête
    { 
      echo "Error: La requête a echoué \n";
      echo "Query: ".$sql."\n";
      echo "Errno: " . $mysqli->errno . "\n";
      echo "Error: " . $mysqli->error. "\n";
      exit();
  }
  else{
  	$ligne=$resultat->fetch_assoc();
  	if($ligne['validite']=='A'){
  		$sql3="UPDATE Profil SET validite='D' WHERE cpt_pseudo='".$pseudo_choisi."';";
  	}
  	else{
  		$sql3="UPDATE Profil SET validite='A' WHERE cpt_pseudo='".$pseudo_choisi."';";

  	}
  	if (!$resultat2=$mysqli->query($sql3)) //Erreur lors de l’exécution de la requête
    { 
      echo "Error: La requête a echoué \n";
      echo "Query: ".$sql3."\n";
      echo "Errno: " . $mysqli->errno . "\n";
      echo "Error: " . $mysqli->error. "\n";
      exit();
    }
    else{
  	  header("Location:admin_accueil.php");
    }
}
?>