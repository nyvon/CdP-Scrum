<?php
	include "bd-connexion.php";
    $id_projet = $_GET['id_projet'];
	$id_test = $_GET['id_test'];
	//pour l'instant j'ai mis l'etat a 1, a verifier
	echo $id_test;
	$req = $conn->query('UPDATE TEST SET ID_ETAT=3 WHERE ID = '.$id_test);
	if($req == FALSE)
		echo '<div class="alert alert-danger" role="alert">Impossible de valider</div>';
	else{
		echo '<legend>Suppression</legend>
					<div class="alert alert-success" role="alert">Validation réussie.</div>';
		}
		?>
			<script type="text/javascript">
				var id_projet = <?php echo $id_projet; ?>;
				var obj = 'window.location.replace("index.php?action=affiche_tests&id_projet='+id_projet+'");';
				setTimeout(obj,10000000);
			</script>
		<?php
	$conn->close();
?>