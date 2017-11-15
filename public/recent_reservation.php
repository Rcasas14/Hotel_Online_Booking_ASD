<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>


<?php      
    $client = find_client_recent_reservation($_SESSION["username"]);
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

	<div class="recent_reservation">

		<?php echo message(); ?>

		<br>
		<center><h2> Your Recent Reservation </h2></center> <br>
	<!--	<a href="edit_client_profile.php" class="a">+ Edit Profile</a>	-->
	
		<p> <span style="margin-left: 20px;" style="margin-left: 30px;"><b>Reservation Details:</b></span></p>
		<hr/>
		<p> <span style="margin-left: 90px;"><b>Status:</b></span> <span style="margin-left: 30px;"><?php echo htmlentities($client["Status"]); ?> </span></p>
		<p> <span style="margin-left: 70px;"><b>Check-in:</b></span> <span style="margin-left: 30px;"><?php echo htmlentities($client["Check_in"]); ?></span></p>	
		<p> <span style="margin-left: 60px;"><b>Check-out:</b></span> <span style="margin-left: 30px;"><?php echo htmlentities($client["Check_out"]); ?> </span></p>
		<p> <b>Number of Nights:</b> <span style="margin-left: 30px;"> <?php echo htmlentities($client["Number_Of_Nights"]); ?></span></p>

		<?php $room_type = $client["Room_Type"]; ?>

		<?php
			global $room_type, $connection;
			
			$safe_room_type = mysqli_real_escape_string($connection, $room_type);

			$query  = "SELECT * ";
			$query .= "FROM rooms ";
			$query .= "WHERE Room_Type = '{$safe_room_type}' ";
			$query .= "LIMIT 1";

			$room_type_set = mysqli_query($connection, $query);
			confirm_query($room_type);

			if($room_type = mysqli_fetch_assoc($room_type_set)) {	?>
				<p> <span style="margin-left: 65px;"><b>Category:</b></span> <span style="margin-left: 30px;"><?php echo $room_type["Category"]; ?></span></p>
				<p> <span style="margin-left: 50px;"><b>Room Type:</b></span> <span style="margin-left: 30px;"><?php echo htmlentities($client["Room_Type"]); ?></span></p>
				<p> <span style="margin-left: 25px;"><b>Room Number:</b></span> <span style="margin-left: 30px;"><?php echo $room_type["Room_Number"]; ?></span></p>
				<p> <span style="margin-left: 55px;"><b>Room Rate:</b></span> <span style="margin-left: 30px;"><?php echo $room_type["Room_Rate"]; ?>/night</span></p>
			<?php	}	?>
		
		<p> <span style="margin-left: 4px;"><b>Mode of Payment:</b></span> <span style="margin-left: 30px;"><?php echo htmlentities($client["Payment"]); ?> </span></p>

		<?php

			$num_of_nights = $client["Number_Of_Nights"];
			$room_rate = $room_type["Room_Rate"];

			global $num_of_nights, $room_rate;
			
			$rate_replaced_php = str_replace("Php", "", $room_rate);
			$rate_replaced_comma = str_replace(",", "", $rate_replaced_php);

			$room_rate_float = intval($rate_replaced_comma);
			
			$total = ($room_rate_float * $num_of_nights);

			$total_amount = number_format($total , 0 ,"." ,"," );
		?>

		<p> <span style="margin-left: -28px;"><b>Total Amount Payable:</b></span> <span style="margin-left: 30px;">Php <?php echo htmlentities($total_amount); ?></span></p>

		<br>
		
		<p> <span style="margin-left: 20px;" style="margin-left: 30px;"><b>Personal Details:</b></span></p>
		<hr/>			
		<p> <span style="margin-left: 60px;"><b>First Name:</b></span> <span style="margin-left: 30px;"><?php echo htmlentities($client["First_Name"]); ?> </span></p>
		<p> <span style="margin-left: 60px;"><b>Last Name:</b></span> <span style="margin-left: 30px;"><?php echo htmlentities($client["Last_Name"]); ?></span></p>
		<p> <span style="margin-left: 62px;"><b>Username:</b></span> <span style="margin-left: 30px;"><?php echo htmlentities($client["Username"]); ?></span></p>
		<p> <span style="margin-left: 90px;"><b>E-mail:</b></span> <span style="margin-left: 30px;"><?php echo htmlentities($client["Email"]); ?></span></p>
		<p> <span style="margin-left: 75px;"><b>Address:</b></span> <span style="margin-left: 30px;"> <?php echo htmlentities($client["Address"]); ?></span></p>

		
	</div>

	<script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script> 
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>


</body>

</html>