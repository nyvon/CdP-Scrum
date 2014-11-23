<?php
include "bd-connexion.php";
	$id_projet = $_GET['id_projet'];
	$date_deb = $_POST["date_deb"];
	$date_fin = $_POST["date_fin"];
	
	
	if ( !empty($_POST['date_deb']) AND !empty($_POST['date_fin']))
	{
		$datetime1 = new DateTime($date_deb);
		$datetime2 = new DateTime($date_fin);
		$interval = $datetime1->diff($datetime2);
		$query = "INSERT INTO SPRINT (DATE_DEB, DATE_FIN, DUREE, ID_PROJET) VALUES ('".$date_deb."','".$date_fin."','".$interval->format('%a')."','".$id_projet."')" ;
		if( $conn->query($query) == FALSE)
			echo '<div class="alert alert-danger" role="alert">Impossible de modifier le sprint.</div>';
		else

			
			echo '<legend>Inscription</legend>
			<div class="alert alert-success" role="alert">Création du sprint réussie.</div>';
		?>
			<script type="text/javascript">
             var id_projet = <?php echo $id_projet; ?>;
			 var obj = 'window.location.replace("index.php?action=sprints&id_projet='+id_projet+'");';
			 setTimeout(obj,1000);
			 </script>
		<?php
		
	}
	else
		echo '<div class="alert alert-danger" role="alert">Champs obligatoires non remplis</div>';
		
	$conn->close();
?>