<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php client_confirm_logged_in(); ?>

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
                $_SESSION["message"] = "Client Profile successfully created.";
                redirect_to("login_as_client.php");
            }else{
                //failure
                $_SESSION["message"] = "Client Profile creation failed.";
            }
        }
    }

?>



</!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="UIKIT/css/uikit-rtl.css" rel="stylesheet">
    <link href="stylesheets/style2.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/footer-distributed.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div>
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
   
        <aside class="sidebar">

            <center><h3>You are logged in, <?php echo htmlentities($_SESSION["username"]); ?>! </h3></center>
            <hr>
            <div class="sidebar_links">
                <ul>
                    <li><a href="client_profile.php" target="iframe_content" class="h">Profile</a></li>
                    <br>
                    <li><a href="reservation_form.php" target="iframe_content" class="h">Reserve a Room</a></li>
                    <br>
                    <li><a href="client_reservations.php" target="iframe_content" class="h">Recent Reservation</a></li>
                    <br>
                    <li><a href="client_logout.php" class="h">Log out</a></li>
                </ul>
            </div>
        </aside>
    </div>

    <div class="content">
            <iframe height="auto" width="1000px" name="iframe_content"></iframe>
    </div>


</body>

</html>
