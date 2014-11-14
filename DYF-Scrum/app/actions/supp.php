<?php

include "bd-connexion.php";
foreach($_POST['id_rep'] as $valeur)
{	
      
	if (isset($_POST['delete'])) { 
 
	$sql = "DELETE FROM `tache` WHERE `ID` = '$valeur'";
	$_SESSION['valeur']=$valeur;
	
	 $resul= $conn->query($sql);?>
	 
		<script type="text/javascript">
		
		var obj = 'window.location.replace("index.php?action=supprime_tache");';
		setTimeout(obj,3000);
	</script>

 <?php
} else {
	$_SESSION['valeur']=$valeur;	
 ?>
  <script type="text/javascript"> 
     <i class="fa fa-cog fa-spin"></i>
    var obj = 'window.location.replace("index.php?action=update_tache");';
    setTimeout(obj,2000); 
  </script>
<?php
}   
}
$conn->close();
?>

