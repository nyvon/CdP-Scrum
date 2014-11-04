<?php 
	include"bd-connexion.php"; 	
    $id_projet = $_GET['id_projet'];


	
	 $query="SELECT USER_STORY.* FROM USER_STORY JOIN BACKLOG 
	  ON BACKLOG.ID_USER_STORY = USER_STORY.ID JOIN PROJET 
	  ON PROJET.ID = BACKLOG.ID_PROJET
	   WHERE PROJET.ID =".$id_projet; 

	$result =$conn->query($query);

	$conn->close();
