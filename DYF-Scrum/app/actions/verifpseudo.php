<?
	include 'bd-connexion.php';

	// Verification de la disponibilité du login
	$result = $conn->query("SELECT PSEUDO FROM UTILISATEUR WHERE PSEUDO='".$_GET["pseudo"]."'");
	if($result->num_rows>=1)
		echo "1";
	else
		echo "2";
?>