</DOCTYPE html>
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
    <link href="style.css" type="text/css" rel="stylesheet">

</head>

<body>
    <div class="top-bg-color">
        <div class="ico">
            <img src="Images/logo.png" alt="Grey Hotel" class="ico-image">
        </div>

        <div class="topnav" id="myTopnav">
            <a href="index.php" class="h">HOME</a>
            <a href="#room" class="h">ROOMS</a>
            <a href="#contact" class="h">CONTACT US</a>
            <a href="#reserve-now" class="h">RESERVE NOW</a>
        </div>
    </div>
    <div>
        <div class="Create-acc-container">
            <form class="uk-horizontal form-left">
                <fieldset class="uk-fieldset">
                    <p class="log-details">LOG-IN DETAILS</p>
                    <div class="uk-form-controls  form-margin" id="reg-width">
                        <label class="uk-form-label form-horizontal-text width">Email Address *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="Email" placeholder="name@example.com">
                        <br>
                        <br>
                        <label class="uk-form-label form-horizontal-text">Password *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="password">
                        <label class="uk-form-label form-horizontal-text">Confirm Password *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="password">
                    </div>
                </fieldset>
            </form>
            <form class="uk-horizontal form-left form-style ">
                <fieldset class="uk-fieldset">
                    <p class="log-details personal-details">PERSONAL DETAILS</p>
                    <div class="uk-form-controls  form-margin personal-att" id="reg-width">
                        <label class="uk-form-label form-horizontal-text width">Fullname *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text">
                        <br>
                        <label class="uk-form-label form-horizontal-text">Lastname *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text">
                        <br>
                        <br>
                        <label>Gender *</label>
                        <div class="uk-form-controls-text">
                            <label>
                                <input class="uk-radio" type="radio" name="radio1"> Male</label>
                            <br>
                            <label>
                                <input class="uk-radio" type="radio" name="radio1"> Female</label>
                        </div>
                        <br>
                        <label class="uk-form-label" for="form-horizontal-text">Date of Birth *</label>  
                        <div class="date-form">
                            <input class="uk-input fl" id="form-horizontal-text" type="text" placeholder="dd">
                            <input class="uk-input fl" id="form-horizontal-text" type="text" placeholder="mm">
                        </div>
                </fieldset>
            </form>
            </div>

        </div>
    </div>

    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>
</body>

</html>