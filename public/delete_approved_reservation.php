<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php 
	$approved = find_approved_reservation_by_id($_GET["id"]);

	if(!$approved) {
		// ID was missing or invalid or
		// couldn't be found in database
		redirect_to("approved_reservations.php");
	}

	$id = $approved["id"];	

	$query = "DELETE FROM approved WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);

	if($result && mysqli_affected_rows($connection) == 1){
		// success
		$_SESSION["message"] = "Approved reservation has been successfully deleted!";
		redirect_to("approved_reservations.php");
	}else{
		//failure
		$_SESSION["message"] = "Sorry, an error occured while deleting the reservation. ";
		redirect_to("approved_reservations.php");
	}

?>
