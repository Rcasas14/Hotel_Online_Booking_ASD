<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>


<?php      
    $client = find_client_by_username($_SESSION["username"]);
?>  

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.min.css" rel="stylesheet">
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="UIKIT/css/uikit-rtl.css" rel="stylesheet">
    <link href="UIKIT/css/uikit-rtl.min.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style.css" type="text/css" rel="stylesheet">
    <link href="stylesheets/style2.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div class="client_profile">

		<?php echo message(); ?>

		<br>
		<center><h2> Your Profile </h2></center>
		<a href="edit_client_profile.php" class="a">+ Edit Profile</a>
		<hr/>
			
		<p> <b>First Name:</b> <span style="margin-left: 30px;"><?php echo htmlentities($client["First_Name"]); ?> </span></p>
		<p> <b>Last Name:</b> <span style="margin-left: 30px;"><?php echo htmlentities($client["Last_Name"]); ?></span></p>
		<p> &nbsp;<b>Username:</b> <span style="margin-left: 30px;"><?php echo htmlentities($client["Username"]); ?></span></p>
		<p> <span style="margin-left: 30px;"><b>E-mail:</b></span> <span style="margin-left: 30px;"><?php echo htmlentities($client["Email"]); ?></span></p>
		<p> <span style="margin-left: 17px;"><b>Address:</b></span> <span style="margin-left: 30px;"> <?php echo htmlentities($client["Address"]); ?></span></p>
		<p> <span style="margin-left: 50px;"><b>City:</b></span> <span style="margin-left: 30px;"><?php echo htmlentities($client["City"]); ?></span></p>	
		<br>
		<br>
		
		
	</div>

	<script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script> 
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>


</body>

</html>