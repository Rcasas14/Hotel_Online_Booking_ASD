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
    <link href="stylesheet/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div>
        <div class="top-bg-color">
            <div class="ico">
                <img src="Images/logo.png" alt="Grey Hotel" class="ico-image">
            </div>

            <div class="topnav">
                <a href="index.php" class="h">HOME</a>
                <a href="#room" class="h">ROOMS</a>
                <a href="#contact" class="h">CONTACT US</a>
                <a href="reservation.php" class="h">RESERVE NOW</a>
            </div>
        </div>
     <!--   <div class="head-image">
        <h1 class="head-wel">WELCOME BACK!</h1>
            <img src="Images/welcome.jpeg" class="Headlog-image">
        </div>-->
        <div class="log-container uk-clearfix">
            <!-- must have action_page.php-->
            <form class="form-size uk-horizontal">
                <fieldset class="uk-fieldset">
                    <legend class="uk-legend" id="log-text">LOGIN AS CLIENT</legend>
                    <div class="uk-margin">
                        <label class="uk-form-label form-horizontal-text font-Roboto">Email Address *</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="Email" placeholder="name@example.com">
                            <br>
                            <br>
                            
                            <label class="uk-form-label form-horizontal-text font-Roboto">Password *</label>
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="password">
                            
                            <br>
                            <br>
                            <button class=" uk-button-default log-butt">LOGIN</button>
                            <br>
                            <br>
                            <a href=#admin-page class="font-Roboto">Forgot your password?</a>
                            <br>
                            <br>
                        </div>
                        <div class="not-member-container">
                            <p class="notAmember-yet">Doesn't have account yet?</p>
                            <p id="create-acc"> Sign Up <span class="font-Roboto"><a href="user_registration.php">here!</a></span></p>
                        </div>
                    </div>
        </div>
        </fieldset>
        </form>
    </div>
    </div>
    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>
</body>

</html>