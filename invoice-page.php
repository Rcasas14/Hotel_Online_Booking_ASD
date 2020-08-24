</!DOCTYP html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="UIKIT/css/uikit-rtl.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/footer-distributed.css" rel="stylesheet" type="text/css">
    <link href="css/invoice-page.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div>
        <div class="top-bg-color">
            <div class="ico">
                <a href="index.php"><img src="Images/logo.png" alt="Grey Hotel" class="ico-image"></a>
            </div>

            <div class="topnav" id="myTopnav">
                <div class="dropdown">
                    <p class="nav-text"><a href="index.php" class="link-head-text">HOME</a></p>
                    <div class="dropdown-content">
                        <a href="#about-hotel">About Grey Hotel</a>
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
                <p class="nav-text"><a href="#rooms" class="link-head-text">ROOMS</a></p>
                <div class="dropdown">
                    <p class="nav-text"><a href="login-page.php" class="link-head-text">RESERVE NOW</a></p>
                    <div class="dropdown-content">
                        <a href="#reserve-room">Reserve Room</a>
                        <a href="#client-profile">Client Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="inv-container">
            <div class="inv-content uk-margin">
                <fieldset class="uk-fieldset inv-fieldset">
                    <h1 class="inv-head">RESERVATION DETAILS</h1>
                    <div class="inv-icon">
                        <img src="Images/logo.png" class="inv-image">
                    </div>
                    <p class="inv-greyHotel-text">GREY HOTEL DAVAO</p>
                    <!--Temporary text/ UI for function invoice-->
                    <div class="inv-content-margin">
                        <p class="inv-information-desc">DESCRIPTION</p>
                        <p class="inv-information">Name:<span class="inv-function">(Name information)</span></p>
                        <p class="inv-information">Arrive:<span class="inv-function">(Arrive Information)</span></p>
                        <p class="inv-information">Depart:<span class="inv-function">(Depart type Information)</span></p>
                        <div class="inv-total">
                            <p class="inv-information">Room Type<span class="inv-function">(Room type Information)</span></p>
                            <p class="inv-information">Number of Night\s<span class="inv-function">(Number of Night info)</span></p>
                            <p class="inv-information">Number of Room\s<span class="inv-function">(Number of room Info)</span></p>
                            <p class="inv-information">Occupancy<span class="inv-function">(Occupancy Info)</span></p>
                            <p class="inv-information">Rate<span class="inv-function">(Rate Info)</span></p>
                            <div class="inv-total-border">
                                <p class="inv-information">TOTAL:<span class="inv-function">(Total)</span></p>
                            </div>
                            <div class="inv-butt-container">
                                <a href="reserve-form-page.php" class=" uk-button-default inv-log-butt">EDIT</a>
                                <a href="reserve-form-page.php" class=" uk-button-default inv-log-butt">DONE</a>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="Footer">
            <footer class="footer-distributed">
                <div class="footer-right">
                    <a href="#"><img src="Images/facebook-logo.png"><i class="fa fa-facebook"></i></a>
                    <a href="#">
                        <a href="#"><img src="Images/github-logo.png"><i class="fa fa-github"></i></a>
                        <i class="fa fa-github"></i></a>
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
    </div>
</body>

</html>