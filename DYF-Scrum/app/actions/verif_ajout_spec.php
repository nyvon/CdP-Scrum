<?php
	include "bd-connexion.php";
    $id_projet = $_GET['id_projet'];
	$id_us = $_GET['id_us'];
	$id_sprint = $_GET['id_sprint'];
	
	$description = $_POST["description"];
	$spec = $_POST["spec"];
	if ( !empty($_POST['description']) AND !empty($_POST['spec']))
	{
		//pour l'instant j'ai mis l'etat a 1, a verifier
		$req1 = $conn->query('INSERT INTO test (TYPE, DESCRIPTION, SPECIFICATION, ID_ETAT, ID_USER_STORY, ID_SPRINT) VALUES ("TEST_VALIDATION", "'.$description.'", "'.$spec.'", 1, "'.$id_us.'", "'.$id_sprint.'")');
		
		if( $req1 == FALSE)
				echo '<div class="alert alert-danger" role="alert">Impossible dajouter la spec 1.</div>';
		else
			echo '<legend>Inscription</legend>
					<div class="alert alert-success" role="alert">Ajout specification réussit.</div>';
			?>
				<script type="text/javascript">
					var id_projet = <?php echo $id_projet; ?>;
					var obj = 'window.location.replace("index.php?action=affiche_tests&id_projet='+id_projet+'");';
					setTimeout(obj,1000);
				</script>
			<?php
				
					
				
			
		}else
			echo '<div class="alert alert-danger" role="alert">Champs obligatoires non remplis</div>';
		
	$conn->close();
	
	?>