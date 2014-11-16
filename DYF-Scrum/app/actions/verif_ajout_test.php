<?php
	include "bd-connexion.php";
    $id_projet = $_GET['id_projet'];
	$id_sprint = $_GET['id_sprint'];
	
	$description = $_POST["description"];
	$spec = $_POST["spec"];
	$type = $_POST["type"];
	$tache = $_POST["tache"];
	if ( !empty($_POST['description']) AND !empty($_POST['spec'])AND !empty($_POST['type']))
	{
		//pour l'instant j'ai mis l'etat a 1, a verifier
		if($tache == 0)
			$req1 = $conn->query('INSERT INTO test (TYPE, DESCRIPTION, SPECIFICATION, ID_ETAT, ID_SPRINT) VALUES ("'.$type.'", "'.$description.'", "'.$spec.'", 1, "'.$id_sprint.'")');
		else		
			$req1 = $conn->query('INSERT INTO test (TYPE, DESCRIPTION, SPECIFICATION, ID_ETAT, ID_TACHE, ID_SPRINT) VALUES ("'.$type.'", "'.$description.'", "'.$spec.'", 1, "'.$tache.'", "'.$id_sprint.'")');
		
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