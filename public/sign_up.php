<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
    
    if(isset($_POST['submit'])){

        $required_fields = array("firstname", "lastname", "username", "password", "email", "address", "city");
        validate_presences($required_fields);

        $fields_with_max_lengths = array("firstname" => 25, "lastname" => 25, "username" => 25, "password" => 25,);
        validate_max_lengths($fields_with_max_lengths);

        $fields_with_min_lengths = array("firstname" => 3, "lastname" => 3, "username" => 5, "password" => 6,);
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

            $query  = "INSERT INTO clients (";
            $query .= " First_Name, Last_Name, Username, hashed_password, Email, Address, City";
            $query .= ") VALUES (";
            $query .= " '{$firstname}', '{$lastname}', '{$username}', '{$hashed_password}', '{$email}', '{$address}', '{$city}'";
            $query .= ")";

            $result = mysqli_query($connection, $query);

            if($result){
                // success
                $_SESSION["message"] = "Client Profile successfully created!";
                redirect_to("login_as_client.php");
            }else{
                //failure
                $_SESSION["message"] = "Client Profile creation failed!";
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
    <link href="stylesheets/style2.css" rel="stylesheet" type="text/css">
    <link href="../tes-css.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style.css" type="text/css" rel="stylesheet">

</head>

<body>
     <div class="top-bg-color">
            <div class="ico">
                <a href="index.php"><img src="Images/logo.png" alt="Grey Hotel" class="ico-image"></a>
            </div>
         
            <div class="topnav" id="myTopnav">
                <div class="dropdown">
                    <p class="nav-text"><a href="index.php" class="link-head-text" uk-scroll>HOME</a></p>
                    <div class="dropdown-content">
                        <a href="index.php" uk-scroll>About Grey Hotel</a>
                        <a href="index.php#contact">Contact Us</a>
                    </div>
                </div>
                <p class="nav-text"><a href="rooms.php" class="link-head-text">ROOMS</a></p>
                <p class="nav-text"><a href="reserve.php" class="link-head-text">RESERVE NOW</a></p>
            </div>       
    </div>

        <div class="Create-acc-container">

            <div class="error_message"> 
                <?php echo message(); ?>
                <?php echo form_errors($errors); ?>
            </div>

            <form class="form-size uk-horizontal" action="sign_up.php" method="post">
                <fieldset class="uk-fieldset">
                    <br>
                    <center><h2 class="log-details personal-details">Sign Up</h2></center>
                    <div class="uk-form-controls  form-margin personal-att" id="reg-width">
                        <label class="uk-form-label form-horizontal-text width">First Name</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text" name="firstname">
                        <br>
                        <label class="uk-form-label form-horizontal-text">Last Name</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text" name="lastname">


                        <label class="uk-form-label form-horizontal-text">Username</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text" name="username">

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
                        <input class=" uk-button-default Save_button_sign_up" type="submit" name="submit" value="Submit"/>
                    </div>
                </fieldset>
            </form>

            <a href="login_as_client.php"><button class=" uk-button-default Cancel_button_sign_up" onclick="return confirm('Are you sure you want to cancel?')">Cancel</button></a> 
            <br>
            
        </div>

    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>
</body>

</html>