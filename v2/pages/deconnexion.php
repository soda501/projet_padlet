<?php

session_start(); // démarre la session en cours
session_destroy(); // détruit toutes les données de la session
header("Location: session.php"); // redirige l'utilisateur vers la page de login
exit; // termine le script

?>