<?php
if($_POST['atelierchoix']){
	$atelier_choisi=htmlspecialchars(addslashes($_POST['atelierchoix']));
}
$mysqli = new mysqli(....);
$sql="SELECT * FROM Ressource JOIN Atelier USING(ate_id) WHERE ad_intitule='".$atelier_choisi."';";
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
      $sql3="DELETE FROM Ressource WHERE ate_id IN(SELECT ate_id FROM Atelier WHERE ad_intitule='".$atelier_choisi."');";
      $sql2="DELETE FROM Atelier WHERE ad_intitule='".$atelier_choisi."';";
  	
  	if (!$resultat2=$mysqli->query($sql3)) //Erreur lors de l’exécution de la requête
    { 
      echo "Error: La requête a echoué \n";
      echo "Query: ".$sql3."\n";
      echo "Errno: " . $mysqli->errno . "\n";
      echo "Error: " . $mysqli->error. "\n";
      exit();
    }
    else{
      if (!$resultat2=$mysqli->query($sql2)) //Erreur lors de l’exécution de la requête
    { 
      echo "Error: La requête a echoué \n";
      echo "Query: ".$sql2."\n";
      echo "Errno: " . $mysqli->errno . "\n";
      echo "Error: " . $mysqli->error. "\n";
      exit();
    }
  	  header("Location:admin_ateliers.php");
    }
  }
      
  
  



?>