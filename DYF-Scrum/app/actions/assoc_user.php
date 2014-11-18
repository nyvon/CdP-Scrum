<?php

	include "bd-connexion.php";

	$id_user = $_REQUEST["user"];
    $id_projet = $_GET['id_projet'];
	$id_tache = $_REQUEST["id_tache"];
	$result = $conn->query($query1);

    	if (!empty($id_user) AND !empty($id_projet)  AND !empty($id_tache))
		{

			$query2 = "INSERT INTO KANBAN ( ID_TACHE, ID_UTILISATEUR) VALUES ('".$id_tache."','".$id_user."')";
			if( $conn->query($query2) == FALSE)
				echo "<div class='alert alert-danger' role='alert'>Impossible d'associer la tache et l'utilisateur.</div>";
			else
				echo '<div class="alert alert-success" role="alert">Utilisateur associé à la tache.</div>';
		?>
			<script type="text/javascript">
				var id_projet = "<?php echo $id_projet; ?>";
				var obj = 'window.location.replace("index.php?action=affiche_kanban&id_projet='+id_projet+'");';
				setTimeout(obj,0);
			</script>
		<?php
		}
		else
			echo '<div class="alert alert-danger" role="alert">Erreur de transmission des paramètres</div>';
			?>
		<script type="text/javascript">
				var id_projet = "<?php echo $id_projet; ?>";
				var obj = 'window.location.replace("index.php?action=affiche_kanban&id_projet='+id_projet+'");';
				setTimeout(obj,0);
			</script>
	