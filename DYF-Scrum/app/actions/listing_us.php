<?php
include"bd-connexion.php"; 	


$query="SELECT user_story.TYPE_UTILISATEUR, user_story.BUT,user_story.BENEFICE ,user_story.COUT,user_story.PRIORITE,user_story.ID_ETAT 
		FROM user_story, backlog
		WHERE user_story.id = backlog.ID_USER_STORY ";

$query1 = " SELECT etat.DESCRIPTION FROM etat, user_story
            WHERE user_story.ID_ETAT = etat.ID";
$desc =$conn->query($query1);
$result =$conn->query($query);

$conn->close();

?>

 <?php 

 