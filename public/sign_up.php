<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
    
    if(isset($_POST['submit'])){
        /*
        $required_fields = array("firstname", "lastname", "username", "password", "email", "address", "city");
        validate_presences($required_fields);
        */

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
                        <a href="index.php#about-hotel" uk-scroll>About Grey Hotel</a>
                        <a href="index.php#contact">Contact Us</a>
                    </div>
                </div>
                <p class="nav-text"><a href="rooms.php" class="link-head-text">ROOMS</a></p>
                <p class="nav-text"><a href="reserve.php" class="link-head-text">RESERVE NOW</a></p>
            </div>       
        </div>

        <div class="sign_up_page">

            <div class="error_message"> 
                <br>
                <?php echo message(); ?>
                <?php echo form_errors($errors); ?>
            </div>

            <form class="form-size uk-horizontal" action="sign_up.php" method="post">
                <fieldset class="uk-fieldset">
                    <br>
                    <center><h1 class="log-details personal-details" style="margin-left:-35px;">SIGN UP</h1></center>
                    <hr style="width:450px; margin-left: -60px;"><br>

                    <div class="uk-form-controls  form-margin personal-att">

                        <label class="sign_up_details">First Name:</label>
                        <input class="uk-input uk-form-small sign_up_form" type="text" required="required" name="firstname">
                        
                        <br><br>

                        <label class="sign_up_details">Last Name:</label>
                        <input class="uk-input uk-form-small sign_up_form" type="text" required="required" name="lastname">

                        <br><br>

                        <label class="sign_up_details">Username:</label>
                        <input class="uk-input uk-form-small sign_up_form" type="text" required="required" name="username">

                        <br><br>

                        <label class="sign_up_details" style="margin-left:-35px;">Password:</label>
                        <input class="uk-input uk-form-small sign_up_form" type="password" required="required" name="password">

                        <br><br>

                        <label class="sign_up_details" style="margin-left:-15px;">E-mail:</label>
                        <input class="uk-input uk-form-small sign_up_form" type="email" placeholder="name@example.com" required="required" name="email">
     
                        <br><br>

                        <label class="sign_up_details" style="margin-left:-25px;">Address:</label>
                        <input class="uk-input uk-form-small sign_up_form" type="text" required="required" name="address">
                        
                        <br><br>

                        <label class="sign_up_details" style="margin-left:2px;">City:</label>
                        <input class="uk-input uk-form-small sign_up_form" type="text" required="required" name="city">
                        
                        <br><br>

                        <div class="sign_up_buttons" style="margin-left:45px;">
                            <input class=" uk-button-default Save_button_sign_up" type="submit" name="submit" value="Submit"/>

                            <a href="login_as_client.php" class="a"><input class=" uk-button-default Cancel_button_sign_up" type="button" onclick="return confirm('Are you sure you want to cancel?')" name="cancel" value="Cancel"/></a>   
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