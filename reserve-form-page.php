</!DOCTYPE html>
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
    <link href="css/reserve-form.css" rel="stylesheet" type="text/css">
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
                <div class="dropdown">
                    <p class="nav-text"><a href="#rooms" class="link-head-text">ROOMS</a></p>
                </div>
                <div class="dropdown">
                    <p class="nav-text"><a href="login-page.php" class="link-head-text">RESERVE NOW</a></p>
                    <div class="dropdown-content">
                        <a href="#reserve-room">Reserve Room</a>
                        <a href="#client-profile">Client Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="reserve-container">
            <div class="reserve-content uk-margin">
                <form class="reserve-form uk-horizontal">
                    <fieldset class="uk-fieldset">
                        <h1 class="reserve-head">PERSONAL DETAILS</h1>
                        <div class="uk-form-controls reserve-form-contain">
                            <p class="reserve-details"> First Name*:
                                <input class="uk-input uk-form-small reserve-width-form" type="text">
                            </p>
                            <p class="reserve-details">Last Name*:
                                <input class="uk-input uk-form-small reserve-width-form" type="text">
                            </p>
                            <p class="reserve-details">Room Type*:
                                <select class="uk-select reserve-width-form reserve-details reserv-select">
                                    <option>Room Type A</option>
                                    <option>Room Type C</option>
                                    <option>Room Type B</option>
                                </select>
                            </p>
                            <p class="reserve-details ">Room Rate:
                                <input class=" uk-input uk-form-small reserve-width-form" type="text" placeholder="(room-price function)">
                            </p>
                            <p class="reserve-details">Mobile\Telephone #*:
                                <input class=" uk-input uk-form-small reserve-width-form" type="text">
                            </p>
                            <p class="reserve-details">Arrive*:
                                <input class="uk-input uk-form-small reserve-width-form" type="date">
                            </p>
                            <p class="reserve-details">Depart*:
                                <input class="uk-input uk-form-small reserve-width-form" type="date">
                            </p>
                            <p class="reserve-details">Number of Nights*:
                                <input class=" uk-input uk-form-small reserve-width-form" type="number">
                            </p>
                            <p class="reserve-details">Number of Rooms*:
                                <input class=" uk-input uk-form-small reserve-width-form" type="number">
                            </p>
                            <p class="reserve-details">Address*:
                                <textarea class="uk-textarea tex-area-float" rows="5"></textarea>
                            </p>
                            <div class="reserv-butt">
                                <button class=" uk-button-default reserve-log-butt">CANCEL</button>
                                <!--function reserve successful must appear first before proceed to invoice page-->
                                <a href="invoice-page.php" class=" uk-button-default reserve-log-butt">SUBMIT</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
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
    </div>

</body>

</html>