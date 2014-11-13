<?php
 include "bd-connexion.php";
  $sql = "SELECT INTITULE, ID, DESCRIPTION FROM `tache` ";
   $resul= $conn->query($sql);
   $conn->close();
   ?>  
