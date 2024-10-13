<?php
if($_POST['idajout']){
  $id_choisi=htmlspecialchars(addslashes($_POST['idajout']));
}
if($_POST['intituleajout']){
  $intitu_choisi=htmlspecialchars(addslashes($_POST['intituleajout']));
}
if($_POST['texteajout']){
  $text_choisi=htmlspecialchars(addslashes($_POST['texteajout']));
}
if($_POST['etatajout']){
  $etat_choisi=htmlspecialchars(addslashes($_POST['etatajout']));
}
if($_POST['etrangerajout']){
  $etran_choisi=htmlspecialchars(addslashes($_POST['etrangerajout']));
}
$mysqli = new mysqli(...);
$sql="SELECT * FROM Ressource JOIN Atelier USING(ate_id) JOIN Pad USING(pad_id);";
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
      $sql4="INSERT INTO Atelier (`ate_id`, `ad_intitule`, `ate_texte`, `ate_date`, `ate_etat`, `pad_id`)
      VALUES ( ".$id_choisi.",'".$intitu_choisi."','".$text_choisi."',curdate(),'".$etat_choisi."',".$etran_choisi.");";
       
        if (!$resultat3=$mysqli->query($sql4)) //Erreur lors de l’exécution de la requête
        { 
         echo "Error: La requête a echoué \n";
         echo "Query: ".$sql4."\n";
         echo "Errno: " . $mysqli->errno . "\n";
         echo "Error: " . $mysqli->error. "\n";
        exit();
       }
      else{
      header("Location:admin_ateliers.php");
    }
}
  



?>