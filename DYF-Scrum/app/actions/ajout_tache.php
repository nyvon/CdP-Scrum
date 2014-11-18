<?php

include "bd-connexion.php";
	$id_projet = $_GET["id_projet"];
	$inti =$_POST["intitule"];
	$descri = $_POST["desc"];
	$cout = $_POST["cout"];
	$id_us = $_POST["id_us"];
	
	if( !empty($_POST['intitule']) AND !empty($_POST['desc']) AND !empty($_POST['cout']))
	{
	$query = "INSERT INTO TACHE ( INTITULE, DESCRIPTION, COUT, ID_ETAT) VALUES ('".$inti."','".$descri."','".$cout."',1)";
	if( $conn->query($query) == FALSE)
		echo '<div class="alert alert-danger" role="alert">Error : Echec creation de la tache .</div>';
	else{
		$req = $conn->query("SELECT ID FROM TACHE WHERE INTITULE ='".$inti."' AND DESCRIPTION ='".$descri."' AND COUT =".$cout);
		$row = $req->fetch_assoc();
		$req2 = $conn->query("INSERT INTO ASSOCIER (ID_USER_STORY, ID_TACHE) VALUES ('".$id_us."','".$row['ID']."')");
		if($req2 != FALSE)
			echo '<legend>Création tache</legend><div class="alert alert-success" role="alert">Tache créée avec succes</div>';
		else
			echo '<div class="alert alert-danger" role="alert">Error : Echec creation de la tache .</div>';


}
	?>
		<script type="text/javascript">
		var id_projet = "<?php echo $id_projet; ?>";
		var obj = 'window.location.replace("index.php?action=backlog&id_projet='+id_projet+'");';

		setTimeout(obj,2000);
	</script>
	<?php
	}
	else
		echo '<div class="alert alert-danger" role="alert">Champs obligatoires non remplis</div>';
	$conn->close();

?>
