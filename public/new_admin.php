<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php


	if(isset($_POST['submit'])){
        /*
		$required_fields = array("firstname", "lastname", "username", "password");
		validate_presences($required_fields);
        */

		$fields_with_max_lengths = array("username" => 25, "firstname" => 25, "lastname" => 25, "password" => 25, "address" => 25, "city" => 25);
		validate_max_lengths($fields_with_max_lengths);

		$fields_with_min_lengths = array("username" => 5, "firstname" => 3, "lastname" => 3, "password" => 6, "address" => 3, "city" => 3);
		validate_min_lengths($fields_with_min_lengths);

		if(empty($errors)){
			//perform create
            
			$firstname = mysql_prep($_POST["firstname"]);
			$lastname = mysql_prep($_POST["lastname"]);
			$username = mysql_prep($_POST["username"]);
			$hashed_password = password_encrypt($_POST["password"]);
            $email = mysql_prep($_POST["email"]);
            $address = mysql_prep($_POST["address"]);
            $city = mysql_prep($_POST["city"]);

			$query  = "INSERT INTO admins (";
			$query .= " First_Name, Last_Name, Username, hashed_password, Email, Address, City";
			$query .= ") VALUES (";
			$query .= " '{$firstname}', '{$lastname}', '{$username}', '{$hashed_password}', '{$email}', '{$address}', '{$city}' ";
			$query .= ")";

			$result = mysqli_query($connection, $query);

			if($result){
				// success
				//$_SESSION["message"] = "Admin successfully created!";
                $message = "Admin successfully created!";
                echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"manage_admins.php\");</script>"; 
			}else{
				//failure
				//$_SESSION["message"] = "Admin creation failed!";
                $message = "Admin creation failed!";
                echo "<script type='text/javascript'>alert('$message');</script>";
			}

		}else{
            $message = form_errors($errors);
            echo "<script type='text/javascript'>alert('$message');</script>";
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
    

        <div class="add_new_admin">

            <form action="new_admin.php" method="post" class="form-size uk-horizontal">

                <fieldset class="uk-fieldset">

                    <center><h2 class="form_title_header personal-details">Add New Admin</h2></center>
                    <hr style="width:450px;">
                    <br>
                    <div class="uk-form-controls  form-margin personal-att" id="reg-width">

                        <?php global $firstname, $lastname, $username ?>

                        <label class="add_admin_details">First Name:</label>
                        <input class="uk-input uk-form-small add_admin_form" type="text" required="required" value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : "" ?>" name="firstname">

                        <br><br>

                        <label class="add_admin_details">Last Name:</label>
                        <input class="uk-input uk-form-small add_admin_form" type="text" required="required" value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : "" ?>" name="lastname">

                        <br><br>

                        <label class="add_admin_details">Username:</label>
                        <input class="uk-input uk-form-small add_admin_form" type="text" required="required" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : "" ?>" name="username">

                        <br><br>

                        <label class="add_admin_details" style="margin-left:30px;">Password:</label>
                        <input class="uk-input uk-form-small add_admin_form" type="password" required="required" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : "" ?>" name="password">

                        <br><br>

                        <label class="add_admin_details" style="margin-left: 50px;">E-mail:</label>
                        <input class="uk-input uk-form-small add_admin_form" type="email" placeholder="name@example.com" required="required" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : "" ?>"  name="email">

                        <br><br>

                        <label class="add_admin_details" style="margin-left: 40px;">Address:</label>
                        <input class="uk-input uk-form-small add_admin_form" type="text" required="required" value="<?php echo isset($_POST["address"]) ? $_POST["address"] : "" ?>"  name="address">

                        <br><br>

                        <label class="add_admin_details" style="margin-left: 67px;">City:</label>
                        <input class="uk-input uk-form-small add_admin_form" type="text" required="required" value="<?php echo isset($_POST["city"]) ? $_POST["city"] : "" ?>"  name="city">
                        
                        <br><br>

                        <div class="add_admin_buttons">
                            <input class=" uk-button-default Save_button_add_admin" type="submit" name="submit" value="Save"/>

                            <a href="manage_admins.php" class="a"><input class=" uk-button-default Cancel_button_add_admin" type="button" onclick="return confirm('Are you sure you want to cancel?')" name="cancel" value="Cancel"/></a>     
                        </div>

                    </div>

                </fieldset>
            </form>
           
        </div>

    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>

</body>

</html>