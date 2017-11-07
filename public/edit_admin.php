<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php 
	$admin = find_admin_by_id($_GET["id"]);

	if(!$admin) {
		//admin ID was missing or invalid or
		//admin couldn't be found in database
		echo "Sorry, we couldn't find it.";
		redirect_to("manage_admins.php");
	}
?>	

<?php
	
	if(isset($_POST['submit'])){

		$required_fields = array("firstname", "lastname", "username", "password");
		validate_presences($required_fields);

		$fields_with_max_lengths = array("username" => 25, "firstname" => 25, "lastname" => 25, "password" => 25,);
		validate_max_lengths($fields_with_max_lengths);

		$fields_with_min_lengths = array("username" => 5, "firstname" => 3, "lastname" => 3, "password" => 6,);
		validate_min_lengths($fields_with_min_lengths);

		if(empty($errors)){
			//perform update

			$id = $admin["id"];
			$firstname = mysql_prep($_POST["firstname"]);
			$lastname = mysql_prep($_POST["lastname"]);
			$username = mysql_prep($_POST["username"]);
			$hashed_password = password_encrypt($_POST["password"]);

			$query  = "UPDATE admins SET ";
			$query .= "First_Name = '{$firstname}', ";
			$query .= "Last_Name = '{$lastname}', ";
			$query .= "Username = '{$username}', ";
			$query .= "hashed_password = '{$hashed_password}' ";
			$query .= "WHERE id = {$id} ";
			$query .= "LIMIT 1";

			$result = mysqli_query($connection, $query);

			if($result && mysqli_affected_rows($connection) == 1){
				// success
				$_SESSION["message"] = "Admin successfully updated!";
				redirect_to("manage_admins.php");
			}else{
				//failure
				$_SESSION["message"] = "Admin update failed!";
			}
		}
	}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.min.css" rel="stylesheet">
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="UIKIT/css/uikit-rtl.css" rel="stylesheet">
    <link href="UIKIT/css/uikit-rtl.min.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style.css" type="text/css" rel="stylesheet">

</head>

<body>
    <!--
    <div class="top-bg-color">
        <div class="ico">
            <img src="Images/logo.png" alt="Grey Hotel" class="ico-image">
        </div>
    </div>
    -->

        <div class="edit_admin">

        	<div class="error_message"> 
                <?php echo message(); ?>
                <?php echo form_errors($errors); ?>
            </div>

            <form action="edit_admin.php?id=<?php echo urlencode($admin["id"]); ?>" method="post" class="form-size uk-horizontal">

                <fieldset class="uk-fieldset">

                    <center><h2 class="log-details personal-details">Edit Admin</h2></center>

                    <div class="uk-form-controls  form-margin personal-att" id="reg-width">

                        <label class="uk-form-label form-horizontal-text width">First Name</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text" name="firstname">

                        <br>

                        <label class="uk-form-label form-horizontal-text">Last Name</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text" name="lastname">

                        <br>

                        <label class="uk-form-label form-horizontal-text">Username</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text" name="username">

                        <br>

                        <label class="uk-form-label form-horizontal-text">Password</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="password" name="password">

                        <input class=" uk-button-default Save_button_edit_admin" type="submit" name="submit" value="Save"/>
                       
                    </div>

                </fieldset>
            </form>   

            <a href="manage_admins.php"><button class=" uk-button-default Cancel_button_edit_admin" onclick="return confirm('Are you sure you want to cancel?')">Cancel</button></a>         
            
        </div>


    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>
</body>

</html>