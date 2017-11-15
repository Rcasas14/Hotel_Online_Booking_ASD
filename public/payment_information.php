<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
  

<?php 
    $category = $_SESSION["Category"];
?>


<?php 
  
    if(isset($_POST['submit'])){
        
        /*
        $required_fields = array("firstname", "lastname", "username", "password", "email", "address", "city");
        validate_presences($required_fields);
        */
        
        $fields_with_max_lengths = array("accountname" => 25, "accountnumber" => 25);
        validate_max_lengths($fields_with_max_lengths);

        $fields_with_min_lengths = array("accountname" => 5, "accountnumber" => 5);
        validate_min_lengths($fields_with_min_lengths);
        


        if(empty($errors)){

            $query  = "SELECT * ";
            $query .= "FROM temp_reserve ";

            $temp_set = mysqli_query($connection, $query);
            confirm_query($temp_set);

            while($temp = mysqli_fetch_assoc($temp_set)) {
            
                $firstname = $temp["First_Name"];
                $lastname = $temp["Last_Name"];
                $username = $temp["Username"];
                $email = $temp["Email"];
                $address = $temp["Address"];
                $check_in = $temp["Check_in"];
                $check_out = $temp["Check_out"];
                $total_nights = $temp["Number_Of_Nights"];
                $room_type = $temp["Room_Type"];
                $payment = $temp["Payment"];
                $status = $temp["Status"];



                    if($temp_set){

                        $query  = "INSERT INTO pending (";
                        $query .= " First_Name, Last_Name, Username, Email, Address, Check_in, Check_out, Number_Of_Nights, Room_Type, Payment, Status";
                        $query .= ") VALUES (";
                        $query .= " '{$firstname}', '{$lastname}', '{$username}', '{$email}', '{$address}', '{$check_in}', '{$check_out}', $total_nights, '{$room_type}', '{$payment}', 'PENDING'";
                        $query .= ")";

                        $result = mysqli_query($connection, $query);

                        if($result){                   
                            // success

                            $query = "DELETE FROM temp_reserve";

                            $result = mysqli_query($connection, $query);

                            if($result){
                                // success
                                $_SESSION["message"] = "Reservation has been successfully submitted!";
                                redirect_to("reservation_form.php?Category=<?php echo urlencode ($category); ?>");
                            }else{
                                //failure
                                $_SESSION["message"] = "Sorry, Reservation failed!";
                                redirect_to("reservation_form.php?Category=<?php echo urlencode ($category); ?>");
                            }
                                
                        }else{
                            //failure
                            $_SESSION["message"] = "Sorry, Reservation failed!";
                        } 

                    }

            }
          
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

      <div class="payment_information">

            
                <?php echo message(); ?>
            <div class="error_message">  
                <?php echo form_errors($errors); ?>
            </div>

            <form class="form-size uk-horizontal" action="payment_information.php?Payment=<?php echo urlencode($_SESSION["Payment"]); ?>" method="post">
                <fieldset class="uk-fieldset">

                    <h2 class="log-details personal-details" style="margin-left: 40px">Payment Information</h2>
                    <h4 style="margin-left: -40px"><b> Payment Method: </b> <?php echo $_SESSION["Payment"]; ?> </h4>
                    <hr style="width:490px; margin-left: -60px"><br>

                    <div class="uk-form-controls  form-margin personal-att" id="reg-width">

                        <label class="edit_client_details">&nbsp;&nbsp;&nbsp; Account Name:</label>
                        <input class="uk-input uk-form-small edit_client_form" style="margin-left: 100px" type="text" required="required" name="accountname">
                        
                        <br><br>

                        <label class="edit_client_details">Account Number:</label>
                        <input class="uk-input uk-form-small edit_client_form" style="margin-left: 100px" type="text" required="required" name="accountnumber">

                        <br><br>
                       
                        <div class="edit_client_buttons">
                           <input class=" uk-button-default Save_button_edit_profile" type="submit" name="submit" value="Submit"/>

                           <a href="reservation_form.php?Category=<?php echo urlencode ($_SESSION["Category"]); ?>" class="a"><input class=" uk-button-default Cancel_button_edit_profile" type="button" onclick="return confirm('Are you sure you want to cancel?')" name="cancel" value="Cancel"/></a>      
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