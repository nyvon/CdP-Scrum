<?php
include "bd-connexion.php";
	
	$type = $_POST["type_user"];
	$but = $_POST["but"];
	$benef = $_POST["benefice"];
	$coup = $_POST["coup"];
	$prio = $_POST["priorite"];

    	if ( !empty($_POST['type_user']) AND !empty($_POST['but']))
	{

		$query = "INSERT INTO USER_STORY ( 	TYPE_UTILISATEUR, BUT, BENEFICE, COUT, PRIORITE) VALUES ('".$type."','".$but."','".$benef."','".$coup."','".$prio."')";
		if( $conn->query($query) == FALSE)
			echo '<div class="alert alert-danger" role="alert">Error 33: Bad request.</div>';
		else			
			echo '<legend>USER STORY</legend>
			<div class="alert alert-success" role="alert">Creation du USER STORY en cours ...</div>';
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