<?php
include "bd-connexion.php";
$i = $_SESSION['valeur'];

    
    $sql = "UPDATE `tache` SET `INTITULE` = '".$_POST["intitule"]."', `DESCRIPTION` = '".$_POST["desc"]."', `COUT` = '".$_POST["cout"]."' WHERE `ID` =".$i;
      $resul= $conn->query($sql);
      $conn->close();
?>
<script type="text/javascript">
 
    var obj = 'window.location.replace("index.php?action=supprime_tache");';
    setTimeout(obj,1000);
 
  </script>
