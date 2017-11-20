<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>


<?php
	$declined_set = find_all_declined();
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


<?php if($declined_set && mysqli_num_rows($declined_set) >= 1) {	?>

	<div class="reservations">

		<center><h2> Declined Reservations </h2></center>
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
			<?php while($declined = mysqli_fetch_assoc($declined_set)) { ?>
			<tr>
				<td><?php echo htmlentities($declined["First_Name"]); ?> </td>
				<td><?php echo htmlentities($declined["Last_Name"]); ?> </td>
				<td><?php echo htmlentities($declined["Username"]); ?> </td>
				<td><?php echo htmlentities($declined["Email"]); ?> </td>
				<td><?php echo htmlentities($declined["Address"]); ?> </td>
				<td><?php echo htmlentities($declined["Check_in"]); ?> </td>
				<td><?php echo htmlentities($declined["Check_out"]); ?> </td>
				<td><?php echo htmlentities($declined["Number_Of_Nights"]); ?> </td>
				<td><?php echo htmlentities($declined["Room_Type"]); ?> </td>
				<td><?php echo htmlentities($declined["Payment"]); ?> </td>
				<td><?php echo htmlentities($declined["Status"]); ?> </td>

				<td><a href="to_archive_from_declined.php?id=<?php echo urlencode($declined["id"]); ?>" target="iframe_content" onclick="return confirm('Are you sure you want to archive this reservation?');" class="a">Archive</a> --------
					<a href="delete_declined_reservation.php?id=<?php echo urlencode($declined["id"]); ?>" target="iframe_content" onclick="return confirm('Are you sure you want to delete this reservation?');" class="delete">Delete</a>
				</td>
			</tr>
			<?php } ?>	

		</table>

	</div>

<?php }else{	

			$message = "There are no declined reservations in Grey Hotel.";
       		echo "<script type='text/javascript'>alert('$message'); window.top.location.replace(\"admin_menu.php\"); window.close();</script>"; 

	  }	?>		

</body>
</html>