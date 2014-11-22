<?php
include "bd-connexion.php";
	$id_projet = $_GET['id_projet'];
	$id_tache1 = $_GET['id_tache1'];
	$id_tache2 = $_GET['id_tache2'];
	echo $id_projet;
	echo $id_tache1;
	echo $id_tache2;

	if($id_tache1 != $id_tache2){
		$query = "INSERT INTO DEPENDANCE (ID_TACHE, ID_TACHE_DEPENDANT) VALUES ('".$id_tache1."','".$id_tache2."')" ;
		if( $conn->query($query) == FALSE)
			echo '<div class="alert alert-danger" role="alert">Impossible de créer la dépendance.</div>';
		else
			echo '<legend>Inscription</legend>
			<div class="alert alert-success" role="alert">Création de la dépendance réussie</div>';
	}else{
		$query = "DELETE FROM DEPENDANCE WHERE ID_TACHE ='".$id_tache1."'";
		if($conn->query($query) == FALSE)
			echo '<div class="alert alert-danger" role="alert">Aucune dépendance a supprimer.</div>';
		else
			echo '<legend>Inscription</legend>
			<div class="alert alert-success" role="alert">Suppression de la dépendance réussie.</div>';
	}
		
	?>
		<script type="text/javascript">
		 var id_projet = <?php echo $id_projet; ?>;
		 var obj = 'window.location.replace("index.php?action=dependances&id_projet='+id_projet+'");';
		 setTimeout(obj,1000);
		 </script>
	<?php
	$conn->close();
?>