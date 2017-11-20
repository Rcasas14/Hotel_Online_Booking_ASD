<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php 
	$admin = find_admin_by_id($_GET["id"]);

	if(!$admin) {
		redirect_to("manage_admins.php");
	}

	$id = $admin["id"];	
	$query = "DELETE FROM admins WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);

	if($result && mysqli_affected_rows($connection) == 1){
		// success
		//$_SESSION["message"] = "Admin successfully deleted!";
		//redirect_to("manage_admins.php");
		$message = "Admin successfully deleted!";
        echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"manage_admins.php\");</script>"; 
	}else{
		//failure
		//$_SESSION["message"] = "Admin deletion failed!";
		//redirect_to("manage_admins.php");
		$message = "Admin deletion failed!";
        echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"manage_admins.php\");</script>"; 
	}

?>
