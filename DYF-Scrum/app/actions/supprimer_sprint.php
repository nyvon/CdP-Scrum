<?php
include "bd-connexion.php";
	$id_projet = $_GET['id_projet'];
	$id_sprint = $_GET['id_sprint'];
	$query = "DELETE FROM SPRINT WHERE ID = ".$id_sprint ;
	$query1 = "DELETE FROM CONTENIR WHERE ID_SPRINT = ".$id_sprint ;
	if( $conn->query($query) == FALSE)
		echo '<div class="alert alert-danger" role="alert">Impossible de supprimer le sprint.</div>';
	else
		if( $conn->query($query1) == FALSE)
			echo '<div class="alert alert-danger" role="alert">Impossible de supprimer le sprint.</div>';
		else
			echo '<legend>Suppression</legend>
		<div class="alert alert-success" role="alert">Suppression du sprint réussie.</div>';
	?>
		<script type="text/javascript">
		 var id_projet = <?php echo $id_projet; ?>;
		 var obj = 'window.location.replace("index.php?action=sprints&id_projet='+id_projet+'");';
		 setTimeout(obj,1000);
		 </script>
	<?php
	$conn->close();
?>