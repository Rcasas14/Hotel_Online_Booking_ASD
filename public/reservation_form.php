<!DOCTYPE html>
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
    <link href="stylesheets/style.css" type="text/css" rel="stylesheet">
    <link href="stylesheets/style2.css" rel="stylesheet" type="text/css">

</head>

<body>


<div class="reservation_form">
            <div class="reserve-content uk-margin">
                <form class="reserve-form uk-horizontal">
                    <fieldset class="uk-fieldset">
                        <br>
                        <center><h2 class="reserve-head">Reservation Form</h2></center>
                        <hr>
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

    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>
</body>

</html>     