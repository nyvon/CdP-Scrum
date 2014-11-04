<?php

	include "bd-connexion.php";
	
	$nom = $_REQUEST["nom"];
	$prenom = $_REQUEST["prenom"];
	$mail = $_REQUEST["mail"];
	$login = $_REQUEST["login"];
	$mdp = $_REQUEST["mdp"];

    	if ( !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['login']) AND !empty($_POST['mdp']))
	{

		$query = "INSERT INTO UTILISATEUR ( NOM, PRENOM, MAIL, PSEUDO, MOT_DE_PASSE) VALUES ('".$nom."','".$prenom."','".$mail."','".$login."',MD5('".$mdp."'))";
		if( $conn->query($query) == FALSE)
			echo '<div class="alert alert-danger" role="alert">Impossible de créer votre compte.</div>';
		else

			
			echo '<legend>Inscription</legend>
<<<<<<< HEAD
			<div class="alert alert-success" role="alert">Création de votre compte réussie. Vous pouvez désormais vous connecter.</div>';
=======
			<div class="alert alert-success" role="alert">Création de votre compte réussi. Vous pouvez désormez vous connectez.</div>';
>>>>>>> befcf1cdd5467e8f54fd4e1897fb05ead5f948e1
		?>
			<script type="text/javascript">
			<!--
				var obj = 'window.location.replace("index.php");';
				setTimeout(obj,3000);
			// -->
			</script>
		<?php
		
	}
	else
		echo '<div class="alert alert-danger" role="alert">Champs obligatoires non remplis</div>';
		
	$conn->close();
?> 	