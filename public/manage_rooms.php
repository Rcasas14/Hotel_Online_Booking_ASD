<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/functions.php"); ?>


<?php
	// database query
	$query  = "SELECT * ";
	$query .= "FROM rooms ";
	$query .= "ORDER BY room_type ASC";

	$result = msqli_query($connection, $query);
	confirm_query($result);
?>

<ul class="rooms">
	<?php
	//use returned data (if any)
	while($rooms = msqli_fetch_assoc($result)){
	?>
		<li> <?php echo $rooms["room_type"] . " " . $rooms["room_number"] . " " . $rooms["room_rate"] . " " . $rooms["available"]; ?> </li>
	<?php
	}
	?>

</ul>

<?php
	//release returned data
	mysqli_free_result($result);
?>

<?php
	// close database connection
	if(isset($connection)){
		mysqli_close($connection);
	}
?>
