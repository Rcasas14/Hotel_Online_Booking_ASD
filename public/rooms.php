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

    
        <?php if(logged_in()==true || client_logged_in()==true){   ?>

                <div class="login">
                    <p class="nav-text"><a href="client_logout.php" class="link-head-text" >LOG OUT</a></p>
                </div>  

        <?php }else{    ?>

                <div class="login">
                    <p class="nav-text"><a href="log_in.php" class="link-head-text">LOG IN</a></p>
                </div> 

        <?php }   ?>
        

         </div>

        <div class="accommodations">
               
                    <div class="imgRow" style="background-color: #fafafa;">
                        <h3>&nbsp;Rooms</h3>
                        <p class="accommodation_info">Rooms in Grey Hotel are located in the second floor of the building and are all air conditioned.</p>
                
                        <div class="imgDescription">
                            <?php $room = find_room_by_id(1); ?>
                                <img src="Images/mp_superiorRoom.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p><?php echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                    <p class="roomFeatures">Superior room is equipped with Wi-Fi internet service, electronic guestroom lock, telephone with voicemail,  executive desk, LCD colour TV with cable channels, refrigerator, coffee and tea making facilities, and bathtub.</p>
                                </div> 
                        </div>

                        <hr class="hr">

                        <div class="imgDescription_right">
                            <?php $room = find_room_by_id(2); ?>
                                <img src="Images/mp_deluxeRoom.jpg" alt="Grey Hotel">
                                <div class="roomDescription_right">
                                    <div class="roomTypeName" style="padding-top: 20px;"><p><?php echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                    <p class="roomFeatures">Deluxe room is equipped with Wi-Fi internet service, iPod dock, electronic guestroom lock, telephone with voicemail, desktop computer, executive desk, LCD colour TV with cable channels, refrigerator, coffee and tea making facilities, and bathtub.</p>
                                </div>
                        </div>

                        <hr>

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(3); ?>

                                <img src="Images/mp_premier.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p><?php echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                    <p class="roomFeatures">Premier room is equipped with Wi-Fi internet service, Clock radio with iPod dock, electronic guestroom lock, data points for fax and computer, telephone with voicemail,  executive desk, LCD colour TV with cable channels, mini-bar and refrigerator, coffee machine pods, deep soaking tub, glass-partitioned hot and cold shower, and soft cotton bathrobes and towels.</p>
                                </div>
                                
                        </div>
                    </div>

                    <div class="imgRow" style="background-color: #d2d2d2;">
                        <h3>&nbsp;Suites</h3> 
                        <p class="accommodation_info">Suites in Grey Hotel are located in the third floor of the building and are all air conditioned.</p>

                        <div class="imgDescription" style="background-color: #fafafa;">
                            <?php $room = find_room_by_id(4); ?>

                                <img src="Images/mp_deluxeSuite.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p><?php echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                    <p class="roomFeatures">Deluxe suite includes afternoon tea, breakfast, Cocktails, Butler Service, Desktop computer, telephone with voicemail, Electronic guestroom lock, Executive desk, LCD colour TV with cable channels, Mini-bar and refrigerator, Personalised check-in/check-out, Pressing service of one set of suit or dress per stay, Private Reception Area, Queen bed, Separate bath and shower, Wi-Fi internet service.</p>
                                </div>

                        </div>

                        <hr>

                        <div class="imgDescription_right" style="background-color: #fafafa;">
                            <?php $room = find_room_by_id(5); ?>

                                <img src="Images/mp_cabanaSuites.jpg" alt="Grey Hotel">
                                <div class="roomDescription_right">
                                    <div class="roomTypeName" style="padding-top: 20px";><p><?php echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                    <p class="roomFeatures">Cabana suite of Grey Hotel includes afternoon tea, breakfast, Cocktails, Butler Service, Desktop computer, telephone with voicemail, Electronic guestroom lock, Executive desk, LCD colour TV with cable channels, Mini-bar and refrigerator, Personalised check-in/check-out, Pressing service of one set of suit or dress per stay, Private Reception Area, Separate bath and shower, Wi-Fi internet service.</p>
                                </div>

                        </div>

                        <hr>

                        <div class="imgDescription" style="background-color: #fafafa;">
                            <?php $room = find_room_by_id(6); ?>

                            <?php if(empty($errors)) {   ?>
                                <img src="Images/mp_presidentialSuite.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p><?php echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                    <p class="roomFeatures">Presidential suite includes Desktop computer, telephone with voicemail, Electronic guestroom lock, iPod dock, LCD colour TV with cable channels, Mini-bar and refrigerator, Personal Office, King bed, Separate bath and shower, Wi-Fi internet service.</p>    
                                </div>
                                

                            <?php } ?> 
                        </div>
                    </div>
            
                    <div class="imgRow" style="background-color: #fafafa;">
                        <h3>&nbsp;Grey Club</h3> 
                        <p class="accommodation_info">Club rooms and suites in Grey Hotel are located in the fourth floor of the building and are all air conditioned. These rooms and suites offer VIP amnenities, personalised services, and exclusive access to Grey club.</p>

                        <div class="imgDescription">
                            <?php $room = find_room_by_id(7); ?>

                                <img src="Images/mp_continentalClubBenefits.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p><?php echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                    <p class="roomFeatures">Continental Club Benefits includes afternoon tea, breakfast, Cocktails, Butler Service, Express check in/outIn-room, Personalised check-in/check-out, Pressing service of one set of suit or dress per stay, Private Reception Area.</p>
                                </div>
                                
                        </div>

                        <hr>

                        <div class="imgDescription_right">
                            <?php $room = find_room_by_id(8); ?>

                                <img src="Images/mp_continentalDeluxeRoom.jpg" alt="Grey Hotel">
                                <div class="roomDescription_right">
                                   <div class="roomTypeName" style="padding-top: 20px"><p><?php echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                    <p class="roomFeatures">Continental Deluxe Room includes Coffee and tea making facilities, telephone with voicemail, Electronic guestroom lock, Executive desk, LCD colour TV with cable channels, Mini-bar and refrigerator, Separate bath and shower.</p>
                                </div>

                        </div>
                        <hr>
                        <div class="imgDescription">
                            <?php $room = find_room_by_id(9); ?>

                                <img src="Images/mp_continentalSuperiorSuite.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p><?php echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                    <p class="roomFeatures">Continental Superior Room includes Coffee and tea making facilities, Connectable rooms, Desktop computer, telephone with voicemail, Electronic guestroom lock, Executive desk, LCD colour TV with cable channels, Mini-bar and refrigerator, Queen bed, Separate bath and shower.</p>
                                </div>

                        </div>
                    </div>

                    <div class="imgRow" style="background-color: #d2d2d2;">
                        <h3>&nbsp;Function Halls</h3> 
                        <p class="accommodation_info">Function Halls in Grey Hotel are in the first floor. These multi-functional rooms are perfect for your events and will surely make it memorable. </p>
                        <div class="imgDescription" style="background-color: #fafafa;">
                            <?php $room = find_room_by_id(10); ?>

                                <img src="Images/mp_ballroom.jpg" alt="Grey Hotel">
                                <div class="roomDescription">
                                    <div class="roomTypeName"><p><?php echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                    <p class="roomFeatures">Grey Ballroom is perfect for weddings, birthdays, and debuts. This room is equipped with Built-in LCD projectors, Wi-Fi internet service, Latest audio-visual equipment, Lighting System, and Stage.</p>
                                </div>

                        </div>
                        <hr>
                        <div class="imgDescription_right" style="background-color: #fafafa;">
                            <?php $room = find_room_by_id(11); ?>

                                <img src="Images/mp_functionHall.jpg" alt="Grey Hotel">
                                <div class="roomDescription_right">
                                    <div class="roomTypeName" style="padding-top: 20px"><p><?php echo htmlentities($room["Room_Type"]); ?></p></div>
                                    <p><b>Room Rate: &nbsp; </b><?php echo htmlentities($room["Room_Rate"]);?>/night</p>
                                    <p><b>Room Number: &nbsp; </b><?php echo htmlentities($room["Room_Number"]); ?></p>
                                    <p class="roomFeatures">Grey Function Hall can accommodate a variety of set-ups including cocktail, classroom, banquet and theatre, gatherings, conferences and conventions.</p>
                                </div>
                                
                        </div>
                    </div>
                
            </div>


    <br><br>
    <div class="Footer" id="contact">

        <footer class="footer-distributed">

            <div class="footer-right">
                <a href="#"><img src="Images/facebook-logo.png"><i class="fa fa-facebook"></i></a>
                <a href="#"><img src="Images/github-logo.png"><i class="fa fa-github"></i></a>
            </div>

            <div class="footer-left">
                <p class="footer-links">
                    <a href="index.php" uk-scroll>Home</a>.
                    <a href="index.php#about-hotel" uk-scroll>About</a> .
                    <a href="index.php#contact">Contact</a>
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