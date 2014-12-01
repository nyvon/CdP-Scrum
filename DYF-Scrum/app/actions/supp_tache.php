<?php

include "bd-connexion.php";
	$id_projet = $_GET['id_projet'];
	$id_tache = $_POST['id_tache'];
	$query = "DELETE FROM TACHE WHERE ID = ".$id_tache;
	$query2 = "DELETE FROM KANBAN WHERE ID_TACHE = ".$id_tache;
	$query1 = "DELETE FROM TEST WHERE ID_TACHE = ".$id_tache ;




	if( $conn->query($query) == FALSE)
		echo '<div class="alert alert-danger" role="alert">Impossible de supprimer la tache</div>';
	else
		if( $conn->query($query1) == FALSE)
			echo '<div class="alert alert-danger" role="alert">Impossible de supprimer la tache.</div>';
		else{
			echo '<legend>Suppression</legend>
		<div class="alert alert-success" role="alert">Suppression de la tache réussie.</div>';
			$conn->query($query2);
			
	}
	?>
		<script type="text/javascript">
		 var id_projet = <?php echo $id_projet; ?>;
		 var obj = 'window.location.replace("index.php?action=backlog&id_projet='+id_projet+'");';
		 setTimeout(obj,1000);
		 </script>
	<?php
	$conn->close();
?>
