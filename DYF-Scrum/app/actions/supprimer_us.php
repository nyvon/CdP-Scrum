<?php
include "bd-connexion.php";
	$id_projet = $_GET['id_projet'];
	$id_sprint = $_POST['id_us'];
	$query = "DELETE FROM USER_STORY WHERE ID = ".$id_us ;
	$query2 = "DELETE FROM CONTENIR WHERE ID_USER_STORY = ".$id_us ;
	$query1 = "DELETE FROM BACKLOG WHERE ID_USER_STORY = ".$id_us ;
	$query3 = "DELETE FROM DEPENDANCE WHERE ID_USER_STORY = ".$id_us ;
	$query4 = "DELETE FROM CONCERNER WHERE ID_USER_STORY = ".$id_us ;
	$query5 = "DELETE FROM ASSOCIER WHERE ID_USER_STORY = ".$id_us ;



	if( $conn->query($query) == FALSE)
		echo '<div class="alert alert-danger" role="alert">Impossible de supprimer le sprint.</div>';
	else
		if( $conn->query($query1) == FALSE)
			echo '<div class="alert alert-danger" role="alert">Impossible de supprimer le sprint.</div>';
		else{
			echo '<legend>Suppression</legend>
		<div class="alert alert-success" role="alert">Suppression du sprint réussie.</div>';
			$conn->query($query2);
			$conn->query($query3);
			$conn->query($query4);
			$conn->query($query5);
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