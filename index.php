</!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="../tes-css.css" rel="stylesheet" type="text/css">
</head>

<body class="body">
    <div>
        <div class="top-bg-color">
            <div class="ico">
                <a href="index.php"><img src="Images/logo.png" alt="Grey Hotel" class="ico-image"></a>
            </div>
            <div class="topnav" id="myTopnav">
                <div class="dropdown">
                    <p class="nav-text"><a href="index.php" class="link-head-text" uk-scroll>HOME</a></p>
                    <div class="dropdown-content">
                        <a href="#about-hotel" uk-scroll>About Grey Hotel</a>
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
                <div class="dropdown">
                    <p class="nav-text"><a href="#rooms" class="link-head-text">ROOMS</a></p>
                    <div class="dropdown-content">
                        <a href="#about-hotel">Room Types</a>
                    </div>
                </div>
                <div class="dropdown">
                    <p class="nav-text"><a href="login-page.php" class="link-head-text">RESERVE NOW</a></p>
                    <div class="dropdown-content">
                        <a href="reserve-form-page.php">Reserve Room</a>
                        <a href="#client-profile">Client Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slideshow-container">
            <figure>
                <img src="Images/Greatness.jpg">
                <img src="Images/Relax.jpeg">
                <img src="Images/Experience.jpeg">
                <img src="Images/Youth.jpeg">
            </figure>
            <a href="#about-hotel" uk-scroll><img src="Images/scroll_down.png" class="scroll-ico">
            </a>            
        </div>
        <br>
        <br>

        <div class="About-hotel-container">
            <p class="About-greyHotel" id="about-hotel">ABOUT GREY HOTEL</p>
            <p class="aboutHotel-temp-content ">Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim.</p>
        </div>
    </div>
    <div class="Footer">
        <footer class="Contacts-Footer">

        </footer>
    </div>
    <script src="Jquery/jquery.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="Script/slideshow-scrpit.js"></script>
</body>

</html>