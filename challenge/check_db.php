<?php

	// Require conn.php (DB connection) file
	require_once("conn.php");

	// This query will check do we have car_id in the table car
	// for the provided $id
	$sql ="SELECT COUNT(media.media_id) as total FROM media WHERE mediaStatus = 1";

	// Perform a query on the DB
	$result = mysqli_query($conn, $sql);

	// Fetch the query into $row
	$row = mysqli_fetch_assoc($result);

	echo "The book library currently has ". $row['total']. " books available.";

	// Close the DB connection
	mysqli_close($conn);

?>