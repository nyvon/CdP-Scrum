<?php
include "bd-connexion.php";
$pseudo = $_POST['pseudo'];
$mdp = $_POST['pwd'];

  if(isset($_POST) && !empty($_POST['pseudo']) && !empty($_POST['pwd'])) {
  extract($_POST);  
  $sql = "select id from utilisateur where pseudo='".$pseudo."' AND mot_de_passe=MD5('".$mdp."')";
  $req = mysqli_query($conn,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
	$data = mysqli_fetch_assoc($req);
  if(!$req->num_rows>=1) { 
        echo '<legend>Inscription</legend>';
          echo '<div class="alert alert-danger" role="alert">Login incorrect. Redirection en cours...</div>';
?>
      <script type="text/javascript">
      <!--
        var obj = 'window.location.replace("index.php?action=login");';
        setTimeout(obj,3000);
      // -->
      </script>
<?php           
  }
  else {
   
  		session_start();
        $_SESSION['id'] = $data['id'];  
   		 $_SESSION['pseudo'] = $pseudo; 
        $_SESSION['islogged'] = true;

   		 echo '<div class="alert alert-success" role="alert">Vous êtes maintenant connecté. Redirection en cours...</div>';
    ?>
      <script type="text/javascript">
      <!--
        var obj = 'window.location.replace("index.php");';
        setTimeout(obj,3000);
      // -->
      </script>
<?php           
	}
       
}
?>
