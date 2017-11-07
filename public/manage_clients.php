<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
	$client_set = find_all_clients();
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
    <link href="stylesheets/admin.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="manage_clients">

		<?php echo message(); ?>
		
		<center><h2> Manage Clients </h2></center>
		<br/>
		<hr/>

		<table class="table">

			<tr>
				<th> First Name </th>
				<th> Last Name </th>
				<th> Username </th>
				<th> E-mail </th>
				<th> Address </th>
				<th> City </th>
				<th> Actions </th>  
			</tr>
		<?php while($client = mysqli_fetch_assoc($client_set)) { ?>
			<tr>
				<td><?php echo htmlentities($client["First_Name"]); ?> </td>
				<td><?php echo htmlentities($client["Last_Name"]); ?> </td>
				<td><?php echo htmlentities($client["Username"]); ?> </td>
				<td><?php echo htmlentities($client["Email"]); ?> </td>
				<td><?php echo htmlentities($client["Address"]); ?> </td>
				<td><?php echo htmlentities($client["City"]); ?> </td>
				<td><a href="delete_client.php?id=<?php echo urlencode($client["id"]); ?>" onclick="return confirm('Are you sure you want to delete this client record?');" class="a">Delete</a></td>
			</tr>
		<?php } ?>

		</table>

		<br/>

	</div>		
</body>
</html>