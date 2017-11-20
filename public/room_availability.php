<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php client_confirm_logged_in(); ?>


<!DOCTYPE html>
<html>

<head>
	<title>Admin Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/admin.css" rel="stylesheet" type="text/css">
    
</head>

<body>

		<?php

			$now = new DateTime();

			$query  = "SELECT Room_Type, Check_in, Check_out ";
			$query .= "FROM approved ";
			$query .= "WHERE Check_out > now() ";
			$query .= "ORDER by Check_in ASC";
			
			
			$reserved_set = mysqli_query($connection, $query);
			confirm_query($reserved_set);
		?>

	<?php if($reserved_set && mysqli_num_rows($reserved_set) >= 1) {	?>

			<div class="reservations">

				<center><h2 class="log-details personal-details" style=" margin-left: -50px">Reserved Rooms in Grey Hotel</h2></center>
				<center><h4 class="log-details personal-details" style=" margin-left: -40px">You may reserve rooms with specific dates that are not on the list.</h4></center>
				<br>
					<table class="table">

						<tr>				
							<th rowspan="2"> Room Type </th>
							<th colspan="2">RESERVED DATES</th>
							<th rowspan="2"> Status </th>
						</tr>

						<tr>				
							
							<td><p>Reserved From (YYYY/MM/DD)</p></td>
							<td><p>Reserved To (YYYY/MM/DD)</p></td>
							
						</tr>

						<?php while($reserved = mysqli_fetch_assoc($reserved_set)) { ?>
						<tr>
							<td><?php echo htmlentities($reserved["Room_Type"]); ?> </td>
							<td><?php echo htmlentities($reserved["Check_in"]); ?> </td>
							<td><?php echo htmlentities($reserved["Check_out"]); ?> </td>				
							<td>RESERVED</td>
						</tr>
						<?php } ?>	

					</table>

			</div>		

	<?php }else{ 	

			$message = "There are no reserved rooms in Grey Hotel.";
       		echo "<script type='text/javascript'>alert('$message'); window.top.location.replace(\"reserve.php\"); window.close();</script>"; 

	 }	?>


</body>
</html>