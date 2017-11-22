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

	<center><h2 class="log-details personal-details" style=" margin-left: -50px; margin-top: 60px;">Grey Continental Clubs Availability Checker</h2></center>
	<hr>


	<!-- CONTINENTAL CLUB BENEFITS AVAILABILITY CHECKER - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -  -->

<?php

	$query  = "SELECT Check_in, Check_out ";
	$query .= "FROM approved ";
	$query .= "WHERE Room_Type = 'Continental Club Benefits' AND Check_out > now() ";
	$query .= "ORDER by Check_in ASC";
	
	
	$continental_club = mysqli_query($connection, $query);
	confirm_query($continental_club);
?>


<?php if($continental_club && mysqli_num_rows($continental_club) >= 1) {	?>

		<div class="reserved">

			<h3> CONTINENTAL CLUB BENEFITS </h3><hr>

			<h4 style="margin-left: 40px">You may reserve Grey Continental Club Benefits with specific dates that are not on the list.</h4>

			<br>
			<center>

				<img style="height: 200px; width: 300px;" src="Images/mp_continentalClubBenefits.jpg" alt="Grey Hotel">

				<div style="float:right;">
					
					<table class="table">

						<tr>				
							<th colspan="2">RESERVED DATES</th>							
						</tr>

						<tr>				
							<th style="width: 50px;"><p>Reserved From (YYYY/MM/DD)</p></th>
							<th><p>Reserved To (YYYY/MM/DD)</p></th>								
						</tr>

						<?php while($continental = mysqli_fetch_assoc($continental_club)) { ?>
						<tr>
							<td><?php echo htmlentities($continental["Check_in"]); ?> </td>
							<td><?php echo htmlentities($continental["Check_out"]); ?> </td>				
					
						</tr>
						<?php } ?>	

					</table>		
				</div>

			</center>

		</div>

<?php }else{ 	?>

			<div class="reserved">
				<div>

					<h3> CONTINENTAL CLUB BENEFITS </h3><hr>
					<img style="height: 200px; width: 300px;" src="Images/mp_continentalClubBenefits.jpg" alt="Grey Hotel">
					
					<div style="float:right;">
						<h4 style=" margin-left: 40px"> Grey Continental Club Benefit is <b>AVAILABLE</b>. </h4>							
					</div>

		       	</div>
		    </div>
			
<?php }	?>	



<!-- CONTINENTAL DELUXE ROOM AVAILABILITY CHECKER - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -  -->

<?php

	$query  = "SELECT Check_in, Check_out ";
	$query .= "FROM approved ";
	$query .= "WHERE Room_Type = 'Continental Deluxe Room' AND Check_out > now() ";
	$query .= "ORDER by Check_in ASC";
	
	
	$continental_deluxe = mysqli_query($connection, $query);
	confirm_query($continental_deluxe);
?>


<?php if($continental_deluxe && mysqli_num_rows($continental_deluxe) >= 1) {	?>

		<div class="reserved">

			<h3> CONTINENTAL DELUXE ROOM </h3>
			<hr>

			<center><h4 style=" margin-left: -40px">You may reserve Grey Continental Deluxe Room with specific dates that are not on the list.</h4></center>

			<br>
			<center>

				<img style="height: 200px; width: 300px;" src="Images/mp_continentalDeluxeRoom.jpg" alt="Grey Hotel">

				<div style="float:right;">
					
					<table class="table">

						<tr>				
							<th colspan="2">RESERVED DATES</th>							
						</tr>

						<tr>				
							<th style="width: 50px;"><p>Reserved From (YYYY/MM/DD)</p></th>
							<th><p>Reserved To (YYYY/MM/DD)</p></th>								
						</tr>

						<?php while($continental = mysqli_fetch_assoc($continental_deluxe)) { ?>
						<tr>
							<td><?php echo htmlentities($continental["Check_in"]); ?> </td>
							<td><?php echo htmlentities($continental["Check_out"]); ?> </td>									
						</tr>
						<?php } ?>	

					</table>		
				</div>

			</center>

		</div>

<?php }else{ 	?>

			<div class="reserved">
				<div>

					<h3> CONTINENTAL DELUXE ROOM </h3><hr>
					<img style="height: 200px; width: 300px;" src="Images/mp_continentalDeluxeRoom.jpg" alt="Grey Hotel">
					
					<div style="float:right;">
						<h4 style=" margin-left: 40px"> Grey Continental Deluxe Room is <b>AVAILABLE</b>. </h4>							
					</div>

		       	</div>
		    </div>

<?php }	?>	



<!-- CONTINENTAL SUPERIOR ROOM AVAILABILITY CHECKER - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -  -->

<?php

	$query  = "SELECT Check_in, Check_out ";
	$query .= "FROM approved ";
	$query .= "WHERE Room_Type = 'Continental Superior Room' AND Check_out > now() ";
	$query .= "ORDER by Check_in ASC";
	
	
	$continental_superior = mysqli_query($connection, $query);
	confirm_query($continental_superior);
?>


<?php if($continental_superior && mysqli_num_rows($continental_superior) >= 1) {	?>

		<div class="reserved">

			<h3> CONTINENTAL SUPERIOR ROOM </h3>
			<hr>

			<center><h4 style=" margin-left: -40px">You may reserve Grey Continental Superior Room with specific dates that are not on the list.</h4></center>

			<br>
			<center>

				<img style="height: 200px; width: 300px;" src="Images/mp_continentalSuperiorSuite.jpg" alt="Grey Hotel">

				<div style="float:right;">
					
					<table class="table">

						<tr>				
							<th colspan="2">RESERVED DATES</th>							
						</tr>

						<tr>				
							<th style="width: 50px;"><p>Reserved From (YYYY/MM/DD)</p></th>
							<th><p>Reserved To (YYYY/MM/DD)</p></th>								
						</tr>

						<?php while($continental = mysqli_fetch_assoc($continental_superior)) { ?>
						<tr>
							<td><?php echo htmlentities($continental["Check_in"]); ?> </td>
							<td><?php echo htmlentities($continental["Check_out"]); ?> </td>									
						</tr>
						<?php } ?>	

					</table>		
				</div>

			</center>

		</div>

<?php }else{ 	?>

			<div class="reserved">
				<div>

					<h3> CONTINENTAL SUPERIOR ROOM </h3><hr>
					<img style="height: 200px; width: 300px;" src="Images/mp_continentalSuperiorSuite.jpg" alt="Grey Hotel">
					
					<div style="float:right;">
						<h4 style=" margin-left: 40px"> Grey Continental Superior Room is <b>AVAILABLE</b>. </h4>							
					</div>

		       	</div>
		    </div>

<?php }	?>	



</body>
</html>