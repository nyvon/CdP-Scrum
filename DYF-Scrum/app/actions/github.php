<?php
	include "bd-connexion.php";
    $id_projet = $_GET['id_projet'];
 	$result = $conn->query("SELECT * FROM PROJET WHERE PROJET.ID = ".$id_projet);
  	$row = $result->fetch_assoc();
  	$lien = $row["LIEN_GIT"];
  	if(!empty($lien)){
  		$cut = substr($lien,9);
  		strtok($cut,"/");
  		$username = strtok("/");
		$name = strtok("/");
	}

