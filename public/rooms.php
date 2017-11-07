<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

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
    <link href="stylesheets/style2.css" rel="stylesheet" type="text/css">
    <link href="../tes-css.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/rooms_style.css" type="text/css" rel="stylesheet">
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
        <div class="roomType">
            <h3>Type A</h3>
                <center>
                    <div class="imgRow">
                        <div class="imgDescription">
                            <img src="Images/typeA.jpg" alt="Grey Hotel">
                            <p><b>Room Type: </b></p>
                            <p><b>Room Rate: </b></p>
                            <p><b>Room Number: </b></p>
                            <p><b>Available: </b></p>
                        </div>
                        <div class="imgDescription">
                            <img src="Images/typeA.jpg" alt="Grey Hotel">
                            <p><b>Room Type: </b></p>
                            <p><b>Room Rate: </b></p>
                            <p><b>Room Number: </b></p>
                            <p><b>Available: </b></p>
                        </div>
                        <div class="imgDescription">
                            <img src="Images/typeA.jpg" alt="Grey Hotel">
                            <p><b>Room Type: </b></p>
                            <p><b>Room Rate: </b></p>
                            <p><b>Room Number: </b></p>
                            <p><b>Available: </b></p>
                        </div>
                        
                    </div>
                </center>
            <h3>Type B</h3> 
                <center>
                        <div class="imgRow">
                            <div class="imgDescription">
                            <img src="Images/typeA.jpg" alt="Grey Hotel">
                            <p><b>Room Type: </b></p>
                            <p><b>Room Rate: </b></p>
                            <p><b>Room Number: </b></p>
                            <p><b>Available: </b></p>
                        </div>
                        <div class="imgDescription">
                            <img src="Images/typeA.jpg" alt="Grey Hotel">
                            <p><b>Room Type: </b></p>
                            <p><b>Room Rate: </b></p>
                            <p><b>Room Number: </b></p>
                            <p><b>Available: </b></p>
                        </div>
                        <div class="imgDescription">
                            <img src="Images/typeA.jpg" alt="Grey Hotel">
                            <p><b>Room Type: </b></p>
                            <p><b>Room Rate: </b></p>
                            <p><b>Room Number: </b></p>
                            <p><b>Available: </b></p>
                        </div>
                        </div>
                    </center>
            <h3>Type C</h3> 
                <center>
                    <div class="imgRow">
                        <div class="imgDescription">
                            <img src="Images/typeA.jpg" alt="Grey Hotel">
                            <p><b>Room Type: </b></p>
                            <p><b>Room Rate: </b></p>
                            <p><b>Room Number: </b></p>
                            <p><b>Available: </b></p>
                        </div>
                        <div class="imgDescription">
                            <img src="Images/typeA.jpg" alt="Grey Hotel">
                            <p><b>Room Type: </b></p>
                            <p><b>Room Rate: </b></p>
                            <p><b>Room Number: </b></p>
                            <p><b>Available: </b></p>
                        </div>
                        <div class="imgDescription">
                            <img src="Images/typeA.jpg" alt="Grey Hotel">
                            <p><b>Room Type: </b></p>
                            <p><b>Room Rate: </b></p>
                            <p><b>Room Number: </b></p>
                            <p><b>Available: </b></p>
                        </div>
                    </div>
                </center>
        </div>
        
    </div>
    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>
</body>

</html>