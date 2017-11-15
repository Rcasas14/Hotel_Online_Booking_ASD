<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
	$room_set = find_all_rooms();
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
</head>

<body>

	<div class="manage_rooms">
		
		<?php echo message(); ?>
		
		<center><h2> Manage Room Information </h2></center>
		<br/>
		<hr/>

		<table class="table">
			<tr>
				<th> Category </th>
				<th> Room Type </th>
				<th> Room Rate </th>
				<th> Room Number </th>
				<th> Availability </th>
				<th> Actions </th>  
			</tr>
			<?php while($room = mysqli_fetch_assoc($room_set)) { ?>
			<tr>
				<td><?php echo htmlentities($room["Category"]); ?> </td>
				<td><?php echo htmlentities($room["Room_Type"]); ?> </td>
				<td><?php echo htmlentities($room["Room_Rate"]); ?> </td>
				<td><?php echo htmlentities($room["Room_Number"]); ?> </td>
				<td><?php echo htmlentities($room["Available"]); ?> </td>
				<td><a href="edit_room.php?room_id=<?php echo urlencode($room["room_id"]); ?>" class="a">Edit</a></td>
			</tr>
			<?php } ?>	

		</table>

	</div>		

</body>
</html>