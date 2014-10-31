<?php
	
	include "bd-connexion.php";
	
	$nom = $_REQUEST["nom"];
	$description = $_REQUEST["description"];
	$liengit = $_REQUEST["liengit"];
	
	
	if ( !empty($_POST['nom']) AND !empty($_POST['description']) AND !empty($_POST['liengit']))
	{
	$query = "INSERT INTO PROJET ( NOM, DESCRIPTION, LIEN_GIT) VALUES ('".$nom."','".$description."','".$liengit."')";
	if( $conn->query($query) == FALSE)
		echo '<div class="alert alert-danger" role="alert">Impossible de créer un projet.</div>';
	else
		echo '<legend>Création projet</legend>
	<div class="alert alert-success" role="alert">Création de votre projet réussie.</div>';
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
