<?php

$host ="localhost";
$user ="root";                        //à conformiser avec la vraie base apres
$pwd  ="";
$bdd ="bd"; 

$conn = new mysqli($host, $user, $pwd, $bdd);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);

/*
$base= mysqli_connect($host, $user,$pwd, $bdd); 
/* Vérification de la connexion 
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
} else
   printf("Connexion etablie \n");
?>

*/
}
?>