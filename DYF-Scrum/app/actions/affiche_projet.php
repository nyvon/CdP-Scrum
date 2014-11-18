<?php
include"bd-connexion.php"; 	
	$id = $_SESSION['id'];     
	$pseudo = $_SESSION['pseudo'];
	
	 $query="SELECT PROJET.ID, PROJET.NOM, PROJET.DESCRIPTION,PROJET.LIEN_GIT
	  FROM PROJET JOIN PARTICIPER 
	  ON PARTICIPER.ID_PROJET = PROJET.ID JOIN UTILISATEUR 
	  ON UTILISATEUR.ID = PARTICIPER.ID_UTILISATEUR
	   WHERE UTILISATEUR.ID =".$id; 

	$result =$conn->query($query);

$conn->close();
	?>