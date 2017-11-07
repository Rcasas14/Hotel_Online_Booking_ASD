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
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style2.css" rel="stylesheet" type="text/css">
    <link href="../tes-css.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/footer-distributed.css" rel="stylesheet" type="text/css">
</head>


<body class="body">
    <div class="body-inline">
        <div class="top-bg-color">

            <div class="ico">
                <a href="index.php"><img src="Images/logo.png" alt="Grey Hotel" class="ico-image"></a>
            </div>
         
            <div class="topnav" id="myTopnav">
                <div class="dropdown">
                    <p class="nav-text"><a href="index.php" class="link-head-text" uk-scroll>HOME</a></p>
                    <div class="dropdown-content">
                        <a href="#about-hotel" uk-scroll>About Grey Hotel</a>
                        <a href="#contact" uk-scroll>Contact Us</a>
                    </div>
                </div>

                <p class="nav-text"><a href="rooms.php" class="link-head-text">ROOMS</a></p>
                <p class="nav-text"><a href="reserve.php" class="link-head-text">RESERVE NOW</a></p>                
            </div>  

        </div>

        <div class="slideshow-container">
            <figure>
                <img src="Images/Greatness.png">
                <img src="Images/Relax.png">
                <img src="Images/Experience.png">
                <img src="Images/Youth.png">
            </figure>
            <a href="#about-hotel" uk-scroll><img src="Images/scroll_down.png" class="scroll-ico moving-down">
            </a>
        </div>

        <br>
        <br>

        <div class="About-hotel-container" id="about-hotel">
            <p class="About-greyHotel">ABOUT GREY HOTEL</p>
            <p class="grey-hotel-dav">GREY HOTEL DAVAO</p>
            <div class="grey-hotel-image">
                <img src="Images/Grey-Hotel.png" class="grey-img">
            </div>
            <p class="aboutHotel-temp-content ">Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim.</p>
        </div>
    </div>


    <div id="contact">
        <footer class="footer-distributed">

            <div class="footer-right">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>

            <div class="footer-left">
                <p class="footer-links">
                    <a href="index.php" uk-scroll>Home</a>.
                    <a href="#">Pricing</a> .
                    <a href="#about-hotel">About</a> .
                    <a href="#">Contact</a> .
                </p>
                <p>Grey Hotel &copy; 2015</p>
            </div>

        </footer>
    </div>
    <script src="Jquery/jquery.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>


</body>

</html>