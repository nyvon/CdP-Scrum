<?php
include "bd-connexion.php";

$id_etat = $_REQUEST["id_etat"];
$id_projet = $_GET['id_projet'];
$id_tache = $_REQUEST["id_tache"];

$id_etat = $id_etat + 1;

if ( !empty($_POST['id_etat']) AND !empty($_POST['id_tache']))
{

	$query = "UPDATE TACHE SET ID_ETAT=".$id_etat." WHERE ID=".$id_tache.";";
	if( $conn->query($query) == FALSE)
		echo '<div class="alert alert-danger" role="alert">Impossible de créer votre compte.</div>';
	else{
		$query2 = "SELECT USER_STORY.ID FROM USER_STORY JOIN BACKLOG ON BACKLOG.ID_USER_STORY = USER_STORY.ID WHERE BACKLOG.ID_PROJET =".$id_projet;
		$result = $conn->query($query2);
		while($row = $result->fetch_assoc()){
			$query3 = "SELECT * FROM TACHE JOIN ASSOCIER ON ASSOCIER.ID_TACHE = TACHE.ID WHERE ASSOCIER.ID_USER_STORY =".$row["ID"]." AND TACHE.ID_ETAT != 3 ";
			$result2 = $conn->query($query3);
			if($result2->num_rows == 0)
				$conn->query("UPDATE USER_STORY SET ID_ETAT = 3 WHERE ID=".$row["ID"]);
			else
				$conn->query("UPDATE USER_STORY SET ID_ETAT = 1 WHERE ID=".$row["ID"]);
		}

		echo '<legend>Inscription</legend>
	<div class="alert alert-success" role="alert">Etat de la tâche bien modifié.</div>';
}
	?>
	<script type="text/javascript">
	<!--
	var id_projet = <?php echo $id_projet; ?>;
	var obj = 'window.location.replace("index.php?action=affiche_kanban&id_projet='+ id_projet +'");';
	setTimeout(obj,2000);
			// -->
			</script>
			<?php

}
else
	echo '<div class="alert alert-danger" role="alert">Champs obligatoires non remplis</div>';
		
$conn->close();
?> 	