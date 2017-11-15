<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php 
	$archived = find_archived_reservation_by_id($_GET["id"]);

	if(!$archived) {
		redirect_to("archived_reservations.php");
	}

	$id = $archived["id"];	

	$query = "DELETE FROM archived WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);

	if($result && mysqli_affected_rows($connection) == 1){
		// success
		$_SESSION["message"] = "Archived reservation has been successfully deleted!";
		redirect_to("archived_reservations.php");
	}else{
		//failure
		$_SESSION["message"] = "Sorry, an error occured while deleting the reservation. ";
		redirect_to("archived_reservations.php");
	}

?>
