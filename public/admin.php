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

            $found_admin = attempt_login($username, $password);

            if($found_admin){
                //success, Mark user as logged in
                $_SESSION["admin_id"] = $found_admin["id"];
                $_SESSION["username"] = $found_admin["Username"];

                redirect_to("admin_menu.php");
            }else{
                 //failure
                $_SESSION["message"] = "Username/Password not found!";
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
    <title>Grey Hotel Admin</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="stylesheets/admin.css" rel="stylesheet" type="text/css">
</head>

<body class="login">

    <div>

        <div class="top-bg-color">
            <div class="ico">
                <img src="Images/logo.png" alt="Grey Hotel" class="ico-image">
            </div>
            <div class="adminHeader">
                <h1>Grey Hotel ADMIN</h1>
            </div>
        </div>

        <div class="log-container uk-clearfix" id="page">

            <div class="error_message">
                <?php echo message(); ?>
                <?php echo form_errors($errors); ?>
            </div>    

            <!-- must have action_page.php-->
            <form class="form-size uk-horizontal" action="admin.php" method="POST">
                <fieldset class="uk-fieldset">
                    <legend class="uk-legend" id="log-text"><center>LOG IN AS ADMIN</center></legend>
                    <div class="uk-margin">
                        <label class="uk-form-label form-horizontal-text">Username:</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="text" name="username" value="<?php echo htmlentities($username); ?>" />
                            <br>
                            <br>
                            <label class="uk-form-label form-horizontal-text">Password:</label>
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="password" name="password" value="">
                            <br>
                            <br>
                            <center><input class=" uk-button-default log-butt" type="submit" name="submit" value="LOG IN"/></center> 
                        </div>
                    </div>
            </form>
        </div>
        
    </div>

    <script src="Jquery/jquery.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
</body>

</html>

