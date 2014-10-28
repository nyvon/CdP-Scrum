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
			echo "Impossible de créer votre compte";
		else

			
			echo "<legend>Inscription</legend>
			Création de votre compte réussi.</br>Vous allez être redirigé vers l'accueil.";
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
		echo "Champs obligatoires non remplis";
		
	mysql_close($link);
?> 	