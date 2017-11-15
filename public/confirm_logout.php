<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Admin Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="stylesheets/admin.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="confirm_logout">
		<center><h2>Profile successfully updated!</h2></center>
		<center><h3>Please log out your account to save some changes.</h3></center>
		<center><h2>Thank You!</h2></center>
		<center><a href="client_logout.php" base target="_parent"><button>LOGOUT NOW</button></a></center>
	</div>	

</body>
</html>