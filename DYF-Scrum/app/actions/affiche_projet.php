<?php

	include"bd-connexion.php"; 
	
	$id = $_SESSION['id'];     //c'est ca qui marche pas;   que ca soit id ou pseudo
	$pseudo = $_SESSION['pseudo'];
	//$query = "SELECT * FROM  projet";   c'est ce que j'avais avant
	

	 $query="SELECT PROJET.ID, PROJET.NOM, PROJET.DESCRIPTION,PROJET.LIEN_GIT
	  FROM PROJET JOIN PARTICIPER 
	  ON PARTICIPER.ID_PROJET = PROJET.ID JOIN UTILISATEUR 
	  ON UTILISATEUR.ID = PARTICIPER.ID_UTILISATEUR
	   WHERE UTILISATEUR.ID =".$id; 

	$result =$conn->query($query);
	if( $result == TRUE){
		$num=mysqli_num_rows($result);

?>      


 <div class="page-header"><h3>Liste de(s) projet(s)  sur le(s)quel(s) travail  <small><?php echo $pseudo; ?></small></h3></div>
		<div class="container">     
    		<div class="row"> 
    		<div class="col-xs-12 col-sm-10 col-md-6"> 
       	    <table class="table table-bordered table-striped table-hover"> 
               
          <thead> 
          <tr> 
          <td>NOM PROJET</td> 
          <td>DESCRIPTION PROJET</td> 
          <td>EMPLACEMENT DU DEPOT</td> 
          <td>ID</td>
          </tr> 
          </thead> 
		
		<?php
		while($row = $result->fetch_assoc()){

			?>
			 <tbody> 
          <tr class="success"> 
          	<td><a href="#"><?php echo $row['NOM']; ?></a></td> 
          <td><?php echo $row['DESCRIPTION']; ?></td>  
          <td><?php echo $row['LIEN_GIT']; ?></td> 
          <td><?php echo $row['ID']; ?></td>
          </tr>            	
	     
        <?php
     }

		}
	else{
		echo "There are any error(s) with this request"; 		
	}	
$conn->close();
	
?>
