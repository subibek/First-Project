<?php

	include 'includes/dbh.php';
	include 'player_record.php';

	$num = $_GET['id'];
	$query = "delete from record where id = '$num'";

	$data = mysqli_query ($conn, $query);

?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL = http://localhost/Project1/player_record.php">
