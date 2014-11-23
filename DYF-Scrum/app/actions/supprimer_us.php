<?php

include "bd-connexion.php";
	$id_projet = $_GET['id_projet'];
	$id_us = $_POST['id_us'];
	$query = "DELETE FROM USER_STORY WHERE ID = ".$id_us ;
	$query2 = "DELETE FROM CONTENIR WHERE ID_USER_STORY = ".$id_us ;
	$query1 = "DELETE FROM BACKLOG WHERE ID_USER_STORY = ".$id_us ;
	$query3 = "DELETE FROM DEPENDANCE WHERE ID_USER_STORY = ".$id_us ;
	$query4 = "SELECT ASSOCIER.ID_TACHE FROM ASSOCIER WHERE ID_USER_STORY = ".$id_us ;
	$query5 = "DELETE FROM ASSOCIER WHERE ID_USER_STORY = ".$id_us ;
	$query6 = "DELETE FROM TEST WHERE ID_USER_STORY = ".$id_us ;



	if( $conn->query($query) == FALSE)
		echo '<div class="alert alert-danger" role="alert">Impossible de supprimer l\'US.</div>';
	else
		if( $conn->query($query1) == FALSE)
			echo '<div class="alert alert-danger" role="alert">Impossible de supprimer l\'US.</div>';
		else{
			echo '<legend>Suppression</legend>
		<div class="alert alert-success" role="alert">Suppression de l\'US réussie.</div>';
			$conn->query($query2);
			$conn->query($query3);
			$result = $conn->query($query4);
			
			$conn->query($query5);
			$conn->query($query6);

			while($row = $result->fetch_assoc()){
				$conn->query("DELETE FROM TACHE WHERE ID = ".$row['ID_TACHE']);
			}	

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