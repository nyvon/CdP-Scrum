<?php
	include "bd-connexion.php";
    $id_projet = $_GET['id_projet'];
	$id_test = $_GET['id_test'];
	//pour l'instant j'ai mis l'etat a 1, a verifier
	$req = $conn->query('DELETE FROM TEST WHERE ID = '.$id_test);
	if($req == FALSE)
		echo '<div class="alert alert-danger" role="alert">Impossible de supprimer la spec.'.$row['ID'].'</div>';
	else{
		echo '<legend>Suppression</legend>
					<div class="alert alert-success" role="alert">Suppression specification r�ussie.</div>';
		}
		?>
			<script type="text/javascript">
				var id_projet = <?php echo $id_projet; ?>;
				var obj = 'window.location.replace("index.php?action=affiche_tests&id_projet='+id_projet+'");';
				setTimeout(obj,1000);
			</script>
		<?php
	$conn->close();
?>