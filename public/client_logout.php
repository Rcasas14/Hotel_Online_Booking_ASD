
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
	//simple logout

	$_SESSION["client_id"] =  null;
	$_SESSION["username"] = null;

	redirect_to("login_as_client.php");
?>