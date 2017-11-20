<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>


<?php      
    $admin = find_admin_by_username($_SESSION["username"]);
?>  


<?php
    
  
    if(isset($_POST['submit'])){

        
        $required_fields = array("firstname", "lastname", "username", "password");
        validate_presences($required_fields);
        
        
        $fields_with_max_lengths = array("firstname" => 25, "lastname" => 25, "username" => 25, "password" => 25);
        validate_max_lengths($fields_with_max_lengths);

        $fields_with_min_lengths = array("firstname" => 3, "lastname" => 3, "username" => 5, "password" => 6);
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
                //$_SESSION["message"] = "Profile successfully updated!";
                $message = "Profile successfully updated! Please log out your account to save some changes.";
                echo "<script type='text/javascript'>alert('$message'); window.top.location.replace(\"admin.php\");</script>"; 

            }else{
                //failure      
                //$_SESSION["message"] = "Admin update failed.";
                $message = "Admin update failed.";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            
        }else{
             $message = form_errors($errors);
             echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>


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
    <link href="stylesheets/style2.css" rel="stylesheet" type="text/css">

</head>

<body>

      <div class="edit_profile">

            <form class="form-size uk-horizontal" action="edit_admin_profile.php" method="post">
                <fieldset class="uk-fieldset">
                    
                    <center><h2 class="log-details personal-details" style=" margin-left: -50px">Edit Your Profile</h2></center>
                    <hr style="width:440px; margin-left: -60px"><br>

                    <div class="uk-form-controls  form-margin personal-att" id="reg-width">

                        <label class="edit_details">First Name:</label>
                        <input class="uk-input uk-form-small edit_form" type="text" required="required" value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : htmlentities($admin["First_Name"]); ?>"  name="firstname">
                        
                        <br><br>

                        <label class="edit_details">Last Name:</label>
                        <input class="uk-input uk-form-small edit_form" type="text" required="required" value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : htmlentities($admin["Last_Name"]); ?>" name="lastname">

                        <br><br>

                        <label class="edit_details">Username:</label>
                        <input class="uk-input uk-form-small edit_form" type="text" required="required" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : htmlentities($admin["Username"]); ?>"  name="username">

                        <br><br>

                        <label class="edit_details" style="margin-left:-35px;">Password:</label>
                        <input class="uk-input uk-form-small edit_form" type="password" required="required" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ""; ?>" name="password">

                        <br><br>

                    <!-- 
                        <label class="edit_details" style="margin-left: -14px;">E-mail:</label>
                        <input class="uk-input uk-form-small edit_form" type="email" placeholder="name@example.com" required="required" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : htmlentities($admin["Email"]); ?>"  name="email">

                        <br><br>

                        <label class="edit_details" style="margin-left: -27px;">Address:</label>
                        <input class="uk-input uk-form-small edit_form" type="text" required="required" value="<?php echo isset($_POST["address"]) ? $_POST["address"] : htmlentities($admin["Address"]); ?>"  name="address">

                        <br><br>

                        <label class="edit_details" style="margin-left: 3px;">City:</label>
                        <input class="uk-input uk-form-small edit_form" type="text" required="required" value="<?php echo isset($_POST["city"]) ? $_POST["city"] : htmlentities($admin["City"]); ?>"  name="city">
                        
                        <br><br>
                     -->  
                        <div class="edit_buttons">
                           <input class=" uk-button-default Save_button_edit_profile" type="submit" name="submit" value="Save"/>

                           <a href="admin_profile.php" class="a"><input class=" uk-button-default Cancel_button_edit_profile" type="button" onclick="return confirm('Are you sure you want to cancel?')" name="cancel" value="Cancel"/></a>      
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