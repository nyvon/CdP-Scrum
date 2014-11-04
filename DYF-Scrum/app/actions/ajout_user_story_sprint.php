<?php
   include 'bd-connexion.php';
   $id_sprint = $_GET['id_sprint'];
   $id_us = $_GET['id_us'];
   $id_projet = $_GET['id_projet'];
   
	$query = "INSERT INTO CONTENIR (ID_SPRINT, ID_USER_STORY) VALUES ('".$id_sprint."','".$id_us."')";
	if( $conn->query($query) == FALSE)
	{
	
		$conn->query("DELETE FROM CONTENIR WHERE ID_USER_STORY='".$id_us."'");
		$query1 = "INSERT INTO CONTENIR (ID_SPRINT, ID_USER_STORY) VALUES ('".$id_sprint."','".$id_us."')";
		if ($conn->query($query1) == FALSE)
		{
			echo '<div class="alert alert-danger" role="alert">Error 33: Bad request.</div>';
		}
		else
		{
			echo '<legend>Association</legend><div class="alert alert-success" role="alert">Association user story avec sprint</div>';
		}
	}	
	else
		{
			echo '<legend>Association</legend><div class="alert alert-success" role="alert">Association user story avec sprint</div>';
		}
	?>
			<script type="text/javascript">
             var id_projet = <?php echo $idprojet; ?>;
			 var obj = 'window.location.replace("index.php?action=sprints&id_projet='+id_projet+'");';
			 setTimeout(obj,3000);
			 </script>
			
		<?php
			$conn->close();
?> 	