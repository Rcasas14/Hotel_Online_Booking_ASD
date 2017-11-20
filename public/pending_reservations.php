<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>


<?php
	$pending_set = find_all_pendings();
?>


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

<?php if($pending_set && mysqli_num_rows($pending_set) >= 1) {	?>

	<div class="reservations">
			
			<center><h2> Pending Reservations </h2></center>
			<br/>
			<hr/>

			<table class="table">

				<tr>
					<th> First Name </th>
					<th> Last Name </th>
					<th> Username </th>
					<th> E-mail </th>
					<th> Address </th>
					<th> Check-in (YYYY/MM/DD) </th>
					<th> Check-out (YYYY/MM/DD) </th>
					<th> Number Of Nights </th>
					<th> Room Type </th>
					<th> Payment </th>
					<th> Status </th>
					<th colspan="2" style="width: 250px;"> Actions </th>  
				</tr>
				<?php while($pending = mysqli_fetch_assoc($pending_set)) { ?>
				<tr>
					<td><?php echo htmlentities($pending["First_Name"]); ?> </td>
					<td><?php echo htmlentities($pending["Last_Name"]); ?> </td>
					<td><?php echo htmlentities($pending["Username"]); ?> </td>
					<td><?php echo htmlentities($pending["Email"]); ?> </td>
					<td><?php echo htmlentities($pending["Address"]); ?> </td>
					<td><?php echo htmlentities($pending["Check_in"]); ?> </td>
					<td><?php echo htmlentities($pending["Check_out"]); ?> </td>
					<td><?php echo htmlentities($pending["Number_Of_Nights"]); ?> </td>
					<td><?php echo htmlentities($pending["Room_Type"]); ?> </td>
					<td><?php echo htmlentities($pending["Payment"]); ?> </td>
					<td><?php echo htmlentities($pending["Status"]); ?> </td>

					<td style="width: 250px;"><a href="to_approve.php?id=<?php echo urlencode($pending["id"]); ?>" target="iframe_content" onclick="return confirm('Are you sure you want to approve this reservation?');" class="a">Approve</a> --------
						<a href="to_decline.php?id=<?php echo urlencode($pending["id"]); ?>" target="iframe_content" onclick="return confirm('Are you sure you want to decline this reservation?');" class="delete">Decline</a>
					</td>
				</tr>
				<?php } ?>	

			</table>

		</div>	

<?php }else{	

			$message = "There are no pending reservations in Grey Hotel.";
       		echo "<script type='text/javascript'>alert('$message'); window.top.location.replace(\"admin_menu.php\"); window.close();</script>"; 

	  }	?>


</body>
</html>