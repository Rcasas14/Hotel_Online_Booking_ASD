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

	<!--	<a href="reserve.php">RESERVE</a> -->

		<br>
		<center><h2> Your Profile </h2></center>
		<a href="edit_client_profile.php" class="a">+ Edit Profile</a>
		<hr/>
			
		<p style="font-weight: bold;"> First Name: </p>
		<p> &nbsp; &nbsp; &nbsp; &nbsp;<?php echo htmlentities($client["First_Name"]); ?></p>

		<p style="font-weight: bold;"> Last Name </p>
		<p> &nbsp; &nbsp; &nbsp; &nbsp;<?php echo htmlentities($client["Last_Name"]); ?></p> 

		<p style="font-weight: bold;"> Username </p>
		<p> &nbsp; &nbsp; &nbsp; &nbsp;<?php echo htmlentities($client["Username"]); ?></p>

		<p style="font-weight: bold;"> E-mail </p>
		<p> &nbsp; &nbsp; &nbsp; &nbsp;<?php echo htmlentities($client["Email"]); ?></p> 

		<p style="font-weight: bold;"> Address </p>
		<p> &nbsp; &nbsp; &nbsp; &nbsp;<?php echo htmlentities($client["Address"]); ?></p> 

		<p style="font-weight: bold;"> City </p>
		<p> &nbsp; &nbsp; &nbsp; &nbsp;<?php echo htmlentities($client["City"]); ?></p>	
		<br>
		<br>
		
		
	</div>

	<script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>


</body>

</html>