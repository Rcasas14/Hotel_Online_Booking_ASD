<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php client_confirm_logged_in(); ?>


<?php 
    $client = find_client_by_username($_SESSION["username"]);

    $category = $_GET["Category"];
    $_SESSION["Category"] = $_GET["Category"];
?>


<?php
    
    if(isset($_POST['submit'])){

    /*
        $required_fields = array("firstname", "lastname", "username", "password", "email", "address", "city");
        validate_presences($required_fields);
         

        $fields_with_max_lengths = array("firstname" => 25, "lastname" => 25, "address" => 25);
        validate_max_lengths($fields_with_max_lengths);

        $fields_with_min_lengths = array("firstname" => 3, "lastname" => 3, "address" => 3);
        validate_min_lengths($fields_with_min_lengths);
    */

        if(empty($errors)){
            //perform create
            $username = $_SESSION["username"];

            $firstname = htmlentities($client["First_Name"]);
            $lastname = htmlentities($client["Last_Name"]);
            $username = htmlentities($client["Username"]);
            $email = htmlentities($client["Email"]);
            $address = htmlentities($client["Address"]);

            $check_in = mysql_prep($_POST["check_in"]);
            $check_out = mysql_prep($_POST["check_out"]);

            $total_nights = dateDiff($check_in, $check_out);

            $room_type = mysql_prep($_POST["room_type"]);
            $payment = mysql_prep($_POST["payment"]);
            $_SESSION["Payment"] = mysql_prep($_POST["payment"]);

            $date = valid_date($check_in, $check_out);
            $available = is_Available($room_type);
            $already_reserved = already_reserved($room_type, $check_in, $check_out);
            

            if($already_reserved){

                $message = "Sorry $room_type is already reserved within the date specified.";
                echo "<script type='text/javascript'>alert('$message');window.location.href=\"#reserve\";</script>";

            //   $_SESSION["message"] = "Sorry '{$room_type}' is already reserved within the date specified.";

            }elseif(!$available){

                $message = "Sorry $room_type is not available.";
                echo "<script type='text/javascript'>alert('$message');window.location.href=\"#reserve\";</script>";

            //   $_SESSION["message"] = "Sorry '{$room_type}' is not available!";

            }elseif(!$date){

                $message = "Sorry, the date you entered is invalid.";
                echo "<script type='text/javascript'>alert('$message');window.location.href=\"#reserve\";</script>";

            //    $_SESSION["message"] = "Date is invalid!";

            }elseif($total_nights <= 0 || $total_nights > 30){

                $message = "Sorry, we cannot accomodate reservations that are more than 30 days/nights long.";
                echo "<script type='text/javascript'>alert('$message');window.location.href=\"#reserve\";</script>";

            //   $_SESSION["message"] = "Sorry, we cannot accomodate reservations that are more than 30 days/nights long";

            }elseif($payment != "Walk-in Payment"){

                $query  = "INSERT INTO temp_reserve (";
                $query .= " First_Name, Last_Name, Username, Email, Address, Check_in, Check_out, Number_Of_Nights, Room_Type, Payment, Status";
                $query .= ") VALUES (";
                $query .= " '{$firstname}', '{$lastname}', '{$username}', '{$email}', '{$address}', '{$check_in}', '{$check_out}', {$total_nights}, '{$room_type}', '{$payment}', 'PENDING'";
                $query .= ")";

                $result = mysqli_query($connection, $query);

                if($result){                   
                    // success
                    redirect_to("payment_information.php");
                }else{
                    //failure
                    //$_SESSION["message"] = "Sorry, Reservation failed!";
                    $message = "Sorry, Reservation failed!";
                    echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"reservation_form.php?Category=$category\");</script>"; 
                } 

            }else{
                
                $query  = "INSERT INTO pending (";
                $query .= " First_Name, Last_Name, Username, Email, Address, Check_in, Check_out, Number_Of_Nights, Room_Type, Payment, Status";
                $query .= ") VALUES (";
                $query .= " '{$firstname}', '{$lastname}', '{$username}', '{$email}', '{$address}', '{$check_in}', '{$check_out}', {$total_nights}, '{$room_type}', '{$payment}', 'PENDING'";
                $query .= ")";

                $result = mysqli_query($connection, $query);

                if($result){                   
                    // success
                    //$_SESSION["message"] = "Reservation has been successfully submitted!";
                    //redirect_to("reservation_form.php?Category=$category");
                    $message = "Reservation has been successfully submitted!";
                    echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"reservation_form.php?Category=$category\");</script>"; 
                }else{
                    //failure
                    //$_SESSION["message"] = "Sorry, Reservation failed!";
                    $message = "Sorry, Reservation failed!";
                    echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"reservation_form.php?Category=$category\");</script>";
                } 
            }  

        
        }else{

            $message = form_errors($errors);
            echo "<script type='text/javascript'>alert('$message');window.location.href=\"#reserve\";</script>";

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
    <link href="stylesheets/style2.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php if($category == 'Rooms'){ ?>

    <div style="margin-left: -20px; margin-top: -20px;" class="roomType">

        <h3>&nbsp;Rooms in Grey Hotel</h3><hr>
        
        <center>
            <div class="imgRow">

                <div class="imgDescription_res">
                    <?php $room = find_room_by_id(1); ?>            
                    <img style="width: 280px; height: 200px;" src="Images/mp_superiorRoom.jpg" alt="Grey Hotel">
                        <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                        <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                        <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>  
                </div>

                <div class="imgDescription_res">
                    <?php $room = find_room_by_id(2); ?>
                        <img style="width: 280px; height: 200px;" src="Images/mp_deluxeRoom.jpg" alt="Grey Hotel">
                        <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                        <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                        <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>                                   
                </div>

                <div class="imgDescription_res">
                    <?php $room = find_room_by_id(3); ?>
                        <img style="width: 280px; height: 200px;" src="Images/mp_premier.jpg" alt="Grey Hotel">
                        <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                        <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                        <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                </div>

            </div>
        </center>
    </div>

    <br><hr>
                
<?php }elseif($category == 'Suites'){ ?>

    <div style="margin-left: -20px; margin-top: -20px;" class="roomType">
    
        <h3>&nbsp;Suites in Grey Hotel</h3><hr> 

        <center>
            <div class="imgRow">

                <div class="imgDescription_res">
                    <?php $room = find_room_by_id(4); ?>
                        <img style="width: 280px; height: 200px;" src="Images/mp_deluxeSuite.jpg" alt="Grey Hotel">
                        <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                        <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                        <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                </div>

                <div class="imgDescription_res">
                    <?php $room = find_room_by_id(5); ?>
                        <img style="width: 280px; height: 200px;" src="Images/mp_cabanaSuites.jpg" alt="Grey Hotel">
                        <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                        <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                        <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                </div>

                <div class="imgDescription_res">
                    <?php $room = find_room_by_id(6); ?>
                        <img style="width: 280px; height: 200px;" src="Images/mp_presidentialSuite.jpg" alt="Grey Hotel">
                        <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                        <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                        <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                </div>

            </div>
        </center>

    </div>

    <br><hr>

<?php }elseif($category == 'Continental Club'){ ?>

    <div style="margin-left: -20px; margin-top: -20px;" class="roomType">

        <h3>&nbsp;Continental Club in Grey Hotel</h3><hr>
     
        <center>
            <div class="imgRow">

                <div class="imgDescription_res">
                    <?php $room = find_room_by_id(7); ?>
                        <img style="width: 280px; height: 200px;" src="Images/mp_continentalClubBenefits.jpg" alt="Grey Hotel">
                        <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                        <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                        <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                </div>

                <div class="imgDescription_res">
                    <?php $room = find_room_by_id(8); ?>
                        <img style="width: 280px; height: 200px;" src="Images/mp_continentalDeluxeRoom.jpg" alt="Grey Hotel">
                        <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                        <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                        <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                </div>

                <div class="imgDescription_res">
                    <?php $room = find_room_by_id(9); ?>
                        <img style="width: 280px; height: 200px;" src="Images/mp_continentalSuperiorSuite.jpg" alt="Grey Hotel">
                        <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                        <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                        <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                </div>

            </div>
        </center>

    </div>    
    <br><hr>

<?php }elseif($category == 'Function Halls'){ ?>

    <div style="margin-left: -20px; margin-top: -20px;" class="roomType">

        <h3>&nbsp;Function Halls in Grey Hotel</h3><hr>

        <center>
            <div class="imgRow">

                <div class="imgDescription_res">
                    <?php $room = find_room_by_id(10); ?>
                        <img style="width: 350px; height: 200px;" src="Images/mp_ballroom.jpg" alt="Grey Hotel">
                        <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                        <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                        <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                </div>

                <div class="imgDescription_res">
                    <?php $room = find_room_by_id(11); ?>
                        <img style="width: 350px; height: 200px;" src="Images/mp_functionHall.jpg" alt="Grey Hotel">
                        <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                        <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                        <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                </div>

            </div>
        </center>

    </div>
    <hr><br>

<?php } ?>



<div class="reservation_form" id="reserve">
    <div class="reserve-content uk-margin">

        <form class="reserve-form uk-horizontal" action="reservation_form.php?Category=<?php echo urlencode ($_SESSION["Category"]); ?>" method="post">
            <fieldset class="uk-fieldset">                        

                <h2 class="reserve-head" style="margin-left: 270px;">Reservation Form</h2>
                <h4 style="margin-left: 100px;"><b> Category: </b> <?php echo $category ?> </h4>

                <hr style="margin-left: 90px;">
               
                <div class="uk-form-controls reserve-form-contain">


                <!--    
                    <label class="reserve-details" style="margin-left: 120px;">First Name:</label>
                    <input class="uk-input uk-form-small reserve-width-form" type="text" required="required" value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : "" ?>" name="firstname">      
                    <br><br>

                    <label class="reserve-details" style="margin-left: 120px;">Last Name:</label>
                    <input class="uk-input uk-form-small reserve-width-form" type="text" required="required" value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : "" ?>" name="lastname">
                    <br><br>

                    <label class="reserve-details" style="margin-left: 147px;">E-mail:</label>
                    <input class=" uk-input uk-form-small reserve-width-form" type="email" required="required" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : "" ?>" name="email">
                    <br><br>

                    <label class="reserve-details" style="margin-left: 135px;">Address:</label>
                    <input class="uk-input uk-form-small reserve-width-form" type="text" required="required" value="<?php echo isset($_POST["address"]) ? $_POST["address"] : "" ?>" name="address">  -->
                    <br>
                

                    <label class="reserve-details" style="margin-left: 133px;">Check-in:&nbsp;</label>
                    <input class="uk-input uk-form-small reserve-width-form" type="date" required="required" value="<?php echo isset($_POST["check_in"]) ? $_POST["check_in"] : "" ?>" name="check_in">
                    <br><br>

                    <label class="reserve-details" style="margin-left: 122px;">Check-out:&nbsp;</label>
                    <input class="uk-input uk-form-small reserve-width-form" type="date" required="required" value="<?php echo isset($_POST["check_out"]) ? $_POST["check_out"] : "" ?>" name="check_out">
                    <br><br>

                <!--  
                    <label class="reserve-details" style="margin-left: 70px;">Number of Nights:&nbsp;</label>
                    <input class=" uk-input uk-form-small reserve-width-form" type="number" required="required" name="nights">
                    <br></p>
                -->
              

                    <label class="reserve-details" style="margin-left: 118px;">Room Type:&nbsp;</label>
                        
                        <select class="uk-select reserve-width-form select-form" required="required" value="<?php echo isset($_POST["room_type"]) ? $_POST["room_type"] : "" ?>" name="room_type">
                            <?php
                                global $category;
                                $query  = "SELECT Room_Type ";
                                $query .= "FROM rooms ";
                                $query .= "WHERE Category = '{$category}' ";                                       

                                $category_set = mysqli_query($connection, $query);
                                confirm_query($category_set);
                            ?>

                                <option selected="selected"></option>

                            <?php $select = "";   ?>
                            <?php while($category = mysqli_fetch_assoc($category_set)) { ?>
                                <option $select="<?php echo htmlentities($category["Room_Type"]); ?>" ><?php echo htmlentities($category["Room_Type"]); ?></option>
                            <?php } ?>
                        </select>

                    <br><br>

                <!--
                    <label class="reserve-details" style="margin-left: 118px;">Room Rate:&nbsp;</label>
                          
                          <select class="uk-select reserve-width-form select-form" required="required" name="room_rate">
                            
                           

                            <?php
                                global $select, $category;
                                $query  = "SELECT Room_Rate ";
                                $query .= "FROM rooms ";
                                $query .= "WHERE Room_Type = '{$select}' ";
                                $query .= "AND Category = '{$category}' ";                                            

                                $room_rate_set = mysqli_query($connection, $query);
                                confirm_query($room_rate_set);
                            ?>

                                <option selected="selected"></option>

                           
                            <?php while($room_rate = mysqli_fetch_assoc($room_rate_set)) { ?>
                                <option><?php echo htmlentities($room_rate["Room_Rate"]); ?></option>
                            <?php } ?>
                        </select>

                     <br><br>

               
                    <label class="reserve-details" style="margin-left: 95px;">Room Number:&nbsp;</label>
                        <select class="uk-select reserve-width-form select-form">
                            <option>Room Type A</option>
                            <option>Room Type C</option>
                            <option>Room Type B</option>
                        </select>
                    <br><br>
                -->

                    <label class="reserve-details" style="margin-left: 75px;">Mode of Payment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        
                        <select class="uk-select reserve-width-form reserve-select" required="required" value="<?php echo isset($_POST["payment"]) ? $_POST["payment"] : "" ?>" name="payment">
                            <option selected="selected"></option>
                            <option>PayPal</option>
                            <option>Credit Card</option>
                            <option>Walk-in Payment</option>
                        </select>

                    <br><br>

                    <div class="buttons" style="margin-left: 400px;"">
                        <?php global $category ?>

                            <input class=" uk-button-default Save_button_reserve" type="submit" name="submit" value="Submit"/>

                            <a href="reservation_form.php?Category=<?php echo urlencode ($_SESSION["Category"]); ?>" class="a"><input class=" uk-button-default Cancel_button_reserve" type="button" onclick="return confirm('Are you sure you want to cancel?')" name="cancel" value="Cancel"/></a>  
                 
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