<?php //require_once("../includes/db_connection.php"); ?> 
<?php //require_once("../includes/session.php"); ?>
<?php //require_once("../includes/functions.php"); ?>
<?php //require_once("../includes/validation_functions.php"); ?>


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

        <div class="accommodations">
               
                    <div class="imgRow" style="background-color: #fafafa;">
                        <h3>&nbsp;Rooms</h3>
                        <p class="accommodation_info">Rooms in Grey Hotel are located in the second floor of the building and are all air conditioned.</p>
                
                        <div class="imgDescription">
                            <?php //$room = find_room_by_id(1); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_superiorRoom.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p>Superior Room<?php //echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php //echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php //echo htmlentities($room["Room_Number"]); ?></p>
                                    <p><b>Available: &nbsp; </b><?php //echo htmlentities($room["Available"]); ?></p>
                                    <p class="roomFeatures">Superior room is equipped with Wi-Fi internet service, electronic guestroom lock, telephone with voicemail,  executive desk, LCD colour TV with cable channels, refrigerator, coffee and tea making facilities, and bathtub<?php //echo htmlentities($room["Available"]); ?></p>
                                </div>
                                
                            <?php } ?>    
                        </div>

                        <hr class="hr">

                        <div class="imgDescription_right">
                            <?php //$room = find_room_by_id(2); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_deluxeRoom.jpg" alt="Grey Hotel">
                                <div class="roomDescription_right">
                                    <div class="roomTypeName" style="padding-top: 20px;"><p>Deluxe Room<?php //echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php //echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php //echo htmlentities($room["Room_Number"]); ?></p>
                                    <p><b>Available: &nbsp; </b><?php //echo htmlentities($room["Available"]); ?></p>
                                    <p class="roomFeatures">Deluxe room is equipped with Wi-Fi internet service, iPod dock, electronic guestroom lock, telephone with voicemail, desktop computer, executive desk, LCD colour TV with cable channels, refrigerator, coffee and tea making facilities, and bathtub. <?php //echo htmlentities($room["Available"]); ?></p>
                                </div>

                            <?php } ?> 
                        </div>
                        <hr>
                        <div class="imgDescription">
                            <?php //$room = find_room_by_id(3); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_premier.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p>Premier Room<?php //echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php //echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php //echo htmlentities($room["Room_Number"]); ?></p>
                                    <p><b>Available: &nbsp; </b><?php //echo htmlentities($room["Available"]); ?></p>
                                    <p class="roomFeatures">Premier room is equipped with Wi-Fi internet service, Clock radio with iPod dock, electronic guestroom lock, data points for fax and computer, telephone with voicemail,  executive desk, LCD colour TV with cable channels, mini-bar and refrigerator, coffee machine pods, deep soaking tub, glass-partitioned hot and cold shower, and soft cotton bathrobes and towels.<?php //echo htmlentities($room["Available"]); ?></p>
                                </div>
                                

                            <?php } ?> 
                        </div>
                    </div>

                    <div class="imgRow" style="background-color: #d2d2d2;">
                        <h3>&nbsp;Suites</h3> 
                        <p class="accommodation_info">Suites in Grey Hotel are located in the third floor of the building and are all air conditioned.</p>

                        <div class="imgDescription" style="background-color: #fafafa;">
                            <?php //$room = find_room_by_id(4); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_deluxeSuite.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p>Deluxe Suite<?php //echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php //echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php //echo htmlentities($room["Room_Number"]); ?></p>
                                    <p><b>Available: &nbsp; </b><?php //echo htmlentities($room["Available"]); ?></p>
                                    <p class="roomFeatures">Deluxe suite includes afternoon tea, breakfast, Cocktails, Butler Service, Desktop computer, telephone with voicemail, Electronic guestroom lock, Executive desk, LCD colour TV with cable channels, Mini-bar and refrigerator, Personalised check-in/check-out, Pressing service of one set of suit or dress per stay, Private Reception Area, Queen bed, Separate bath and shower, Wi-Fi internet service. <?php //echo htmlentities($room["Available"]); ?></p>
                                </div>

                            <?php } ?> 
                        </div>
                        <hr>
                        <div class="imgDescription_right" style="background-color: #fafafa;">
                            <?php //$room = find_room_by_id(5); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_cabanaSuites.jpg" alt="Grey Hotel">
                                <div class="roomDescription_right">
                                    <div class="roomTypeName" style="padding-top: 20px";><p>Cabana Suite<?php //echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php //echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php //echo htmlentities($room["Room_Number"]); ?></p>
                                    <p><b>Available: &nbsp; </b><?php //echo htmlentities($room["Available"]); ?></p>
                                    <p class="roomFeatures">Cabana suite of Grey Hotel includes afternoon tea, breakfast, Cocktails, Butler Service, Desktop computer, telephone with voicemail, Electronic guestroom lock, Executive desk, LCD colour TV with cable channels, Mini-bar and refrigerator, Personalised check-in/check-out, Pressing service of one set of suit or dress per stay, Private Reception Area, Separate bath and shower, Wi-Fi internet service. <?php //echo htmlentities($room["Available"]); ?></p>
                                </div>

                            <?php } ?> 
                        </div>
                        <hr>
                        <div class="imgDescription" style="background-color: #fafafa;">
                            <?php //$room = find_room_by_id(6); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_presidentialSuite.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p>Presidential Suite<?php //echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php //echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php //echo htmlentities($room["Room_Number"]); ?></p>
                                    <p><b>Available: &nbsp; </b><?php //echo htmlentities($room["Available"]); ?></p>
                                    <p class="roomFeatures">Presidential suite includes Desktop computer, telephone with voicemail, Electronic guestroom lock, iPod dock, LCD colour TV with cable channels, Mini-bar and refrigerator, Personal Office, King bed, Separate bath and shower, Wi-Fi internet service. <?php //echo htmlentities($room["Available"]); ?></p>    
                                </div>
                                

                            <?php } ?> 
                        </div>
                    </div>
            
                    <div class="imgRow" style="background-color: #fafafa;">
                        <h3>&nbsp;Grey Club</h3> 
                        <p class="accommodation_info">Club rooms and suites in Grey Hotel are located in the fourth floor of the building and are all air conditioned. These rooms and suites offer VIP amnenities, personalised services, and exclusive access to Grey club.</p>

                        <div class="imgDescription">
                            <?php //$room = find_room_by_id(7); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_continentalClubBenefits.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p>Grey Club Benefits<?php //echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php //echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php //echo htmlentities($room["Room_Number"]); ?></p>
                                    <p><b>Available: &nbsp; </b><?php //echo htmlentities($room["Available"]); ?></p>
                                    <p class="roomFeatures">Grey club includes afternoon tea, breakfast, Cocktails, Butler Service, Express check in/outIn-room, Personalised check-in/check-out, Pressing service of one set of suit or dress per stay, Private Reception Area. <?php //echo htmlentities($room["Available"]); ?></p>
                                </div>
                                

                            <?php } ?> 
                        </div>
                        <hr>
                        <div class="imgDescription_right">
                            <?php //$room = find_room_by_id(8); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_continentalDeluxeRoom.jpg" alt="Grey Hotel">
                                <div class="roomDescription_right">
                                   <div class="roomTypeName" style="padding-top: 20px"><p>Club Deluxe Room<?php //echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php //echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php //echo htmlentities($room["Room_Number"]); ?></p>
                                    <p><b>Available: &nbsp; </b><?php //echo htmlentities($room["Available"]); ?></p>
                                    <p class="roomFeatures">Club Deluxe room includes Coffee and tea making facilities, telephone with voicemail, Electronic guestroom lock, Executive desk, LCD colour TV with cable channels, Mini-bar and refrigerator, Separate bath and shower<?php //echo htmlentities($room["Available"]); ?></p>
                                </div>

                            <?php } ?>
                        </div>
                        <hr>
                        <div class="imgDescription">
                            <?php //$room = find_room_by_id(9); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_continentalSuperiorSuite.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p>Club Superior Suite<?php //echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php //echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php //echo htmlentities($room["Room_Number"]); ?></p>
                                    <p><b>Available: &nbsp; </b><?php //echo htmlentities($room["Available"]); ?></p>
                                    <p class="roomFeatures">Club Superior suite includes Coffee and tea making facilities, Connectable rooms, Desktop computer, telephone with voicemail, Electronic guestroom lock, Executive desk, LCD colour TV with cable channels, Mini-bar and refrigerator, Queen bed, Separate bath and shower <?php //echo htmlentities($room["Available"]); ?></p>
                                </div>

                            <?php } ?>
                        </div>
                    </div>

                    <div class="imgRow" style="background-color: #d2d2d2;">
                        <h3>&nbsp;Function Halls</h3> 
                        <p class="accommodation_info">Function Halls in Grey Hotel are in the first floor. These multi-functional rooms are perfect your events and will surely make it memorable. </p>
                        <div class="imgDescription" style="background-color: #fafafa;">
                            <?php //$room = find_room_by_id(10); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_ballroom.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p>Grey Ballroom<?php //echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php //echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php //echo htmlentities($room["Room_Number"]); ?></p>
                                    <p><b>Available: &nbsp; </b><?php //echo htmlentities($room["Available"]); ?></p>
                                    <p class="roomFeatures">Grey Ballroom is perfect for weddings, birthdays, and debuts. This room is equipped with Built-in LCD projectors, Wi-Fi internet service, Latest audio-visual equipment, Lighting System, and Stage.<?php //echo htmlentities($room["Available"]); ?></p>
                                </div>

                            <?php } ?>
                        </div>
                        <hr>
                        <div class="imgDescription_right" style="background-color: #fafafa;">
                            <?php //$room = find_room_by_id(11); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_functionHall.jpg" alt="Grey Hotel">
                                <div class="roomDescription_right">
                                    <div class="roomTypeName" style="padding-top: 20px"><p>Grey Function Hall<?php //echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php //echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php //echo htmlentities($room["Room_Number"]); ?></p>
                                    <p><b>Available: &nbsp; </b><?php //echo htmlentities($room["Available"]); ?></p>
                                    <p class="roomFeatures">Grey Function Hall can accommodate a variety of set-ups including cocktail, classroom, banquet and theatre, gatherings, conferences and conventions.<?php //echo htmlentities($room["Available"]); ?></p>
                                </div>
                                
                            <?php } ?>
                        </div>
                    </div>
                
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