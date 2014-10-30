<?php
$host ="localhost";
$user ="root";
$bdd ="bd";                         //à conformiser avec la vraie base apres
$pwd1  ="";
$base= mysqli_connect($host, $user,$pwd1, $bdd); 
$pseudo = $_POST['pseudo'];
$mdp = $_POST['pwd'];

  if(isset($_POST) && !empty($_POST['pseudo']) && !empty($_POST['pwd'])) {
  extract($_POST);  
  $sql = "select mot_de_passe from utilisateur where pseudo='".$pseudo."'";
  $req = mysqli_query($base,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
	$data = mysqli_fetch_assoc($req);
  if($data['mot_de_passe'] != $mdp) {   
    Atomik::redirect('loggin.php');
    exit;
  }
  else {
  	if(!isset($_SESSION))
  	{  
  		session_start();
   		 $_SESSION['pseudo'] = $pseudo;  
   		  printf("Vous etes bien logué");     	
    	      
	}
  echo '<a href="index.php?action=projet">voir les projets</a>';
  }     
}
?>
