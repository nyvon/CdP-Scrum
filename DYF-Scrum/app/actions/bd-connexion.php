<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
<<<<<<< HEAD
	$db = "dyfscrum";
=======
	$db = "dyfscrum";  //
>>>>>>> feature_affiche_projet
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

?>
