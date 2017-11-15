<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>


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
    <link href="stylesheets/style2.css" type="text/css" rel="stylesheet">
    <link href="../tes-css.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/footer-distributed.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css">
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

        <div class="roomType">

            <h3>&nbsp;Rooms</h3>
            <hr>
                <center>
                    <div class="imgRow">

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(1); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_superiorRoom.jpg" alt="Grey Hotel">
                                <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                                <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                <p><b>Available: &nbsp; </b><?php echo htmlentities($room["Available"]); ?></p>

                            <?php } ?>    
                        </div>

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(2); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_deluxeRoom.jpg" alt="Grey Hotel">
                                <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                                <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                <p><b>Available: &nbsp; </b><?php echo htmlentities($room["Available"]); ?></p>

                            <?php } ?> 
                        </div>

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(3); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_premier.jpg" alt="Grey Hotel">
                                <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                                <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                <p><b>Available: &nbsp; </b><?php echo htmlentities($room["Available"]); ?></p>

                            <?php } ?> 
                        </div>

                    </div>
                </center>
            <br>

            <h3>&nbsp;Suites</h3> 
            <hr>
                <center>
                    <div class="imgRow">

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(4); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_deluxeSuite.jpg" alt="Grey Hotel">
                                <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                                <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                <p><b>Available: &nbsp; </b><?php echo htmlentities($room["Available"]); ?></p>

                            <?php } ?> 
                        </div>

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(5); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_cabanaSuites.jpg" alt="Grey Hotel">
                                <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                                <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                <p><b>Available: &nbsp; </b><?php echo htmlentities($room["Available"]); ?></p>

                            <?php } ?> 
                        </div>

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(6); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_presidentialSuite.jpg" alt="Grey Hotel">
                                <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                                <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                <p><b>Available: &nbsp; </b><?php echo htmlentities($room["Available"]); ?></p>

                            <?php } ?> 
                        </div>

                    </div>
                </center>
            <br>

            <h3>&nbsp;Continental Club</h3>
            <hr> 
                <center>
                    <div class="imgRow">

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(7); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_continentalClubBenefits.jpg" alt="Grey Hotel">
                                <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                                <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                <p><b>Available: &nbsp; </b><?php echo htmlentities($room["Available"]); ?></p>

                            <?php } ?> 
                        </div>

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(8); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_continentalDeluxeRoom.jpg" alt="Grey Hotel">
                                <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                                <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                <p><b>Available: &nbsp; </b><?php echo htmlentities($room["Available"]); ?></p>

                            <?php } ?>
                        </div>

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(9); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_continentalSuperiorSuite.jpg" alt="Grey Hotel">
                                <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                                <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                <p><b>Available: &nbsp; </b><?php echo htmlentities($room["Available"]); ?></p>

                            <?php } ?>
                        </div>

                    </div>
                </center>
            <br>

            <h3>&nbsp;Function Halls</h3> 
            <hr>
                <center>
                    <div class="imgRow">

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(10); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_ballroom.jpg" alt="Grey Hotel">
                                <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                                <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                <p><b>Available: &nbsp; </b><?php echo htmlentities($room["Available"]); ?></p>

                            <?php } ?>
                        </div>

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(11); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_functionHall.jpg" alt="Grey Hotel">
                                <p><b>Room Type: &nbsp; </b><?php echo htmlentities($room["Room_Type"]); ?></p>
                                <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                <p><b>Available: &nbsp; </b><?php echo htmlentities($room["Available"]); ?></p>

                            <?php } ?>
                        </div>

                    </div>
                </center>
        </div>

    <div id="contact">
        <footer class="footer-distributed">

            <div class="footer-right">
                <a href="#"><i class="fa fa-facebook"><img src="images/facebook_logo.png" > </i></a>
                <a href="#"><i class="fa fa-twitter"><img src="images/twitter_logo.png" ></i></a>
                <a href="#"><i class="fa fa-email"><img src="images/email_logo.png" style="height: 50px; width:50px;"></i></a>
                <a href="#"><i class="fa fa-linkedin"><img src="images/linkedin_logo.png" style="height: 38px; width:60px;"></i></a>
            </div>

            <div class="footer-left">
                <p class="footer-links">
                    <a href="index.php" uk-scroll>Home</a>.
                    <a href="#">Pricing</a> .
                    <a href="#about-hotel">About</a> .
                    <a href="#">Contact</a> .
                </p>
                <p>Grey Hotel &copy; 2017</p>
            </div>

        </footer>
    </div>
        
</div>

    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>

</body>

</html>