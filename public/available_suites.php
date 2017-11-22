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

	<center><h2 class="log-details personal-details" style=" margin-left: -50px; margin-top: 60px;">Grey Suites Availability Checker</h2></center>
	<hr>


	<!-- DELUXE SUITE AVAILABILITY CHECKER - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -  -->

<?php

	$query  = "SELECT Check_in, Check_out ";
	$query .= "FROM approved ";
	$query .= "WHERE Room_Type = 'Deluxe Suite' AND Check_out > now() ";
	$query .= "ORDER by Check_in ASC";
	
	
	$deluxe_suite = mysqli_query($connection, $query);
	confirm_query($deluxe_suite);
?>


<?php if($deluxe_suite && mysqli_num_rows($deluxe_suite) >= 1) {	?>

		<div class="reserved">

			<h3> DELUXE SUITE </h3><hr>

			<h4 style="margin-left: 40px">You may reserve Grey Deluxe Suite with specific dates that are not on the list.</h4>

			<br>
			<center>

				<img style="height: 200px; width: 300px;" src="Images/mp_deluxeSuite.jpg" alt="Grey Hotel">

				<div style="float:right;">
					
					<table class="table">

						<tr>				
							<th colspan="2">RESERVED DATES</th>							
						</tr>

						<tr>				
							<th style="width: 50px;"><p>Reserved From (YYYY/MM/DD)</p></th>
							<th><p>Reserved To (YYYY/MM/DD)</p></th>								
						</tr>

						<?php while($deluxe = mysqli_fetch_assoc($deluxe_suite)) { ?>
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

					<h3> DELUXE SUITE </h3><hr>
					<img style="height: 200px; width: 300px;" src="Images/mp_deluxeSuite.jpg" alt="Grey Hotel">
					
					<div style="float:right;">
						<h4 style=" margin-left: 40px"> Grey Deluxe Suite is <b>AVAILABLE</b>. </h4>							
					</div>

		       	</div>
		    </div>
			
<?php }	?>	



<!-- CABANA SUITE AVAILABILITY CHECKER - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -  -->

<?php

	$query  = "SELECT Check_in, Check_out ";
	$query .= "FROM approved ";
	$query .= "WHERE Room_Type = 'Cabana Suite' AND Check_out > now() ";
	$query .= "ORDER by Check_in ASC";
	
	
	$cabana_suite = mysqli_query($connection, $query);
	confirm_query($cabana_suite);
?>


<?php if($cabana_suite && mysqli_num_rows($cabana_suite) >= 1) {	?>

		<div class="reserved">

			<h3> CABANA SUITE </h3>
			<hr>

			<center><h4 style=" margin-left: -40px">You may reserve Grey Cabana Suite with specific dates that are not on the list.</h4></center>

			<br>
			<center>

				<img style="height: 200px; width: 300px;" src="Images/mp_cabanaSuites.jpg" alt="Grey Hotel">

				<div style="float:right;">
					
					<table class="table">

						<tr>				
							<th colspan="2">RESERVED DATES</th>							
						</tr>

						<tr>				
							<th style="width: 50px;"><p>Reserved From (YYYY/MM/DD)</p></th>
							<th><p>Reserved To (YYYY/MM/DD)</p></th>								
						</tr>

						<?php while($cabana = mysqli_fetch_assoc($cabana_suite)) { ?>
						<tr>
							<td><?php echo htmlentities($cabana["Check_in"]); ?> </td>
							<td><?php echo htmlentities($cabana["Check_out"]); ?> </td>									
						</tr>
						<?php } ?>	

					</table>		
				</div>

			</center>

		</div>

<?php }else{ 	?>

			<div class="reserved">
				<div>

					<h3> CABANA SUITE </h3><hr>
					<img style="height: 200px; width: 300px;" src="Images/mp_cabanaSuites.jpg" alt="Grey Hotel">
					
					<div style="float:right;">
						<h4 style=" margin-left: 40px"> Grey Cabana Suite is <b>AVAILABLE</b>. </h4>							
					</div>

		       	</div>
		    </div>

<?php }	?>	



<!-- PRESIDENTIAL SUITE AVAILABILITY CHECKER - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -  -->

<?php

	$query  = "SELECT Check_in, Check_out ";
	$query .= "FROM approved ";
	$query .= "WHERE Room_Type = 'Presidential Suite' AND Check_out > now() ";
	$query .= "ORDER by Check_in ASC";
	
	
	$presidential_suite = mysqli_query($connection, $query);
	confirm_query($presidential_suite);
?>


<?php if($presidential_suite && mysqli_num_rows($presidential_suite) >= 1) {	?>

		<div class="reserved">

			<h3> PRESIDENTIAL SUITE </h3>
			<hr>

			<center><h4 style=" margin-left: -40px">You may reserve Grey Presidential Suite with specific dates that are not on the list.</h4></center>

			<br>
			<center>

				<img style="height: 200px; width: 300px;" src="Images/mp_presidentialSuite.jpg" alt="Grey Hotel">

				<div style="float:right;">
					
					<table class="table">

						<tr>				
							<th colspan="2">RESERVED DATES</th>							
						</tr>

						<tr>				
							<th style="width: 50px;"><p>Reserved From (YYYY/MM/DD)</p></th>
							<th><p>Reserved To (YYYY/MM/DD)</p></th>								
						</tr>

						<?php while($presidential = mysqli_fetch_assoc($presidential_suite)) { ?>
						<tr>
							<td><?php echo htmlentities($presidential["Check_in"]); ?> </td>
							<td><?php echo htmlentities($presidential["Check_out"]); ?> </td>									
						</tr>
						<?php } ?>	

					</table>		
				</div>

			</center>

		</div>

<?php }else{ 	?>

			<div class="reserved">
				<div>

					<h3> PRESIDENTIAL SUITE </h3><hr>
					<img style="height: 200px; width: 300px;" src="Images/mp_presidentialSuite.jpg" alt="Grey Hotel">
					
					<div style="float:right;">
						<h4 style=" margin-left: 40px"> Grey Presidential Suite is <b>AVAILABLE</b>. </h4>							
					</div>

		       	</div>
		    </div>

<?php }	?>	



</body>
</html>