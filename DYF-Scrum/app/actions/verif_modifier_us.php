<?php
include "bd-connexion.php";
$id_projet = $_GET['id_projet'];
$id_us = $_POST["id_us"];
$type = $_POST["type_user"];
$but = $_POST["but"];
$benef = $_POST["benefice"];
$cout = $_POST["cout"];
$prio = $_POST["priorite"];

if ( !empty($_POST['id_us']) AND !empty($_POST['type_user']) AND !empty($_POST['but'])  AND !empty($_POST['cout']) AND !empty($_POST['priorite']))
{	
	if(!empty($_POST['benefice'])){
		$query = 'UPDATE USER_STORY SET TYPE_UTILISATEUR = "'.$type.'" , BUT = "'.$but.'" , BENEFICE = "'.$benef.'", COUT = '.$cout.', PRIORITE = '.$prio.' WHERE ID = '.$id_us;
	}
	else{
		$query = 'UPDATE USER_STORY SET TYPE_UTILISATEUR = "'.$type.'" , BUT = "'.$but.'", COUT = '.$cout.', PRIORITE = '.$prio.' WHERE ID = '.$id_us;
	}

	if( $conn->query($query) == FALSE)
		echo '<div class="alert alert-danger" role="alert">Error 331: Bad request.</div>';

	else{	
		echo '<legend>Modification de la User Story</legend>
		<div class="alert alert-success" role="alert">Modification de la User Story en cours ...</div>';
	}
	?>
	<script type="text/javascript">
	<!--
		var id_projet = "<?php echo $id_projet; ?>";
		var obj = 'window.location.replace("index.php?action=backlog&id_projet='+id_projet+'");';
		setTimeout(obj,3000);
			// -->
	</script>
			<?php

		}
		else
			echo '<div class="alert alert-danger" role="alert">Champs obligatoires non remplis</div>';
		
		$conn->close();
		?> 	