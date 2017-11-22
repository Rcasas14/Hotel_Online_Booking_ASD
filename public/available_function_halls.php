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

	<center><h2 class="log-details personal-details" style=" margin-left: -50px; margin-top: 60px;">Grey Function Halls Availability Checker</h2></center>
	<hr>


	<!-- GREY BALLROOM AVAILABILITY CHECKER - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -  -->

<?php

	$query  = "SELECT Check_in, Check_out ";
	$query .= "FROM approved ";
	$query .= "WHERE Room_Type = 'Grey Ballroom' AND Check_out > now() ";
	$query .= "ORDER by Check_in ASC";
	
	
	$grey_ballroom = mysqli_query($connection, $query);
	confirm_query($grey_ballroom);
?>


<?php if($grey_ballroom && mysqli_num_rows($grey_ballroom) >= 1) {	?>

		<div class="reserved">

			<h3> GREY BALLROOM </h3><hr>

			<h4 style="margin-left: 40px">You may reserve Grey Ballroom with specific dates that are not on the list.</h4>

			<br>
			<center>

				<img style="height: 200px; width: 300px;" src="Images/mp_ballroom.jpg" alt="Grey Hotel">

				<div style="float:right;">
					
					<table class="table">

						<tr>				
							<th colspan="2">RESERVED DATES</th>							
						</tr>

						<tr>				
							<th style="width: 50px;"><p>Reserved From (YYYY/MM/DD)</p></th>
							<th><p>Reserved To (YYYY/MM/DD)</p></th>								
						</tr>

						<?php while($ballroom = mysqli_fetch_assoc($grey_ballroom)) { ?>
						<tr>
							<td><?php echo htmlentities($ballroom["Check_in"]); ?> </td>
							<td><?php echo htmlentities($ballroom["Check_out"]); ?> </td>				
					
						</tr>
						<?php } ?>	

					</table>		
				</div>

			</center>

		</div>

<?php }else{ 	?>

			<div class="reserved">
				<div>

					<h3> GREY BALLROOM </h3><hr>
					<img style="height: 200px; width: 300px;" src="Images/mp_ballroom.jpg" alt="Grey Hotel">
					
					<div style="float:right;">
						<h4 style=" margin-left: 40px"> Grey Ballroom is <b>AVAILABLE</b>. </h4>							
					</div>

		       	</div>
		    </div>

<?php }	?>	



<!-- GREY BALLROOM AVAILABILITY CHECKER - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -  -->

<?php

	$query  = "SELECT Check_in, Check_out ";
	$query .= "FROM approved ";
	$query .= "WHERE Room_Type = 'Grey Function Hall' AND Check_out > now() ";
	$query .= "ORDER by Check_in ASC";
	
	
	$grey_function_hall = mysqli_query($connection, $query);
	confirm_query($grey_function_hall);
?>


<?php if($grey_function_hall && mysqli_num_rows($grey_function_hall) >= 1) {	?>

		<div class="reserved">

			<h3> GREY FUNCTION HALL </h3>
			<hr>

			<center><h4 style=" margin-left: -40px">You may reserve Grey Function Hall with specific dates that are not on the list.</h4></center>

			<br>
			<center>

				<img style="height: 200px; width: 300px;" src="Images/mp_functionHall.jpg" alt="Grey Hotel">

				<div style="float:right;">
					
					<table class="table">

						<tr>				
							<th colspan="2">RESERVED DATES</th>							
						</tr>

						<tr>				
							<th style="width: 50px;"><p>Reserved From (YYYY/MM/DD)</p></th>
							<th><p>Reserved To (YYYY/MM/DD)</p></th>								
						</tr>

						<?php while($function_hall = mysqli_fetch_assoc($grey_function_hall)) { ?>
						<tr>
							<td><?php echo htmlentities($function_hall["Check_in"]); ?> </td>
							<td><?php echo htmlentities($function_hall["Check_out"]); ?> </td>									
						</tr>
						<?php } ?>	

					</table>		
				</div>

			</center>

		</div>

<?php }else{ 	?>

			<div class="reserved">
				<div>

					<h3> GREY FUNCTION HALL </h3><hr>
					<img style="height: 200px; width: 300px;" src="Images/mp_functionHall.jpg" alt="Grey Hotel">
					
					<div style="float:right;">
						<h4 style=" margin-left: 40px"> Grey Function Hall is <b>AVAILABLE</b>. </h4>							
					</div>

		       	</div>
		    </div>

<?php }	?>	


</body>
</html>