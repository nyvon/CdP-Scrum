<?php
	
	include "bd-connexion.php";
	
	$nom = $_REQUEST["nom"];
	$description = $_REQUEST["description"];
	$liengit = $_REQUEST["liengit"];
	$id_role = $_REQUEST["role"];
	
	
	if ( !empty($_POST['nom']) AND !empty($_POST['description']) AND !empty($_POST['liengit']) AND !empty($_POST['role']))
	{
	$query = "INSERT INTO PROJET ( NOM, DESCRIPTION, LIEN_GIT) VALUES ('".$nom."','".$description."','".$liengit."')";
	$query2 = "SELECT ID FROM PROJET WHERE NOM = '".$nom."' AND DESCRIPTION = '".$description."' AND LIEN_GIT = '".$liengit."'";

	if( $conn->query($query) == FALSE )
		echo '<div class="alert alert-danger" role="alert">Impossible de créer un projet.</div>';
	else{
		$result = $conn->query($query2);
		if( $result == FALSE){		
			echo '<div class="alert alert-danger" role="alert">Impossible de créer un projet.</div>';

		}
		else{
			$row = $result->fetch_assoc();
			$id_projet = $row["ID"];
			$id_utilisateur = $_SESSION['id'];
			$query3 = "INSERT INTO PARTICIPER (ID_PROJET,ID_UTILISATEUR,ID_ROLE) VALUES(".$id_projet.",".$id_utilisateur.",".$id_role.")";
			if($conn->query($query3) == FALSE){
				echo '<legend>Création projet</legend><div class="alert alert-danger" role="alert">Impossible de créer un projet.</div>';
			}
			else
				echo '<legend>Création projet</legend>
				<div class="alert alert-success" role="alert">Création de votre projet réussie.</div>';
		}
	}
	?>
		<script type="text/javascript">
		
		var obj = 'window.location.replace("index.php");';
		setTimeout(obj,3000);
	</script>
	<?php
	}
	else
		echo '<div class="alert alert-danger" role="alert">Champs obligatoires non remplis</div>';
	mysql_close($conn);
?>
