<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>


<?php
	$archived_set = find_all_archived();
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

<?php if($archived_set && mysqli_num_rows($archived_set) >= 1) {	?>

	<div class="reservations">

		<center><h2> Archived Reservations </h2></center>
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
				<th> Actions </th>  
			</tr>
			<?php while($archived = mysqli_fetch_assoc($archived_set)) { ?>
			<tr>
				<td><?php echo htmlentities($archived["First_Name"]); ?> </td>
				<td><?php echo htmlentities($archived["Last_Name"]); ?> </td>
				<td><?php echo htmlentities($archived["Username"]); ?> </td>
				<td><?php echo htmlentities($archived["Email"]); ?> </td>
				<td><?php echo htmlentities($archived["Address"]); ?> </td>
				<td><?php echo htmlentities($archived["Check_in"]); ?> </td>
				<td><?php echo htmlentities($archived["Check_out"]); ?> </td>
				<td><?php echo htmlentities($archived["Number_Of_Nights"]); ?> </td>
				<td><?php echo htmlentities($archived["Room_Type"]); ?> </td>
				<td><?php echo htmlentities($archived["Payment"]); ?> </td>
				<td><?php echo htmlentities($archived["Status"]); ?> </td>

				<td> <a href="delete_archived_reservation.php?id=<?php echo urlencode($archived["id"]); ?>" target="iframe_content" onclick="return confirm('Are you sure you want to delete this reservation?');" class="delete">Delete</a>
				</td>
			</tr>
			<?php } ?>	

		</table>

	</div>	

<?php }else{	

			$message = "There are no archived reservations in Grey Hotel.";
       		echo "<script type='text/javascript'>alert('$message'); window.top.location.replace(\"admin_menu.php\"); window.close();</script>"; 

	  }	?>			

</body>
</html>