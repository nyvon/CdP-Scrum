<?php
include "bd-connexion.php";
	$id_projet = $_GET['id_projet'];
	$type = $_POST["type_user"];
	$but = $_POST["but"];
	$benef = $_POST["benefice"];
	$cout = $_POST["cout"];
	$prio = $_POST["priorite"];

    	if ( !empty($_POST['type_user']) AND !empty($_POST['but']))
	{

		$query = 'INSERT INTO USER_STORY ( 	TYPE_UTILISATEUR, BUT, BENEFICE, COUT, PRIORITE, ID_ETAT) VALUES ("'.utf8_decode($type).'","'.utf8_decode($but).'","'.utf8_decode($benef).'","'.$cout.'","'.$prio.'", 1)';
		if( $conn->query($query) == FALSE)
			echo '<div class="alert alert-danger" role="alert">Error 331: Bad request.</div>';
		else{	
			$query2 = 'SELECT ID FROM USER_STORY WHERE TYPE_UTILISATEUR = "'.utf8_decode($type).'" AND BUT = "'.utf8_decode($but).'" AND BENEFICE = "'.utf8_decode($benef).'" AND COUT = '.$cout.' AND PRIORITE = '.$prio.' AND ID_ETAT = 1';
			$result = $conn->query($query2);
			if($result->num_rows > 0){
				$row = $result->fetch_assoc();
				$query3 = "INSERT INTO BACKLOG(ID_PROJET,ID_USER_STORY) VALUES(".$id_projet.",".$row['ID'].")";
				if($conn->query($query3) == FALSE)
					echo '<div class="alert alert-danger" role="alert">Error 332: Bad request.</div>';
				else
					echo '<legend>Créer une User Story</legend>
					<div class="alert alert-success" role="alert">Création de la User Story en cours ...</div>';
			}
			else
				echo '<div class="alert alert-danger" role="alert">Error 333: Bad request.</div>';

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