<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>


<?php
    $username = "";

    if (isset($_POST['submit'])){
        //Process the form

        //Validations
        $required_fields = array("username", "password");
        validate_presences($required_fields);

        if(empty($errors)) {
        //ATTEMPT LOGIN
            
            $username = $_POST["username"];
            $password = $_POST["password"];

            $found_client = client_attempt_login($username, $password);

            if($found_client){
                //success, Mark user as logged in
                $_SESSION["client_id"] = $found_client["id"];
                $_SESSION["username"] = $found_client["Username"];
                $_SESSION["password"] = $found_client["hashed_password"];

                redirect_to("reserve.php");
            }else{
                 //failure
                //$_SESSION["message"] = "Username/Password not found!";
                $message = "Username/Password not found!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

        }else{
            $message = form_errors($errors);
            echo "<script type='text/javascript'>alert('$message');</script>";
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
    <link href="UIKIT/css/uikit.min.css" rel="stylesheet">
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="UIKIT/css/uikit-rtl.css" rel="stylesheet">
    <link href="UIKIT/css/uikit-rtl.min.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style2.css" rel="stylesheet" type="text/css">
    <link href="../tes-css.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style.css" type="text/css" rel="stylesheet">
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
                        <a href="index.php#about-hotel" uk-scroll>About Grey Hotel</a>
                        <a href="index.php#contact">Contact Us</a>
                    </div>
                </div>
                <p class="nav-text"><a href="rooms.php" class="link-head-text">ROOMS</a></p>
                <p class="nav-text"><a href="reserve.php" class="link-head-text">RESERVE NOW</a></p>
            </div>       
        </div>
    
        <div class="log-container uk-clearfix">
 
            <form class="form-size uk-horizontal" action="login_as_client.php" method="POST">
                <fieldset class="uk-fieldset">

                    <center><legend class="uk-legend" id="log-text">LOG IN</legend></center>
                    
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <label class="uk-form-label form-horizontal-text font-Roboto">Username:</label>
                        
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="text" required="required" name="username" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : "" ?>" />
                            
                            <br><br>
                                                    
                            <label class="uk-form-label form-horizontal-text font-Roboto">Password:</label>
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="password" required="required" name="password">
                            
                            <br><br>

                            <center><input class=" uk-button-default log-butt" type="submit" name="submit" value="LOG IN"/></center> 
                            
                            <br><br>
                        </div>

                        <div class="not-member-container">
                            <p class="notAmember-yet">Doesn't have an account yet?</p>
                            <p id="create-acc"> Sign Up <span class="font-Roboto"><a class="a" href="sign_up.php">here!</a></span></p>
                        </div>

                    </div>

                </fieldset>
            </form>
        </div>

    </div>

    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>

</body>

</html>