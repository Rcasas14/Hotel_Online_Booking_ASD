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
                        <a href="reserve-form-page.php">Reserve Room</a>
                        <a href="#client-profile">Client Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <!--   <div class="head-image">
        <h1 class="head-wel">WELCOME BACK!</h1>
            <img src="Images/welcome.jpeg" class="Headlog-image">
        </div>-->
        <div class="log-container uk-clearfix">
            <div class="log-center-logo">
                <img src="Images/logo.png">
            </div>
            <!-- must have action_page.php-->
            <form class="log-form-size uk-horizontal">
                <fieldset class="uk-fieldset">
                    <legend class="uk-legend" id="log-text">Welcome Back!</legend>
                    <p class="uk-margin log-signIn">Sign in with your account on Grey Hotel to Continue!</p>
                    <div class="uk-margin">
                        <label class="uk-form-label form-horizontal-text font-Roboto">Username *</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="text">
                            <br>
                            <br>
                            <label class="uk-form-label form-horizontal-text font-Roboto">Password *</label>
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="password">
                            <br>
                            <br>
                            <button class=" uk-button-default log-butt">LOGIN</button>
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                <label class=" font-log">
                                    <input class="uk-checkbox" type="checkbox"> Login as administrator &nbsp;&nbsp;
                                    <input class="uk-checkbox" type="checkbox"> Remember me</label>
                            </div>
                            <a href=#admin-page class="font-Roboto">Forgot your password?</a>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="not-member-container">
                            <p class="notAmember-yet">NOT A MEMBER YET?</p>
                            <p id="create-acc">Create an Account <span class="font-Roboto"><a href="register-page.php">here!</a></span></p>
                        </div>
                    </div>
        </div>
        </fieldset>
        </form>
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
    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>
</body>

</html>