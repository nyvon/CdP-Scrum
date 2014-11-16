<?php
	include "bd-connexion.php";
    $id_projet = $_GET['id_projet'];
	$id_us = $_GET['id_us'];
	
	$description = $_POST["description"];
	$spec = $_POST["spec"];
	
	if ( !empty($_POST['description']) AND !empty($_POST['spec']))
	{
		$req = $conn->query('UPDATE TEST SET DESCRIPTION="'.$description.'", SPECIFICATION="'.$spec.'" WHERE ID_USER_STORY = '.$id_us);
		if($req == FALSE)
			echo '<div class="alert alert-danger" role="alert">Impossible de modifier la spec.'.$row['ID'].'</div>';
		else
			echo '<legend>Inscription</legend>
						<div class="alert alert-success" role="alert">Modification specification réussit.</div>';
			?>
				<script type="text/javascript">
					var id_projet = <?php echo $id_projet; ?>;
					var obj = 'window.location.replace("index.php?action=affiche_tests&id_projet='+id_projet+'");';
					setTimeout(obj,1000);
				</script>
			<?php
			
				
			
	}
	else
		echo '<div class="alert alert-danger" role="alert">Champs obligatoires non remplis</div>';
		
	$conn->close();
?>