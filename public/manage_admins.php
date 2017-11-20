<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>


<?php
	$admin_set = find_all_admins();
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

	<div class="manage_admins">

		<center><h2> Manage Admins </h2></center>
		
		<a href="new_admin.php" class="a"> + Add new admin</a>
		<br/>
		<hr/>

		<table class="table">
			<tr>
				<th> First Name </th>
				<th> Last Name </th>
				<th> Username </th>
				<th> Actions </th>  
			</tr>
			<?php while($admin = mysqli_fetch_assoc($admin_set)) { ?>
			<tr>

				<td><?php echo htmlentities($admin["First_Name"]); ?> </td>
				<td><?php echo htmlentities($admin["Last_Name"]); ?> </td>
				<td><?php echo htmlentities($admin["Username"]); ?> </td>

				<?php 

					if($admin["Username"] != $_SESSION["username"]){	?>
						<td><a href="delete_admin.php?id=<?php echo urlencode($admin["id"]); ?>" onclick="return confirm('Are you sure you want to delete this admin?');" class="delete">Delete</a></td>
				
				<?php	}else{	?>
						<td> Logged In </td>
				<?php }	?>
				
			</tr>
			<?php } ?>	

		</table>

	</div>		

</body>
</html>