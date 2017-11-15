<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
	$approved_set = find_all_approved();
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

	<div class="reservations">
		<?php echo message(); ?>

		<center><h2> Approved Reservations </h2></center>
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
				<th colspan="2"> Actions </th>  
			</tr>
			<?php while($approved = mysqli_fetch_assoc($approved_set)) { ?>
			<tr>
				<td><?php echo htmlentities($approved["First_Name"]); ?> </td>
				<td><?php echo htmlentities($approved["Last_Name"]); ?> </td>
				<td><?php echo htmlentities($approved["Username"]); ?> </td>
				<td><?php echo htmlentities($approved["Email"]); ?> </td>
				<td><?php echo htmlentities($approved["Address"]); ?> </td>
				<td><?php echo htmlentities($approved["Check_in"]); ?> </td>
				<td><?php echo htmlentities($approved["Check_out"]); ?> </td>
				<td><?php echo htmlentities($approved["Number_Of_Nights"]); ?> </td>
				<td><?php echo htmlentities($approved["Room_Type"]); ?> </td>
				<td><?php echo htmlentities($approved["Payment"]); ?> </td>
				<td><?php echo htmlentities($approved["Status"]); ?> </td>

				<td><a href="to_archive_from_approved.php?id=<?php echo urlencode($approved["id"]); ?>" target="iframe_content" onclick="return confirm('Are you sure you want to archive this reservation?');" class="a">Archive</a> --------
					<a href="delete_approved_reservation.php?id=<?php echo urlencode($approved["id"]); ?>" target="iframe_content" onclick="return confirm('Are you sure you want to delete this reservation?');" class="delete" >Delete</a>
				</td>
			</tr>
			<?php } ?>	

		</table>

	</div>		

</body>
</html>