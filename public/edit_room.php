<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php 
	$room_id = "";
	if( isset( $_GET["room_id"])) {
	    $room_id = $_GET["room_id"]; 
	}

	$room = find_room_by_id($room_id);

	if(!$room) {
		echo "Sorry, we couldn't find it.";
		redirect_to("manage_rooms.php");
	}
?>	

<?php
	
	if(isset($_POST['submit'])){
		/*
		$required_fields = array("room_type", "room_rate", "room_number", "availability");
		validate_presences($required_fields);
		*/

		$fields_with_max_lengths = array("room_type" => 50, "room_rate" => 11, "room_number" => 10);
		validate_max_lengths($fields_with_max_lengths);

		$fields_with_min_lengths = array("room_type" => 5, "room_rate" => 2, "room_number" => 1);
		validate_min_lengths($fields_with_min_lengths);

		if(empty($errors)){
			//perform update

			$room_id = $room["room_id"];
			$category = $room["Category"];
			$room_type = mysql_prep($_POST["room_type"]);
			$room_rate = mysql_prep($_POST["room_rate"]);
			$room_number = mysql_prep($_POST["room_number"]);
			$availability = mysql_prep($_POST["availability"]);

			$query  = "UPDATE rooms SET ";
			$query .= "Room_Type = '{$room_type}', ";
			$query .= "Room_Rate = '{$room_rate}', ";
			$query .= "Room_Number = '{$room_number}', ";
			$query .= "Available = '{$availability}' ";
			$query .= "WHERE room_id = {$room_id} ";
			$query .= "LIMIT 1";

			$result = mysqli_query($connection, $query);

			if($result && mysqli_affected_rows($connection) == 1){
				// success
				$_SESSION["message"] = "Room Information successfully updated!";
				redirect_to("manage_rooms.php");
			}else{
				//failure
				$_SESSION["message"] = "Room Information update failed!";
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
	<?php global $room ?>

        <div class="edit_room">

        	<div class="error_message"> 
                <?php echo message(); ?>
                <?php echo form_errors($errors); ?>
            </div>

            <form action="edit_room.php?room_id=<?php echo urlencode($room["room_id"]); ?>" method="post" class="form-size uk-horizontal">

                <fieldset class="uk-fieldset">

                    <center><h2 class="form_title_header">Edit Room Information</h2></center>

                    <h4 style="margin-left:20px;"> <b> Category: </b>  <?php echo htmlentities($room["Category"]); ?> </h4>
                    <hr style="width: 450px;">

                    <div class="uk-form-controls  form-margin personal-att" id="reg-width">

                        <label class="edit_room_details" style="margin-left:34px;">Room Type:</label>
                        <input class="uk-input uk-form-small edit_room_form"  type="text" required="required" name="room_type">

                        <br><br>

                        <label class="edit_room_details" style="margin-left:34px;">Room Rate:</label>
                        <input class="uk-input uk-form-small edit_room_form" type="text" required="required" name="room_rate">

                        <br><br>

                        <label class="edit_room_details">Room Number:</label>
                        <input class="uk-input uk-form-small edit_room_form" type="text" required="required" name="room_number">

                        <br><br>

                        <label class="edit_room_details" style="margin-left:34px;">Availability:</label>
                        <input class="uk-input uk-form-small edit_room_form" required="required" name="availability">

                        <br><br>

                        <div class="edit_room_buttons">
	                        <input class=" uk-button-default Save_button_edit_admin" type="submit" name="submit" value="Save"/>

	                        <a href="manage_rooms.php" class="a"><input class=" uk-button-default Cancel_button_edit_admin" type="button" onclick="return confirm('Are you sure you want to cancel?')" name="cancel" value="Cancel"/></a>    
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