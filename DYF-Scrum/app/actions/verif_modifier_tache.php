<?php
include "bd-connexion.php";
$id_projet = $_GET['id_projet'];
$id_tache = $_POST["id_tache"];
$intitule = $_POST["intitule"];
$description = $_POST["description"];
$cout = $_POST["cout"];

if ( !empty($_POST['id_tache']) AND !empty($_POST['intitule']) AND !empty($_POST['description'])  AND !empty($_POST['cout']))
{	
		$query = 'UPDATE TACHE SET INTITULE = "'.$intitule.'" , DESCRIPTION = "'.$description.'" , COUT = '.$cout.' WHERE ID = '.$id_tache;
	

	if( $conn->query($query) == FALSE)
		echo '<div class="alert alert-danger" role="alert">Error 331: Bad request.</div>';

	else{	
		echo '<legend>Modification de la User Story</legend>
		<div class="alert alert-success" role="alert">Modification de la tache en cours ...</div>';
	}
	?>
	<script type="text/javascript">
	<!--
		var id_projet = "<?php echo $id_projet; ?>";
		var obj = 'window.location.replace("index.php?action=backlog&id_projet='+id_projet+'");';
		setTimeout(obj,1000);
			// -->
	</script>
			<?php

		}
		else
			echo '<div class="alert alert-danger" role="alert">Champs obligatoires non remplis</div>';
		
		$conn->close();
		?> 	