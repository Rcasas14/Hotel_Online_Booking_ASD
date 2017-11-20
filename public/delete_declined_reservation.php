<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php 
	$declined = find_declined_reservation_by_id($_GET["id"]);

	if(!$declined) {
		redirect_to("approved_reservations.php");
	}

	$id = $declined["id"];	
	
	$query = "DELETE FROM declined WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);

	if($result && mysqli_affected_rows($connection) == 1){
		// success
		//$_SESSION["message"] = "Declined reservation has been successfully deleted!";
		//redirect_to("declined_reservations.php");
		$message = "Declined reservation has been successfully deleted!";
        echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"declined_reservations.php\");</script>"; 
	}else{
		//failure
		//$_SESSION["message"] = "Sorry, an error occured while deleting the reservation. ";
		//redirect_to("declined_reservations.php");
		$message = "Sorry, an error occured while deleting the reservation. ";
        echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"declined_reservations.php\");</script>"; 
	}

?>