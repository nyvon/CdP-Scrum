<?php

include "bd-connexion.php";
	
	$inti =$_POST["intitule"];
	$descri = $_POST["desc"];
	$cout = $_POST["cout"];
	
	
	if( !empty($_POST['intitule']) AND !empty($_POST['desc']) AND !empty($_POST['cout']))
	{
	$query = "INSERT INTO TACHE ( INTITULE, DESCRIPTION, COUT) VALUES ('".$inti."','".$descri."','".$cout."')";
	if( $conn->query($query) == FALSE)
		echo '<div class="alert alert-danger" role="alert">Error : Echec creation de la tache .</div>';
	else
		echo '<legend>Création tache</legend>
	<div class="alert alert-success" role="alert">Tache créée avec succes</div>';
	?>
		<script type="text/javascript">
		
		var obj = 'window.location.replace("index.php");';
		setTimeout(obj,2000);
	</script>
	<?php
	}
	else
		echo '<div class="alert alert-danger" role="alert">Champs obligatoires non remplis</div>';
	$conn->close();

?>
