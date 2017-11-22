<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php client_confirm_logged_in(); ?>


<!DOCTYPE html>
<html>

<head>
	<title>Grey Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/admin.css" rel="stylesheet" type="text/css">    
</head>

<body>

	<center><h2 class="log-details personal-details" style=" margin-left: -50px; margin-top: 60px;">Grey Rooms Availability Checker</h2></center>
	<hr>


	<!-- SUPERIOR ROOM AVAILABILITY CHECKER - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -  -->

<?php

	$query  = "SELECT Check_in, Check_out ";
	$query .= "FROM approved ";
	$query .= "WHERE Room_Type = 'Superior Room' AND Check_out > now() ";
	$query .= "ORDER by Check_in ASC";
	
	
	$superior_room = mysqli_query($connection, $query);
	confirm_query($superior_room);
?>


<?php if($superior_room && mysqli_num_rows($superior_room) >= 1) {	?>

		<div class="reserved">

			<h3> SUPERIOR ROOM </h3><hr>

			<h4 style="margin-left: 40px">You may reserve Grey Superior Room with specific dates that are not on the list.</h4>

			<br>
			<center>

				<img style="height: 200px; width: 300px;" src="Images/mp_superiorRoom.jpg" alt="Grey Hotel">

				<div style="float:right;">
					
					<table class="table">

						<tr>				
							<th colspan="2">RESERVED DATES</th>							
						</tr>

						<tr>				
							<th style="width: 50px;"><p>Reserved From (YYYY/MM/DD)</p></th>
							<th><p>Reserved To (YYYY/MM/DD)</p></th>								
						</tr>

						<?php while($superior = mysqli_fetch_assoc($superior_room)) { ?>
						<tr>
							<td><?php echo htmlentities($superior["Check_in"]); ?> </td>
							<td><?php echo htmlentities($superior["Check_out"]); ?> </td>				
					
						</tr>
						<?php } ?>	

					</table>		
				</div>

			</center>

		</div>

<?php }else{ 	?>

			<div class="reserved">
				<div>

					<h3> SUPERIOR ROOM </h3><hr>
					<img style="height: 200px; width: 300px;" src="Images/mp_superiorRoom.jpg" alt="Grey Hotel">
					
					<div style="float:right;">
						<h4 style=" margin-left: 40px"> Grey Superior Room is <b>AVAILABLE</b>. </h4>							
					</div>

		       	</div>
		    </div>
			
<?php }	?>	



<!-- DELUXE ROOM AVAILABILITY CHECKER - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -  -->

<?php

	$query  = "SELECT Check_in, Check_out ";
	$query .= "FROM approved ";
	$query .= "WHERE Room_Type = 'Deluxe Room' AND Check_out > now() ";
	$query .= "ORDER by Check_in ASC";
	
	
	$deluxe_room = mysqli_query($connection, $query);
	confirm_query($deluxe_room);
?>


<?php if($deluxe_room && mysqli_num_rows($deluxe_room) >= 1) {	?>

		<div class="reserved">

			<h3> DELUXE ROOM </h3>
			<hr>

			<center><h4 style=" margin-left: -40px">You may reserve Grey Deluxe Room with specific dates that are not on the list.</h4></center>

			<br>
			<center>

				<img style="height: 200px; width: 300px;" src="Images/mp_deluxeRoom.jpg" alt="Grey Hotel">

				<div style="float:right;">
					
					<table class="table">

						<tr>				
							<th colspan="2">RESERVED DATES</th>							
						</tr>

						<tr>				
							<th style="width: 50px;"><p>Reserved From (YYYY/MM/DD)</p></th>
							<th><p>Reserved To (YYYY/MM/DD)</p></th>								
						</tr>

						<?php while($deluxe = mysqli_fetch_assoc($deluxe_room)) { ?>
						<tr>
							<td><?php echo htmlentities($deluxe["Check_in"]); ?> </td>
							<td><?php echo htmlentities($deluxe["Check_out"]); ?> </td>									
						</tr>
						<?php } ?>	

					</table>		
				</div>

			</center>

		</div>

<?php }else{ 	?>

			<div class="reserved">
				<div>

					<h3> DELUXE ROOM </h3><hr>
					<img style="height: 200px; width: 300px;" src="Images/mp_deluxeRoom.jpg" alt="Grey Hotel">
					
					<div style="float:right;">
						<h4 style=" margin-left: 40px"> Grey Deluxe Room is <b>AVAILABLE</b>. </h4>							
					</div>

		       	</div>
		    </div>

<?php }	?>	



<!-- PREMIER ROOM AVAILABILITY CHECKER - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -  -->

<?php

	$query  = "SELECT Check_in, Check_out ";
	$query .= "FROM approved ";
	$query .= "WHERE Room_Type = 'Premier Room' AND Check_out > now() ";
	$query .= "ORDER by Check_in ASC";
	
	
	$premier_room = mysqli_query($connection, $query);
	confirm_query($premier_room);
?>


<?php if($premier_room && mysqli_num_rows($premier_room) >= 1) {	?>

		<div class="reserved">

			<h3> PREMIER ROOM </h3>
			<hr>

			<center><h4 style=" margin-left: -40px">You may reserve Grey Premier Room with specific dates that are not on the list.</h4></center>

			<br>
			<center>

				<img style="height: 200px; width: 300px;" src="Images/mp_premier.jpg" alt="Grey Hotel">

				<div style="float:right;">
					
					<table class="table">

						<tr>				
							<th colspan="2">RESERVED DATES</th>							
						</tr>

						<tr>				
							<th style="width: 50px;"><p>Reserved From (YYYY/MM/DD)</p></th>
							<th><p>Reserved To (YYYY/MM/DD)</p></th>								
						</tr>

						<?php while($premier = mysqli_fetch_assoc($premier_room)) { ?>
						<tr>
							<td><?php echo htmlentities($premier["Check_in"]); ?> </td>
							<td><?php echo htmlentities($premier["Check_out"]); ?> </td>									
						</tr>
						<?php } ?>	

					</table>		
				</div>

			</center>

		</div>

<?php }else{ 	?>

			<div class="reserved">
				<div>

					<h3> PREMIER ROOM </h3><hr>
					<img style="height: 200px; width: 300px;" src="Images/mp_premier.jpg" alt="Grey Hotel">
					
					<div style="float:right;">
						<h4 style=" margin-left: 40px"> Grey Premier Room is <b>AVAILABLE</b>. </h4>							
					</div>

		       	</div>
		    </div>

<?php }	?>	



</body>
</html>