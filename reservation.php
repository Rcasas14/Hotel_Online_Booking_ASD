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
    <link href="stylesheet/style.css" type="text/css" rel="stylesheet">

</head>

<body>

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
    <div>
        <div class="Reservation_container">
            <form class="form-size uk-horizontal">
                <fieldset class="uk-fieldset">
                    <p class="log-details personal-details"> Reservation Form </p>
                    
                    <div class="uk-form-controls  form-margin personal-att" id="reg-width">
                        
                        <label class="uk-form-label form-horizontal-text">Username *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text">
                        
                        <br>
                        <br>
                        <label class="uk-form-label form-horizontal-text">Password *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="password">
                        
                        <br>
                        <br>
                        <label class="uk-form-label form-horizontal-text width">Room Type: *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text">
                        
                        <br>
                        <br>
                        <label class="uk-form-label form-horizontal-text">Arrive/Depart: *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text">
                        
                        <br>
                        <br>
                        <label class="uk-form-label form-horizontal-text width">Number of Nights: *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text">
                        
                        <br>
                        <br>
                        <label class="uk-form-label form-horizontal-text">Number of Rooms: *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text">
                        
                        <br>
                        <br>
                        <label class="uk-form-label form-horizontal-text width">Room Rate: *</label>
                        <input class="uk-input uk-form-small reg-width" id="form-horizontal-text" type="text">
                        
                    </div>
                </fieldset>
            </form>
            <br>
            <button class=" uk-button-default Reservation-butt">Submit</button>
        </div>
    </div>

    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>
</body>

</html>