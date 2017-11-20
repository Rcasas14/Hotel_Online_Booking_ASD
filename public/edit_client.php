<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>


<?php 
     
    $client = find_client_by_id($_GET["id"]);

    if(!$client) {
        //client ID was missing or invalid or
        //client couldn't be found in database
        echo "Sorry, we couldn't find it.";
        redirect_to("manage_clients.php");
    }
?>  

<?php
    
    if(isset($_POST['submit'])){

        $required_fields = array("firstname", "lastname", "username", "password", "email", "address", "city");
        validate_presences($required_fields);

        $fields_with_max_lengths = array("firstname" => 25, "lastname" => 25, "username" => 25, "password" => 25,);
        validate_max_lengths($fields_with_max_lengths);

        $fields_with_min_lengths = array("firstname" => 3, "lastname" => 3, "username" => 5, "password" => 6,);
        validate_min_lengths($fields_with_min_lengths);

        if(empty($errors)){
            //perform update

            $id = $client["id"];
            $firstname = mysql_prep($_POST["firstname"]);
            $lastname = mysql_prep($_POST["lastname"]);
            $username = mysql_prep($_POST["username"]);
            $hashed_password = password_encrypt($_POST["password"]);
            $email = mysql_prep($_POST["email"]);
            $address = mysql_prep($_POST["address"]);
            $city = mysql_prep($_POST["city"]);

            $query  = "UPDATE clients SET ";
            $query .= "First_Name = '{$firstname}', ";
            $query .= "Last_Name = '{$lastname}', ";
            $query .= "Username = '{$username}', ";
            $query .= "hashed_password = '{$hashed_password}', ";
            $query .= "Email = '{$email}', ";
            $query .= "Address = '{$address}', ";
            $query .= "City = '{$city}' ";
            $query .= "WHERE id = {$id} ";
            $query .= "LIMIT 1";

            $result = mysqli_query($connection, $query);

            if($result && mysqli_affected_rows($connection) == 1){
                // success
                $_SESSION["message"] = "Client successfully updated!";
                redirect_to("manage_clients.php");
            }else{
                //failure
                $_SESSION["message"] = "Client update failed!";
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
    <div class="top-bg-color">
        <div class="ico">
            <img src="Images/logo.png" alt="Grey Hotel" class="ico-image">
        </div>

        <div class="topnav" id="myTopnav">
            <a href="index.php" class="h">HOME</a>
            <a href="#room" class="h">ROOMS</a>
            <a href="#contact" class="h">CONTACT US</a>
            <a href="#reserve-now" class="h">RESERVE NOW</a>
        </div>
    </div>
    <div>
        <div class="Create-acc-container">

           <?php echo message(); ?>

            <div class="error_message">     
                <?php echo form_errors($errors); ?>
            </div>

            <form class="form-size uk-horizontal" action="edit_client.php" method="post">
                <fieldset class="uk-fieldset">
                    <p class="log-details personal-details">Edit Client Profile</p>
                    <div class="uk-form-controls  form-margin personal-att" id="reg-width">
                        <label class="uk-form-label form-horizontal-text width">First Name</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text" name="firstname">
                        <br>
                        <label class="uk-form-label form-horizontal-text">Last Name</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text" name="lastname">


                        <label class="uk-form-label form-horizontal-text">Username</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text" value="" name="username">

                        <label class="uk-form-label form-horizontal-text">Password</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="password" name="password">

                        <label class="uk-form-label form-horizontal-text width">E-mail</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="email" placeholder="name@example.com" name="email">

                        <label class="uk-form-label form-horizontal-text width">Address</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text" name="address">
                        <br>
                        <label class="uk-form-label form-horizontal-text">City</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text" name="city">
                        <br>
                        <input class=" uk-button-default Sign-Up-butt" type="submit" name="submit" value="Submit"/>
                    </div>
                </fieldset>
            </form>

            <a href="manage_clients.php"><button class=" uk-button-default Cancel-butt" onclick="return confirm('Are you sure you want to cancel?')">Cancel</button></a> 
            <br>
            
        </div>
    </div>

    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>
</body>

</html>