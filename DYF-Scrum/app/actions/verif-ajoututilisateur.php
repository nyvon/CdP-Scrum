<?php

	include "bd-connexion.php";

	$login = $_REQUEST["login"];
	$id_role = $_REQUEST["role"];
    $id_projet = $_GET['id_projet'];



	$query1 = "SELECT ID FROM UTILISATEUR WHERE pseudo='".$login."'";
	

	$result = $conn->query($query1);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$id_utilisateur = $row["ID"];
    	if (!empty($id_role) AND !empty($id_projet)  AND !empty($id_utilisateur))
		{

			$query2 = "INSERT INTO PARTICIPER ( ID_PROJET, ID_UTILISATEUR, ID_ROLE) VALUES ('".$id_projet."','".$id_utilisateur."','".$id_role."')";
			if( $conn->query($query2) == FALSE)
				echo "<div class='alert alert-danger' role='alert'>Impossible d'ajouter l'utilisateur.</div>";
			else
				echo '<div class="alert alert-success" role="alert">Utilisateur ajouté au projet.</div>';
		?>
			<script type="text/javascript">
				var id_projet = "<?php echo $id_projet; ?>";
				var obj = 'window.location.replace("index.php?action=ajout-utilisateur&id_projet='+id_projet+'");';
				setTimeout(obj,3000);
			</script>
		<?php
		}
		else
			echo '<div class="alert alert-danger" role="alert">Erreur de transmission des paramètres</div>';
			?><script type="text/javascript">
				var id_projet = "<?php echo $id_projet; ?>";
				var obj = 'window.location.replace("index.php?action=ajout-utilisateur&id_projet='+id_projet+'");';
				setTimeout(obj,3000);
			</script>
			<?php
	}
	else
	mysql_close($link);
?> 	