<?php 
	include"bd-connexion.php"; 	
    $id_projet = $_GET['id_projet'];


	
	 $query="SELECT USER_STORY.* FROM USER_STORY JOIN BACKLOG 
	  ON BACKLOG.ID_USER_STORY = USER_STORY.ID JOIN PROJET 
	  ON PROJET.ID = BACKLOG.ID_PROJET
	   WHERE PROJET.ID =".$id_projet; 

	$result =$conn->query($query);


$query2="SELECT user_story.TYPE_UTILISATEUR, user_story.BUT,user_story.BENEFICE ,user_story.COUT,user_story.PRIORITE,user_story.ID_ETAT 
		FROM user_story, backlog
		WHERE user_story.id = backlog.ID_USER_STORY ";

$query1 = " SELECT etat.DESCRIPTION FROM etat, user_story
            WHERE user_story.ID_ETAT = etat.ID";
$desc =$conn->query($query1);
$result2 =$conn->query($query2);

$conn->close();

?>

	

