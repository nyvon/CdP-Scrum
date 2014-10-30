<?php
	echo "les Projets";
	include"bd_conn.php";

	$query = "SELECT * FROM  projet";
	if( $conn->query($query) == TRUE)
	printf("jusque là tout va bien");



$conn->close();
?>