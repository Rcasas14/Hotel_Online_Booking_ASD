</!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/footer-distributed.css" rel="stylesheet" type="text/css">
    
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
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
                <p class="nav-text"><a href="rooms.php" class="link-head-text">ROOMS</a></p>
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
            <center>
                <p class="About-greyHotel">ABOUT GREY HOTEL</p>
            </center>
            <center>
                <p class="grey-hotel-dav">GREY HOTEL DAVAO</p>
            </center>
            <div class="grey-hotel-image">
                <center><img src="Images/Grey-Hotel.png" class="grey-img"></center>
            </div>
            <br>

        </div>
        <div class="about-bg-container">
            <div class="aboutHotel-content">
                <p>
                    WELCOME TO THE GREY HOTEL, WHERE YOU CAN EXPERIENCE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GREATNESS, RELAXATION, AND YOUTHFULNESS!</p>
            </div>
            <div class="about-content-cont">
                <div class="about-content">
                    <img src="Images/hotel.jpg" class="content-one-img">
                    <p>Complete your perfect stay in Davao City with Grey Hotel and its great experience. Grey hotel is located in the heart of Davao, where peace and modern city life can be found.</p>
                </div>
            </div>
            <div class="about-sec-content">
                <div class="about-content">
                    <img src="Images/suite.jpg" class="content-one-img">
                    <p>Feel at home in our rooms and suites which are elegantly designed with Filipino and a touch of Western styles. With its 5-storey building design and structure and 9 elegant guest rooms and suites offered, we can assure that guests can enjoy their privacy and solitude. All rooms are also equipped with broadband internet and other amenities.</p>
                </div>
            </div>
            <div class="about-sec-content">
                <div class="about-content">
                    <img src="Images/functionHall.jpg" class="content-one-img">
                    <p>Grey Hotel can also be a great venue for meetings and seminars with its versatile function halls equipped with modern technologies needed. From the airport, Grey Hotel is just 12 kms away and can be reach with 20-minute drive by car.</p>
                </div>
            </div>
        </div>
        <h2 class="facility">FACILITIES</h2>
        <div class="facility-container">
            <div class="facility-cont">
                <img src="Images/functionhall.png">
                <p>Function Hall</p>
            </div>
            <div class="facility-cont-sec">
                <img src="Images/minibarGlass.png">
                <p>Mini Bar</p>
            </div>
            <div class="facility-cont-sec">
                <img src="Images/parking%20lot.png">
                <p>Parking Lot</p>
            </div>
            <div class="facility-cont-sec">
                <img src="Images/swimmingpool.png">
                <p>Swimming Area</p>
            </div>
        </div>

    </div>
    <div class="Footer">
        <footer class="footer-distributed">
            <div class="footer-right">
                <a href="#"><img src="Images/facebook-logo.png"><i class="fa fa-facebook"></i></a>
                <a href="#"><img src="Images/github-logo.png"><i class="fa fa-github"></i></a>
            </div>
            <div class="footer-left">
                <p class="footer-links">
                    <a href="index.php" uk-scroll>Home</a>.
                    <a href="#">Pricing</a> .
                    <a href="#about-hotel" uk-scroll>About</a> .
                    <a href="#">Contact</a> .
                </p>
                <p>Grey Hotel &copy; 2017</p>
            </div>

        </footer>
    </div>
    <script src="Jquery/jquery.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
</body>

</html>